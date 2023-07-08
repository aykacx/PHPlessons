<?php
class Informations{
    function Names(){
        return "Rachel";
    }
    function Fruit(){
        function UnderFruit(){
            $information = new Informations();
            echo "Apple ";
            return $information->Names();
        }
        return UnderFruit();
    }
}

$informations = new Informations();
echo $informations->Fruit();
?>