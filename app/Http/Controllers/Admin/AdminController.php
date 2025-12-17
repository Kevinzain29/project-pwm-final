<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use App\Models\News;
use App\Models\Pengurus;
use App\Models\Daerah;
use App\Models\Sektor;
use App\Models\Kategori;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        // ===========================
        // Data Master
        // ===========================
        $daerahs   = Daerah::all();
        $sektors   = Sektor::all();
        $kategoris = Kategori::all();

        // ===========================
        // Query utama untuk statistik
        // ===========================
        $filteredQuery = Umkm::query();

        // ===========================
        // Total UMKM & Karyawan
        // ===========================
        $totalUmkm     = $filteredQuery->count();
        $totalKaryawan = $filteredQuery->sum('jumlah_karyawan');

        // ===========================
        // Total UMKM Per Daerah
        // ===========================
        $totalPerDaerahRaw = (clone $filteredQuery)
            ->selectRaw('daerah_id, COUNT(*) as total')
            ->groupBy('daerah_id')
            ->pluck('total', 'daerah_id');

        $totalPerDaerah = [];
        foreach ($daerahs as $d) {
            $totalPerDaerah[$d->nama] = $totalPerDaerahRaw[$d->id] ?? 0;
        }

        // ===========================
        // Total UMKM Per Sektor
        // ===========================
        $totalPerSektorRaw = (clone $filteredQuery)
            ->selectRaw('sektor_id, COUNT(*) as total')
            ->groupBy('sektor_id')
            ->pluck('total', 'sektor_id');

        $totalPerSektor = [];
        foreach ($sektors as $s) {
            $totalPerSektor[$s->nama] = $totalPerSektorRaw[$s->id] ?? 0;
        }

        // ===========================
        // Total UMKM Per Kategori
        // ===========================
        $totalPerKategoriRaw = (clone $filteredQuery)
            ->selectRaw('kategori_id, COUNT(*) as total')
            ->groupBy('kategori_id')
            ->pluck('total', 'kategori_id');

        $totalPerKategori = [];
        foreach ($kategoris as $k) {
            $totalPerKategori[$k->nama] = $totalPerKategoriRaw[$k->id] ?? 0;
        }

        // ===========================
        // Tambahan: News & Pengurus
        // ===========================
        $totalNews     = News::count();
        $totalPengurus = Pengurus::count();

        // ===========================
        // Return ke view
        // ===========================
        return view('admin.dashboard.index', compact(
            'totalUmkm',
            'totalKaryawan',
            'totalNews',
            'totalPengurus',
            'totalPerDaerah',
            'totalPerSektor',
            'totalPerKategori'
        ));
    }
}