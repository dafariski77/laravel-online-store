<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [
            "title" => "Admin Page - Online Store",
            "name" => Auth::user()->getName()
        ];

        return view('admin.home.index')->with("viewData", $viewData);
    }
}
