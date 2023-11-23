<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu; // Tambahkan ini untuk mengimpor model Tamu

class TamuController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:tamu,email',
        ]);

        // Gunakan model Tamu untuk menyimpan data
        Tamu::create($data);

        return redirect()->route('tamu.index')->with('success', 'Tamu berhasil ditambahkan.');
    }
}

