<?php

class Variable{
    public $name = "GNUStudy";
    public $year = 2018;

    public function gnuStudy(){
        echo "Var name is {$this->name}. <br/>";
        echo "Var year is {$this->year}. <br/>";
        echo $this->name . " " . $this->year . "<br/>";
    }
}

$variable = new Variable();
$variable->gnuStudy();

?>