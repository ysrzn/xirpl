<?php
// Using while loop
$number = 125;
while ($number <= 200) {
    if ($number % 5 == 0) {
        echo $number . " ";
    }
    $number++;
}

/*
<?php
// Using do-while loop (simulated using while loop)
echo "\nMultiples of 5 between 125 and 200 using do-while loop: ";
$number = 125;
do {
    if ($number % 5 == 0) {
        echo $number . " ";
    }
    $number++;
} while ($number <= 200);
?>
*/

echo "<br><br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "A{$i}{$j} ";
    }
    echo "<br>";
}
?>


