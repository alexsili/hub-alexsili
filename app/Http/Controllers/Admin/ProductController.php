<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('deleted_at', null)
            ->orderBy('updated_at', 'DESC')
            ->paginate(10);

        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validated();

        $product = new Product();
        $product->user_id = Auth::user()->id;
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');

        if ($request->hasFile('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $image = str_replace(' ', '', $request->name) . '_' . 'image' . '.' . $ext;
            $request->file('image')->move('uploads/products', $image);
            $product->image = $image;
        }
        $product->save();

        return redirect('/products')->with('success', 'Product added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if (!$product) {
            return redirect('/products')->with('error', 'Product not found');
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $request->validated();

        $product->user_id = Auth::user()->id;
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');

        if ($request->hasFile('image')) {
            if (file_exists(public_path('uploads/products' . $product->image . '')) && !empty($product->image)) {
                unlink(public_path('uploads/products/' . $product->image . ''));
            }

            $ext = $request->file('image')->getClientOriginalExtension();
            $image = str_replace(' ', '', $request->name) . '_' . 'image' . '.' . $ext;
            $request->file('image')->move('uploads/products', $image);
            $product->image = $image;
        }

        $product->save();

        return redirect('/products')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (!$product) {
            return redirect('/products')->with('error', 'Product not found');
        }

        $product->delete();

        return redirect('/products')->with('success', 'Product deleted successfuly');
    }
}
