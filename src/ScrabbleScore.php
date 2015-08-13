<?php
    class ScrabbleScore
    {
        function calculateScore($input)
        {
            $input = $this->stripPunctuation($input);
            $input = strtoupper($input);

            $value_1 = "AEIOULNRST";
            $value_2 = "DG";
            $value_3 = "BCMP";
            $value_4 = "FHVWY";
            $value_5 = "K";
            $value_8 = "JX";
            $value_10 = "QZ";

            $return_array = array();
            array_push($return_array, $input);

            $char_array = str_split($input);
            $counter = 0;

            foreach ($char_array as $char) {

                if( $char=="" ) {
                    return 0;
                }
                if( (strpos($value_1, $char))!==false ) {
                    $counter+= 1;
                } elseif( (strpos($value_2, $char)) !==false ) {
                    $counter+= 2;
                } elseif( (strpos($value_3, $char)) !==false ) {
                    $counter+= 3;
                } elseif( (strpos($value_4, $char)) !==false ) {
                    $counter+= 4;
                } elseif( (strpos($value_5, $char)) !==false ) {
                    $counter+= 5;
                } elseif( (strpos($value_8, $char)) !==false ) {
                    $counter+= 8;
                } elseif( (strpos($value_10, $char)) !==false ) {
                    $counter+= 10;
                }
            }

            array_push($return_array, $counter);

            return $return_array;

        }


        function stripPunctuation($str)
        {
            // Replaces any non-alpha characters with nothing ''.
            return preg_replace('/[^[:alpha:]]/', '', $str);

        }


    }
?>
