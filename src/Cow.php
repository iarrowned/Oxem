<?php
namespace Classes;

class Cow extends Animal
{

    /**
     * @var string $productName Product name
     */
    protected string $productName = 'Milk';

    /**
     * @return int Product quantity
     */
    public function getProducts(): int
    {
        return mt_rand(8, 12);
    }

}