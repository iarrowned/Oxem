<?php
    // Connecting classes
    require_once 'src/Animal.php';
    require_once 'src/Chicken.php';
    require_once 'src/Cow.php';
    require_once 'src/Farm.php';

    // Initialize Farm() object
    $f = new Farm();

    // Add animals in farm
    for ($i = 0; $i < 20; $i++)
    {
        $f->addAnimal(new Chicken());
        if ($i < 10) $f->addAnimal(new Cow());
    }

    // Show animals count in farm
    $f->getAnimalsCount();

    // Collect products from the animals
    for ($i = 0; $i < 7; $i++) $f->collect();

    // Show storage
    $f->getStorage();

    // Add new animals in farm
    for($i = 0; $i < 5; $i++)
    {
        $f->addAnimal(new Chicken());
        if ($i < 1) $f->addAnimal(new Cow());
    }

    // Show animals count in farm
    $f->getAnimalsCount();

    // Collect products from the animals
    for ($i = 0; $i < 7; $i++) $f->collect();

    // Show storage
    $f->getStorage();