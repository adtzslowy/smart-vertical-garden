<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate( [
            'nama_artikel' => 'required|string',
            'deskripsi' => 'required|string',
            'dokumentasi' => 'required|mimes:png,jpg,gif,webp|max:2048'
        ]);

        $data = $request->except( ['_token', 'dokumentasi']);
        $artikel = new Artikel();
        $path = $artikel->photoPath( $request);
        if ($path) {
            $data['dokumentasi'] = $path;
        }

        Artikel::create( $data);


        return redirect()->back()->with('success', 'artikel berhasil dibuat');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        $request->validate([
            'nama_artikel' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'dokumentai' => 'nullable|nimes:jpg,png,jpeg,webp,gif|max:2048',
        ]);

        $data = $request->except(['dokumentasi']);

        if ($request->hasFile('dokumentasi')) {
            if ($artikel->dokumentasi && Storage::disk('public')->exists($artikel->dokumentasi)) {
                Storage::disk('public')->delete($artikel->dokumentasi);
            }

            $data['dokumentasi'] = $artikel->photoPath($request);
        }

        $artikel->update($data);

        return redirect()->back()->with('success', 'Berhasil update Artikel');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->dokuemtasi && Storage::disk('public')->exists($artikel->dokumentasi)) {
            Storage::disk('public')->delete($artikel->dokumentasi);
        }

        $artikel->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus');// Logika hapus data nanti di sini
    }
}
