<?php
    $servername = "localhost";
    $username = "iste498t01";
    $password = "Gras4@overlap";
    $dbname = "iste498t01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $semester = $_POST['semester'];
    $major = $_POST['major'];

    $sql = "";

?>