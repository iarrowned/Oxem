<?php
    // PHP version 7.4

use Classes\Chicken;
use Classes\Cow;
use Classes\Farm;

require_once 'vendor/autoload.php';

    // Initialize Farm() object
    $farm = new Farm();

    // Add animals in farm
    for ($i = 0; $i < 20; $i++)
    {
        $farm->addAnimal(new Chicken());
        if ($i < 10) $farm->addAnimal(new Cow());
    }

    // Show animals count in farm
    print_r($farm->getAnimalsCount());

    // Collect products from the animals
    for ($i = 0; $i < 7; $i++) $farm->collect();

    // Show storage
    print_r($farm->getStorage());

    // Add new animals in farm
    for($i = 0; $i < 5; $i++)
    {
        $farm->addAnimal(new Chicken());
        if ($i < 1) $farm->addAnimal(new Cow());
    }

    // Sell production from storage.
    $farm->sellProducts();
    // Show animals count in farm
    print_r($farm->getAnimalsCount());

    // Collect products from the animals
    for ($i = 0; $i < 7; $i++) $farm->collect();

    // Show storage
    print_r($farm->getStorage());