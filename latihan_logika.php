<?php
$usia = 21;
$menikah = true;


if ($usia > 18) {
    if($menikah == false){
        echo "<h1>Anda Sudah Dewasa</h1>";
    } else{
        echo "<h1>selamat datang</h1>";
    }
} else {
    echo "<h1>Maaf Web ini untuk 18+</h1>";
}
