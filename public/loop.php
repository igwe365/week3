<?php
    $loop = true;
    $counter = 0;

    while ($loop===true){
        $counter++;
        echo '<p>'.$counter.'</p>';

        if ($counter===10){
            $loop=false;
        }
    }
?>