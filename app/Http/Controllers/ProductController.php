<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
        $this->middleware('role')->except('show');
        // dd($this);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.edit', ['product' => false]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newProduct = new Product();
        // $requestFields = $request->all();
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->imageUrl = $request->imageUrl;
        $newProduct->amount = $request->amount;
        $newProduct->availability = $request->has('availability');
        $newProduct->save();
        return redirect('/product');
        // dd($request->has('availability'));

        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // dd($product);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $request_fields = $request->all();
        foreach ($request_fields as $key => $value) {
            if ($key === '_token' || $key === '_method') continue;
            if ($key === 'availability') {
                $value = ($value === 'on') ? true : false;
            }
            $product->$key = $value;
        }
        $product->save();
        return redirect('/product/' . $product->_id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect("/product");
    }
}
