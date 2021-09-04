<?php
    session_start();
    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stone, Paper, Scissors</title>
    </head>
    <body>
        <h3>Mark your choice:</h3>
        <form method='POST' action='#'>
            <label>
                <input type='radio' name='game' value='Stone'>
                Stone
            </label><br>
            <label>
                <input type='radio' name='game' value='Paper'>
                Paper
            </label><br>
            <label>
                <input type='radio' name='game' value='Scissors'>
                Scissors
            </label><br><br>
            <button type='submit'>
                Yes! I'm sure!
            </button><br><br>
        </form>
        <?php
            if(isset($_POST['game'])){
                include_once("spsFunction.php");
                $choose = $_POST['game'];
                $things = ["Stone", "Paper", "Scissors"];
                $win = mt_rand(0, 2);

                $_SESSION['text'] = whoWin($choose, $things[$win]);
                // Reset $_POST['game'];
                header("Location: sps.php");
            }

            if(isset($_SESSION['text'])){
                echo $_SESSION['text'];
            }
        ?>
        <h3>Your score:</h3>
        <?php
            echo $_SESSION['score'];
        ?><br><br>
        <a href="reset.php">
            Reset score
        </a>
    </body>
</html>