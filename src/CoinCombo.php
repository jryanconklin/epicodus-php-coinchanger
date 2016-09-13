<?php

    class CoinCombo
    {

        function makeChange($input)
        {
            $change = array('quarters'=>0, 'dimes'=>0, 'nickels'=>0, 'pennies'=>0);

            while($input > 0) {
                if ($input >= 25) {
                    $change['quarters'] += 1;
                    $input -= 25;
                } elseif ($input >= 10) {
                    $change['dimes'] += 1;
                    $input -= 10;
                } elseif ($input >= 5) {
                    $change['nickels'] += 1;
                    $input -= 5;
                } elseif($input >= 1) {
                    $change['pennies'] += 1;
                    $input -= 1;
                }
                return;
            }
            return $change;
        }


        // private $pennies;
        // private $nickels;
        // private $dimes;
        // private $quarters;
        //
        // //Constructor
        //
        // function _construct($pennies, $nickels, $dimes, $quarters) {
        //     $this->pennies = $pennies;
        //     $this->nickels = $nickels;
        //     $this->dimes = $nickels;
        //     $this->quarters = $nickels;
        // }
        //
        // //Getter and Setter
        //
        // function setPennies($new_pennies)
        // {
        //     $this->pennies = $new_pennies;
        // }
        //
        // function getPennies()
        // {
        //     return $this->pennies;
        // }
        //
        // function setNickels($new_nickels)
        // {
        //     $this->nickels = $new_nickels;
        // }
        //
        // function getNickels()
        // {
        //     return $this->nickels;
        // }
        //
        // function setDimes($new_dimes)
        // {
        //     $this->dimes = $new_dimes;
        // }
        //
        // function getDimes()
        // {
        //     return $this->dimes;
        // }
        //
        // function setQuarters($new_quarters)
        // {
        //     $this->quarters = $new_quarters;
        // }
        //
        // function getQuarters()
        // {
        //     return $this->quarters;
        // }
        //
        // //General Methods
        //
        // function makePennies($pennies)
        // {
        //     $pennies = $pennies / .01;
        //     $this->setPennies($pennies);
        //     return $pennies;
        // }
        //
        // function makeNickels($pennies)
        // {
        //     $parsed_change = array();
        //     $pennies = number_format(fmod($pennies, .05), 2);
        //     $whole = $pennies / .05;
        //     $whole = round($whole - $pennies);
        //     array_push($parsed_change, $whole, $pennies);
        //     return $pennies;
        // }
        //
        // function makeDimes($pennies)
        // {
        //     $parsed_change = array();
        //     $pennies = number_format(fmod($pennies, .10), 2);
        //     $whole = $pennies / .10;
        //     $whole = round($whole - $pennies);
        //     array_push($parsed_change, $whole, $pennies);
        //     return $pennies;
        // }
        //
        // function makeQuarters($pennies)
        // {
        //     $parsed_change = array();
        //     $pennies = number_format(fmod($pennies, .25), 2);
        //     $whole = $pennies / .25;
        //     $whole = round($whole - $pennies);
        //     array_push($parsed_change, $whole, $pennies);
        //     return $parsed_change;
        // }

    }

?>
