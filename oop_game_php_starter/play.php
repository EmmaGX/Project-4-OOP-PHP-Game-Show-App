<?php
include 'inc/Game.php';
include 'inc/Phrase.php';

session_start();
//session_destroy();
$_SESSION['selected'];
$_SESSION['phrase'] = 'start small';

if (!isset($_SESSION['selected'])) {
    $_SESSION['selected'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['key'])) {
        array_push($_SESSION['selected'], $_POST['key']);
        $phrase = new Phrase($_SESSION['phrase'], $_SESSION['selected']);
    }
}

if(!isset($_SESSION['phrase'])) {
    $phrase = new Phrase();
}


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
        $phrase = new Phrase('dream big', []);
        $game = new Game($phrase);


        echo $phrase->addPhraseToDisplay('');
        echo '<br /><br /><br />';
        echo $game->displayKeyboard();
        echo $game->displayScore();

//                var_dump ($_POST);
//                var_dump($_SESSION);
//                var_dump($game);
//        var_dump($_SESSION['selected']);
//        var_dump(count($_SESSION['selected']));
//        var_dump($phrase->checkLetter('z'));

        ?>
        <input id="btn__reset" type="submit" value="Start Game" />
    </form>
</div>

</body>
</html>

