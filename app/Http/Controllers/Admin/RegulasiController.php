<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Regulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegulasiController extends Controller
{
    /**
     * Tampilkan daftar regulasi dengan filter.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $jenis = $request->input('jenis');
        $penerbit = $request->input('penerbit');

        $query = Regulasi::query();

        if (!empty($search)) {
            $query->where('nama', 'like', "%{$search}%");
        }
        if (!empty($jenis)) {
            $query->where('jenis', $jenis);
        }
        if (!empty($penerbit)) {
            $query->where('penerbit', $penerbit);
        }

        $regulasi = $query->orderBy('tanggal_terbit', 'desc')->get();

        $listJenis = Regulasi::select('jenis')->distinct()->pluck('jenis');
        $listPenerbit = Regulasi::select('penerbit')->distinct()->pluck('penerbit');

        return view('admin.regulasi.index', compact(
            'regulasi', 'search', 'jenis', 'penerbit', 'listJenis', 'listPenerbit'
        ));
    }

    /**
     * Form tambah regulasi.
     */
    public function create()
    {
        return view('admin.regulasi.create');
    }

    /**
     * Simpan data regulasi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'tanggal_terbit'  => 'required|date',
            'penerbit'        => 'required|string|max:255',
            'jenis'           => 'required|string|max:100',
            'file'            => 'nullable|mimes:pdf|max:2048',
            'file_tmp'        => 'nullable|string', // nama file sementara
            'deskripsi'       => 'nullable|string',
        ]);

        $filePath = null;

        // Jika upload file baru
        if ($request->hasFile('file')) {
            // Simpan ke folder sementara
            $tmpPath = $request->file('file')->store('tmp_regulasi', 'public');
            $filePath = $this->moveToPermanent($tmpPath);
        } elseif ($request->filled('file_tmp')) {
            // Jika ada file sementara dari validasi sebelumnya
            $filePath = $this->moveToPermanent($request->file_tmp);
        }

        Regulasi::create([
            'nama'           => $request->nama,
            'tanggal_terbit' => $request->tanggal_terbit,
            'penerbit'       => $request->penerbit,
            'jenis'          => $request->jenis,
            'file'           => $filePath,
            'deskripsi'      => $request->deskripsi,
        ]);

        return redirect()->route('admin.regulasi.index')->with('success', '✅ Regulasi berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail regulasi.
     */
    public function show(Regulasi $regulasi)
    {
        return view('admin.regulasi.show', compact('regulasi'));
    }

    /**
     * Form edit regulasi.
     */
    public function edit(Regulasi $regulasi)
    {
        return view('admin.regulasi.edit', compact('regulasi'));
    }

    /**
     * Update data regulasi.
     */
    public function update(Request $request, Regulasi $regulasi)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'tanggal_terbit'  => 'required|date',
            'penerbit'        => 'required|string|max:255',
            'jenis'           => 'required|string|max:100',
            'file'            => 'nullable|mimes:pdf|max:2048',
            'file_tmp'        => 'nullable|string', // nama file sementara
            'deskripsi'       => 'nullable|string',
        ]);

        $filePath = $regulasi->file;

        // Jika upload file baru
        if ($request->hasFile('file')) {
            if ($regulasi->file) {
                Storage::disk('public')->delete($regulasi->file);
            }
            $tmpPath = $request->file('file')->store('tmp_regulasi', 'public');
            $filePath = $this->moveToPermanent($tmpPath);
        } elseif ($request->filled('file_tmp')) {
            // Jika ada file sementara dari form sebelumnya
            if (!$regulasi->file) {
                $filePath = $this->moveToPermanent($request->file_tmp);
            }
        }

        $regulasi->update([
            'nama'           => $request->nama,
            'tanggal_terbit' => $request->tanggal_terbit,
            'penerbit'       => $request->penerbit,
            'jenis'          => $request->jenis,
            'file'           => $filePath,
            'deskripsi'      => $request->deskripsi,
        ]);

        return redirect()->route('admin.regulasi.index')->with('success', '✅ Regulasi berhasil diperbarui.');
    }

    /**
     * Hapus regulasi beserta file-nya.
     */
    public function destroy(Regulasi $regulasi)
    {
        if ($regulasi->file) {
            Storage::disk('public')->delete($regulasi->file);
        }

        $regulasi->delete();

        return redirect()->route('admin.regulasi.index')->with('success', '🗑 Regulasi berhasil dihapus.');
    }

    /**
     * Pindahkan file dari folder sementara ke folder permanen.
     */
    private function moveToPermanent(string $tmpPath): ?string
    {
        if (!Storage::disk('public')->exists($tmpPath)) {
            return null;
        }

        $filename = basename($tmpPath);
        $newPath = 'regulasi/' . $filename;

        Storage::disk('public')->move($tmpPath, $newPath);
        return $newPath;
    }
}