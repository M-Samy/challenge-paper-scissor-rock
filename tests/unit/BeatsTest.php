<?php

include_once("app/Rock.php");
include_once("app/Scissors.php");
include_once("app/Paper.php");
include_once("app/Players.php");

use Challenge\App\Rock;
use Challenge\App\Scissors;
use Challenge\App\Paper;
use PHPUnit\Framework\TestCase;

class BeatsTest extends TestCase
{
    static $choices = array(
        'paper' => 'rock',
        'rock' => 'scissors',
        'scissors' => 'paper'
    );

    public function testCheckRockBeats()
    {
        $rock = new Rock();
        $playerChoiceMock = "rock";
        $playerChoiceBeats = BeatsTest::$choices[$playerChoiceMock];
        $rockBeats = $rock->getBeats();
        $this->assertEquals($rockBeats, $playerChoiceBeats);
    }

    public function testCheckPaperBeats()
    {
        $paper = new Paper();
        $playerChoiceMock = "paper";
        $playerChoiceBeats = BeatsTest::$choices[$playerChoiceMock];
        $paperBeats = $paper->getBeats();
        $this->assertEquals($paperBeats, $playerChoiceBeats);
    }

    public function testCheckScissorsBeats()
    {
        $scissors = new Scissors();
        $playerChoiceMock = "scissors";
        $playerChoiceBeats = BeatsTest::$choices[$playerChoiceMock];
        $scissorsBeats = $scissors->getBeats();
        $this->assertEquals($scissorsBeats, $playerChoiceBeats);
    }
}