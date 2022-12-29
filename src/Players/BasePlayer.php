<?php

namespace Apons\PiedraPapelTijera\Players;

abstract class BasePlayer {
    public string $name;

    public function __construct (string $name) {
        $this->name=$name;
    }
    
    public abstract function getMovement($lastRivalMovement=0): int;
}