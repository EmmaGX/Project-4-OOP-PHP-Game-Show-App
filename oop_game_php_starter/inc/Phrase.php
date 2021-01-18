<?php
// Declares the Phrase Class
class Phrase
{
    // A string containing the current phrase to be used in the game
    public $currentPhrase;

    // An array of letters the user has guessed
    public $selected = [];

    public function __construct($currentPhrase = null, $selected = [])
    {
        if (empty($currentPhrase)) {
            $this->currentPhrase = $_SESSION['phrase'];
        } else {
        $this->currentPhrase = $currentPhrase;
        }
        if (!empty($selected)) {
            $this->selected = $selected;
        }
    }

    // This method adds letter placeholders to display when the game starts
    public function addPhraseToDisplay()
    {
        // Split string into lowercase characters
        $characters = str_split(strtolower($this->currentPhrase));

        echo '<div id=phrase class=section>';
        echo '<ul>';
        foreach ($characters as $character) {
            if ($character == ' ') {
                echo '<li class="space">';
                echo ' ';
                echo '</li>';
            } else {
                if (!empty($character)) {
                    echo '<li class=" hide letter">';
                    echo $character;
                    echo '</li>';
                } else {
                    echo '<li class="hide">';
                    echo $character;
                    echo '</li>';
                }
            }
        }
        echo '</ul>';
        echo '</div>';
    }

    // Checks a letter against the currentPhrase
    public function checkLetter($letter)
    {
        $characters = str_split(strtolower($this->currentPhrase));
        $found = false;

        foreach ($characters as $value) {
            if ($value == $letter) {
                return true;
            }
        }
        return $found;
    }



}


