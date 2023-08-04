<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // if ($user->hobi == null) {
        //     return redirect()->route('rajaapps.profile.edit')
        //         ->with('message', 'KITA KEPO NIHH, TOLONGG DONG ISI HOBI KALIANN ^_^');
        // }

        // if (Cache::has('dashboard.' . $user->id)) {
        //     $data = Cache::get('dashboard.' . $user->id);
        // } else {

        //     Cache::put('dashboard.' . $user->id, $data, now()->addMinutes(60 * 24));
        // }
        $anggotas = DB::table('mahasiswas')->where('kelompok', '=', $user->kelompok)
            // ->where('nim', '!=', $user->nim)
            ->get();

        $data = [
            'title' => 'Dashboard',
            'content' => 'Dashboard',
            'user' => $user,
            'anggotas' => $anggotas
        ];
        return view('user.dashboard.index', $data);
    }
}
