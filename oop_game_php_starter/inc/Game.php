<?php

class Game
{
    public $phrase;
    public $lives = 5;

    public function __construct(Phrase $phrase){
        $this->phrase = $phrase;
    }

    public function displayKeyboard() {
//        echo '<form method="post" action="play.php">';
            echo '<div id="qwerty" class="section">';
                echo '<div class="keyrow">';
                    echo '<button class="key" type="submit" name="key" value="q">q</button>';
                    echo '<button class="key" type="submit" name="key" value="w">w</button>';
                    echo '<button class="key" type="submit" name="key" value="e">e</button>';
                    echo '<button class="key" type="submit" name="key" value="r">r</button>';
                    echo '<button class="key" style="background-color: red" 
                        disabled>t</button>';
                    echo '<button class="key" type="submit" name="key" value="y">y</button>';
                    echo '<button class="key" type="submit" name="key" value="u">u</button>';
                    echo '<button class="key" type="submit" name="key" value="i">i</button>';
                    echo '<button class="key" type="submit" name="key" value="o">o</button>';
                    echo '<button class="key" type="submit" name="key" value="p">p</button>';
                echo '</div>';

                echo '<div class="keyrow">';
                    echo '<button class="key" type="submit" name="key" value="a">a</button>';
                    echo '<button class="key" type="submit" name="key" value="s">s</button>';
                    echo '<button class="key" type="submit" name="key" value="d">d</button>';
                    echo '<button class="key" type="submit" name="key" value="f">f</button>';
                    echo '<button class="key" type="submit" name="key" value="g">g</button>';
                    echo '<button class="key" type="submit" name="key" value="h">h</button>';
                    echo '<button class="key" type="submit" name="key" value="j">j</button>';
                    echo '<button class="key" type="submit" name="key" value="k">k</button>';
                    echo '<button class="key" type="submit" name="key" value="l">l</button>';
                echo '</div>';
                echo '<div class="keyrow">';
                    echo '<button class="key" type="submit" name="key" value="z">z</button>';
                    echo '<button class="key" type="submit" name="key" value="x">x</button>';
                    echo '<button class="key" type="submit" name="key" value="c">c</button>';
                    echo '<button class="key" type="submit" name="key" value="v">v</button>';
                    echo '<button class="key" type="submit" name="key" value="b">b</button>';
                    echo '<button class="key" type="submit" name="key" value="n">n</button>';
                    echo '<button class="key" type="submit" name="key" value="m">m</button>';
                echo '</div>';
            echo '</div>';
//        echo '</form>';
        return;
    }


}