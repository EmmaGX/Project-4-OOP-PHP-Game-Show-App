<?php
//declares the Phrase Class
class Phrase
{
    //a string containing the current phrase to be used in the game
    public $currentPhrase = 'dream big';

    //An array of letters the user has guessed
    public $selected = [];

    public function __construct($currentPhrase = null, $selected = [])
    {
        if (!empty($currentPhrase)) {
            $this->currentPhrase = $currentPhrase;
        }
        if (!empty($selected)) {
            $this->selected = $selected;
        }
    }

    //this method adds letter placeholders to display when the game starts
    public function addPhraseToDisplay()
    {
        //Split string into lowercase characters
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
                    echo '<li class="letter">';
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
}

//    public $arrayUnique;

//    public function __construct($currentPhrase = null, $selected = [])
//    {
//        if (!empty($currentPhrase)) {
//            $this->currentPhrase = $currentPhrase;
//            $this->arrayUnique = array_unique(str_split(str_replace(
//                ' ',
//                '',
//                strtolower( $this->currentPhrase)
//            )));
//        }
        //        if (!empty($selected)) {
//            $this->selected = $selected;
//        }
//    }
    //this method adds letter placeholders to the display when the game starts
//    public function addPhraseToDisplay()
//    {
//        $characters = str_split(strtolower($_SESSION['$currentPhrase']));
//
//        echo '<div id=phrase class=section>';
//        echo '<ul>';
//        foreach ($characters as $character) {
//            if ($character == ' ') {
//                echo '<li class="space">';
//                echo ' ';
//                echo '</li>';
//            } else {
//                if (!empty($character)) {
//                        echo '<li class="letter">';
//                        echo $character;
//                        echo '</li>';
//                    } else {
//                        echo '<li class="hide">';
//                        echo $character;
//                        echo '</li>';
//                    }
//                }
//            }
//        echo '</ul>';
//        echo '</div>';
//    }
//        foreach ($characters as $character) {
//
//            if ($character == " ") {
//                echo '<li class="hide space"> </li>';
//            } else {
//                if (in_array($character, $this->selected)) {
//                    echo '<li class="show letter">' . $character . '</li>';
////                } else {
////                    echo '<li class="hide letter">' . $character . '</li>';
////
//                }
//            }
//        }

//        echo '</ul>';
//        echo '</div>';
//        foreach($characters as $character){
//            if ($character == ' ') {
//                echo '<li class="hide space"> </li>';
//            } else {
//                if (!empty($character)) {
//                    if ($_SESSION['selected'] == $character && $character == $_POST['key'])
//                        echo '<li class="hide letter">';
//                    echo $character;
//                    echo '</li>';
//                } else {
//                    echo '<li class="show letter">';
//                    echo $character;
//                    echo '</li>';
//                }
//            }
//
//        }
//    }



//    public function checkLetter($letter)
//    {
//        $characters = str_split(strtolower($_SESSION['$currentPhrase']));
//        $found = false;
//
//        foreach ($characters as $value) {
//            if ($value == $letter) {
//                return true;
//            }
//        }
//        return $found;
//    }

