<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder($id)
    {
        $order = new Order();
        $order->product_id = $id;
        $order->count = 3;
        $order->sum = 750;
        $order->save();
    }

    public function getAllOrders()
    {
        $orders = Order::with('product')->get();
        return view('order.index', compact('orders'));
    }

    public function getAllOrdersWithDiscount()
    {
        dd(__METHOD__);
    }
}
