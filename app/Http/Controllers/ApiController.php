<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getSubCategories(Request $request, Category $category)
    {
        $subCategories = $category->subcategories()->select(['name', '_id'])->get();
        // dd($subCategories);
        $view = view('Options', ['subCategories' => $subCategories])->render();
        // dd($view);
        return $view;
        // return $category->subcategories()->select(['name', 'filterFields'])->get();
    }
}
