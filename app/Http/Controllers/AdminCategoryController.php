<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $viewData = [
            "title" => "Admin Page - Products - Online Store",
            "categories" => Category::all()
        ];

        return view("admin.category.index")->with("viewData", $viewData);
    }

    public function store(Request $req)
    {
        Category::validate($req);

        $newCategory = new Category();
        $newCategory->setName($req->input('name'));
        $newCategory->setImage('game.png');
        $newCategory->save();

        // $creationData = $req->only(['name', 'description', 'price']);
        // $creationData['image'] = "game.png";
        // Product::create($creationData);

        if ($req->hasFile('image')) {
            $imageName = $newCategory->getId() . "." . $req->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($req->file('image')->getRealPath())
            );

            $newCategory->setImage($imageName);
            $newCategory->save();
        }

        return back();
    }

    public function delete($id)
    {
        Category::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [
            "title" => "Admin Page - Edit Category - Online Store",
            "category" => Category::findOrFail($id),
        ];

        return view('admin.category.edit')->with("viewData", $viewData);
    }

    public function update(Request $req, $id)
    {
        Category::validate($req);

        $category = Category::findOrFail($id);
        $category->setName($req->input('name'));

        if ($req->hasFile('image')) {
            $imageName = $category->getId() . "." . $req->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($req->file('image')->getRealPath())
            );

            $category->setImage($imageName);
        }
        $category->save();

        return redirect()->route('admin.category.index');
    }
}
