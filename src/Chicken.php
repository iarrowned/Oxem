<?php
namespace Classes;

class Chicken extends Animal
{
    /**
     * @var string $productName Product name
     */
    protected string $productName = 'Eggs';

    /**
     * @return int Product quantity
     */
    public function getProducts(): int
    {
        return mt_rand(0, 1);
    }


}