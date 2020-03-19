<?php

class Grammer{
    public $name = "Ph4nt0m";

    public function phpStudy($year){
        echo "Var name is {$this->name}. </br>";
        echo "Var year is {$year}. </br>";
        echo $this->name . " " . $year . "<br/>";
    }
}

$year = 2020;
$grammer = new Grammer();
$grammer->phpStudy($year);
/*testInner test*/
//test
#test
?>