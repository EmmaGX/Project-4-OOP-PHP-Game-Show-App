<?php

class Phrase
{
    public $currentPhrase;
    public $selected = [];
    public $array_unique = [];

    public function __construct($currentPhrase = "dream big", $selected = [])
    {
        if (!empty($currentPhrase)) {
            $this->currentPhrase = $currentPhrase;
            $this->array_unique = (str_split(str_replace(
                ' ',
                '',
                strtolower($this->currentPhrase)
            )));
        }
        if (!empty($selected)) {
            $this->selected = $selected;
        }
    }

    public function addPhraseToDisplay()
    {
        $characters = str_split(strtolower($this->currentPhrase));

        foreach ($characters as $character) {
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

    public function checkLetter($letter)
    {
        $found = false;
        foreach ($this->array_unique as $value) {
            if ($value == $letter) {
                $found = true;
            }
        }
        return $found;
    }
}
