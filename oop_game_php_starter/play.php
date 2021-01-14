<?php
session_start();
include 'inc/Game.php';
include 'inc/Phrase.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Phrase Hunter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
<div class="main-container">
    <h2 class="header">Phrase Hunter</h2>
    <form method="post" action="play.php">
        <?php
        $_SESSION['selected'] = '';
        $_SESSION['phrase'] = 'start small';


        var_dump($_SESSION);


        $phrase = new Phrase('dream big', []);
        $game = new Game($phrase);
        var_dump($game);

        echo $phrase->addPhraseToDisplay('');
        echo '<br /><br /><br />';
        echo $game->displayKeyboard();
        echo $game->displayScore();

        var_dump ($_POST);






        ?>
        <input id="btn__reset" type="submit" value="Start Game" />
    </form>
</div>

</body>
</html>

