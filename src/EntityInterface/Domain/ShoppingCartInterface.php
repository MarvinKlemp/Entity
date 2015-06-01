<?php

namespace MarvinKlemp\Entity\EntityInterface\Domain;

interface ShoppingCartInterface
{
    /**
     * @param ProductInterface $product
     */
    public function add(ProductInterface $product);

    /**
     * @param  ProductInterface $product
     * @return bool
     */
    public function contains(ProductInterface $product);
}
