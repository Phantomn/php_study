<?php

class Member{
    public $m;
    public $m1 = "멤버변수입니다.";

    public function __construct()
    {
        $m = "지역변수입니다.";
        echo "{$m}<br/>";
    }
}

$member = new Member();
echo "Not Initialed member : {$member->m} <br/>";
echo "Initialed member : {$member->m1} <br/>";
?>