<?php

namespace Apons\PiedraPapelTijera\Players;

class HumanPlayer extends BasePlayer {

    public function getMovement($lastRivalMovement=0):int {
        echo $this->name." introdueix la teva jugada O=piedra P=papel T=tijera:\n";
        $jugada=$this->getInput();
        echo "La teva jugada és $jugada\n";
        if ($jugada=='O') return 0;
        if ($jugada=='P') return 1;
        if ($jugada=='T') return 2;
        echo $this->name." aquesta jugada no és vàlida, torna a provar\n";
        sleep(1);
        return $this->getMovement($lastRivalMovement);
    }

    function getInput(): string {
        $handle = fopen ("php://stdin","r");
        do { $line = fgets($handle); } while ($line == '');
        fclose($handle);
        return strtoupper(str_replace("\n",'',$line));
    }
}