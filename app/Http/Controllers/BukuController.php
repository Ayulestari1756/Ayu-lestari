<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = buku::get();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        buku::create([
            'title'  => $request->title,
            'author' => $request->author,
            'qty'    => $request->qty,
        ]);

        return redirect('/buku');
    }
}
