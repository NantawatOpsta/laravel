<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    // get total in cart
    public function getTotal()
    {
        $total = Cart::sum('price');
        return $total;
    }
}
