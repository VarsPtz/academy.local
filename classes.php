<?php
require_once 'base_classes.php';

class Scientist extends Human implements IProfessional {

    private $invents = [];

    const WORK_TYPE = 'Технология';
    const PROFESSION = 'Учёный';

    public function __construct($name, $lastName, $weight, $height, array $invents = [])
    {
        foreach ($invents as $invent) {
            if($invent instanceof Invent) {
                $this->invents[] = $invent;
            }
        }
        parent::__construct($name, $lastName, $weight, $height);
    }

    public function listInvents() {
        echo parent::lineOutput($this->invents, self::WORK_TYPE);
    }

    public function inventTechnology() {
        // Logic
    }

    public function getProfession()
    {
        $profession = self::PROFESSION;
        echo "{$profession} {$this->getFullName()}";
    }
}

class Layer extends Human implements IProfessional {

    private $contracts = [];
    const PROFESSION = 'Юрист';

    const WORK_TYPE = 'Контракт';

    public function __construct($name, $lastName, $weight, $height, array $contracts = [])
    {
        foreach ($contracts as $contract) {
            if($contract instanceof Contract) {
                $this->contracts[] = $contract;
            }
        }
        parent::__construct($name, $lastName, $weight, $height);
    }
    public function inventTechnology() {
        // Logic
    }

    public function listInvents() {
        echo parent::lineOutput($this->contracts, self::WORK_TYPE);
    }

    public function makeContract() {
        //Logic
    }

    public function getProfession()
    {
        $profession = self::PROFESSION;
        echo "{$profession} {$this->getFullName()}";
    }
}

class Invent {
    protected $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
}

class Contract {
    protected $contractName;

    public function __construct($contractName)
    {
        $this->contractName = $contractName;
    }
}
