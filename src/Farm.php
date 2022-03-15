<?php


class Farm
{
    /**
     * Array with available animals
     * @var array $animals
     */
    protected array $animals = [];

    /**
     * Associative array of the animal => quantity type
     * @var array $animalsCount
     */
    protected array $animalsCount = [];

    /**
     * Associative array of the product => quantity type
     * @var array $storage
     */
    protected array $storage = [];

    /**
     * Adds an instance of an animal to the array $animals.
     * If the $animalsCount array does not have an animal type as a key, adds it.
     * Otherwise it increases the number of animals of this type.
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal)
    {
        array_push($this->animals, $animal);
        if (array_key_exists($animal->getAnimalType(), $this->animalsCount))
        {
            $this->animalsCount[$animal->getAnimalType()] += 1;
        }
        else
        {
            $this->animalsCount[$animal->getAnimalType()] = 1;
        }
    }

    /**
     * Return $animals array.
     * @return array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }


    /**
     * Outputs the number of animals as a string
     */
    public function getAnimalsCount()
    {
        if (!empty($this->animalsCount))
        {
            foreach ($this->animalsCount as $animal => $count)
            {
                echo $animal . ' in farm: ' . $count . PHP_EOL;
            }
        }
        else echo "No animals in farm";
    }

    /**
     * Outputs the number of products as a string
     */
    public function getStorage()
    {
        $storage = $this->storage;
        $this->storage = [];
        if (!empty($storage))
        {
            foreach ($storage as $k => $v) {
                echo $k . ' collected: ' . $v . PHP_EOL;
            }
        }
        else echo "Storage is empty";
    }

    /**
     * Calls the method on all instances of Animal in $animals array.
     * If the $storage array does not have an product type as a key, adds it.
     * Otherwise it increases the quantity of product of this type.
     */
    public function collect()
    {
        /**
         * @var Animal $animal
         */
        if (!empty($this->animals))
        {
            foreach ($this->animals as $animal)
            {
                $prod = $animal->getProductName();
                if (array_key_exists($prod, $this->storage))
                {
                    $this->storage[$prod] += $animal->getProducts();

                }
                else
                {
                    $this->storage[$prod] = $animal->getProducts();
                }
            }
        }
        else echo "No animals to collect production";
    }

}