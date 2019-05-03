<?php

require_once("PlayersInterface.php");

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


    function getPlayerBPlay()
    {
        $choicesArray = array("paper", "rock","scissors");
        return array_rand($choicesArray);
    }
}