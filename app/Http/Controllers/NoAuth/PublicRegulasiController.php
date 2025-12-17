<?php

namespace App\Http\Controllers\NoAuth;

use App\Http\Controllers\Controller;
use App\Models\Regulasi;
use Illuminate\Http\Request;

class PublicRegulasiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil parameter pencarian dan filter dari query string
        $search = $request->input('search');
        $jenis = $request->input('jenis');
        $penerbit = $request->input('penerbit');

        // Query dasar regulasi
        $query = Regulasi::query();

        // Filter nama
        if (!empty($search)) {
            $query->where('nama', 'like', "%{$search}%");
        }

        // Filter jenis
        if (!empty($jenis)) {
            $query->where('jenis', $jenis);
        }

        // Filter penerbit
        if (!empty($penerbit)) {
            $query->where('penerbit', $penerbit);
        }

        // Urutkan berdasarkan tanggal terbit terbaru dan paginasi
        $regulasi = $query->orderBy('tanggal_terbit', 'desc')->paginate(10);

        // Data untuk dropdown filter
        $listJenis = Regulasi::select('jenis')->distinct()->pluck('jenis');
        $listPenerbit = Regulasi::select('penerbit')->distinct()->pluck('penerbit');

        // Kirim data ke view publik
        return view('noauth.regulasi.index', compact(
            'regulasi', 'search', 'jenis', 'penerbit', 'listJenis', 'listPenerbit'
        ));
    }

    public function show($id)
    {
        $regulasi = Regulasi::findOrFail($id);
        return view('noauth.regulasi.show', compact('regulasi'));
    }
}