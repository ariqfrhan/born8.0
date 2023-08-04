<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    public static function auth(){
        $nim = 'yournim';
        $password = 'yourpassword';
        $pass = md5('123ab' . $password) . '_' . $nim;
        $ip = $_SERVER['REMOTE_ADDR'];

        $url_login = 'https://bais.ub.ac.id/api/login/xmlapi/?userid=' . $nim . '&passport=' . $pass . '&challenge=123ab&appid=EKS1&ipaddr=' . $ip;
        $initlogin = curl_init($url_login);
        curl_setopt($initlogin, CURLOPT_URL, $url_login);
        curl_setopt($initlogin, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($initlogin, CURLOPT_SSL_VERIFYPEER, false);
        $execlogin = curl_exec($initlogin);
        $xml = simplexml_load_string($execlogin);

        if ($xml->CONTENT->AUTHORITY->PASSWD != 1)
        return false;
        $nama = $xml->CONTENT->USER->NAMA->__toString();
        dd($nama);
        dd($xml->CONTENT->USER);
        return $xml->CONTENT->USER;
    }

    CONST MAHASISWA_BARU_TWO_DIGIT_NIM = 23;
    CONST WHITELISTED_NIM = [];

    public static function isMahasiswaBaru($nim) {
        $angkatan = substr($nim,0,2);

        if (self::MAHASISWA_BARU_TWO_DIGIT_NIM == $angkatan) {
            return true;
        }

        return false;
    }

    public static function isWhitelistedUser($nim) {
        return in_array($nim, self::WHITELISTED_NIM);
    }
    public static function syncSiamWithDatabase($database, $siam) {
        $database->nama = $siam->NAMA;
        $database->jenjang = $siam->JENJANG;
        $database->fakultas = $siam->FAKULTAS;
        $database->jurusan = $siam->JURUSAN;
        $database->prodi = $siam->PRODI;
        $database->foto = 'https://wmsbf.org/wp-content/uploads/2019/04/default-profile.png';
        $database->save();
    }
}
