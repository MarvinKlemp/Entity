<?php

namespace MarvinKlemp\Entity\MappingConfiguration\Domain;

use MarvinKlemp\Entity\MappingConfiguration\Domain\Exception\ShoppingCartException;

class UnregisteredUserShoppingCart implements ShoppingCartInterface
{
    /**
     * @var Product[]
     */
    protected $products;

    /**
     * @param Product[] $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @param  Product $product
     * @throws Exception\ShoppingCartException
     */
    public function add(Product $product)
    {
        if (count($this->products) >= 3) {
            throw new ShoppingCartException("not allowed to buy more than three products if you are not logged in");
        }

        $this->products[] = $product;
    }

    /**
     * @param  Product $product
     * @return bool
     */
    public function contains(Product $product)
    {
        return (in_array($product, $this->products)) ? true : false;
    }
}
