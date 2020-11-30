<?php
    function perkenalan($salam, $nama){
        echo $salam. " <br>";
        echo "Selamat datang di web". $nama. "<br>";
        echo "Jangan lupa like dan komen<br>";
        echo "<hr>";
    }
    perkenalan("Halo", "Elysa Putri");
    $salam = "Selamat Pagi";
    $nama = "Polines Official";
    perkenalan($salam, $nama);
?>