<?php

require_once './Vehicle.php';

class Car extends Vehicle
{
    //Constante

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Attributs


    /**
     * @var string;
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    // Methods 

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    /**
     * @return string
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy) : Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     *
     */
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    /**
     * @param int /$energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0){
            $this->energyLevel = $energyLevel;
        }
    }

    /**
     * @return string
     */
    public function start()
    {
        return "Car started.";
    }
}
