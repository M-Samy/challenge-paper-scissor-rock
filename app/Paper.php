<?php
namespace Challenge\App;

include_once("TypesInterface.php");
use TypesInterface;

class Paper implements TypesInterface
{
    private $name = "paper";
    private $beats = "rock";

    public function getName()
    {
        return $this->name;
    }

    public function getBeats()
    {
        return $this->beats;
    }
}