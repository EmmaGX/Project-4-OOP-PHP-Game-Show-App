<?php
//includes the 2 class files
include 'inc/Phrase.php';
include 'inc/Game.php';

//instantiates the game and phrase classes
$phrase = new Phrase();
$game = new Game();

//session_start();
//session_destroy();
//$_SESSION['selected'] = [];
//$_SESSION['$currentPhrase'] = 'start small';

//if (!isset($_SESSION['selected'])) {
//    $_SESSION['selected'] = [];
//}

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    if (isset($_POST['key'])) {
//        array_push($_SESSION['selected'], $_POST['key']);
//        $phrase = new Phrase($_SESSION['phrase'], $_SESSION['selected']);
//    }
//}

//if(!isset($_SESSION['phrase'])) {
//    $phrase = new Phrase();
//}

//        $phrase = new Phrase('dream big', []);

//$phrase = new Phrase();
//$game = new Game($phrase);
//        echo var_dump($phrase->array_unique);

//                var_dump ($_POST);
//                var_dump($_SESSION);
//                var_dump($game);
//        var_dump($_SESSION['selected']);
//        var_dump(count($_SESSION['selected']));
//        var_dump($phrase->checkLetter('s'));

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
    <?php
//    echo $phrase->addPhraseToDisplay();
//    echo $game->displayKeyboard();
//    echo $game->displayScore();
//    echo $phrase->checkLetter('');
//    var_dump($phrase->checkLetter('r'));

    ?>


</div>

</body>
</html>