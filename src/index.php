<?php

class MyHouse {

    protected $color;
    protected $size;

    public function __construct($color, $size) {

        $this->color = $color;
        $this->size = $size;

    }

    public function generate() {

        $html = "<div class='{$this->color}House {$this->size}House'></div>";
        retur $html;

    }
}

class SmallGreenHouse extends MyHouse {

    public function __construct($color, $size) {
        parent::__construct($color, $size);

        //override properties
        $this->color = 'green';
        $this->size = 'small';

    }

}

class BigBlueHouse extends MyHouse {

    public function __construct($color, $size) {
        parent::__construct($color, $size);

        //override properties
        $this->color = 'blue';
        $this->size = 'big';

    }
    
}

?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $greenHouses = isset($_POST['green_houses']) ? (int)$_POST['green_houses'] : 0;
    $blueHouses = isset($_POST['blue_houses']) ? (int)$_POST['blue_houses'] : 0;

}

?>



<form method="POST">

    <label for="green_houses">Small Green houses:</label>
    <input type="number" name="green_houses" id="green_houses" value="<?php echo $greenHouses; ?>"><br><br>

    <label for="blue_houses">Big Blue houses:</label>
    <input type="number" name="blue_houses" id="blue_houses" value="<?php echo $blueHouses; ?>"><br><br>

    <input type="submit" value="Generate">

</form>



<div class="houses">

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    for($i = 0; $i < $greenHouses; $i++) {
        $myHouse = new SmallGreenHouse('green', 'small');
        echo $myHouse->generate();
    }

    for($i = 0; $i < $blueHouses; $i++) {
        $myHouse = new BigBlueHouse('blue', 'big');
        echo $myHouse->generate();
    }

}

?>

</div>


<button onclick="colorize()">Colorize</button>


<script>

function colorize() {

    var greenHouses = document.querySelectorAll('.greenHouse');
    var blueHouses = document.querySelectorAll('.blueHouse');

    for (var i = 0; i < greenHouses.length; i++) {
        greenHouses[i].style.backgroundColor = 'red';
    }
    for (var i = 0; i < blueHouses.length; i++) {
        blueHouses[i].style.backgroundColor = 'red';
    }

}

</script>