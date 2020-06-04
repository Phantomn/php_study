<?php

$fruits = [
    "apple" => "사과",
    "strawberry" => "딸기",
    "banana" => "바나나"
];

echo "value use <br/>";
foreach($fruits as $fruit)
    echo "{$fruit}<br/>";

echo "use key value<br/>";
foreach($fruits as $eng => $kor)
    echo "{$eng} => {$kor}<br/>";

?>