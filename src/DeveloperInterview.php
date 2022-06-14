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
            if ($i % 3 === 0 && $i % 5 === 0) {
                $fizzBuzz .= 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $fizzBuzz .= 'Fizz';
            } elseif ($i % 5 === 0) {
                $fizzBuzz .= 'Buzz';
            } else {
                $fizzBuzz .= $i;
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
        $romanNumerals = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];

        while ($value > 0) {
            foreach ($romanNumerals as $romanNumber => $number) {
                if ($value >= $number) {
                    $value -= $number;
                    $roman .= $romanNumber;
                    break;
                }
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
        $letters = 'abcdefghijklmnopqrstuvwxyz';

        for ($i = 0; $i < mb_strlen($value); $i++) {
            $letterPos = mb_stripos($letters, mb_substr($value, $i, 1));
            $newLetterPos = $letterPos + 13;

            if (mb_substr($value, $i, 1) == ' ') {
                $rot13 .= ' ';
                continue;
            }

            if ($newLetterPos > 25) {
                $newLetterPos = $newLetterPos - 26;
            }

            ctype_lower(mb_substr($value, $i, 1)) == true
                ? $rot13 .= $letters[$newLetterPos]
                : $rot13 .= strtoupper($letters[$newLetterPos]);
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
        $regEx = '/(?<date>[2][0][\d]{2})/';
        $matches = [];

        preg_match($regEx, $text, $matches);
        $year = $matches['date'];

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
        if (!empty($report) && $rc !== 1) {
            $this->doSomething;
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

        if ($number <= 1) {
            $factorial = 1;
        }
        else {
            $factorial = $number * self::factorial($number - 1);
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
        $HOUR_ANGLE = 30;
        $MINUTE_ANGLE = 6;
        $HOUR_OFFSET_PER_MIN = 0.5;

        $angle = (($hours * $HOUR_ANGLE) + ($minutes * $HOUR_OFFSET_PER_MIN)) - ($minutes * $MINUTE_ANGLE);

        if ($angle < 0) {
            $angle = $angle * -1;
        }

        $angle = intval(floor($angle));

        return $angle;
    }
}
