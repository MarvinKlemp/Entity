<?php

namespace MarvinKlemp\Entity\MappingConfiguration\Domain;

class Product
{
    /**
     * @var float
     */
    protected $price;

    /**
     * @param float $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function price()
    {
        return $this->price;
    }
}
