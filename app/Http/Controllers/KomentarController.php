<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class TamuController extends Controller
{

public function store(Request $request)
{
    $data = $request->validate([
        'tamu_id' => 'required',
        'isi_komentar' => 'required',
    ]);

    Komentar::create($data);

    return redirect()->route('komentar.index')->with('success', 'Komentar berhasil ditambahkan.');
}

}