<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderItem;

class UserController extends Controller
{
    public function index()
    {
    	$orders = Order::where('user_id', Auth::id())->get();
    	return view('frontend.orders.index', compact('orders'));
    }

    public function vieworder($id)
    {
    	$orders = Order::where('id', $id)->where('user_id', Auth::id())->first();
    	return view('frontend.orders.view', compact('orders'));
    }
}