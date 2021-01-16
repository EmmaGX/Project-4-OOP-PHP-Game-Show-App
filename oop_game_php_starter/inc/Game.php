<?php
//declares the Game Class
class Game
{

}
//class Game
//{
//    public $phrase;
//    public $lives = 5;

//    public function __construct(Phrase $phrase){
//        $this->phrase = $phrase;
//    }

//    public function displayKeyboard() {
//        echo '<form method="post" action="play.php">';
//            echo '<div id="qwerty" class="section">';
//                echo '<div class="keyrow">';
//                    echo '<button class="key" type="submit" name="key" value="q">q</button>';
//                    echo '<button class="key" type="submit" name="key" value="w">w</button>';
//                    echo '<button class="key" type="submit" name="key" value="e">e</button>';
//                    echo '<button class="key" type="submit" name="key" value="r">r</button>';
//                    echo '<button class="key" type="submit" name="key" value="t">t</button>';
//                    echo '<button class="key" type="submit" name="key" value="y">y</button>';
//                    echo '<button class="key" type="submit" name="key" value="u">u</button>';
//                    echo '<button class="key" type="submit" name="key" value="i">i</button>';
//                    echo '<button class="key" type="submit" name="key" value="o">o</button>';
//                    echo '<button class="key" type="submit" name="key" value="p">p</button>';
//                    echo '</div>';
//
//                echo '<div class="keyrow">';
//                    echo '<button class="key" type="submit" name="key" value="a">a</button>';
//                    echo '<button class="key" type="submit" name="key" value="s">s</button>';
//                    echo '<button class="key" type="submit" name="key" value="d">d</button>';
//                    echo '<button class="key" type="submit" name="key" value="f">f</button>';
//                    echo '<button class="key" type="submit" name="key" value="g">g</button>';
//                    echo '<button class="key" type="submit" name="key" value="h">h</button>';
//                    echo '<button class="key" type="submit" name="key" value="j">j</button>';
//                    echo '<button class="key" type="submit" name="key" value="k">k</button>';
//                    echo '<button class="key" type="submit" name="key" value="l">l</button>';
//                    echo '</div>';
//                echo '<div class="keyrow">';
//                    echo '<button class="key" type="submit" name="key" value="z">z</button>';
//                    echo '<button class="key" type="submit" name="key" value="x">x</button>';
//                    echo '<button class="key" type="submit" name="key" value="c">c</button>';
//                    echo '<button class="key" type="submit" name="key" value="v">v</button>';
//                    echo '<button class="key" type="submit" name="key" value="b">b</button>';
//                    echo '<button class="key" type="submit" name="key" value="n">n</button>';
//                    echo '<button class="key" type="submit" name="key" value="m">m</button>';
//                echo '</div>';
//             echo '</div>';
//        echo '</form>';
//        return;
//    }

//    public function displayKeyboard() {
//        echo '<div id="qwerty" class="section">';
//            echo '<div class="keyrow">';
//                echo $this->checkKeyPressed("q");
//                echo $this->checkKeyPressed("w");
//                echo $this->checkKeyPressed("e");
//                echo $this->checkKeyPressed("r");
//                echo $this->checkKeyPressed("t");
//                echo $this->checkKeyPressed("y");
//                echo $this->checkKeyPressed("u");
//                echo $this->checkKeyPressed("i");
//                echo $this->checkKeyPressed("o");
//                echo $this->checkKeyPressed("p");
//            echo '</div>';
//
//            echo '<div class="keyrow">';
//                echo $this->checkKeyPressed("a");
//                echo $this->checkKeyPressed("s");
//                echo $this->checkKeyPressed("d");
//                echo $this->checkKeyPressed("f");
//                echo $this->checkKeyPressed("g");
//                echo $this->checkKeyPressed("h");
//                echo $this->checkKeyPressed("j");
//                echo $this->checkKeyPressed("k");
//                echo $this->checkKeyPressed("l");
//            echo '</div>';
//            echo '<div class="keyrow">';
//                echo $this->checkKeyPressed("z");
//                echo $this->checkKeyPressed("x");
//                echo $this->checkKeyPressed("c");
//                echo $this->checkKeyPressed("v");
//                echo $this->checkKeyPressed("b");
//                echo $this->checkKeyPressed("n");
//                echo $this->checkKeyPressed("m");
//            echo '</div>';
//        echo '</div>';
//    return;
//    }
//
//    public function displayScore() {
//        echo '<div id="scoreboard" class="section">';
//            echo '<ol>';
//                for ($i = 1; $i <= $this->lives; $i++) {
//                    echo '<li class="tries"><img src="images/loseHeart.png" height="35px"
//                            width="30px"></li>';
//                    echo '<li class="tries"><img src="images/liveHeart.png" height="35px"
//                            width="30px"></li>';
//                }
//            echo '</ol>';
//            echo '</div>';
//    }

//    public function displayScore() {
//        for ($i = 1; $i <= $this->lives; $i++) {
//            echo '<div id="scoreboard" class="section">';
//                echo '<ol>';
//                    echo '<li class="tries">';
//                        echo '<img src="images/liveHeart.png"';
//                        echo 'height="35px" width="30px">';
//                        echo '<br /><br /><br />';
//                    echo '</li>';
//                echo '<li class="tries">';
//                    echo '<img src="images/loseHeart.png"';
//                    echo 'height="35px" width="30px">';
//                echo '</li>';
//            echo '</ol>';
//            echo '</div>';
//        }
//    }

//    public function checkKeyPressed($letter) {
//        if (!in_array($letter, $this->phrase->selected))  {
//            return '<button class="key" type="submit" name="key" value=" '
//                . $letter .' ">' . $letter .'</button>';
//        } else {
//            if ($this->phrase->checkLetter($letter)) {
//                return '<button class="key chosen" type="submit" name="key" value="' . $letter .'">' . $letter .'</button>';
//            } else {
//                return '<button class="key wrong" type="submit" name="key" value="' . $letter .'">' . $letter .'</button>';
//            }
//        }
//    }


// }


