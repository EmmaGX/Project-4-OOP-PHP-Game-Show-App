<?php

class Phrase
{
    public $currentPhrase = 'dream big';
    public $selected = [];

    public function __construct($phrase, $selected) {
        if (!empty($currentPhrase)) {
            $this->currentPhrase = $currentPhrase;
        }
        if (!empty($selected)) {
            $this->selected = $selected;
        }
    }
}