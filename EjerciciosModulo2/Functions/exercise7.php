<?php

//calculates the tax of a product

function tax($product, $tax = 0.1){
    $product = ($tax * $product) + $product;
    return $product;
}

$price = 30000;
$taxvalue = 19; //in percentage %
$taxvalue /= 100;
print 'The total cost of the product is '. tax($price, $taxvalue);