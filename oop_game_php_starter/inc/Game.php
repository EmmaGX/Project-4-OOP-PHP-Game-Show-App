<?php

class Game
{
    public $phrase;
    public $lives = 5;

    public function __construct(Phrase $phrase){
        $this->phrase = $phrase;
    }

    public function displayKeyboard() {
        echo '<div id="qwerty" class="section">';
            echo '<div class="keyrow">';
                echo $this->checkKeyPressed("q");
                echo $this->checkKeyPressed("w");
                echo $this->checkKeyPressed("e");
                echo $this->checkKeyPressed("r");
                echo $this->checkKeyPressed("t");
                echo $this->checkKeyPressed("y");
                echo $this->checkKeyPressed("u");
                echo $this->checkKeyPressed("i");
                echo $this->checkKeyPressed("o");
                echo $this->checkKeyPressed("p");
            echo '</div>';

            echo '<div class="keyrow">';
                echo $this->checkKeyPressed("a");
                echo $this->checkKeyPressed("s");
                echo $this->checkKeyPressed("d");
                echo $this->checkKeyPressed("f");
                echo $this->checkKeyPressed("g");
                echo $this->checkKeyPressed("h");
                echo $this->checkKeyPressed("j");
                echo $this->checkKeyPressed("k");
                echo $this->checkKeyPressed("l");
            echo '</div>';
            echo '<div class="keyrow">';
                echo $this->checkKeyPressed("z");
                echo $this->checkKeyPressed("x");
                echo $this->checkKeyPressed("c");
                echo $this->checkKeyPressed("v");
                echo $this->checkKeyPressed("b");
                echo $this->checkKeyPressed("n");
                echo $this->checkKeyPressed("m");
            echo '</div>';
        echo '</div>';
    return;
    }

    public function displayScore() {
        for ($i = 1; $i <= $this->lives; $i++) {
            echo '<div id="scoreboard" class="section">';
                echo '<ol>';
                    echo '<li class="tries">';
                        echo '<img src="images/liveHeart.png"';
                        echo 'height="35px" width="30px">';
                        echo '<br /><br /><br />';
                    echo '</li>';


//                echo '<li class="tries">';
//                    echo '<img src="images/loseHeart.png"';
//                    echo 'height="35px" width="30px">';
//                echo '</li>';
            echo '</ol>';
            echo '</div>';
        }
    }

    public function checkKeyPressed($letter) {
        if ($_SESSION['selected'] != $this->phrase->checkLetter($letter)) {
            return '<button class="key" type="submit" name="key" value=" '
                . $letter .' ">' . $letter .'</button>';
        } else {
            if ($this->phrase->checkLetter($letter)) {
                return '<button class="key chosen" type="submit" name="key" value="' . $letter .'">' . $letter .'</button>';
            } else {
                return '<button class="key wrong" type="submit" name="key" value="' . $letter .'">' . $letter .'</button>';
            }
        }
    }


 }


