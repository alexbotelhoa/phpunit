<?php

namespace app\classes;

class Cart
{
    public function add($product)
    {
        if (!isset($_SESSION['cart'][$product])) {
            $_SESSION['cart'][$product] = 1;
        } else {
            $_SESSION['cart'][$product] += 1;
        }
    }

    public function cart()
    {
        if (isset($_SESSION['cart'])) {
            return $_SESSION['cart'];
        }
    }
}
