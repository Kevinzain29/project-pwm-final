<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    public function index()
    {
        $penguruses = Pengurus::with('divisi')
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('admin.penguruses.index', compact('penguruses'));
    }

    public function create()
    {
        $divisis = Divisi::orderBy('nama')->get();
        return view('admin.penguruses.create', compact('divisis'));
    }

    public function store(Request $request)
    {
        $isFirstPengurus = Pengurus::count() === 0;

        $rules = [
            'nama' => 'required|string|max:100|unique:penguruses,nama',
            'jabatan' => 'required|min:3|max:100',
            'deskripsi' => 'nullable|min:10|max:500',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // 🔑 Divisi hanya wajib jika BUKAN pengurus pertama
        if (!$isFirstPengurus) {
            $rules['divisi_id'] = 'required|exists:divisi,id';
        }

        $messages = [
            'divisi_id.required' => 'Divisi wajib dipilih.',
            'divisi_id.exists'   => 'Divisi tidak valid.',
            'nama.required'      => 'Nama wajib diisi.',
            'nama.max'           => 'Nama maksimal 100 karakter.',
            'nama.unique'        => 'Nama sudah digunakan.',
            'jabatan.required'   => 'Jabatan wajib diisi.',
            'jabatan.min'        => 'Jabatan minimal 3 karakter.',
            'deskripsi.min'      => 'Deskripsi minimal 10 karakter.',
            'deskripsi.max'      => 'Deskripsi maksimal 500 karakter.',
            'gambar.required'    => 'Gambar wajib diunggah.',
            'gambar.image'       => 'File harus berupa gambar.',
            'gambar.mimes'       => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'gambar.max'         => 'Ukuran gambar maksimal 2MB.',
        ];

        $validated = $request->validate($rules, $messages);

        // 👉 Ketua pertama = divisi NULL
        $data['divisi_id'] = $isFirstPengurus
            ? null
            : $request->divisi_id;

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('pengurus', 'public');
        }

        Pengurus::create($validated);

        return redirect()
            ->route('admin.penguruses.index')
            ->with('success', 'Pengurus berhasil ditambahkan');
    }

    public function edit(Pengurus $pengurus)
    {
        $divisis = Divisi::orderBy('nama')->get();
        return view('admin.penguruses.edit', compact('pengurus', 'divisis'));
    }

    public function update(Request $request, Pengurus $pengurus)
    {
        $isKetua = $pengurus->id === 1;
        
        $request->validate([
            'nama' => [
                'required',
                'string',
                'max:100',
                'unique:penguruses,nama,' . $pengurus->id,
            ],
            'jabatan'   => 'required|min:3|max:100',
            'deskripsi' => 'nullable|string|min:10|max:500',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_temp' => 'nullable|string'
        ]);

        if (!$isKetua) {
            $rules['divisi_id'] = 'required|exists:divisi,id';
        }

        $data = $request->only('nama', 'jabatan', 'deskripsi');

        // Upload gambar baru
        if ($request->hasFile('gambar')) {
            if ($pengurus->gambar && Storage::disk('public')->exists($pengurus->gambar)) {
                Storage::disk('public')->delete($pengurus->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('pengurus', 'public');
        }
        // Dari tmp
        elseif ($request->filled('gambar_temp') && Storage::disk('public')->exists('tmp/'.$request->gambar_temp)) {
            if ($pengurus->gambar && Storage::disk('public')->exists($pengurus->gambar)) {
                Storage::disk('public')->delete($pengurus->gambar);
            }
            $filename = 'pengurus/'.$request->gambar_temp;
            Storage::disk('public')->move('tmp/'.$request->gambar_temp, $filename);
            $data['gambar'] = $filename;
        }

        $pengurus->update($data);

        return redirect()
            ->route('admin.penguruses.index')
            ->with('success', 'Pengurus berhasil diperbarui');
    }

    public function destroy(Pengurus $pengurus)
    {
        if ($pengurus->gambar && Storage::disk('public')->exists($pengurus->gambar)) {
            Storage::disk('public')->delete($pengurus->gambar);
        }

        $pengurus->delete();

        return redirect()
            ->route('admin.penguruses.index')
            ->with('success', 'Pengurus berhasil dihapus');
    }

    // 🔹 Upload gambar sementara (AJAX)
    public function uploadTemp(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filename = uniqid() . '.' . $request->file('gambar')->getClientOriginalExtension();
        $request->file('gambar')->storeAs('tmp', $filename, 'public');

        return response()->json(['filename' => $filename]);
    }
}
