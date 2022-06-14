<!DOCTYPE html>
<?php

// php -S localhost:8000

const HOUSE_DEFAULT_COLOR = "black";
const HOUSE_DEFAULT_SIZE = 2;
class MyHouse{
    protected $color = HOUSE_DEFAULT_COLOR;
    protected $size = HOUSE_DEFAULT_SIZE;

    function generate(){
        $this->generate_roof();
        for ($i = $this->size; $i > 1; $i-- ){
            $this->generate_level();
        }
        $this->generate_floor();
    }

    function generate_roof(){
        ?>
        <div class="house" style="color:<?=$this->color?>;">
            <pre>
  _____
 /     \
/_______\<?php
    }
    function generate_level(){
        ?>

| ╔╗ ╔╗ |
| ╚╝ ╚╝ |<?php
    }
    function generate_floor(){
        ?>

| ╔╗ ┏┓ |
| ╚╝ ┃┨ |</pre>
        </div>
        <?php
    }
}
class MyHouse1 extends MyHouse{
    protected $color = "green";
    protected $size = 1;
}
class MyHouse2 extends MyHouse{
    protected $color = "blue";
    protected $size = 3;
}

if (!empty($_POST)){
    $houses1 = $_POST["houses1"];
    $houses2 = $_POST["houses2"];

    $servername = "localhost";
    $username = "mysql";
    $password = "password";
    $dbname = "myDB";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO history (houses1, houses2) VALUES(?, ?);";
        $conn->prepare($sql)->execute([$houses1, $houses2]);
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>

<html lang="fr">
<head>
    <title>Test développeur en PHP</title>
    <link rel="stylesheet" href="src/style.css">
    <script src="src/script.js"></script>
</head>
<body>
<div class="house-form-container">
    <form method="post">
        <label for="houses1">Number of House1s</label>
        <input type="number" name="houses1" value="<?=(isset($houses1))?$houses1:0?>">
        <label for="houses2">Number of House2s</label>
        <input type="number" name="houses2" value="<?=(isset($houses2))?$houses2:0?>">
        <input type="submit" value="Submit">
    </form>
</div>
<?php if (isset($houses1) && isset($houses2)): ?>
    <div class="houses-row-container">
        <?php
            $m1 = new MyHouse1();
            for ($i = $houses1; $i > 0; $i--) {
                $m1->generate();
            }
            $m2 = new MyHouse2();
            for ($i = $houses2; $i > 0; $i--){
                $m2->generate();
            } ?>
    </div>
    <div class="houses-extra-container">
        <button id="red-paint" onclick="paintRed()">Paint it red</button>
    </div>
<?php endif; ?>
</body>
</html>
