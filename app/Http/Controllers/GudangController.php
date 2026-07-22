<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;

class GudangController extends Controller
{
    public function index()
    {
        // Contoh data batch atau mengambil dari model terkait
        $gudangs = Gudang::all();
        
        // Sesuaikan bagian ini: 'nama_folder.nama_file'
        return view('gudang.gudang', compact('gudangs'));
    }
}