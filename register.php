<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $blood = $_POST['blood_group'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO donors
    (name, age, blood_group, phone, email, address)
    VALUES
    ('$name','$age','$blood','$phone','$email','$address')";

    if(mysqli_query($conn, $sql)){
        echo "Inserted Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}
?>
