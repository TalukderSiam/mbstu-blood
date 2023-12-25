<?php
$conn=new mysqli("localhost","root","","bloodbank");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$id = $_POST['id'];
$blood = $_POST['blood'];
$number = $_POST['number'];
$department = $_POST['department'];
$email = $_POST['email'];

//ete security jnne use korci 

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


//akta email dea akber e registration kora jbe eta aikhne korci

$check_duplicate = "SELECT * FROM mbstublood WHERE email='$email'";
$duplicate_result = $conn->query($check_duplicate);

if ($duplicate_result->num_rows > 0) {
    echo "Email address already exists. Please use a different email.";
} 

//$sql = "INSERT INTO student (name,id,email) VALUES ('$name','$id','$email')";

$sql = "INSERT INTO mbstublood (name, student_id,blood_group,phone_number,department,email, password) VALUES ('$name', '$id', '$blood','$number','$department','$email','$password')";


if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

