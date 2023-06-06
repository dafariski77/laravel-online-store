<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Online Store';
        $viewData['products'] = Product::all();
        // $viewData['products'] = Product::inRandomOrder()->take(6)->get();
        $viewData['categories'] = Category::all();
        return view('home.index')->with('viewData', $viewData);
    }

    public function about()
    {
        $viewData = [
            "title" => "About us - Online Store",
            "subtitle" => "About us",
            "description" => "This is an about page...",
            "author" => "Developed by: Senkuu"
        ];

        return view("home.about")->with("viewData", $viewData);
    }
}
