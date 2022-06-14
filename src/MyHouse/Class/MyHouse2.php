<?php

use \Class\MyHouse;

require_once('Class/MyHouse.php');

class MyHouse2 extends MyHouse
{

    public $color;
    public $size;

    public function __construct(string $color, int $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
}
