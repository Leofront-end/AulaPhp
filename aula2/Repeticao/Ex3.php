<?php
    // FOR
    echo "<h1> Usando o FOR </h1>";
    for ($i = 500; $i >= 1;$i-- ){
        echo $i."<br>";
    }

    //WHILE
    echo "<h1> Usando o WHILE</h1>";
    $i = 500;
    while ($i>= 1){
        echo $i."<br>";
        $i = $i - 1;
    }

    //DO WHILE
    echo "<h1> Usando o DO WHILE</h1>";
    $i = 500;
    do {
        echo $i."<br>";
        $i = $i - 1;
    } while ($i>= 1)
?>