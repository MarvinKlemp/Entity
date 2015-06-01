<?php

namespace MarvinKlemp\Entity\MappingConfiguration\Domain;

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
     * @param Product $product
     */
    public function add(Product $product)
    {
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
