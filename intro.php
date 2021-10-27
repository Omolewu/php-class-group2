<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php 'UTF - 8' ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
</head>

<body>
    <?php
    function  sum($a, $b)
    {
        $c = $a + $b;
        return $c;
    }
    // echo date('Y/m/d h:g:i a l ');
    echo "<br/>";
    // str_replace()
    echo  sum(45, 67);
    echo "<br/>";
    echo  sum(45, 100);
    function retirementyear($jobstartingyear, $yearofbirth, $name)
    {
        $todayyear = date('Y');
        $endingyear = $jobstartingyear + 35;
        $retirementdate = $endingyear  - intval($todayyear);
        $useage = $yearofbirth + 60;
        $retirementusingage = $useage - intval(date('Y'));
        if ($retirementdate > $retirementusingage) {
            return "Dear $name your age will be used for your 
            retirement, your retirement year is " . $endingyear . " You have   $retirementdate years left";
        } else {
            return " Dear $name your service year  will be used for your 
            retirement, your retirement year is $useage  you have $retirementusingage years left";
        }
    }
    echo "<br/>";
    echo retirementyear(2018, 1989, "Abdultaofeek");
    echo "<br/>";
    echo retirementyear(2015, 2000, "Ease Samuel");
    // $_first_name = "Sunday Omolewu";
    // // echo  strlen($_first_name);
    // echo str_replace("a ", "***", "A lomg time ago in a country far away from--- ");
    // echo str_word_count($_first_name);

    ?>
</body>

</html>