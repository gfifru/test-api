<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder($id)
    {
//        dd(__METHOD__, $id);
        return 'Order Create ' . $id;
    }

    public function getAllOrders()
    {
        dd(__METHOD__);
    }

    public function getAllOrdersWithDiscount()
    {
        dd(__METHOD__);
    }
}
