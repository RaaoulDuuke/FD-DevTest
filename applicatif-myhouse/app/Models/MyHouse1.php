<?php

namespace App\Models;

class MyHouse1 extends MyHouse
{

    public function __construct(string $color, string $size)
    {
        parent::__construct($color, $size);
    }

}