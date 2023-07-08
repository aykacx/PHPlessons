<?php
class Count{
    function __construct(){
        echo "Entry" . "<br>";
    }
    private function Private_Number(){
        return 15;
    }
    public function Addition($a,$b){
        return $a + $b + $this->Private_Number();
    }
    function Calculator($a,$operator,$b){
        if ($operator == "+") {
            return $a + $b;
        }
        else if ($operator == "-") {
            return $a - $b;
        }
        else if ($operator == "/") {
            return $a / $b;
        }
        else if ($operator == "*") {
            return $a * $b;
        }
    }
    function __destruct(){
        echo "<br>". "Exit". "<br>";
    }
}

$count = new Count();
echo $count->Addition(32,45). "<br>";

echo $count->Calculator(233,"/",23);
?>