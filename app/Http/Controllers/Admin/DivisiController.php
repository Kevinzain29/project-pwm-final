<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisis = Divisi::withCount('penguruses')->get();
        return view('admin.divisi.index', compact('divisis'));
    }

    public function create()
    {
        return view('admin.divisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:divisi,nama',
            'deskripsi' => 'nullable'
        ]);

        Divisi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()
            ->route('admin.divisi.index')
            ->with('success', 'Divisi berhasil ditambahkan');
    }

    public function show(Divisi $divisi)
    {
        $divisi->load('penguruses');
        return view('admin.divisi.show', compact('divisi'));
    }

    public function edit(Divisi $divisi)
    {
        return view('admin.divisi.edit', compact('divisi'));
    }

    public function update(Request $request, Divisi $divisi)
    {
        $request->validate([
            'nama' => 'required|unique:divisi,nama,' . $divisi->id,
            'deskripsi' => 'nullable'
        ]);

        $divisi->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()
            ->route('admin.divisi.index')
            ->with('success', 'Divisi berhasil diperbarui');
    }

    public function destroy(Divisi $divisi)
    {
        $divisi->delete();

        return redirect()
            ->route('admin.divisi.index')
            ->with('success', 'Divisi berhasil dihapus');
    }
}
