<?php
namespace Classes;

class Farm
{
    /**
     * Array with available animals
     * @var array $animals
     */
    protected array $animals = [];

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
     * Outputs the number of animals.
     * @return array
     */
    public function getAnimalsCount(): array
    {
        /**
         * @var Animal $animal
         */
        $animalsCount = [];
        foreach ($this->animals as $animal)
        {
            if (array_key_exists($animal->getAnimalType(), $animalsCount))
            {
                $animalsCount[$animal->getAnimalType()] += 1;
            }
            else
            {
                $animalsCount[$animal->getAnimalType()] = 1;
            }
        }
        return $animalsCount;
    }

    /**
     * Outputs the number of products.
     * @return array
     */
    public function getStorage(): array
    {
        return $this->storage;
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

    /**
     * Clears the storage array, simulating the sale of products.
     * If not triggered, the accumulation of products occurs.
     */
    public function sellProducts()
    {
        $this->storage = [];
    }
}