<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikel";

    protected $fillable = [
        'nama_artikel',
        'deskripsi',
        'dokumentasi'
    ];

    public function photoPath($request)
    {
        if ($request->hasFile('dokumentasi')) {
            $path = $request->file('dokumentasi')->store('dokumentasi_artikel', 'public');
            return $path;
        }
        return null;
    }
}
