<?php
    echo '<ul>';

    for($i=1; $i<=10; $i++){
        echo '<li>';

        if ($i===1){
            echo 'one';
        }
        else if ($i===2){
            echo 'two';
        }
        else if ($i===3){
            echo 'three';
        }
        else if ($i===4){
            echo 'four';
        }
        echo '</li>';
    }
    echo '</ul>';
?>