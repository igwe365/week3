<?php
for ($i=1; $i<=8; $i++){
echo '<p>';
    $diceOne = rand(1,6);
    
    if ($diceOne ==6){
                    
            echo 'You rolled a '.$diceOne.' you win';
        }
        else{
            echo 'You rolled a '.$diceOne.' you lose';
        }
        echo '</p>';
}
?>