<?php
class Transactions
{
    function Addition($a, $b)
    {
        return $a + $b;
    }
    function Substraction($a, $b)
    {
        return $a - $b;
    }
}
$transactions = new Transactions();
echo $transactions->Addition(5,9), "<br>";
echo $transactions->Substraction(14,9);
?>