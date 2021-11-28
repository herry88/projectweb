<?php
// ==, >=, <=, !=, <>
$bulan  = date("m");

echo  "<h1>" . $bulan."</h1>"."<br><br>";
$lain = true;

// if($bulan == 1){
//     echo "<h1>Bulan November</h1>";
// } else{
//     echo "<h2>Bukan Bulan NOvember</h2>";
// }

// if($bulan == 11):
//     echo "<h1>Bulan November</h1>";
// else:
//     echo "<h2>Bukan Bulan NOvember</h2>";
// endif; 
  
echo $bulan == 12 ? "Bulan November"  : "Bukan Bulan November"; 
