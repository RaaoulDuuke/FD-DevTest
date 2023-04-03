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
            $count = $i;
            if ($i%3 == 0) {
                $count = "Fizz";
            }
            if ($i%5 == 0) {
                $count == "Fizz" ? $count .= "Buzz" : $count = "Buzz";
            }

            $fizzBuzz .= $count;
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
        // Dans le tableau les valeurs sont
        // [la valeur en décimal du chiffre romain, le modulo qui nous permet de déterminé la quantité, la lettre Romaine]
        $tablo = [[1000, 4, 'M'],
            [900, 901, 'CM'],
            [500, 501, 'D'],
            [400, 401, 'LD'],
            [100, 5, 'C'],
            [50, 51, 'L'],
            [40, 4, 'XL'],
            [10, 10, 'X'],
            [9, 9, 'IX'],
            [5, 5, 'V'],
            [4, 4, 'IV'],
            [1, 4, 'I']];

        for ($i = 0; $i < count($tablo); $i++) {
            if ($value/$tablo[$i][0] >= 1) {
                $roman .= str_repeat($tablo[$i][2], (floor($value/$tablo[$i][0]))%$tablo[$i][1]);
                $value -= (floor($value/$tablo[$i][0]))%$tablo[$i][1] * $tablo[$i][0];
            }
        }
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
        $decal = 13;
        $alplhabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m',
            'n','o','p','q','r','s','t','u','v','w','x','y','z'];

        // Write your code!
        for ($i = 0; $i < strlen($value); $i++) {
            $cryptChar = '';
            // on applique la règle que si on a une lettre
            if (!preg_match("/^[a-zA-Z]/", $value[$i])) {
                $cryptChar = $value[$i];
            } else {
                $indexAlpha = array_search(strtolower($value[$i]), $alplhabet);
                $cryptChar = $alplhabet[($indexAlpha+$decal)%count($alplhabet)];
            }
            // On remet la lettre en majuscule si besoin
            $rot13 .= ctype_upper($value[$i]) ? strtoupper($cryptChar) : $cryptChar;
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

        // on cherche un format de date basé sur ce modèle là /YYYY ça ne fonctionnera pas avec /YY ou autre
        preg_match("/(\/\d{4})/", $text, $matches);
        $year = substr($matches[0], 1);
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
        if ($report !== '' || $rc !== 1) {
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
        $factorial = 1;

        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
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
        $angleM = $minutes*6;
        $angleH = ((($hours%12)*30) + intval(ceil($minutes/2)));
        return abs($angleH - $angleM);
    }
}