<?php
    function whoWin($player, $computer){
        if(($player == "Paper" && $computer == "Stone") || ($player == "Stone" && $computer == "Scissors") || ($player == "Scissors" && $computer == "Paper")){
            $_SESSION['score']++;
            return "Oh no! I'm lose, but you won. It's only bad luck. Play again!<br>(My choice: $computer)";
        } else if($player == $computer){
            return "It's tie! Try again!<br>(My choice: $computer)";
        } else{
            return "Ha! I won! Do you want play again?<br>(My choice: $computer)";
        }
    }