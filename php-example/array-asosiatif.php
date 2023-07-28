<?php
//membuat array asosiatif
$artikel = [
    "judul" => "belajar php",
    "penulis" => "ysrzn.com",
    "view" => 127

];

//menampilkan isi array 
echo "<h2>". $artikel["judul"]."</h2>";
echo "<h2>". $artikel["penulis"]."</h2>";
echo "<h2>". $artikel["view"]."</h2>";