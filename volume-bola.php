<?php
echo "<h1>Volume Bola</h1>";

$r = 7;
$volume = (4/3) * pi() * pow($r, 3);

echo "<b>Rumus:</b> V = 4/3 × π × r³ <br>";
echo "<b>Soal:</b> Hitung volume bola dengan jari-jari $r cm.<br>";
echo "<b>Jawaban:</b> 4/3 × π × $r³ = " . round($volume, 2) . " cm³";
?>
