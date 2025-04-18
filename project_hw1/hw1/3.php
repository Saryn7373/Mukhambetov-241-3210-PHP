<?php
    interface calculateSquare {
        public function calculateSquare(): float;
    }

    class Circle implements calculateSquare {
        const Pi = 3.14;
        private $radius;

        public function __construct(float $radius) {
            $this->radius = $radius;
        }

        public function calculateSquare(): float {
            return Circle::Pi * ($this->radius ** 2);
        }
    }

    class Corner {
        private $angle;

        public function setAngle($angle) {
            $this->angle = $angle;
        }

        public function setSin() {
            $this->sin = sin($this->angle);
        }

        public function getAngle() {
            return $this->angle;
        }

        public function getSin() {
            return $this->sin;
        }
    }

    $circle = new Circle(3.0);
    $corner = new Corner(1.57);

    $arr = [$circle, $corner];

    foreach($arr as $obj) {
        if ($obj instanceof calculateSquare) {
            echo 'Площадь: ' .$obj->calculateSquare();
        } else {
            echo 'Объект класса ' .get_class($obj). ' не реализует интерфейс CalculateSquare.';
        }
        echo '<br>';
    }
?>