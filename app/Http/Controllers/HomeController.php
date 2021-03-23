<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Data Mahasiswa";
        $data['mahasiswa'] = array(
            'nama' => 'Luh Nintya Mahayani',
            'nim' => '1915101034',
            'kelas' => 'Ilmu Komputer 4B'
        );
        $data['user'] = '';
        return view('admin.beranda', compact('title', 'data'));
    }

    public function dashboard()
    {
        $title = "Data Dashboard";

        return view('admin.dashboard', compact('title'));
    }
}
