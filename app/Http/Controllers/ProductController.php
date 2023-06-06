<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [
            "title" => "Products - Online Store",
            "subtitle" => "List of products",
            "products" => Product::all(),
        ];
        return view("product.index")->with("viewData", $viewData);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $viewData = [
            "title" => $product->getName() . " - Online Store",
            "subtitle" => $product->getName() . " - Product Information",
            "product" => $product,
        ];
        return view("product.show")->with("viewData", $viewData);
    }
}
