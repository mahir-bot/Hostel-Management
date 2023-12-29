<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    if ($_SESSION['user']) {
    } else {
        header("location: index.html");
    }
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "we";
    $connection = mysqli_connect($serverName, $userName, $password, $dbname);
    if ($connection == false) {
        die("Error!!!" . mysqli_connect_error());
    }
    $id = $_POST['id'];
    $due = $_POST['due'];
    $cost = $_POST['cost'];
    $can = "INSERT INTO `canteen`(`id`, `due`,  `cost`) VALUES ('$id','$due','$cost')";
    if (mysqli_query($connection, $can)) {
        echo "Insert Successfully";
    } else {
        echo "Not Inserted!!!";
    }
    print '<script>alert("Successfully Updated!");</script>';      // Prompts the user
    print '<script>window.location.assign("canteen_updateAdmin.html");</script>'; // redirects to 
    // register.php

}


// $my_query = "CALL personal_data_update ('$nid', '$email', $marriage,$sal,'$occ','$phn','$pad','$lad',$tax)";
// $my_query = "UPDATE `personal_info` SET `email`='$email',`marriage`=$marriage,`salary`=$sal,`occupation`='$occ',`phone`='$phn',`permanent_address`='$pad',`local_address`='$lad',`tax`=$tax WHERE nid = $nid";
// $my_query =  "UPDATE `personal_info` SET `first_name`='$firstname',`last_name`='$lastname',`section`='$section',`department`='$department',`credit`='$credit',`phone`='$phone',`email`='$email',`local_address`='$lad',`permanent_address`='$pad',`gender`='$trueGender',`religion`='$religion',`blood`='$blood' WHERE 1";