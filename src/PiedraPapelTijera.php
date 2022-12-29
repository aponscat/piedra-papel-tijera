<?php

namespace Apons\PiedraPapelTijera;

use Apons\PiedraPapelTijera\Players\BasePlayer;

class PiedraPapelTijera {
    public $movements=['O','P','T'];
    public int $plays;
    public BasePlayer $player1;
    public BasePlayer $player2;
    public int $prevPlayer1=0;
    public int $prevPlayer2=0;
    public array $wins=[0=>0, 1=>0, 2=>0];
    public array $movementWins=['O'=>0, 'P'=>0, 'T'=>0];

    public function __construct(int $plays=200, BasePlayer $player1, BasePlayer $player2) {
        $this->plays=$plays;
        $this->player1=$player1;
        $this->player2=$player2;
    }

    public function run () {
        foreach (range(1, $this->plays) as $i) {
            [$movement1, $movement2, $winner]=$this->play();
            while ($winner==0) {
                echo "EMPATE!\n";
                [$movement1, $movement2, $winner]=$this->play();
            }
            if ($winner==1) {
                $this->movementWins[$movement1]++;
                $winnerName=$this->player1->name;
            } else {
                $this->movementWins[$movement2]++;
                $winnerName=$this->player1->name;
            }
            echo "ronda $i - $winnerName wins. Movements $movement1 vs. $movement2\n";
        }
        //print_r($this->wins);        
        //print_r($this->movementWins); 
        echo "Resultado:\n";
        if ($this->wins[0]) {
            echo $this->wins[0]." empates\n";
        }       
        if ($this->wins[1]) {
            echo $this->wins[1]." victorias del jugador ".$this->player1->name."\n";
        }       
        if ($this->wins[2]) {
            echo $this->wins[2]." victorias del jugador ".$this->player2->name."\n";
        }  

        if ($this->wins[1]>$this->wins[2]) {
            echo $this->player1->name." HAS GANADO!\n";
        } else {
            echo $this->player2->name." HAS GANADO!\n";
        }
    }

    function play() {
        [$symbol1, $symbol2] = $this->drawn();
        $winner=$this->whoWins($symbol1, $symbol2);
        $this->wins[$winner]++;
        return [$symbol1, $symbol2, $winner];
    }

    function drawn(): array{

        $movement1=$this->player1->getMovement($this->prevPlayer2);
        $movement2=$this->player2->getMovement($this->prevPlayer1);

        $this->prevPlayer1=$movement1;
        $this->prevPlayer2=$movement2;

        $symbol1=$this->movements[$movement1];
        $symbol2=$this->movements[$movement2];
        return [$symbol1, $symbol2];
    }
    
    function whoWins ($movement1, $movement2): int {
        if ($movement1==$movement2) return 0;
    
        if ($movement1=='O') {
            if ($movement2=='P') {
                return 2;
            } else {
                return 1;
            } 
        }
    
        if ($movement1=='P') {
            if ($movement2=='O') {
                return 1;
            } else {
                return 2;
            } 
        }
    
        if ($movement1=='T') {
            if ($movement2=='P') {
                return 1;
            } else {
                return 2;
            } 
        }
    }
}