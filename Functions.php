<?php
function DateFormat($day, $month, $year)
{
    $monthNames = [
        "01" => "January",
        "02" => "February",
        "03" => "March",
        "04" => "April",
        "05" => "May",
        "06" => "June",
        "07" => "July",
        "08" => "August",
        "09" => "September",
        "10" => "October",
        "11" => "November",
        "12" => "December"
    ];
    return $day . " " . $monthNames[$month] . " " . $year;
}
$future = DateFormat("27","11","2467");
echo $future, "<br>";
echo DateFormat("01","01","1998")
?>