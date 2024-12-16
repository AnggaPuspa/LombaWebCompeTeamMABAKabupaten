<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlahSiswa = User::where('role', 'siswa')->count();
        return view('admin.dashboard', compact('jumlahSiswa'));
    }
}