<?php
    $servername = "localhost";
    $username = "iste498t01";
    $password = "Gras4@overlap";
    $dbname = "iste498t01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "";

    // GET NAMES
    $sql = "SELECT name FROM stuinfo";
    $names = $conn->query($sql);

    // GET SECTIONS
    $sql = "SELECT section FROM stuinfo";
    $sections = $conn->query($sql);

    // GET MAJORs
    $sql = "SELECT major FROM stuinfo";
    $majors = $conn->query($sql);

    // GET DATES
    $sql = "SELECT date FROM stuinfo";
    $dates = $conn->query($sql);
?>



<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section id="adminContainer">
            <h2>Results</h2>
            <section id="sidebar">
                <h2>Filter By</h2>
                <h3>Semester</h3>
                <!-- Get Semesters Here -->
                <h3>Major</h3>
                <!-- Get Majors Here -->
            </section>
            <section id="table">
                <table>
                    <tr>
                        <th>Semester</th>
                        <th>Section</th>
                        <th>Name</th>
                        <th>Major</th>
                        <th>UX/UI</th>
                        <th>FRONT-END</th>
                        <th>BACK-END</th>
                        <th>APP-DEV</th>
                        <th>LEADERSHIP</th>
                        <th>DATE-ADDED</th>
                    </tr>
                </table>
            </section>
        </section>
    </body>
</html>