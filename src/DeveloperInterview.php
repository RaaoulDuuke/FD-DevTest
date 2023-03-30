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
        for ($n = 1; $n <= 100; $n++) {
            if ($n % 3 == 0 && $n % 5 == 0) {
                $fizzBuzz .= "FizzBuzz";
            } elseif ($n % 3 == 0) {
                $fizzBuzz .= "Fizz";
            } elseif ($n % 5 == 0) {
                $fizzBuzz .= "Buzz";
            } else {
                $fizzBuzz .= $n;
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
        $lists = array(
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
        );
    
        foreach ($lists as $Numeral => $number) {
            $matches = intval($value / $number);
            $roman .= str_repeat($Numeral, $matches);
            $value = $value % $number;
        }
    
        return $roman;
    }
    /**La fonction utilise un tableau associatif qui associe chaque chiffre
     *  romain à sa valeur décimale. Ensuite, elle itère sur 
     * ce tableau, divisant le nombre par la valeur de chaque 
     * chiffre romain, ajoutant le chiffre romain autant de fois
     *  qu'il est nécessaire et soustrayant la valeur du chiffre 
     * romain du nombre. 
     * La fonction renvoie le chiffre romain final */




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

        $len = strlen($value);
        for ($t = 0; $t < $len; $t++) {
          $char = $value[$t];
          if (ctype_alpha($char)) {
            $asc = ord(strtolower($char));
            $asc = ($asc + 13) % 97 % 26 + 97;
            $rot13 .= chr($asc);
          } else {
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

            // Définir l'expression régulière pour trouver l'année
        $pattern = '/\b(19|20)\d{2}\b/';
    
        // Rechercher l'expression régulière dans la chaîne de caractères
        preg_match($pattern, $text, $matches);
    
        // Vérifier si une année a été trouvée
        if (isset($matches[0])) {
        // Extraire l'année trouvée
        $year = $matches[0];
        return $year;
        } else {
        // Si aucune année n'a été trouvée, retourner false
      return false;
    }
      
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
            //pass
            return false;
        } else {
            $this->doSomething();
            return true;
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
        // Convertir l'heure (12 heures = 360 degrés)
        $h_angle = ($hours % 12) * 30;
        // Convertir les minutes (60 minutes = 360 degrés)
        $m_angle = $minutes * 6;
        // Calculer la différence d'angle entre les deux aiguilles
        $angle = abs($h_angle - $m_angle);
        // Prendre l'angle le plus petit entre les deux possibilités
        $angle = min($angle, 360 - $angle);
        // Retourner l'angle produit
        return $angle;
        }
    
}