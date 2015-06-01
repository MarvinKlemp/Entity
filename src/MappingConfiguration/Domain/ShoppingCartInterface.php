<?php

namespace MarvinKlemp\Entity\MappingConfiguration\Domain;

interface ShoppingCartInterface
{
    /**
     * @param Product $product
     */
    public function add(Product $product);

    /**
     * @param  Product $product
     * @return bool
     */
    public function contains(Product $product);
}
