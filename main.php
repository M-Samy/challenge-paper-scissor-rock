<?php
namespace Challenge;

include_once("RPS.php");
use Challenge\RPS\RPS;

$rps = new RPS();
$playerA = $rps->playerA;
$playerB = $rps->playerB;
$rps->Play($playerA, $playerB);
$rps->getWinner($playerA, $playerB);
