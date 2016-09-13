<?php
    require_once "src/CoinCombo.php";
    class coinComboTests extends PHPUnit_Framework_TestCase
    {
        function test_makePennies_float04()
        {
            $coin_test = new CoinCombo;
            $input = .04;
            $output = $coin_test->makePennies($input);
            $this->assertEquals(4, $output);
        }

    }
?>
