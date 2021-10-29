<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //    Start PHP   Indexed Array
    // $cars = array("Volvo", "Benz", "Toyota", "Lexus");
    // echo $cars[1];
    // print_r($cars);
    // for ($i = 0; $i < count($cars); $i++) {
    //     if ($cars[$i] == "Toyota") {
    //         echo "Toyota is included";
    //         continue;
    //         break;
    //     }
    //     echo $cars[$i] . "<br/>";
    // }
    // echo $i;

    // $names = array();
    // $names[0] = "Sunday";
    // $names[1] = "Ease";
    // $names[2] = "Dolapo";
    // print_r($names);

    // $names = [12, 34];
    // array_push($names, "Sunday", "Debo", "Ade");
    // // array_pop($names);
    // // array_shift($names);
    // array_unshift($names, "Omolewu");
    // print_r($names);
    // $numbers = [];

    // for ($i = 0; $i < 100; $i++) {
    //     $numbers[$i] = $i+1;
    //     echo  $numbers[$i] . "<br/>";
    // }
    // for ($i = 1; $i <= 100; $i++) {
    //     array_push($numbers, $i);
    //       $numbers[$i] . "<br/>";
    // }
    // print_r($numbers);
    // End PHP   Indexed Array

    // ASSOCIATIVE ARRAY
    $ages = array("Sunday" => 12, "Ease" => 50, "Bimbo" => 70, "Dolapo" => 100);
    foreach ($ages as $keys => $values) {
        echo "$keys = $values"  . "<br/>";
    }
    // read up and Practice all the functions related to indexed array and associative array 
    // read more about multidimentional array 
    // 

    ?>

</body>

</html>