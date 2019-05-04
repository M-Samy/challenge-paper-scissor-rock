<?php

include_once("app/Rock.php");
include_once("app/Scissors.php");
include_once("app/Paper.php");
include_once("app/Players.php");
include_once("helpers/RPSHelper.php");

use Challenge\App\Rock;
use Challenge\App\Scissors;
use Challenge\App\Paper;
use Challenge\helpers\RPSHelper;
use PHPUnit\Framework\TestCase;

class TypesTest extends TestCase
{
    public function testCheckRockType()
    {
        $rock = new Rock();
        $this->assertEquals(RPSHelper::getClassName(get_class($rock)), "Rock");
    }

    public function testCheckPaperType()
    {
        $paper = new Paper();
        $this->assertEquals(RPSHelper::getClassName(get_class($paper)), "Paper");
    }

    public function testCheckScissorsType()
    {
        $scissors = new Scissors();
        $this->assertEquals(RPSHelper::getClassName(get_class($scissors)), "Scissors");
    }
}