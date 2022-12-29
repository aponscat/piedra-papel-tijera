<?php

namespace Apons\PiedraPapelTijera\Players;

class HalfGuesserHalfRandomPlayer extends BasePlayer {

    public function getMovement($lastRivalMovement=0):int {
        if (random_int(0,1)==0) return random_int(0,2);
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