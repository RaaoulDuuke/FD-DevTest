<!DOCTYPE html>
<html lang="en">

<head>
    <title>My House</title>
    <link rel='stylesheet' href='style/style.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script defer>
        function switchColors(event) {
            let switchColorsButton = event.target
            let houses = document.getElementsByClassName('house')

            if (switchColorsButton.id == 'to_red') {
                switchColorsButton.id = 'to_green_and_blue'

                Array.from(houses).forEach(house => {
                    house.style.background = 'rgba(255, 50, 50, 0.80)'
                })
            } else {
                switchColorsButton.id = 'to_red'

                Array.from(houses).forEach(house => {
                    house.classList.contains('green') ?
                        house.style.background = 'rgb(100, 185, 80)' :
                        house.style.background = 'rgb(53, 115, 150)'
                })
            }

        }
    </script>

</head>

<?php

require_once('form.php');
require_once('Class/MyHouse1.php');
require_once('Class/MyHouse2.php');

$form = new Form($_POST);
$myHouse1 = new MyHouse1('green', isset($_POST['house1Size']) ? $_POST['house1Size'] : 0);
$myHouse2 = new MyHouse2('blue', isset($_POST['house2Size']) ? $_POST['house2Size'] : 0);

?>

<body>

    <h1 id='title'>My House</h1>

    <form method='POST'>
        <div>
            <p>House 1</p>
            <?php
            echo $form->input('house1Size', 'house1Size', 'number', 'Size', 'Size', ['min' => 1, 'max' => '10']);
            echo $form->input('house1Qty', 'house1Qty', 'number', 'Quantity', 'Quantity', ['min' => 0, 'max' => '10']);
            ?>
        </div>
        <div>
            <p>House 2</p>
            <?php
            echo $form->input('house2Size', 'house2Size', 'number', 'Size', 'Size', ['min' => 1, 'max' => '10']);
            echo $form->input('house2Qty', 'house2Qty', 'number', 'Quantity', 'Quantity', ['min' => 0, 'max' => '10']);
            ?>
        </div>
        <?php
        echo $form->submit('Submit');
        ?>
    </form>

    <button id='to_red' class='switch_colors' onclick='switchColors(event)'>Switch colors</button>

    <div class='neighbourhood'>
        <?php
        echo $myHouse1->generate(isset($_POST['house1Qty']) ? $_POST['house1Qty'] : 0);
        echo $myHouse2->generate(isset($_POST['house2Qty']) ? $_POST['house2Qty'] : 0);
        ?>
    </div>

</body>

</html>