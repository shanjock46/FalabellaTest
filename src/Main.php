<?php
/**
 * Created by PhpStorm.
 * User: shanjock46
 * Date: 31/01/2020
 * Time: 22:07
 */

namespace falabella\PHP;
require_once 'CalcRemainder.php';
require_once 'CalcResult.php';
require_once 'Display.php';


class Main
{
    public function executeChallenge()
    {

        for ($i = 1; $i <= 100; $i++) {
            $calcRemainder = new CalcRemainder();
            $calcResult = new CalcResult();
            $calcResult->number = $i;
            $calcResult->remainder3 = $calcRemainder->calcRemainder($i, 3);
            $calcResult->remainder5 = $calcRemainder->calcRemainder($i, 5);
            $calcResult->remainder35 = $calcRemainder->addRemainder($calcResult->remainder3, $calcResult->remainder5);
            $write = new Display();
            $write->displayAnswer($calcResult);
        }
    }

}

$callMain = new Main();
$callMain->executeChallenge();
