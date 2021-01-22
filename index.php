<?php

    for ($i = 0; $i<=10; $i++) echo $i." ";

    echo "<br><br>";

    $nbr = 1;
    $nbr2 = 14;
    while($nbr<20) {
        echo $nbr * $nbr2."<br>";
        $nbr++;
    }

    echo "<br><br>";
/*
    $nbr3 = 100;
    $nbr4 = 54;
    while($nbr3>=10) {
        echo $nbr3 * $nbr4."<br>";
        $nbr--;
    }
*/

    for ($i = 1; $i<=10; $i+=$i/2) echo $i." ";

    echo "<br><br>";

    for ($i = 0; $i<=15; $i++) echo "On y arrive presque. <br>";


    for ($i = 20; $i>=0; $i--) echo "C'est presque bon. <br>";


    for ($i = 0; $i<=100; $i+=15) echo "On tient le bon bout. <br>";


    for ($i = 200; $i>=0; $i-=12) echo "Enfin !!!!. <br>";


?>