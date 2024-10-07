<?php

    class Parallelogram
    {
        public function __construct(
            protected float $base,
            protected float $height
        ) {
        }

        public function calculatedArea(): void
        {
            echo $this->base * $this->height;// Better to use bcmul()
            echo "\n";
        }
    }

    (new Parallelogram(10.5, 20.75))->calculatedArea();// 217.875
    (new Parallelogram(3, 16))->calculatedArea();// 48


    class Trapezoid
    {
        public function __construct(
            protected float $base1,
            protected float $base2,
            protected float $height,
        ) {
        }

        public function calculatedArea(): void
        {
            echo (($this->base1 + $this->base2) / 2) * $this->height;// Better to use bcmul()
            echo "\n";
        }
    }

    (new Trapezoid(2, 3, 5))->calculatedArea();// 12.5
    (new Trapezoid(20, 15, 7))->calculatedArea();// 122.5