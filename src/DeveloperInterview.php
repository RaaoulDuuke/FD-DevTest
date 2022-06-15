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

        // Write your code!
        for ($i = 1; $i <= 100; $i++) {

            switch ($i) {
                case (($i % 3 == 0) && ($i % 5 == 0)):
                    $fizzBuzz .= 'FizzBuzz';
                    break;

                case ($i % 3 == 0):
                    $fizzBuzz .= 'Fizz';
                    break;

                case ($i % 5 == 0):
                    $fizzBuzz .= 'Buzz';
                    break;

                case (($i % 3 != 0) && ($i % 5 != 0)):
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

        // Write your code!
        /* Faire le changement tant que $value != 0 => do-while
                Vérifier si le chiffre est >= à ... pour le changer en chiffre romain
                Attention aux exceptions le 9 et le 4
                Utilisation du switch pour plus de clarté
        */
        do {
            switch ($value) {
                case ($value >= 1000):
                    $value = $value - 1000;
                    $roman .= 'M';
                    break;
                case ($value >= 900):
                    $value = $value - 900;
                    $roman .= 'CM';
                    break;
                case ($value >= 500):
                    $value = $value - 500;
                    $roman .= 'D';
                    break;
                case ($value >= 400):
                    $value = $value - 400;
                    $roman .= 'CD';
                    break;
                case ($value >= 100):
                    $value = $value - 100;
                    $roman .= 'C';
                    break;
                case ($value >= 90):
                    $value = $value - 90;
                    $roman .= 'XC';
                    break;
                case ($value >= 50):
                    $value = $value - 50;
                    $roman .= 'L';
                    break;
                case ($value >= 40):
                    $value = $value - 40;
                    $roman .= 'XL';
                    break;
                case ($value >= 10):
                    $value = $value - 10;
                    $roman .= 'X';
                    break;
                case ($value >= 9):
                    $value = $value - 9;
                    $roman .= 'IX';
                    break;
                case ($value >= 5):
                    $value = $value - 5;
                    $roman .= 'V';
                    break;
                case ($value >= 4):
                    $value = $value - 4;
                    $roman .= 'IV';
                    break;
                case ($value >= 1):
                    $value = $value - 1;
                    $roman .= 'I';
                    break;
            }
        } while ($value != 0);

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
        $clef = 13;

        for ($i = 0, $j = strlen($value); $i < $j; $i++) {
            // Avoir la valeur ASCII de chaque caractère
            $charactere = ord($value[$i]);

            // Recherche si le caractère est dans l'alphabet Maj ou minus j'ajoute 13 à la valeur de l'ASCII
            if (($charactere >= 65  && $charactere <= 90) || ($charactere >= 97 && $charactere <= 122)) {
                $charactere += $clef;

                // Evite de sortir de l'alphabet
                if ($charactere > 122 || ($charactere > 90 && ord($value[$i]) <= 90)) {
                    $charactere -= 26;
                }
            }
            $rot13 .= chr($charactere);
        }

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

        // Write your code!
        /* utilisation de la fonction substr pour renvoyer une partie d'une chaîne 
        $year = substr($text, 20, 4); */

        // Utilisation de regex
        $re = '[\d{4}]';
        preg_match_all($re, $text, $test);
        $year = $test[0][1];

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
    public function simplifyMe(string $report, int $rc)
    {
        if ($report == '' && $rc == 1) {
            // pass
        } else {
            $this->doSomething();
        }
    }
    // Ajout des types string et int dans les paramètres de la fonction et suppression de la vérification du typage dans le if (avec le tripe = ). 

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
