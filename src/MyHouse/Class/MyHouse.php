<?php

namespace Class;

class MyHouse
{

    protected $color;
    protected $size;

    public function getColor()
    {
        return $this->color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function generate(int $quantity = 0)
    {
        $code = '';

        for ($i = 0; $i < $quantity; $i++) {
            $code .= "<span style='width: calc({$this->size}px * 10); height: calc({$this->size}px * 10)' class='house {$this->color}'></span>";
        }

        return $code;
    }
}
