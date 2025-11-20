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

    // GET SECTIONS
    $sections = [];
    $sql = "SELECT DISTINCT section FROM stuinfo ORDER BY section";
    $sectionData = $conn->query($sql);
    while ($row = $sectionData->fetch_assoc()) {
        $sections[] = $row['section'];
    }

    // GET DATES
    $dates = [];
    $sql = "SELECT DISTINCT date FROM stuinfo ORDER BY date";
    $dateData = $conn->query($sql);
    while ($row = $dateData->fetch_assoc()) {
        $dates[] = $row['date'];
    }

    // GET DATA
    $sql = "SELECT stuinfo.name, stuinfo.major, stuinfo.term, stuinfo.section, stuinfo.date,
                averages.`uxui_avg`, averages.`front-end_avg`, averages.`back-end_avg`,
                averages.`app-dev_avg`, averages.`leadership_avg`
            FROM stuinfo
            LEFT JOIN averages USING (email)
            ORDER BY stuinfo.term DESC";
    $result = $conn->query($sql);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // TABLE
    $table = "";
    foreach ($data as $row) {
        $table .= "<tr>";
        $table .="<td>{$row['term']}</td>";
        $table .="<td>{$row['section']}</td>";
        $table .="<td>{$row['name']}</td>";
        $table .="<td>{$row['major']}</td>";
        $table .="<td>{$row['uxui_avg']}</td>";
        $table .="<td>{$row['front-end_avg']}</td>";
        $table .="<td>{$row['back-end_avg']}</td>";
        $table .="<td>{$row['app-dev_avg']}</td>";
        $table .="<td>{$row['leadership_avg']}</td>";
        $table .="<td>{$row['date']}</td>";
        $table .="</tr>";
    }
    
    //FILTERING
    $where = [];

    if (!empty($_GET['semester'])) {
        $in = "'" . implode("','", $_GET['semester']) . "'";
        $where[] = "stuinfo.term IN ($in)";
    }

    if (!empty($_GET['section'])) {
        $in = "'" . implode("','", $_GET['section']) . "'";
        $where[] = "stuinfo.section IN ($in)";
    }

    if (!empty($_GET['major'])) {
        $in = "'" . implode("','", $_GET['major']) . "'";
        $where[] = "stuinfo.major IN ($in)";
    }

    if (!empty($_GET['date'])) {
        $in = "'" . implode("','", $_GET['date']) . "'";
        $where[] = "stuinfo.date IN ($in)";
    }

    $filterQ = "";
    if (!empty($where)) {
        $filterQ = "WHERE " . implode(" AND ", $where);
    }

    $sql = "SELECT stuinfo.name, stuinfo.major, stuinfo.term, stuinfo.section, stuinfo.date,
            averages.`uxui_avg`, averages.`front-end_avg`, averages.`back-end_avg`,
            averages.`app-dev_avg`, averages.`leadership_avg`
        FROM stuinfo
        LEFT JOIN averages USING (email)
        $filterQ
        ORDER BY stuinfo.term DESC";
    $result = $conn->query($sql);
    $filterData = [];
    while ($row = $result->fetch_assoc()) {
        $filterData[] = $row;
    }
    $table = "";
    foreach ($filterData as $row) {
        $table .= "<tr>";
        $table .="<td>{$row['term']}</td>";
        $table .="<td>{$row['section']}</td>";
        $table .="<td>{$row['name']}</td>";
        $table .="<td>{$row['major']}</td>";
        $table .="<td>{$row['uxui_avg']}</td>";
        $table .="<td>{$row['front-end_avg']}</td>";
        $table .="<td>{$row['back-end_avg']}</td>";
        $table .="<td>{$row['app-dev_avg']}</td>";
        $table .="<td>{$row['leadership_avg']}</td>";
        $table .="<td>{$row['date']}</td>";
        $table .="</tr>";
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
                    <form method="GET">
                        <h2 style="font-size:20px">FILTER BY</h2>
                        <h3>Semester</h3>
                        <?php
                            foreach ($semesters as $semester) {
                                echo "<label><input type='checkbox' name='semester[]' value='$semester'> $semester</label><br>";
                            }
                        ?>
                        <h3>Section</h3>
                        <?php
                            foreach ($sections as $section) {
                                echo "<label><input type='checkbox' name='section[]' value='$section'> $section</label><br>";
                            }
                        ?>
                        <h3>Major</h3>
                        <?php
                            foreach ($majors as $major) {
                                echo "<label><input type='checkbox' name='major[]' value='$major'> $major</label><br>";
                            }
                        ?>
                        <h3>Dates</h3>
                        <?php
                            foreach ($dates as $date) {
                                echo "<label><input type='checkbox' name='date[]' value='$date'> $date</label><br>";
                            }
                        ?>
                        <br><button type="submit">Apply Filters</button>
                    </form>
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
                            echo $table;        
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>