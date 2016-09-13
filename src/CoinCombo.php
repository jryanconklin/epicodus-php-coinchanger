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
            }
            return $change;
        }
    }

?>
