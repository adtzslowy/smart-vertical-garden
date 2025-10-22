<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        return view('admin.halaman.index');
    }

    public function create()
    {
        return view('admin.halaman.create');
    }

    public function store(Request $request)
    {
        // Logika simpan halaman statis
    }

    public function edit($id)
    {
        return view('admin.halaman.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logika update halaman statis
    }

    public function destroy($id)
    {
        // Logika hapus halaman statis
    }
}
