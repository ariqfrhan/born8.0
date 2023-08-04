<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('user.auth.index');
    }
    public function loginAttempt(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|numeric',
            'password' => 'required',
        ]);

        $nim = $validatedData['username'];
        $angkatan = substr($nim, 0, 2);
        if (!allowAccessNIM($nim)) {
            if ($angkatan < 21) {
                return redirect()->route('born.auth')
                    ->with('message', 'Cieee angkatan ' . $angkatan . ' gak bisa login dong mau maba lagi kah?');
            }
        }
        $password = $validatedData['password'];
        $pass = md5('123ab' . $password) . '_' . $nim;
        $ip = $_SERVER['REMOTE_ADDR'];
        $url_login = 'https://bais.ub.ac.id/api/login/xmlapi/?userid=' . $nim . '&passport=' . $pass . '&challenge=123ab&appid=EKS1&ipaddr=' . $ip;
        $initlogin = curl_init($url_login);
        curl_setopt($initlogin, CURLOPT_URL, $url_login);
        curl_setopt($initlogin, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($initlogin, CURLOPT_SSL_VERIFYPEER, false);
        $execlogin = curl_exec($initlogin);
        $xml = simplexml_load_string($execlogin);
        if (!allowAccessNIM($nim)) {
            if ($xml->CONTENT->AUTHORITY->PASSWD != 1)
                return redirect()->route('born.auth')
                    ->with('message', 'Lohh gak bisa login? Salah NIM atau password mungkin, samain sama SIAM yaaa!');
        }
        $nama = $xml->CONTENT->USER->NAMA->__toString();
        $jenjang = $xml->CONTENT->USER->JENJANG->__toString();
        $fakultas = $xml->CONTENT->USER->FAKULTAS->__toString();
        $prodi = $xml->CONTENT->USER->PRODI->__toString();
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $kelompok = 0;
        if (!$mahasiswa) {
            // mengambil kelompok paling atas dari tabel mahasiswa
            $kelompkHigh = Mahasiswa::select('kelompok')->orderBy('kelompok', 'desc')->first();
            if (isset($kelompkHigh)) {
                // menghitung jumlah mahasiswa yang ada pada kelompok tersebut
                $countMahasiswa = Mahasiswa::where('kelompok', $kelompkHigh->kelompok)->count();
                if ($countMahasiswa >= 10) {
                    $kelompok = $kelompkHigh->kelompok + 1;
                } else {
                    $kelompok = $kelompkHigh->kelompok;
                }
            } else {
                $kelompok = 1;
            }
            $mahasiswa = Mahasiswa::create(
                [
                    'nim' => $nim,
                    'fullname' => $nama,
                    'password' => bcrypt($password),
                    'jenjang' => $jenjang,
                    'fakultas' => $fakultas,
                    'prodi' => $prodi,
                    'kelompok' => $kelompok
                ]
            );
        }
        if (Auth::guard('mahasiswa')->attempt(['nim' => $nim, 'password' => $password], true)) {
            $request->session()->regenerate();
            return redirect()->route('born.dashboard')->with('success', 'Selamat datang ' . $nama . "! Anda berhasil login.");
        } else {
            $mahasiswa->password = bcrypt($password);
            $mahasiswa->save();
            if (Auth::guard('mahasiswa')->attempt(['nim' => $nim, 'password' => $password], true)) {
                $request->session()->regenerate();
                return redirect()->route('born.dashboard')->with('success', 'Selamat datang ' . $nama . "! Anda berhasil login.");
            }
        }
        return redirect()->route('born.auth')
            ->with('message', 'Gak sesuai nih, coba lagi ya.');
        try {
        } catch (Exception $e) {
            return redirect()->route('born.auth')
                ->with('message', 'Terjadi kesalahan pada server, coba lagi nanti');
        }
    }

    public function logout()
    {
        Auth::guard('mahasiswa')->logout();

        return redirect()->route('born.auth');
    }
}
