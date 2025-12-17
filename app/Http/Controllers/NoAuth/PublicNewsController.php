<?php

namespace App\Http\Controllers\NoAuth;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class PublicNewsController extends Controller
{
    public function index()
    {
        // ambil 6 berita terbaru untuk tampilan
        $news = News::latest()->take(6)->get();

        // hitung total semua berita di database
        $totalNews = News::count();

        return view('noauth.news.index', compact('news', 'totalNews'));
    }

    public function all()
    {
        // Ambil semua berita dengan pagination
        $news = News::latest()->paginate(12); // tampilkan 12 per halaman

        return view('noauth.news.all', compact('news'));
    }

    public function show($id)
    {
        $mainNews = News::findOrFail($id);
        return view('noauth.news.show', compact('mainNews'));
    }
}