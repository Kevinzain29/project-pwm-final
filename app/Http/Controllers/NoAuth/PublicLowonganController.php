<?php

namespace App\Http\Controllers\NoAuth;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use Illuminate\Http\Request;

class PublicLowonganController extends Controller
{
public function index(Request $request)
{
    // Total semua lowongan aktif
    $totalLowongan = Lowongan::where('status', 'aktif')
        ->where('tanggal_akhir', '>=', now())
        ->count();

    // Query lowongan
    $query = Lowongan::where('status', 'aktif')
        ->where('tanggal_akhir', '>=', now());

    // Search
    if ($request->filled('q')) {
        $query->where('judul', 'like', '%' . $request->q . '%');
    }

    // Tanpa paginate → gunakan get()
    $lowongans = $query
        ->orderBy('created_at', 'desc')
        ->get();

    return view('noauth.lowongan.index', compact('lowongans', 'totalLowongan'));
}


    public function show(Lowongan $lowongan)
    {
        if ($lowongan->status !== 'aktif' || $lowongan->tanggal_akhir < now()) {
            abort(404, 'Lowongan tidak tersedia');
        }

        return view('noauth.lowongan.show', compact('lowongan'));
    }
}