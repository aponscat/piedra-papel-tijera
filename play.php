<?php

require_once './vendor/autoload.php';
use Apons\PiedraPapelTijera\PiedraPapelTijera;
use Apons\PiedraPapelTijera\Players\RandomPlayer;
//use Apons\PiedraPapelTijera\Players\PiedraPlayer;
use Apons\PiedraPapelTijera\Players\GuesserPlayer;
//use Apons\PiedraPapelTijera\Players\HalfGuesserHalfRandomPlayer;
use Apons\PiedraPapelTijera\Players\HumanPlayer;

$player1Name='Player1';
$player2Name='Player2';

$rounds=5;
$player1=new HumanPlayer($player1Name);
//$player1=new GuesserPlayer($player1Name);
//$player1=new RandomPlayer($player1Name);
//$player1=new PiedraPlayer($player1Name);
//$player2=new HumanPlayer($player2Name);
$player2=new RandomPlayer($player2Name);
(new PiedraPapelTijera($rounds, $player1, $player2))->run();

