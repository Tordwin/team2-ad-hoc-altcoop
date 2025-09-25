<?php
    $servername = "localhost";
    $username = "iste498t01";
    $password = "Gras4@overlap";
    $dbname = "iste498t01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected to database successfully! ";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $section = $_POST['sectionNum'];
    $date = $_POST['date'];

    $sql = "INSERT INTO stuinfo (name, email, major, section, date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $name, $email, $major, $section, $date);

    if ($stmt->execute()) {
        echo "New record inserted successfully!";
    } else {
        echo $conn->error;
    }

    $stmt->close();
    $conn->close();
?>