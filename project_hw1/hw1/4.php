<?php
    class Lesson {
        private $title;
        private $text;
        private $hw;

        public function __construct(string $title, string $text, string $hw) {
            $this->title = $title;
            $this->text = $text;
            $this->hw = $hw;
        }

        public function setTitle(string $title) {
            $this->title = $title;
        }
        
        public function setText(string $text) {
            $this->text = $text;
        }

        public function setHw(string $hw) {
            $this->hw = $hw;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getText() {
            return $this->text;
        }

        public function getHw() {
            return $this->hw;
        }
    }

    class PaidLesson extends Lesson {
        private $price;

        public function __construct(string $title, string $text, string $hw, float $price) {
            parent::__construct($title, $text, $hw);
            $this->price = $price;
        }

        public function setPrice(float $price) {
            $this->price = $price;
        }

        public function getPrice() {
            return $this->price;
        }
    }

    $lesson = new PaidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее',99.90);
    var_dump($lesson);
?>