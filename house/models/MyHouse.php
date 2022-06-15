<?php
    class MyHouse {
        private $id;
        private $color;
        private $size;

        public function __construct($house)
        {
            $this->id = $house['id'];
            $this->color = $house['color'];
            $this->size = $house['size'];
        }

        public function getId(){
            return $this->id;
        }
        public function getColor(){
            return $this->color;
        }
        public function getSize(){
            return $this->size;
        }

        public function setColor($newColor){
            $this->color = $newColor;
        }
        public function setSize($newSize){
            $this->size = $newSize;
        }
    }