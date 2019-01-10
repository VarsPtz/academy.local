<?php

require_once 'interfaces.php';

abstract class Human implements IHuman {
    private $weight;
    private $height = 170;
    private $name = 'Иван';
    private $lastName = 'Иванов';

    /**
     * @return mixed
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getFullName() {
        return "{$this->name} {$this->lastName}";
    }

    /**
     * Human constructor.
     * @param $name
     * @param $lastName
     * @param $weight
     * @param $height
     */
    public function __construct($name, $lastName, $weight, $height) {
        if(!is_string($name)) {
            die('Неверное имя!');
        }
        $this->name = $name;
        $this->lastName = $lastName;
        $this->weight = $weight;
        $this->height = $height;
        Nation::increasePopulation();
    }

    public function __destruct()
    {
        Nation::decreasePopulation();
    }


    /**
     * @param $properties
     * @param $type
     * @return string
     */
    protected function lineOutput ($properties, $type) {
        $str = '';
        foreach ($properties as $property) {
            $str .= "{$type}: $property" . PHP_EOL;
        }
        return $str;
    }
}

class Nation {
    private $population = [];

    private static $allPopulation = 0;

    public static function increasePopulation($count = 1) {
        self::$allPopulation += $count;
    }

    public static function decreasePopulation($count = 1) {
        self::$allPopulation -= $count;
    }

    public static function getPopulation() {
        return self::$allPopulation;
    }

    public function add(IProfessional $human) {
        $this->population[spl_object_id($human)] = $human;
    }

    public function remove(IProfessional $human) {
        $objectId = spl_object_id($human);
        if(in_array($objectId, $this->population)) {
            unset($this->population[$objectId]);
        }
    }

    public function getFullInfo(IProfessional $human) {
        return "Полное имя: {$human->getFullName()} Вес: {$human->getWeight()} Рост: {$human->getHeight()}" . PHP_EOL;
    }

    public function getFullInfoAboutAllPopulation() {
        foreach ($this->population as $itemOfPopulation) {
             echo $this->getFullInfo($itemOfPopulation) . PHP_EOL;
        }
    }
}
