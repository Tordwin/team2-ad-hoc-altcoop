<?php
    $servername = "localhost";
    $username = "iste498t01";
    $password = "Gras4@overlap";
    $dbname = "iste498t01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected to database successfully!";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    // $section = $_POST['sectionNum'];
    $date = $_POST['date'];

    $sql = "INSERT INTO stuinfo (name, email, major, date) VALUES ('$name', '$email', '$major', '$date')";

    $conn->query($sql);
    $conn->close();
?>