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

    public function addPhraseToDisplay() {
        $characters = str_split(strtolower($this->currentPhrase));

        foreach($characters as $character) {
            if (!empty($character)) {
                echo '<li class="hide letter">';
                echo $character;
                echo '</li>';
            } else {
                echo '<li class="hide space">';
                echo $character;
                echo '</li>';
            }
        }
    }
}
