<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('admin.artikel.index');
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        // Logika simpan data nanti di sini
    }

    public function edit($id)
    {
        return view('admin.artikel.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logika update data nanti di sini
    }

    public function destroy($id)
    {
        // Logika hapus data nanti di sini
    }
}
