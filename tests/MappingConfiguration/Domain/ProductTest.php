<?php

namespace MarvinKlemp\Entity\Tests\MappingConfiguration\Domain;

use MarvinKlemp\Entity\MappingConfiguration\Domain\Product;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_should_be_initializable()
    {
        $product = new Product(1);

        $this->assertInstanceOf(Product::class, $product);
    }

    public function test_it_should_return_the_price()
    {
        $product = new Product(1);

        $this->assertEquals(1, $product->price());
    }
}
