<?php
//array -> untuk menampung beberapa value
$dosen = [
    "Budi.M.kom",
    "Diana.M.pd",
    "Trisno.M.si",
    "Ahmad M.Kom",
    "Ultah M.si"
];
// echo $dosen[2]."<br>". $dosen[0]."<br>";
//pengulangan
echo "<p>list Dosen</p>";
foreach ($dosen as  $d) {
    
    echo $d. "<br>";
}
