<?php
// Declares the Game Class
class Game
{
    // Phrase object that will be set by the constructor
    public $phrase;

    // Used to set how many wrong guesses a player has before the game is over
    public $lives = 5;

    // Sets the phrase property
    public function __construct(Phrase $phrase)
    {
        $this->phrase = $phrase;
    }

    public function displayKeyboard()
    {
        echo '<form method="post" action="play.php">';
            echo '<div id="qwerty" class="section">';
                echo '<div class="keyrow">';
                    echo $this->updateKeyboard("q");
                    echo $this->updateKeyboard("w");
                    echo $this->updateKeyboard("e");
                    echo $this->updateKeyboard("r");
                    echo $this->updateKeyboard("t");
                    echo $this->updateKeyboard("y");
                    echo $this->updateKeyboard("u");
                    echo $this->updateKeyboard("i");
                    echo $this->updateKeyboard("o");
                    echo $this->updateKeyboard("p");
                echo '</div>';

                echo '<div class="keyrow">';
                    echo $this->updateKeyboard("a");
                    echo $this->updateKeyboard("s");
                    echo $this->updateKeyboard("d");
                    echo $this->updateKeyboard("f");
                    echo $this->updateKeyboard("g");
                    echo $this->updateKeyboard("h");
                    echo $this->updateKeyboard("j");
                    echo $this->updateKeyboard("k");
                    echo $this->updateKeyboard("l");
                echo '</div>';
                echo '<div class="keyrow">';
                    echo $this->updateKeyboard("z");
                    echo $this->updateKeyboard("x");
                    echo $this->updateKeyboard("c");
                    echo $this->updateKeyboard("v");
                    echo $this->updateKeyboard("b");
                    echo $this->updateKeyboard("n");
                    echo $this->updateKeyboard("m");
                echo '</div>';
            echo '</div>';
        echo '<input id="btn__reset" type="submit" name="start" value="New Game" />';

        echo '</form>';
        return;
    }

    public function displayScore()
    {
        echo '<div id="scoreboard" class="section">';
            echo '<ol>';
                $currentLives = $this->lives - $_SESSION['total_misses'];
                var_dump($currentLives);
                for ($i = 1; $i <= $this->lives; $i++) {
                    if ($i <= $currentLives) {
                        echo '<li class="tries">';
                        echo '<img src="images/liveHeart.png"';
                        echo 'height="35px" width="30px"></li>';
                    } else {
                        echo '<li class="tries">';
                        echo '<img src="images/lostHeart.png"';
                        echo 'height="35px" width="30px"></li>';
                    }
                }
            echo '</ol>';
        echo '</div>';
    }

    public function updateKeyboard($letter)
    {
        if (!in_array($letter, $this->phrase->selected))  {
            return '<button class="key" type="submit" name="key" value="'
                . $letter . '">' . $letter . '</button>';
        } else {
            if ($this->phrase->checkLetter($letter)) {
                return '<button class="key chosen" type="submit" name="key" value="' . $letter .'" disabled>' . $letter .'</button>';
            } else {
                return '<button class="key wrong" type="submit" name="key" value="' . $letter .'" disabled>' . $letter .'</button>';
            }
        }
    }

    public function checkForLose($letter) {
        $this->phrase->checkLetter($letter);
        if (($this->lives - $_SESSION['total_misses']) < 1){
            echo '<h1 id="game-over-message">' . 'The phrase was: ' .  '"' .
                ucwords($_SESSION['phrase']) . '" ' . '<br /><br />Better luck next time!' . '</h1>';
            echo '<form method="post" action="play.php">';

            echo '<input class="incorrect btn__reset" id="btn__reset" type="submit" name="start" value="Try Again, Loser?" />';

            echo '</form>';
            return true;
        }
    }

    public function checkForWin() {
        $result = array_intersect(str_split($_SESSION['phrase']), $_SESSION['selected']);
        $matchedLetters = count($result);
        echo '<strong> This is the $matched dump</strong>';

        var_dump($matchedLetters);
        echo '<br /><br /><br />';

        var_dump(strlen($_SESSION['phrase']));
        echo '<br /><br /><br />';

        $parsedPhrase = strlen(str_replace(' ', '', $_SESSION['phrase']));
        var_dump($parsedPhrase);

        if ($matchedLetters == $parsedPhrase) {
            echo '<h1 id="game-over-message">' . 'Congratulations on guessing: ' .  '"' .
                ucwords($_SESSION['phrase']) . '" ' . '<br /><br />Would you like to play again?' .
                '</h1>';
            echo '<form method="post" action="play.php">';

            echo '<input class="correct" id="btn__reset" type="submit" name="start" value="Feeling Lucky?" />';

            echo '</form>';
            return true;
        }
    }


 }

//<h1 id="game-over-message">Congratulations on guessing: "The adventure begins"</h1>



//public function displayKeyboard()
//{
//    echo '<form method="post" action="play.php">';
//    echo '<div id="qwerty" class="section">';
//    echo '<div class="keyrow">';
//    echo '<button class="key" type="submit" name="key" value="q">q</button>';
//    echo '<button class="key" type="submit" name="key" value="w">w</button>';
//    echo '<button class="key" type="submit" name="key" value="e">e</button>';
//    echo '<button class="key" type="submit" name="key" value="r">r</button>';
//    echo '<button class="key" type="submit" name="key" value="t">t</button>';
//    echo '<button class="key" type="submit" name="key" value="y">y</button>';
//    echo '<button class="key" type="submit" name="key" value="u">u</button>';
//    echo '<button class="key" type="submit" name="key" value="i">i</button>';
//    echo '<button class="key" type="submit" name="key" value="o">o</button>';
//    echo '<button class="key" type="submit" name="key" value="p">p</button>';
//    echo '</div>';
//
//    echo '<div class="keyrow">';
//    echo '<button class="key" type="submit" name="key" value="a">a</button>';
//    echo '<button class="key" type="submit" name="key" value="s">s</button>';
//    echo '<button class="key" type="submit" name="key" value="d">d</button>';
//    echo '<button class="key" type="submit" name="key" value="f">f</button>';
//    echo '<button class="key" type="submit" name="key" value="g">g</button>';
//    echo '<button class="key" type="submit" name="key" value="h">h</button>';
//    echo '<button class="key" type="submit" name="key" value="j">j</button>';
//    echo '<button class="key" type="submit" name="key" value="k">k</button>';
//    echo '<button class="key" type="submit" name="key" value="l">l</button>';
//    echo '</div>';
//    echo '<div class="keyrow">';
//    echo '<button class="key" type="submit" name="key" value="z">z</button>';
//    echo '<button class="key" type="submit" name="key" value="x">x</button>';
//    echo '<button class="key" type="submit" name="key" value="c">c</button>';
//    echo '<button class="key" type="submit" name="key" value="v">v</button>';
//    echo '<button class="key" type="submit" name="key" value="b">b</button>';
//    echo '<button class="key" type="submit" name="key" value="n">n</button>';
//    echo '<button class="key" type="submit" name="key" value="m">m</button>';
//    echo '</div>';
//    echo '</div>';
//    echo '</form>';
//    return;
//}






