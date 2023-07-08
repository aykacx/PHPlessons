<body>
    <?php
    $Var = 20;

    echo ($Var == 20) ? "Its 20" : "Its not 20"; //What's in brackets is our contition. the question mark our if statement. the after text is if and else output.
    
    for ($i = 0; $i < 10; $i++) {
        echo $i, "<br>";
        if ($i == 5) {
            echo "Here is ok","<br>";
        }
    }



    // if ($Var <= 10) {
//     echo "Less than 10";
// } else if ($Var <= 30) {
//     echo "Less than 30";
// } else {
//     echo "More than 30";
// }
    ?>
</body>