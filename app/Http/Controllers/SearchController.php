<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(Request $request): View
    {
        $products = Product::paginate(15);
        $categories =  Category::select(['name', '_id'])->get();
        $subCategories = SubCategory::select(['name', 'filterFields', 'category'])->get()->toArray();
        // dd($subCategories);
        // dd($categories);

        return view('search.search', ['products' => $products, "categories" => $categories, "subCategories" => $subCategories]);
    }
}
