<?php
namespace Challenge\RPS;

include_once("app/Rock.php");
include_once("app/Scissors.php");
include_once("app/Paper.php");
include_once("app/Players.php");
include_once("Helpers/RPSHelper.php");

use Challeng\App\Rock;
use Challeng\App\Scissors;
use Challeng\App\Paper;
use Challeng\App\Players;
use Challenge\Helpers\RPSHelper;

class RPS
{
    static $choices = array(
        'paper' => 'rock',
        'rock' => 'scissors',
        'scissors' => 'paper'
    );

    static $numOfTries = 5;

    public $rockObj, $scissorsObj, $paperObj, $helperObj, $playerA, $playerB;

    function __construct() {
        $this->rockObj = new Rock();
        $this->scissorsObj = new Scissors();
        $this->paperObj = new Paper();
        $this->helperObj = new RPSHelper();
        $this->playerA = new Players();
        $this->playerB = new Players();
    }

    public function getRoundWinner($playerA, $playerB)
    {
        $player_a_choice = $playerA->choice;
        $player_b_choice = $playerB->choice;
        $result = RPS::$choices[$player_b_choice];

        if($player_a_choice == $player_b_choice)
        {
            return "it’s a tie";
        }
        else if ($result == $player_a_choice)
        {
            $playerB->addPoint();
            return "player b Win";
        }
        else
        {
            $playerA->addPoint();
            return "player a win";
        }
    }


    public function Play($playerA, $playerB)
    {
        $playerB->choice = $this->paperObj->getName();
        $iteratorReference = 0;

        while ($iteratorReference < RPS::$numOfTries) {
            echo("Hi player A please enter your choice: ");
            $playerA->choice = strtolower(trim(fgets( STDIN )));
            if (!$this->helperObj->check_keys_existence(RPS::$choices, array($playerA->choice)))  {
                echo "Choice key error try again \n";
                continue;
            }
            $this->getRoundWinner($playerA, $playerB);
            $iteratorReference ++;
        }
    }

    public function getWinner($playerA, $playerB)
    {
        $playerAScore = $playerA->wins;
        $playerBScore = $playerB->wins;

        echo "Challenge result is : \n
        PlayerA : Wins into " . $playerAScore . " rounds \n
        PlayerB : Wins into " . $playerBScore . " rounds \n";
    }
}
