<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\CartController;
use App\Models\Cart;

class CartTest extends TestCase
{
    public function setUp() : void
    {
        parent::setUp();
        // add new cart
        $cart = new Cart();
        $cart->user_id = 1;
        $cart->product_name = 'product 1';
        $cart->price = 100;
        $cart->amount = 1;
        $cart->discount = 0;
        $cart->save();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_total_is_correct()
    {
        // test that the cart total is correct
        $cart = new CartController();
        echo $cart->getTotal();
        $this->assertEquals(100, $cart->getTotal());
    }

    public function tearDown() : void
    {
        // delete cart id 1
        Cart::destroy(1);
    }

}
