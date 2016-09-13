<?php

    class CoinCombo
    {
        private $pennies;

        //Constructor

        function _construct($pennies) {
            $this->pennies = $pennies;
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

        //General Methods

        function makePennies($input)
        {
            return $input / .01;
        }






    }

?>
