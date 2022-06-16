<?php
    class MyHouse {
        private $color;
        private $size;

        public function __construct(string $color, int $size)
        {
            $this->color = $color;
            $this->size = $size;
        }

        public function getColor()
        {
            return $this->color;
        }
        public function getSize()
        {
            return $this->size;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }
        public function setSize($size)
        {
            $this->size = $size;
        }

        public function generateHouse()
        {
            // Generation du code html pour les différentes maisons modification des couleurs et de la taille dans la class
            // Si class == blue alors on prend myhouse1 sinon si class == green on prend myhouse2
            echo '<div class="blue"></div>';
        }
    }