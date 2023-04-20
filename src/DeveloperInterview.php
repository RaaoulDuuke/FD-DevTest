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

            if ($i % 3 == 0 && $i % 5 == 0) {
                $fizzBuzz .= "FizzBuzz";

            } else if ($i % 3 == 0) {
                $fizzBuzz .= "Fizz";

            } else if ($i % 5 == 0) {
                $fizzBuzz .=  "Buzz";

            } else {
                $fizzBuzz .=  $i ;
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

        $map = array(

            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1

        );

        foreach ($map as $romanNum => $arabicVal) {

            while ($value >= $arabicVal) {

                $roman .= $romanNum;
                $value -= $arabicVal;

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

        // Write your code!

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

        preg_match('/(19|20)\d{2}/', $text, $match);
        $year = $match[0];

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

    public function simplified($report, $rc)
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
        $factorial = 0;

        // Write your code!

        if($number <= 1) {           
            $factorial = 1;
            
        } else {
            $factorial = $number * factorial($number - 1);
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

        // Write your code!

        $angle_hours = ($hours % 12) * 30;
        $angle_minutes = $minutes * 6;

        $angle = abs($angle_hours - $angle_minutes);

        if ($angle > 180) {
            $angle = 360 - $angle;
        }

        return $angle;
    }
}
