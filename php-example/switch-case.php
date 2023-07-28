<?php

/*
switch($variabel){
    case <kondisi>:
        //statement
        break;
    case <kondisi2>:
        //statement
        break;
    default:
        //statement

}
*/

$level = 3;

switch($level){
    case 1:
        echo "html";
        break;
    case 2:
        echo "css";
        break;
    case 3:
        echo "javascript";
        break;
    case 4:
        echo "php";
        break;
    default:
        echo "kamu bukan programer";
}
?>