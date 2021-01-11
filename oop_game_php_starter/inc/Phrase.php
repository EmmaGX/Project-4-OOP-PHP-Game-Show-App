<?php

class Phrase extends Game
{
    private $currentPhrase = 'dream big';
    private $selected = [];

    public function __construct($currentPhrase, $selected) {
        if (!empty($currentPhrase)) {
            $this->currentPhrase = $currentPhrase;
        }
        if (!empty($selected)) {
            $this->selected = $selected;
        }
    }
}