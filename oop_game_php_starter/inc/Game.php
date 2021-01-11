<?php

class Game
{
    public $phrase;
    public $lives = 5;

    public function __construct(Phrase $phrase){
        $this->phrase = $phrase;
    }


}