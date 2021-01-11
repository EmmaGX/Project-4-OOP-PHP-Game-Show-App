<?php

class Phrase
{
    public $currentPhrase;
    public $selected;
    public function __construct($currentPhrase="dream big", $selected=[]) {
        if (!empty($currentPhrase)) {
            $this->currentPhrase = $currentPhrase;
        }
        if (!empty($selected)) {
            $this->selected = $selected;
        }
    }
}