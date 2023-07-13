<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [
            "title" => "Admin Page - Products - Online Store",
            "products" => Product::all(),
            "categories" => Category::all(),
            "name" => Auth::user()->getName()
        ];

        return view("admin.product.index")->with("viewData", $viewData);
    }

    public function store(Request $req)
    {
        Product::validate($req);

        $newProduct = new Product();
        $newProduct->setName($req->input('name'));
        $newProduct->setDescription($req->input('description'));
        $newProduct->setPrice($req->input('price'));
        $newProduct->setCategory($req->input('category_id'));
        $newProduct->setImage('game.png');
        $newProduct->save();

        // $creationData = $req->only(['name', 'description', 'price']);
        // $creationData['image'] = "game.png";
        // Product::create($creationData);

        if ($req->hasFile('image')) {
            $imageName = mt_rand(10000000, 99999999) . "." . $req->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($req->file('image')->getRealPath())
            );

            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [
            "title" => "Admin Page - Edit Product - Online Store",
            "product" => Product::findOrFail($id),
            "name" => Auth::user()->getName(),
            "categories" => Category::all()
        ];

        return view('admin.product.edit')->with("viewData", $viewData);
    }

    public function update(Request $req, $id)
    {
        Product::validate($req);

        $product = Product::findOrFail($id);
        $product->setName($req->input('name'));
        $product->setDescription($req->input('description'));
        $product->setPrice($req->input('price'));

        if ($req->hasFile('image')) {
            $imageName = mt_rand(10000000, 99999999) . "." . $req->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($req->file('image')->getRealPath())
            );

            $product->setImage($imageName);
        }
        $product->save();

        return redirect()->route('admin.product.index');
    }
}
