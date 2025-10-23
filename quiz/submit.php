<?php
    $servername = "localhost";
    $username = "iste498t01";
    $password = "Gras4@overlap";
    $dbname = "iste498t01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // REQUIRED FIELDS
    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    if ($major == "other" && !empty($_POST['other_major'])) {
        $major = $_POST['other_major'];
    }
    $term = $_POST['term'];
    $section = $_POST['sectionNum'];
    $date = $_POST['date'];

    //MAJOR NOT WORKING IDK WHY
    $sql = "INSERT INTO stuinfo (name, email, major, term, section, date) 
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssis", $name, $email, $major, $term, $section, $date);
    $stmt->execute();

    // LANGUAGES
    $html = $_POST['html'];
    $css = $_POST['css'];
    $python = $_POST['python'];
    $php = $_POST['php'];
    $js = $_POST['javascript'];
    $java = $_POST['java'];
    $c = $_POST['c'];
    $csharp = $_POST['csharp'];
    $cplusplus = $_POST['cplusplus'];

    $sql = "INSERT INTO languages (email, html, css, python, php, javascript, java, c, `c#`, `c++`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $email, $html, $css, $python, $php, $js, $java, $c, $csharp, $cplusplus);
    $stmt->execute();

    // SOFTWARE TOOLS
    $sdd = $_POST['source_driven_dev'];
    $sc = $_POST['source_control'];
    $alm = $_POST['app_lifecycle_management'];
    $devops = $_POST['devops'];
    $ba = $_POST['build_automation'];
    $da = $_POST['deploy_automation'];
    $ut = $_POST['unit_tests'];

    $sql = "INSERT INTO software_tools (email, source_driven_dev, source_control, app_lifecycle_management, devops, build_automation, deploy_automation, unit_tests)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $email, $sdd, $sc, $alm, $devops, $ba, $da, $ut);
    $stmt->execute();

    // SOFTWARE APPLICATIONS
    $software_apps = $_POST['software_app'];
    $softwares = implode(", ", $software_apps);
    $sql = "INSERT INTO software_app (email, softwares) 
        VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $softwares);
    $stmt->execute();

    //LEADERSHIP AND SOFT SKILLS
    $question1 = $_POST['leadership_1'];
    $question2 = $_POST['leadership_2'];
    $question3 = $_POST['leadership_3'];
    $question4 = $_POST['leadership_4'];
    $question5 = $_POST['leadership_5'];
    $question6 = $_POST['leadership_6'];
    $question7 = $_POST['leadership_7'];
    $question8 = $_POST['leadership_8'];
    $question9 = $_POST['leadership_9'];
    $question10 = $_POST['leadership_10'];
    $question11 = $_POST['leadership_11'];
    $question12 = $_POST['leadership_12'];
    $question13 = $_POST['leadership_13'];
    $question14 = $_POST['leadership_14'];
    $question15 = $_POST['leadership_15'];
    $question16 = $_POST['leadership_16'];
    $question17 = $_POST['leadership_17'];
    $question18 = $_POST['leadership_18'];
    $question19 = $_POST['leadership_19'];
    $question20 = $_POST['leadership_20'];

    $sql = "INSERT INTO leader_soft (email, leadership_1, leadership_2, leadership_3, leadership_4, leadership_5, leadership_6, leadership_7, leadership_8, leadership_9, leadership_10, leadership_11, leadership_12, leadership_13, leadership_14, leadership_15, leadership_16, leadership_17, leadership_18, leadership_19, leadership_20)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssssss", $email, $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10, $question11, $question12, $question13, $question14, $question15, $question16, $question17, $question18, $question19, $question20);
    $stmt->execute();

    // FRONT-END
    $fequestion1 = $_POST['front_end_1'];
    $fequestion2 = $_POST['front_end_2'];
    $fequestion3 = $_POST['front_end_3'];
    $fequestion4 = $_POST['front_end_4'];
    $fequestion5 = $_POST['front_end_5'];

    $sql = "INSERT INTO front_end (email, front_end_1, front_end_2, front_end_3, front_end_4, front_end_5)
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $email, $fequestion1, $fequestion2, $fequestion3, $fequestion4, $fequestion5);
    $stmt->execute();

    // BACK-END
    $bequestion1 = $_POST['back_end_1'];
    $bequestion2 = $_POST['back_end_2'];
    $bequestion3 = $_POST['back_end_3'];
    $bequestion4 = $_POST['back_end_4'];
    $bequestion5 = $_POST['back_end_5'];

    $sql = "INSERT INTO back_end (email, back_end_1, back_end_2, back_end_3, back_end_4, back_end_5)
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $email, $bequestion1, $bequestion2, $bequestion3, $bequestion4, $bequestion5);
    $stmt->execute();

    // GUI
    $guiquestion1 = $_POST['gui_1'];
    $guiquestion2 = $_POST['gui_2'];

    $sql = "INSERT INTO gui (email, gui_1, gui_2)
        VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $guiquestion1, $guiquestion2);
    $stmt->execute();

    // UXUI
    $uxuiquestion1 = $_POST['uxui_1'];
    $uxuiquestion2 = $_POST['uxui_2'];
    $uxuiquestion3 = $_POST['uxui_3'];
    $uxuiquestion4 = $_POST['uxui_4'];
    $uxuiquestion5 = $_POST['uxui_5'];

    $sql = "INSERT INTO uxui (email, uxui_1, uxui_2, uxui_3, uxui_4, uxui_5)
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $email, $uxuiquestion1, $uxuiquestion2, $uxuiquestion3, $uxuiquestion4, $uxuiquestion5);
    $stmt->execute();

    // APP DEV
    $appquestion1 = $_POST['app_dev_1'];
    $appquestion2 = $_POST['app_dev_2'];
    $appquestion3 = $_POST['app_dev_3'];
    $appquestion4 = $_POST['app_dev_4'];
    $appquestion5 = $_POST['app_dev_5'];

    $sql = "INSERT INTO app_dev (email, app_dev_1, app_dev_2, app_dev_3, app_dev_4, app_dev_5)
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $email, $appquestion1, $appquestion2, $appquestion3, $appquestion4, $appquestion5);
    $stmt->execute();

    // ADDITIONAL
    $addquestion1 = $_POST['additional_1'];

    $sql = "INSERT INTO additional (email, additional_1)
        VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $addquestion1);
    $stmt->execute();

    // CLOSE CONNECTION
    $stmt->close();
    $conn->close();
?>

<html>
    <head>
        <title>Success!</title>
        <link rel="stylesheet" href="style.css">
        <script>
            function showCard() {
                document.getElementById("resultCard").style.display = "block";
            }
        </script>
    </head>
    <body>
        <section>
            <hr>
            <p>Thank you for taking the time to complete this assessment!</p>
            <h2 class="celebrate">🥳</h2>
            <button onclick="showCard()">See Results!</button>
        </section>

        <section id="resultCard" style="display:none">
            <?php echo "<h2>Section #" . $section . "</h2>"; ?>
            <?php echo "<h1>" . $name . "</h1>"; ?>
            <?php echo "<h2>" . $major . "</h2>"; ?>
            <h1>Roles</h1>
            <!-- 4 Circles here -->
            <h2>Languages</h2>
            <h2>Apps</h2>
            <h2>Leadership</h2>
            <h2>Additional Information</h2>
        </section>

        <section id="centerSubmission">
            <h2 class="celebrate">🥳</h2>
            <h1>Successfully Submitted 🎉</h1>
            <hr>
            <p>Thank you for taking the time to complete this assessment!</p>
        </section>
    </body>
</html>