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

        function test_makeNickels_float06()
        {
            $coin_test = new CoinCombo;
            $input = .06;
            $output = $coin_test->makeNickels($input);
            $this->assertEquals(.01, $output);
        }

        function test_makeDimes_float11()
        {
            $coin_test = new CoinCombo;
            $input = .11;
            $output = $coin_test->makeDimes($input);
            $this->assertEquals(.01, $output);
        }

        function test_makeQuarters_float26()
        {
            $coin_test = new CoinCombo;
            $input = .26;
            $output = $coin_test->makeQuarters($input);
            $this->assertEquals(.01, $output);
        }



    }
?>
