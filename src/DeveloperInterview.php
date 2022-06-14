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

        for ($i=1; $i<=100; $i++){
            $add = "";
            if ($i%3 == 0){
                $add .= "Fizz";
            }
            if ($i%5 == 0){
                $add .= "Buzz";
            }
            if ($add == "") {
                $add = $i;
            }
            $fizzBuzz = $fizzBuzz . $add;
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

        while ($value >= 1000){
            $value -= 1000;
            $roman .= "M";
        }
        if ($value >= 900){
            $value -= 900;
            $roman .= "CM";
        }
        if ($value >= 500){
            $value -= 500;
            $roman .= "D";
        }
        if ($value >= 400){
            $value -= 400;
            $roman .= "CD";
        }
        while ($value >= 100){
            $value -= 100;
            $roman .= "C";
        }
        if ($value >= 90){
            $value -= 90;
            $roman .= "XC";
        }
        if ($value >= 50){
            $value -= 50;
            $roman .= "L";
        }
        if ($value >= 40){
            $value -= 40;
            $roman .= "XL";
        }
        while ($value >= 10){
            $value -= 10;
            $roman .= "X";
        }
        if ($value >= 9){
            $value -= 9;
            $roman .= "IX";
        }
        if ($value >= 5){
            $value -= 5;
            $roman .= "V";
        }
        if ($value >= 4){
            $value -= 4;
            $roman .= "IV";
        }
        while ($value >= 1){
            $value -= 1;
            $roman .= "I";
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

        $stringAsArray = str_split($value);
        foreach ($stringAsArray as $char){
            if(ctype_lower($char)) {
                $rot13 .= ($char < "n") ? chr(ord($char) + 13) : chr(ord($char) - 13);
            }
            else if(ctype_upper($char)){
                $rot13 .= ($char < "N") ? chr(ord($char) + 13) : chr(ord($char) - 13);
            }
            else{
                $rot13 .= $char;
            }
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

        $dates = [];

        preg_match("/\d{2}\/\d{4}/", $text, $dates);
        $year = substr($dates[0], -4);

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
        if ($report != '' || $rc != 1){
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
        if($number == 1){
            return $number;
        }
        if($number > 1){
            $factorial = self::factorial($number-1) * $number;
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
        $angle = 0;

        $minutesAsDeg = $minutes * 360/60;
        $hoursAsDeg = (($hours * 60) + $minutes) * (360 / (60*12));

        $angle = (int)round($minutesAsDeg - $hoursAsDeg, 0, PHP_ROUND_HALF_DOWN );

        return $angle;
    }
}
