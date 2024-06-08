<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data berita dengan status published dan kategori 1
        $berita = Post::where('id_category', 1)->where('status', 'published')->get();
        $pengumuman = Post::where('id_category', 2)->where('status', 'published')->get();
        
        return view('dashboard', compact('berita', 'pengumuman'));
    }
}
