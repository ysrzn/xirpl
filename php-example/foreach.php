<?php
$books = [
    "panduan belajar php",
    "aplikasi web php",
    "php mysql",
    "chat bot php",
];

echo "<h5>judul buku php:</h5>";
echo "<ul";
foreach($books as $buku){
    echo "<li>$buku</li>";
}

echo "</ul>";
?>