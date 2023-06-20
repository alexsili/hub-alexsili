<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::where('deleted_at', null)
            ->orderBy('updated_at', 'DESC')
            ->get();

        return view('shop.index')->with('products', $products);
    }


    public function product($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect(route('shopx'))->with('error', 'Article not found');
        }

        $newestProducts = Product::where('deleted_at', null)
            ->orderBy('updated_at', 'DESC')
            ->get();

        return view('shop.show')->with('product', $product)
            ->with('newestProducts', $newestProducts);

    }

}
