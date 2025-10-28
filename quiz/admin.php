<?php
    $servername = "localhost";
    $username = "iste498t01";
    $password = "Gras4@overlap";
    $dbname = "iste498t01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "";

    // GET SEMESTERS
    $semesters = [];
    $sql = "SELECT DISTINCT term FROM stuinfo ORDER BY term";
    $semData = $conn->query($sql);
    while ($row = $semData->fetch_assoc()) {
        $semesters[] = $row['term'];
    }

    // GET MAJORS
    $majors = [];
    $sql = "SELECT DISTINCT major FROM stuinfo ORDER BY major";
    $majorData = $conn->query($sql);
    while ($row = $majorData->fetch_assoc()) {
        $majors[] = $row['major'];
    }

    // GET DATA
    $answer_to_number = [
        "Not at all" => 1,
        "Not proficient" => 2,
        "Proficient" => 3,
        "Very proficient" => 4,
        "Fluent" => 5,
    ];

    $sql = "SELECT `name`, major, term, section, `date` FROM stuinfo";
    $result = $conn->query($sql);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

?>

<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="adminstyles.css">
    </head>
    <body>
        <section class="adminContainer">
            <h2 style="font-size:48px">Results</h2>
            <div class="resultWrapper">
                <div class="sortBar">
                    <h2 style="font-size:20px">FILTER BY</h2>
                    <h3>Semester</h3>
                    <?php
                        foreach ($semesters as $semester) {
                            echo "<label><input type='radio' name='semester' value='$semester'> $semester</label><br>";
                        }
                    ?>
                    <h3>Major</h3>
                    <?php
                        foreach ($majors as $major) {
                            echo "<label><input type='radio' name='major' value='$major'> $major</label><br>";
                        }
                    ?>
                </div>
                <div id="table">
                    <table>
                        <tr>
                            <th>SEMESTER</th>
                            <th>SECTION</th>
                            <th>NAME</th>
                            <th>MAJOR</th>
                            <th>UX/UI</th>
                            <th>FRONT-END</th>
                            <th>BACK-END</th>
                            <th>APP-DEV</th>
                            <th>LEADERSHIP</th>
                            <th>DATE-ADDED</th>
                        </tr>
                        <?php
                            for ($i = 0; $i < count($data); $i++) {
                                echo "<tr>";
                                echo "<td>" . $data[$i]['term'] . "</td>";
                                echo "<td>" . $data[$i]['section'] . "</td>";
                                echo "<td>" . $data[$i]['name'] . "</td>";
                                echo "<td>" . $data[$i]['major'] . "</td>";
                                // echo "<td>" . $data[$i]['ux_ui'] . "</td>";
                                // echo "<td>" . $data[$i]['front_end'] . "</td>";
                                // echo "<td>" . $data[$i]['back_end'] . "</td>";
                                // echo "<td>" . $data[$i]['app_dev'] . "</td>";
                                // echo "<td>" . $data[$i]['leadership'] . "</td>";
                                // echo "<td>" . $data[$i]['date'] . "</td>";
                                echo "</tr>";
                            }                            
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>