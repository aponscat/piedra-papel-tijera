<?php

namespace Apons\PiedraPapelTijera\Players;

class RandomPlayer extends BasePlayer {

    public function getMovement($lastRivalMovement=0):int {
        return random_int(0,2);
    }
}