<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view("product.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $companies = Company::all();
        $tags = Tag::all();
        return view("product.create", compact(['companies', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($request);

        $newProduct = new Product();
        $newProduct->name = $data['name'];
        $newProduct->description = $data['description'];
        $newProduct->price = $data['price'];
        $newProduct->stock = $data['stock'];
        $newProduct->company_id = $data['company_id'];

        if (array_key_exists("image", $data)) {
            $image_url = Storage::putFile("products", $data['image']);
            $newProduct->image_url = $image_url;
        }
        $newProduct->save();

        return redirect()->route("products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //dd($product);
        //dd($product->company);
        return view("product.show", compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $companies = Company::all();
        $tags = Tag::all();
        return view("product.edit", compact(['companies', 'product', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //dd($request)
        $data = $request->all();

        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->stock = $data['stock'];
        $product->company_id = $data['company_id'];

        if (array_key_exists("image", $data)) {
            if ($product->image_url) {
                Storage::delete($product->image_url);
            }

            $image_url = Storage::putFile("products", $data['image']);
            $product->image_url = $image_url;
        }

        $product->update();

        return redirect()->route("products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image_url) {
            Storage::delete($product->image_url);
        }
        $product->delete();
        return redirect()->route("products.index");
    }
}
