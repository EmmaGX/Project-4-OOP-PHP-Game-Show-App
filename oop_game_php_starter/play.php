<?php
// Starts session
session_start();

//When the START key is submitted it resets the Session Variables;
if (isset($_POST['start'])) {
    unset($_SESSION['selected']);
    unset($_SESSION['phrase']);
    unset($_SESSION['total_misses']);
}

// Checks to see if the session started
//var_dump($_SESSION);

// Destroys current session
//session_destroy();

// Includes the 2 class files
include 'inc/Phrase.php';
include 'inc/Game.php';

if (!isset($_SESSION['selected'])) {
    // Initialize an empty session
    $_SESSION['selected'] = [];
}

// If the user guesses a letter its saved to session array
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['key'])) {
    array_push($_SESSION['selected'], $_POST['key']);
}

$phrase = new Phrase(
    $_SESSION['phrase'] ?? null,
    $_SESSION['selected']
);

// Instantiates the game class
$game = new Game($phrase);

// Test that there are actually instances of each class
//var_dump($phrase);
//var_dump($game);
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
    if (isset($_POST['key'])) {
        $ltr = $_POST['key'];
        if ($game->checkForLose('$ltr')) {
            $game->gameOver();
        } elseif ($game->checkForWin()) {
            $game->gameOver();
        }
    }
        // Displays the current phrase and boxes
        echo $phrase->addPhraseToDisplay();

        // Displays keyboard
        echo $game->displayKeyboard();

        // Displays score
        echo $game->displayScore();

        // Tests checkLetter
        //var_dump($phrase->checkLetter('s'));
    ?>
</div>
</body>
</html>