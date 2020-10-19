<?php

$loop = true;

while ($loop===true){

    echo '<p>';
    $diceOne = rand(1,6);
    
    if ($diceOne ==6){
                    
            echo 'You rolled a '.$diceOne.' you win';
        break;
        }
        else{
            echo 'You rolled a '.$diceOne.' you lose';
        }
        echo '</p>';
}
?>