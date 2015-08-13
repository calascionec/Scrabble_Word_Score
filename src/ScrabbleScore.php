<?php
    class ScrabbleScore
    {
        function calculateScore($input)
        {
            $input = $this->stripPunctuation($input);
            $input = strtolower($input);

            $value_1 = "aeioulnrst";
            $value_2 = "dg";
            $value_3 = "bcmp";
            $value_4 = "fhvwy";
            $value_5 = "k";
            $value_8 = "jx";
            $value_10 = "qz";


            if($input=="") {
                return 0;
            } elseif( (strpos($value_1, $input))!==false ) {
                return 1;
            } elseif( (strpos($value_2, $input)) !==false ) {
                return 2;
            } elseif( (strpos($value_3, $input)) !==false ) {
                return 3;
            } elseif( (strpos($value_4, $input)) !==false ) {
                return 4;
            } elseif( (strpos($value_5, $input)) !==false ) {
                return 5;
            } elseif( (strpos($value_8, $input)) !==false ) {
                return 8;
            } elseif( (strpos($value_10, $input)) !==false ) {
                return 10;
            }

        }


        function stripPunctuation($str)
        {
            // Replaces any non-alpha characters with nothing ''.
            return preg_replace('/[^[:alpha:]]/', '', $str);

        }


    }
?>
