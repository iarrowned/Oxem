<?php


abstract class Animal
{

    /**
     * Animal unique id
     * @var string $id ID
     */
    protected string $id;

    /**
     * Animal type to string
     * @var string $animalType Type
     */
    protected string $animalType;

    /**
     * Animal's product type to string
     * @var string $productName Product name
     */
    protected string $productName;

    /**
     * Measure unit for product quantity output.
     * @var string $measureUnit Measure unit
     */
    protected string $measureUnit;


    /**
     * Animal constructor.
     * Set animal id and type.
     */
    public function __construct()
    {
        $this->id = uniqid();
        $this->animalType = get_class($this);
    }

    /**
     * Return product quantity
     * @return int
     */
    abstract function getProducts(): int;

    /**
     * Return animal's id.
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Return animal's type.
     * @return string
     */
    public function getAnimalType(): string
    {
        return $this->animalType;
    }

    /**
     * Return product name.
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

}