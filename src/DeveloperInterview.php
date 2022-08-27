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
            // FizzBuzz case
            if ($i % 15 == 0)
                $fizzBuzz .= 'FizzBuzz';
            // Fizz case
            elseif ($i % 3 == 0)
                $fizzBuzz .= 'Fizz';
            // Buzz case
            elseif ($i % 5 == 0)
                $fizzBuzz .= 'Buzz';
            else
                $fizzBuzz .= $i;
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

        // Declare the main array (key => value) for later matches
        // Did some "Roman calculation" there for preparing some numbers like 900, 400, etc.
        $researchArray = array(
            'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
        );

        foreach ($researchArray as $romanLetter => $intValue) {
            // Search for a match between the parameter and the value of the array
            $matches = intval($value / $intValue);

            // Concatenate the number of matches found to the final roman value
            $roman .= str_repeat($romanLetter, $matches);

            // Substract the matched value to the function's parameter 
            $value = $value % $intValue;
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

        // I had a first idea of doing this one but could not figure out how I could let the letters
        // in uppercase when needed so I did a little research on the web (through PHP's doc, etc.)
        // and got as a hint to go with ASCII codes to do so - http://sticksandstones.kstrom.com/appen.html

        $stringLength = strlen($value);

        for ($i = 0; $i < $stringLength; $i++) {
            $currentChar = ord($value[$i]); // ord is a PHP method that gives us the ASCII value of the current character

            // Range from A to Z or a to z (ASCII values for upper and lower cases)
            if (($currentChar >= 65 && $currentChar <= 90) || // Uppercase
                ($currentChar >= 97 && $currentChar <= 122) // Lowercase
            ) {
                $currentChar += 13;

                // 122 is the last ASCII value for alphabet char, so when we go above it, substract 26
                if (
                    $currentChar > 122 ||
                    ($currentChar > 90 &&
                        ord($value[$i]) <= 90) // not $currentChar cause the value changes through the code so we need to get the original one
                ) {
                    $currentChar -= 26;
                }
            }
            // Append the current rot13 char to the final string to return
            $rot13 .= chr($currentChar);
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

        // Regex
        $regex = '~\b[/]\d{4}\b~';
        preg_match_all($regex, $text, $matches);
        $year = explode('/', $matches[0][0])[1]; // I'm not convinced of what I did there but did the trick

        return $year;
    }

    public function doSomething()
    {
    }

    /**
     * Ouch, this code is ugly. Can you improve it? - Done :)
     *
     * @return boolean
     */
    public function simplifyMe($report, $rc)
    {
        if (!empty($report) || $rc != 1)
            $this->doSomething();
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

        // Don't forget that 0! && 1! equals 1
        if ($number < 2) {
            $factorial += 1;
        } else {
            // recursive call for the factorial function
            $factorial += ($number * self::factorial($number - 1));
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

        // Each minute, the hour hand moves from 0.5°
        $hour_angle = 30 * $hours + 0.5 * $minutes;

        // The minute hand rotates completely in 60 minutes --> 360/60 = 6
        $minute_angle = 6 * $minutes;

        $angle = intval(abs($hour_angle - $minute_angle));

        return $angle;
    }
}
