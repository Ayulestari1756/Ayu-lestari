<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = "ayu lestari";
        $alamat = "tasikmalaya";
        $tanggal_lahir = "14 maret 2023";

        $teman = array(
            "nama" => array(
                'sutia',
                'azhira',
                'fitria',
            ),
        );

        $nama_list = array(
            "nama" => array(
                'sutia',
                'azhira',
                'fitria',
            )
        );

        return view('profile', compact('nama', 'alamat', 'tanggal_lahir', 'teman', ('nama_list')));
    }
}
