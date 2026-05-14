<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function show($id)
    {
        // Cari berita berdasarkan ID atau tampilkan 404 jika tidak ada
        $berita = Berita::findOrFail($id);

        // Rekomendasi berita lainnya (opsional)
        $beritaLainnya = Berita::where('id', '!=', $id)->take(3)->get();

        return view('berita-detail', compact('berita', 'beritaLainnya'));
    }
}
