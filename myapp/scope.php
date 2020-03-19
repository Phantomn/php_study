<?php


/*$color = "red";
function echoColor(){
    echo $color;
}
echoColor();*/

$color = "red";
function echoColor(){
    global $color;
    echo $color;

    echo 'hell';
}
echoColor();
?>