<?php
// Rock = 1 Paper = 2 Scissors = 3
// Rock beats Scissors, 1 > 3
// Paper beats Rock, 2 > 1
// Scissors beats Paper, 3 > 2

require_once("Players.php");
require_once("RPSHelper.php");

class RPS
{
    static $choices = array(
        'paper' => 'rock',
        'rock' => 'scissors',
        'scissors' => 'paper'
    );

    static $numOfTries = 100;

    static function getRoundWinner($playerA, $playerB)
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


    static function Play($playerA, $playerB)
    {
        $playerB->choice = 'paper';
        $iteratorReference = 0;

        while ($iteratorReference < RPS::$numOfTries) {
            echo("Hi player A please enter your choice: ");
            $playerA->choice = strtolower(trim(fgets( STDIN )));
            if (!RPSHelper::check_keys_existence(RPS::$choices, array($playerA->choice)))  {
                echo "Choice key error try again \n";
                continue;
            }
            RPS::getRoundWinner($playerA, $playerB);
            $iteratorReference ++;
        }
    }

    static function getWinner($playerA, $playerB)
    {
        $playerAScore = $playerA->wins;
        $playerBScore = $playerB->wins;

        echo "Challenge result is : \n
        PlayerA : Wins into " . $playerAScore . " rounds \n
        PlayerB : Wins into " . $playerBScore . " rounds \n";
    }
}

$playerA = new Players();
$playerB = new Players();
RPS::Play($playerA, $playerB);
RPS::getWinner($playerA, $playerB);
