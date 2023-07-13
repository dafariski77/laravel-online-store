<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData = [
            "title" => "My Orders = Online Store",
            "subtitle" => "My Orders",
            "orders" => Order::with('items.product')->where('user_id', Auth::user()->getId())->orderBy('created_at', 'desc')->get()
        ];

        return view("myaccount.orders")->with("viewData", $viewData);
    }
}
