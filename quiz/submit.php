<?php
    $servername = "localhost";
    $username = "iste498t01";
    $password = "Gras4@overlap";
    $dbname = "iste498t01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $section = $_POST['sectionNum'];
    $date = $_POST['date'];

    $sql = "INSERT INTO stuinfo (name, email, major, section, date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssis", $name, $email, $major, $section, $date);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
    } else {
        echo $conn->error;
        $stmt->close();
        $conn->close();
    }
?>

<html>
    <head>
        <title>Success!</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section>
            <h1>Successfully Submitted 🎉</h1>
            <hr>
            <p>Thank you for taking the time to complete this assessment!</p>
            <h2 class="celebrate">🥳</h2>
        </section>

        <section id="centerSubmission">
            <h2 class="celebrate">🥳</h2>
            <h1>Successfully Submitted 🎉</h1>
            <hr>
            <p>Thank you for taking the time to complete this assessment!</p>
        </section>
    </body>
</html>