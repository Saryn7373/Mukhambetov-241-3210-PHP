<?php
    class Cat {
        private $name;
        private $color;

        public function __construct(string $name, string $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function setName(string $name) {
            $this->name = $name;
        }

        public function setColor(string $color) {
            $this->color = $color;
        }

        public function getName() {
            return $this->name;
        }

        public function getColor() {
            return $this->color;
        }

        public function sayHello() {
            return 'Привет. Меня звать ' .$this->name. ' и я ' .$this->color. '.';
        }

    }

    $cat = new Cat('Алик афганец', 'лысый');
    echo $cat->sayHello();
?>