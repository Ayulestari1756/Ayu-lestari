<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
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
        $validator = Validator::make(
            $request->all(),
            [
                'product' => 'required|min:6',
                'price'   => 'required',
                'stock'   => 'required',

            ],
            [
                'product.required' => 'Nama Produk harus di isi.',
            ]
        );

        $validator->validate();

        produk::create([
            'product'  => $request->product,
            'price'   => $request->price,
            'stock'   => $request->stock,
        ]);

        return redirect('/produk');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }
    public function update($id, Request $request)
    {
        $produk = produk::find($id);
        $produk->product = $request->product;
        $produk->price = $request->price;
        $produk->stock = $request->stock;
        $produk->save();
        return redirect('/produk')->with('succes', 'Data produk berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $produk = produk::find($id);
        if ($produk) {
            $produk->delete();
            return redirect('/produk')->with('succes', 'Data produk berhasil didelete.');
        } else {
            return redirect('/produk')->with('succes', 'Data produk gagal didelete.');
        }
    }
}
