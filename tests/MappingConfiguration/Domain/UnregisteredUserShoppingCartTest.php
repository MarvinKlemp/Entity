<?php

namespace MarvinKlemp\Entity\Tests\MappingConfiguration\Domain;

use MarvinKlemp\Entity\MappingConfiguration\Domain\Exception\ShoppingCartException;
use MarvinKlemp\Entity\MappingConfiguration\Domain\Product;
use MarvinKlemp\Entity\MappingConfiguration\Domain\UnregisteredUserShoppingCart;

class UnregisteredUserShoppingCartTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_should_be_initializable()
    {
        $cart = new UnregisteredUserShoppingCart([]);

        $this->assertInstanceOf(UnregisteredUserShoppingCart::class, $cart);
    }

    public function test_it_should_add_products()
    {
        $cart = new UnregisteredUserShoppingCart([]);
        $product = $this->getProductDummy();
        $cart->add($product);

        $this->assertTrue($cart->contains($product));
    }

    public function test_it_should_contain_product()
    {
        $product = $this->getProductDummy();
        $cart = new UnregisteredUserShoppingCart([$product]);

        $this->assertTrue($cart->contains($product));
    }

    public function test_it_should_not_contain_product()
    {
        $cart = new UnregisteredUserShoppingCart([]);

        $this->assertFalse($cart->contains($this->getProductDummy()));
    }

    public function test_it_should_not_add_more_than_three_products()
    {
        $product = $this->getProductDummy();
        $cart = new UnregisteredUserShoppingCart([$product, $product, $product]);

        $this->setExpectedException(ShoppingCartException::class, "not allowed to buy more than three products if you are not logged in");
        $cart->add($product);
    }

    public function getProductDummy()
    {
        return $this->getMockBuilder(Product::class)->disableOriginalConstructor()->getMock();
    }
}
