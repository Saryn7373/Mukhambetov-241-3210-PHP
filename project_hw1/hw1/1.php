<?php
    abstract class HumanAbstract
    {
        private $name;
    
        public function __construct(string $name)
        {
            $this->name = $name;
        }
    
        public function getName(): string
        {
            return $this->name;
        }
    
        abstract public function getGreetings(): string;
        abstract public function getMyNameIs(): string;
        public function introduceYourself(): string
        {
            return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
        }
    }

    class RussianHuman extends HumanAbstract {
        public function getGreetings(): string {
            return 'Здаров';
        }

        public function getMyNameIs(): string {
            return 'Меня звать';
        }

    }

    class EnglishHuman extends HumanAbstract {
        public function getGreetings(): string {
            return 'Hello';
        }

        public function getMyNameIs(): string {
            return 'My name is';
        }
    }

    $John = new EnglishHuman('John');
    $Vanek = new RussianHuman('Ванек');

    echo $John -> introduceYourself() . '<br>';
    echo $Vanek -> introduceYourself();
?>