<?php
namespace Challenge\App;

include_once("TypesInterface.php");
use TypesInterface;

class Rock implements TypesInterface
{
    private $name = "rock";
    private $beats = "scissors";

    public function getName()
    {
        return $this->name;
    }

    public function getBeats()
    {
        return $this->beats;
    }
}