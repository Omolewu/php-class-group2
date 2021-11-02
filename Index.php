<?php
$firstname_error = $middlename_error = "";
if (isset($_POST['submit'])) {
    // echo $_POST['firstname'] . "<br/>";
    // echo $_POST['lastname'] . "<br/>";
    // echo $_POST['middlename'] . "<br/>";
    // echo $_POST['gender'] . "<br/>";
    // echo $_POST['phone'] . "<br/>";
    if (empty($_POST['firstname'])) {
        $firstname_error = "Your first name is required";
    } else {
        $firstname = $_POST['firstname'];
    }
    if (empty($_POST['middlename'])) {
        $middlename_error = "Your first name is required";
    } else {
        $middlename = $_POST['middlename'];
    }
}

echo $firstname_error . "<br/>";
echo $middlename_error;
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-fill {
            text-align: center;
            padding-top: 30px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Registation Form </h1>
    <form class="form-fill" method="post" action="Index.php">
        <p> First Name:<br>
            <input type="text" name="firstname">
        </p>
        <p> Middle Name:<br>
            <input type="text" name="middlename">
        </p>
        <p> Last Name:<br>
            <input type="text" name="lastname">
        </p>
        <p>Email:<br>
            <input type="text" name="Email">
        </p>
        <p>Phone Number:<br>
            <input type="number" name="phone">
        </P>

        <p><input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
        </P>
        <input type="submit" name="submit" value="Register">


    </form>

    <?php
    //$cars = array("Toyota", "Benz", "Lexuz","Camry", "Honda");
    // print_r($cars);
    // echo "$cars[2]";
    // for( $i=0; $i < count($cars); $i++){
    //   echo $cars[$i] . "<br/>";}

    //  $names=[];
    //  $names[0]="Dolapo";
    //  $names[1]="Moshood";
    //  $names[2]="Fawole";
    // print_r($names)
    //echo "$names[0] $names[1]  $names[2]"

    // $names=array(12, 14,23,89);
    // array_push($names, 20, 29, 40);
    // //print_r($names);
    // array_pop($names);
    // array_unshift($names, "Dolapo");
    //print_r($names)

    // $numbers=[];
    // for( $i=0; $i<100; $i++){
    //     $numbers[$i]=$i+1;
    //     echo $numbers[$i]."</br>";
    // }

    // for( $i=1; $i<=100; $i++){
    //     array_push($numbers, $i);

    //     echo $numbers[$i]."</br>";
    // }
    // print_r($numbers)


    // $ages = array ("Dolapo"=>40, "Jeremy"=>30, "Simbi"=>25);
    // foreach( $ages as $keys=>$values ){
    //     echo "$keys=". "</br>";
    // }


    ?>
</body>

</html>