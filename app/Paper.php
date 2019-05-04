<?php
namespace Challenge\App;

include_once("TypesInterface.php");
use TypesInterface;

class Paper implements TypesInterface
{
    private $name = "paper";

    public function getName()
    {
        return $this->name;
    }
}