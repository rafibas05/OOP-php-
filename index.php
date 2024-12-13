<?php
    require_once("animal.php");
    require_once("ape.php");
    echo "<h2> Latihan OOP</h2>"; 

    $sheep = new Animal( "shaun");

    echo " Nama : "  . $sheep->name . "<br>";
    echo " legs : "  . $sheep->legs . "<br>";
    echo " Cold Blooded : "  . $sheep->cold_blooded . "<br> <br>";

    $kodok = new Animal("buduk");
    echo " Nama : "  . $kodok->name . "<br>";
    echo " legs : "  . $kodok->legs . "<br>";
    echo " Cold Blooded : "  . $kodok->cold_blooded . "<br> <br>";


    // $Kodok = new frog ("buduk");
    // echo " Nama : "  . $Kodok->name . "<br>";
    // echo " legs : "  . $Kodok->legs . "<br>";
    // echo " Cold Blooded : "  . $Kodok->cold_blooded . "<br> <br>";
    // echo " Jump : " . $Kodok->loncat() . "<br>";

    $sungokong = new ape("Kera Sakti");
    echo " Nama : "  . $sungokong->name . "<br>";
    echo " legs : "  . $sungokong->legs . "<br>";
    echo " Cold Blooded : "  . $sungokong->cold_blooded . "<br>";
    echo " Yell : " . $sungokong->suara() . "<br>";

   

    
 
?>