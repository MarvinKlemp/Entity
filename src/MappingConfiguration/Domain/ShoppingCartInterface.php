<?php

namespace MarvinKlemp\Entity\MappingConfiguration\Domain;

interface ShoppingCartInterface
{
    /**
     * @param  Product $product
     * @throws Exception\ShoppingCartException
     */
    public function add(Product $product);

    /**
     * @param  Product $product
     * @return bool
     */
    public function contains(Product $product);
}
