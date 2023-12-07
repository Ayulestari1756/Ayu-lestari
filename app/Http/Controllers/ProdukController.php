<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Psy\CodeCleaner\ReturnTypePass;

class ProdukController extends Controller
{
    // public function index()
    // {
    //     $data = [
    //         'pageTitle' => 'Produk',
    //         'content' => 'Ini adalah halaman produk.'
    //     ];
    //     return view('produk', compact('data'));
    // }


    public function index()
    {
        $produk = produk::get();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        produk::create([
            'product'  => $request->product,
            'price'   => $request->price,
            'stock'   => $request->stock,
        ]);

        return redirect('/produk');
    }
}
