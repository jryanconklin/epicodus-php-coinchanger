<?php

    class CoinCombo
    {
        private $pennies;
        private $nickels;

        //Constructor

        function _construct($pennies, $nickels) {
            $this->pennies = $pennies;
            $this->nickels = $nickels;
        }

        //Getter and Setter

        function setPennies($new_pennies)
        {
            $this->pennies = $new_pennies;
        }

        function getPennies()
        {
            return $this->pennies;
        }

        function setNickels($new_nickels)
        {
            $this->nickels = $new_nickels;
        }

        function getNickels()
        {
            return $this->pennies;
        }

        //General Methods

        function makePennies($input)
        {
            return $input / .01;
        }

        function makeNickels($input)
        {
            $remainder = number_format(fmod($input, .05), 2);
            $parsed_array = array();
            $whole = $input / .05;
            $whole = round($whole - $remainder);
            array_push($parsed_array, $whole);
            array_push($parsed_array, $remainder);

            return $parsed_array;
        }

        function makeDimes($input)
        {
            $remainder = number_format(fmod($input, .10), 2);
            $parsed_array = array();
            $whole = $input / .10;
            $whole = round($whole - $remainder);
            array_push($parsed_array, $whole);
            array_push($parsed_array, $remainder);

            return $parsed_array;
        }

        function makeQuarters($input)
        {
            $remainder = number_format(fmod($input, .25), 2);
            $parsed_array = array();
            $whole = $input / .25;
            $whole = round($whole - $remainder);
            array_push($parsed_array, $whole);
            array_push($parsed_array, $remainder);

            return $parsed_array;
        }




    }

?>
