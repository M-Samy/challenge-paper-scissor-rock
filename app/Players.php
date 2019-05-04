<?php
namespace Challenge\App;

include_once("PlayersInterface.php");
use Challenge\PlayersInterface;

class Players implements PlayersInterface
{

    public $wins = 0;
    public $losses = 0;
    public $choice;

    public function addPoint()
    {
        $this->wins++;
    }

    public function subtractPoint()
    {
        $this->losses++;
    }


    public function getPlayerBPlay()
    {
        $choicesArray = array("paper", "rock","scissors");
        return array_rand($choicesArray);
    }
}