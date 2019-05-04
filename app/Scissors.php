<?php
namespace Challeng\App;

include_once("TypesInterface.php");
use TypesInterface;

class Scissors implements TypesInterface
{
    private $name = "scissors";

    public function getName()
    {
        return $this->name;
    }
}