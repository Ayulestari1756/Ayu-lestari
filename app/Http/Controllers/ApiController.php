<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function produk_index()
    {
        $product = produk::get();
        return response()->json($product);
    }

    public function produk_store(Request $request)
    {
        produk::insert([
            'product'       => $request->api_product,
            'price'         => $request->api_price,
            'stock'         => $request->api_stock,
        ]);

        $response = array(
            'responseCode'   => '00',
            'responseStatus' => 'Succes',
        );

        return response()->json($response);
    }

    public function produk_by_id($id)
    {
        $product = produk::where('id', $id)->get();
        return response()->json($product);
    }

    public function produk_delete($id)
    {
        produk::where('id', $id)->delete();

        $response = array(
            'responseCode'   => '00',
            'responseStatus' => 'Succes delete',
        );

        return response()->json($response);
    }
}
