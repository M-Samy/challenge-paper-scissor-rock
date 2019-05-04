<?php
namespace Challenge\App;

include_once("TypesInterface.php");
use TypesInterface;

class Rock implements TypesInterface
{
    private $name = "rock";

    public function getName()
    {
        return $this->name;
    }
}