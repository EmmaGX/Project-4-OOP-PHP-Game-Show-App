<?php
// Declares the Phrase Class
class Phrase
{
    // A string containing the current phrase to be used in the game
    public $currentPhrase;

    // An array of phrases
    public $allPhrases =
    [
        'all you need is love',
        'i have a dream',
        'destiny is all',
        'there is no crying in baseball',
        'we are on a mission from god',
        'winter is coming',
        'there is no place like home',
        'a bird in the hand',
        'a stitch in time',
        'who let the dogs out',
        'wag more bark less',
        'you had me at hello',
        'may the force be with you',
        'i love the smell of napalm in the morning',
        'soylent green is people',
        'you can not handle the truth',
        'i will have what she is having',
        'who is on first',
        'the force is strong in this one',
        'they took the bar',
        'make it so',
        'the only to win is not to play'
    ];

    // An array of letters the user has guessed
    public $selected = [];

    public function __construct($currentPhrase = null, $selected = [])
    {
        if (empty($currentPhrase)) {
            $this->currentPhrase = $this->allPhrases[array_rand($this->allPhrases)];
            $_SESSION['phrase'] = $this->currentPhrase;
        } else {
            $this->currentPhrase = $currentPhrase;
            $_SESSION['phrase'] = $this->currentPhrase;
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
                    } else if (in_array($character, $this->selected)) {
                        echo '<li class="letter show">';
                        echo $character;
                        echo '</li>';
                    } else {
                        echo '<li class="letter hide">';
                        echo $character;
                        echo '</li>';
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
        } $wrongGuesses = array_diff($_SESSION['selected'], $characters);
//        var_dump($wrongGuesses);
        $_SESSION['total_misses'] = (count($wrongGuesses) - 1);
//        var_dump($_SESSION['total_misses']);
        return $found;
    }



}


