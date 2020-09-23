<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase{
    public function testFind()
    {
        $prod = Product::firstWhere('id', 1);
        $this->assertEquals('Prof. Lacey Kuhic DDS', $prod->name);
    }

    public function testCategoryProduct()
    {
        $prod = Product::firstWhere('id', 1);
        $this->assertTrue(in_array('CAT1', $prod->categories));
    }

    public function testPrice()
    {
        $prod = Product::firstWhere('id', 1);
        $this->assertEquals(420, $prod->price_ht);
    }
}