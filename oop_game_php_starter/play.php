<?php
// Starts session
session_start();
//When the START key is submitted it resets the Session Variables;
if (isset($_POST['start'])) {

    unset($_SESSION['selected']);
    unset($_SESSION['phrase']);
    unset($_SESSION['total_misses']);
}

echo '<br /><br />';echo '<br /><br />';echo '<br /><br />';echo '<br /><br />';echo '<br /><br />';echo '<br /><br />';
// Checks to see if the session started
echo '<strong>This is the $_SESSION var dump:</strong><br />';
var_dump($_SESSION);
echo '<br /><br />';

// Destroys current session
//session_destroy();

// Includes the 2 class files
include 'inc/Phrase.php';
include 'inc/Game.php';

//$_SESSION['selected'] = [];
//Phrase object accepts SESSION variables for the `phrase` & `selected` letters.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST["key"])){
        array_push($_SESSION['selected'], $_POST["key"]);
    }
}


// If the key is pressed this adds it to the session selected array
if(!isset($_SESSION['selected'])){
    $_SESSION['selected'] = [];
    $phrase = new Phrase();
    array_push($_SESSION['selected'], $_POST["key"]);
//    $_SESSION['phrase'] = $phrase->currentPhrase;
} else {
//    if (isset($_SESSION['phrase']))
    $phrase = new Phrase($_SESSION['phrase'], $_SESSION['selected']);
}


// Instantiates the game class
$game = new Game($phrase);

// Test that there are actually instances of each class
//var_dump($phrase);
echo '<br /><br />';
echo '<strong >This is the $game var dump:</strong><br />';
var_dump($game);
echo '<br /><br />';

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
        // Displays the current phrase and boxes
        echo $phrase->addPhraseToDisplay();

        // Displays keyboard
        echo $game->displayKeyboard();

        // Displays score
        echo $game->displayScore();

        // Tests checkLetter
        //var_dump($phrase->checkLetter('s'));

        //echo $game->updateKeyboard('s')
    ?>


</div>

</body>
</html>