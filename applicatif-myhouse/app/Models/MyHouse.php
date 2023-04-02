<?php

namespace App\Models;

class MyHouse
{
    private string $color = "#ffffff";
    private string $size = "64px";

    public function __construct(string $color, string $size = "#ffffff")
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function generate(int $model)
    {
        $colorCode = $this->color;
        $house = $model == "1" ? file_get_contents('./img/house1.svg', true) : file_get_contents('./img/house3.svg', true);
        $house = str_replace("#ffffff", $this->color, $house);
        $house = str_replace("64px", $this->size."px", $house);
        return $house;
    }
}