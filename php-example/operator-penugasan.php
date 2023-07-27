<?php
//membuat variabel dan mengisi nya dengan angka 70
$speed = 70;

// ini operator aritmatika
$speed = $speed + 17;
//maka nilai speed akan sama denga 70 + 17 = 87


//operator penugasan
$speed += 10;
// nilai speed akan menjadi 87 + 10 = 97


//operator increment dan decrement
$score = 0;

$score++;
$score++;
$score++;

echo $score;

//operator relasi
$a = 7;
$b = 2;

//relasi lebih besar
$c = $a > $b;
echo "$a > $b : $c";
echo "<hr>";

//relasi lebih kecil
$c = $a < $b;
echo "$a < $b : $c";
echo "<hr>";

//relasi lebih sama dengan
$c = $a == $b;
echo "$a >= $b : $c";
echo "<hr>";

//relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b : $c";
echo "<hr>";

//relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b : $c";
echo "<hr>";

//relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b : $c";
echo "<hr>";

?>