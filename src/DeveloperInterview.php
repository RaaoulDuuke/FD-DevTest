<?php

declare(strict_types=1);

class DeveloperInterview
{
    /**
     * Write a short program that concats each number from 1 to 100.
     *
     * For each multiple of 3, concat "Fizz" instead of the number.
     *
     * For each multiple of 5, concat "Buzz" instead of the number.
     *
     * For numbers which are multiples of both 3 and 5, concat "FizzBuzz"
     * instead of the number.
     *
     * @return string
     */
    public static function fizzBuzz(): string
    {
        $fizzBuzz = '';

        for ($i = 1; $i <= 100; $i++) {

            switch ($i){
                case (($i % 3 == 0) && ($i % 5 == 0)) :
                    $fizzBuzz .= "FizzBuzz";
                    break;

                case ($i % 3 == 0) : 
                    $fizzBuzz .= "Fizz";
                    break;

                case ($i % 5 == 0) :
                    $fizzBuzz .= "Buzz";
                    break;

                case ($i % 3 != 0) && ($i % 5 != 0):
                    $fizzBuzz .= $i;
                    break;
            }

        }

        return $fizzBuzz;
    }

    /**
     * For a given number, will return its value in Roman numerals.
     *
     * Roman Numerals Chart
     *
     * Roman Numeral | Number Value | Use As Inputs
     * --------------|--------------|---------------
     * I             | 1            | I
     * V             | 5            | V
     * X             | 10           | X
     * L             | 50           | L
     * C             | 100          | C
     * D             | 500          | D
     * M             | 1,000        | M
     *
     * @param int $value An integer between 0 and 3999
     *
     * @return string The roman number equivalent
     */
    public static function parseToRoman(int $value): string
    {
        $roman = '';
        
        do {
            switch ($value){
                case ($value >= 1000):                    
                    $value = $value - 1000;
                    $roman .= "M";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 900 ):
                    $value = $value - 900 ;
                    $roman .= "CM";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 500 ):
                    $value = $value - 500 ;
                    $roman .= "D";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 400 ):
                    $value = $value - 400 ;
                    $roman .= "CD";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 100 ):
                    $value = $value - 100 ;
                    $roman .= "C";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 90 ):
                    $value = $value - 90 ;
                    $roman .= "CX";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 50 ):
                    $value = $value - 50 ;
                    $roman .= "L";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 40 ):
                    $value = $value - 40 ;
                    $roman .= "XL";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 10 ):
                    $value = $value - 10 ;
                    $roman .= "X";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 9 ):
                    $value = $value - 9 ;
                    $roman .= "IX";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 5 ):
                    $value = $value - 5 ;
                    $roman .= "V";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 4 ):
                    $value = $value - 4 ;
                    $roman .= "IV";
                    //error_log(var_export($value, true));
                    break;
                case ($value >= 1 ):
                    $value = $value - 1 ;
                    $roman .= "I";
                    //error_log(var_export($value, true));
                    break;
            }
            //error_log(var_export($roman, true));
        } while ($value != 0); // tant que la valeur est different de 0 alors on passe dans le do

        return $roman;
    }

    /**
     * ROT-13 is the encrypting of a message by exchanging each of the
     * letters on the first half of the alphabet with the corresponding
     * letter in the second half of the alphabet (that is, swapping
     * positions by 13 characters). Thus, A becomes N, B becomes O,
     * and so forth, and conversely, N becomes A, O becomes B, and so
     * forth. Numbers, spaces and punctuation are not changed.
     *
     * Using the native `str_rot13` is forbiden, make your own implementation!
     *
     * @param string $value The string to decode
     *
     * @return string The decoded string
     */
    public static function toRot13(string $value): string
    {
        $rot13 = '';
        $newIndex = '';

        // Récupération de l'alphabet en tableau
        for( $i = 65; $i < 91; $i++) {
            $array[] = chr($i);
        }

        error_log(var_export('$strlen($value) = '. strlen($value), true));

        // boucle pour consulter chaque valeur de $value
        for($i = 0; $i <= strlen($value); $i++) {
            $oneValue = substr($value, $i , 1);
            
            // Si la variable est un espace
            if ($oneValue != ' '){
                error_log(var_export('$oneValue = '.$oneValue, true));

                // On récupère l'index que la lettre ce trouve dans le tableau $array
                $getIndexValue = array_search($oneValue, $array);
                error_log(var_export('$getIndexValue = '.$getIndexValue, true));

                // Petit calcul pour pas avoir un index négatif
                if($getIndexValue - 13 > 0) {
                    $newIndex = $getIndexValue - 13;
                } else {
                    $newIndex = $getIndexValue + 13;
                }
    
                error_log(var_export('newIndex = '.$newIndex, true));
                error_log(var_export('$array[$newIndex] = '.$array[$newIndex], true));
                
                //Résultat
                $rot13 .= $array[$newIndex];

            } else {
                $rot13.=' ';
            }

        }
        error_log(var_export($rot13, true));


        return $rot13;
    }

    /**
     * Write a regular expression that extracts the year from the $text
     * variable
     *
     * @return string the year
     */
    public static function extractYear(): string
    {
        $text = 'Rapport n°2187 (09/2019) - Achats';
        $year = '';

        $year = substr($text, 20, 4);

        // Write your code!

        return $year;
    }

    public function doSomething()
    {
    }

    /**
     * Ouch, this code is ugly. Can you improve it?
     *
     * @return boolean
     */
    public function simplifyMe($report, $rc)
    {
        if ($report === '' && $rc === 1) {
            // pass
        } else {
            $this->doSomething();
        }
    }

    /**
     * Get the factorial of a number
     *
     * @param int $number
     *
     * @return int
     */
    public static function factorial(int $number): int
    {
        $factorial = 0;

        // Write your code!

        return $factorial;
    }

    /**
     * Get the angle formed by the hours and the minutes hands
     *
     * @param int $hours
     * @param int $minutes
     *
     * @return int
     */
    public static function clockAngle(int $hours, int $minutes): int
    {
        $angle = 0;

        // Write your code!

        return $angle;
    }
}
