
<?php

use App\Repository\Cart\CartInterface;

function currentLocale()
{
    return LaravelLocalization::getCurrentLocale();
}

function myCart()
{
    return app(CartInterface::class);
}

function int_to_decimal(int $number)
{
    return number_format(($number / 100), 2);
}
