<?php

require_once '../db/connection.php';

$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$job = $_POST['job'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO registered_users 
        (first_name,
        last_name,
        password,
        email,
        age,
        dob,
        occupation,)
        VALUES 
        ('$fn',
        '$ln',
        '$pwd',
        '$email',
        '$age',
        '$dob',
        '$job')";

if($conn->query($sql) === TRUE) {
    echo " record created successfully";
} else {
    echo "Error:". $sql . "<br>" . $conn->error;
}        
$conn->close();
?>