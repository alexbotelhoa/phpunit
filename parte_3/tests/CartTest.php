<?php

namespace tests;

use app\classes\Cart;
use PHPUnit\Framework\TestCase;

session_start();

class CartTest extends TestCase
{
    public function test_add_cart()
    {
        $cart = new Cart;
        $cart->add('mouse');
        $cart->add('Teclado');

        $products = $cart->cart();

        $this->assertNotEmpty($products);
    }
}
