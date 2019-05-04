<?php

use Challenge\helpers\RPSHelper;
use PHPUnit\Framework\TestCase;

class ChoiceTest extends TestCase
{
    public $choicesMock = array(
        'paper' => 'rock',
        'rock' => 'scissors',
        'scissors' => 'paper'
    );

    public function testWrongChoice()
    {
        $playerChoiceMock = "MOCK_WRONG_CHOICE";
        $checkChoiceExist = RPSHelper::check_keys_existence($this->choicesMock, array($playerChoiceMock));
        $this->assertFalse($checkChoiceExist);
    }

    public function testRightChoice()
    {
        $playerChoiceMock = "rock";
        $checkChoiceExist = RPSHelper::check_keys_existence($this->choicesMock, array($playerChoiceMock));
        $this->assertTrue($checkChoiceExist);
    }
}