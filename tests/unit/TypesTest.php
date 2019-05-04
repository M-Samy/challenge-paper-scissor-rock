<?php

include_once("app/Rock.php");
include_once("app/Scissors.php");
include_once("app/Paper.php");
include_once("app/Players.php");
include_once("Helpers/RPSHelper.php");

use Challenge\App\Rock;
use Challenge\App\Scissors;
use Challenge\App\Paper;
use PHPUnit\Framework\TestCase;

class TypesTest extends TestCase
{
    public function testCheckRockType()
    {
        $rock = new Rock();
        $this->assertEquals(get_class($rock), "Challenge\App\Rock");
    }

    public function testCheckPaperType()
    {
        $paper = new Paper();
        $this->assertEquals(get_class($paper), "Challenge\App\Paper");
    }

    public function testCheckScissorsType()
    {
        $scissors = new Scissors();
        $this->assertEquals(get_class($scissors), "Challenge\App\Scissors");
    }
}