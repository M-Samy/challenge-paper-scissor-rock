<?php
namespace Challenge\App;

include_once("TypesInterface.php");
use TypesInterface;

class Scissors implements TypesInterface
{
    private $name = "scissors";
    private $beats = "paper";

    public function getName()
    {
        return $this->name;
    }

    public function getBeats()
    {
        return $this->beats;
    }
}