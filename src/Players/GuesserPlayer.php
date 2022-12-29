<?php

namespace Apons\PiedraPapelTijera\Players;

class GuesserPlayer extends BasePlayer {

    public function getMovement($lastRivalMovement=0): int {
        if ($lastRivalMovement==0) {
            // piedra, his next movement will be paper, let's show scissors
            return 2;
        } elseif ($lastRivalMovement==1) {
            // papel, next movement will be scissors, let's show rock
            return 0;
        }
        return 1;
    }
}