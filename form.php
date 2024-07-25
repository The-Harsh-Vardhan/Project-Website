<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO info (name, phone, email, dob, gender) 
        VALUES ('$name', '$phone', '$email', '$dob', '$gender')";


    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Your details have been accepted and You will be contacted soon after verification');
        window.location.href = 'form.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
