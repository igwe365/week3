<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
</head>
<body>
    <h1>
    <?php
                $diceOne = rand(1,6);
                $diceTwo = rand(1,6);
                
                if ($diceOne ==6 || $diceTwo==6){
                    
                    echo " You rolled a $diceOne and a $diceTwo, you WIN!!!";
                }
                else{
                    echo "You rolled a $diceOne and $diceTwo, you lose";
                }
                echo '<a href="diceGame.php"> Roll again !</a>';
            
    ?>
    </h1>
</body>
</html>