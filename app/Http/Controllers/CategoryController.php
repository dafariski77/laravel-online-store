<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $viewData = [
            "title" => "Products - Online Store",
            "subtitle" => "List of products",
            "categories" => Category::all(),
        ];
        return view("category.index")->with("viewData", $viewData);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->get();
        $viewData = [
            "title" => $category->getName() . " - Online Store",
            "subtitle" => $category->getName() . " - Product Information",
            "categories" => $products,
        ];
        return view("category.show")->with("viewData", $viewData);
    }
}
