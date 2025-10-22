<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index');
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        // Logika simpan kategori
    }

    public function edit($id)
    {
        return view('admin.kategori.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logika update kategori
    }

    public function destroy($id)
    {
        // Logika hapus kategori
    }
}
