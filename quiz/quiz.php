<html>
    <head>
        <title>Senior Dev Self-Assessment Web-Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="POST" action="submit.php">
            <section>
                <h1>Self-Assessment Web-Form</h1>
                <p>This survey is a self-assessment of both your technical and soft skills. 
                    Please answer honestly, as your responses will help us create well-balanced teams. 
                    Remember, claiming expertise in an area you’re not prepared for can make collaboration 
                    more difficult and ultimately hurt your team’s success.
                </p>
                <p style="color: red;">* Indicates Required Questions</p>
                <hr>
                <label>Preferred Name: <span style="color: red;">*</span></label><br>
                <input type="text" name="name" required><br><br>

                <label>Email: <span style="color: red;">*</span></label><br>
                <input type="text" name="email" required><br><br>

                <label>Major: <span style="color: red;">*</span></label><br>
                <input type="radio" name="major" value="W&M"> Web And Mobile (WMC)
                <input type="radio" name="major" value="HCC"> Human-Centered Computing (HCC)
                <input type="radio" name="major" value="CIT"> Computing And Information Technology (CIT)
                <input type="radio" name="major" value="other"> Other
                <!-- The creation of a script needs to be done here for other textbox to appear -->
                </select><br><br>

                <label>Section #: <span style="color: red;">*</span></label>
                <select name="sectionNum" required>
                    <option value="">Select your Section #</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>

                <label>Date <span style="color: red;">*</span></label><br>
                <input type="date" name="date" required><br><br>
            </section>

            <!------------- BEGINNING OF LANGUAGES CHECKBOXES -------->

            <section>
                <h3>Languages</h3>
                <hr>

                <label>Please share your proficiency in the following languages:</label><br><br>
                <table>
                    <thead>
                        <tr>
                            <th>Language</th>
                            <th>Not at all</th>
                            <th>Not proficient</th>
                            <th>Proficient</th>
                            <th>Very proficient</th>
                            <th>Fluent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HTML</td>
                            <td><input type="radio" name="html" value="not_at_all"></td>
                            <td><input type="radio" name="html" value="not_proficient"></td>
                            <td><input type="radio" name="html" value="proficient"></td>
                            <td><input type="radio" name="html" value="very_proficient"></td>
                            <td><input type="radio" name="html" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>CSS</td>
                            <td><input type="radio" name="css" value="not_at_all"></td>
                            <td><input type="radio" name="css" value="not_proficient"></td>
                            <td><input type="radio" name="css" value="proficient"></td>
                            <td><input type="radio" name="css" value="very_proficient"></td>
                            <td><input type="radio" name="css" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>Python</td>
                            <td><input type="radio" name="python" value="not_at_all"></td>
                            <td><input type="radio" name="python" value="not_proficient"></td>
                            <td><input type="radio" name="python" value="proficient"></td>
                            <td><input type="radio" name="python" value="very_proficient"></td>
                            <td><input type="radio" name="python" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>PHP</td>
                            <td><input type="radio" name="php" value="not_at_all"></td>
                            <td><input type="radio" name="php" value="not_proficient"></td>
                            <td><input type="radio" name="php" value="proficient"></td>
                            <td><input type="radio" name="php" value="very_proficient"></td>
                            <td><input type="radio" name="php" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>JavaScript</td>
                            <td><input type="radio" name="javascript" value="not_at_all"></td>
                            <td><input type="radio" name="javascript" value="not_proficient"></td>                                
                            <td><input type="radio" name="javascript" value="proficient"></td>
                            <td><input type="radio" name="javascript" value="very_proficient"></td>
                            <td><input type="radio" name="javascript" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>Java</td>
                            <td><input type="radio" name="java" value="not_at_all"></td>
                            <td><input type="radio" name="java" value="not_proficient"></td>
                            <td><input type="radio" name="java" value="proficient"></td>
                            <td><input type="radio" name="java" value="very_proficient"></td>
                            <td><input type="radio" name="java" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td><input type="radio" name="c" value="not_at_all"></td>
                            <td><input type="radio" name="c" value="not_proficient"></td>
                            <td><input type="radio" name="c" value="proficient"></td>
                            <td><input type="radio" name="c" value="very_proficient"></td>
                            <td><input type="radio" name="c" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>C#</td>
                            <td><input type="radio" name="csharp" value="not_at_all"></td>
                            <td><input type="radio" name="csharp" value="not_proficient"></td>
                            <td><input type="radio" name="csharp" value="proficient"></td>
                            <td><input type="radio" name="csharp" value="very_proficient"></td>
                            <td><input type="radio" name="csharp" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>C++</td>
                            <td><input type="radio" name="cplusplus" value="not_at_all"></td>
                            <td><input type="radio" name="cplusplus" value="not_proficient"></td>
                            <td><input type="radio" name="cplusplus" value="proficient"></td>
                            <td><input type="radio" name="cplusplus" value="very_proficient"></td>
                            <td><input type="radio" name="cplusplus" value="fluent"></td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <!------------- END OF LANGUAGES CHECKBOXES -------------->

            

            <!--------- BEGINNING OF SOFTWARE CHECKBOXES ------------->

            <section>
                <h3>Software Tools</h3>
                <hr>

                <label>Please share your proficiency in the following softwares:</label><br><br>
                <table>
                    <thead>
                        <tr>
                            <th>Software Tools</th>
                            <th>Not at all</th>
                            <th>Not proficient</th>
                            <th>Proficient</th>
                            <th>Very proficient</th>
                            <th>Fluent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Source Driven Development (e.g. GitFlow, Trunk-Based Development)</td>
                            <td><input type="radio" name="source_driven_dev" value="not_at_all"></td>
                            <td><input type="radio" name="source_driven_dev" value="not_proficient"></td>
                            <td><input type="radio" name="source_driven_dev" value="proficient"></td>
                            <td><input type="radio" name="source_driven_dev" value="very_proficient"></td>
                            <td><input type="radio" name="source_driven_dev" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>Source Control (e.g. Git, Subversion/SVN)</td>
                            <td><input type="radio" name="source_control" value="not_at_all"></td>
                            <td><input type="radio" name="source_control" value="not_proficient"></td>
                            <td><input type="radio" name="source_control" value="proficient"></td>
                            <td><input type="radio" name="source_control" value="very_proficient"></td>
                            <td><input type="radio" name="source_control" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>Application Lifecycle Management (e.g. Azure DevOps, Jira, IBM Rational Team Concert)</td>
                            <td><input type="radio" name="app_lifecycle_management" value="not_at_all"></td>
                            <td><input type="radio" name="app_lifecycle_management" value="not_proficient"></td>
                            <td><input type="radio" name="app_lifecycle_management" value="proficient"></td>
                            <td><input type="radio" name="app_lifecycle_management" value="very_proficient"></td>
                            <td><input type="radio" name="app_lifecycle_management" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>DevOps Procedures (e.g. Jenkins, GitHub Actions, Azure Pipelines)</td>
                            <td><input type="radio" name="devops" value="not_at_all"></td>
                            <td><input type="radio" name="devops" value="not_proficient"></td>
                            <td><input type="radio" name="devops" value="proficient"></td>
                            <td><input type="radio" name="devops" value="very_proficient"></td>
                            <td><input type="radio" name="devops" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>Build Automation (e.g. Maven, Gradle, Ant)</td>
                            <td><input type="radio" name="build_automation" value="not_at_all"></td>
                            <td><input type="radio" name="build_automation" value="not_proficient"></td>
                            <td><input type="radio" name="build_automation" value="proficient"></td>
                            <td><input type="radio" name="build_automation" value="very_proficient"></td>
                            <td><input type="radio" name="build_automation" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>Deploy Automation (e.g. Ansible, Chef, Puppet)</td>
                            <td><input type="radio" name="deploy_automation" value="not_at_all"></td>
                            <td><input type="radio" name="deploy_automation" value="not_proficient"></td>
                            <td><input type="radio" name="deploy_automation" value="proficient"></td>
                            <td><input type="radio" name="deploy_automation" value="very_proficient"></td>
                            <td><input type="radio" name="deploy_automation" value="fluent"></td>
                        </tr>
                        <tr>
                            <td>Unit Tests (e.g. JUnit, PyTest, Jest)</td>
                            <td><input type="radio" name="unit_tests" value="not_at_all"></td>
                            <td><input type="radio" name="unit_tests" value="not_proficient"></td>
                            <td><input type="radio" name="unit_tests" value="proficient"></td>
                            <td><input type="radio" name="unit_tests" value="very_proficient"></td>
                            <td><input type="radio" name="unit_tests" value="fluent"></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section>
                <h3>Software Applications</h3>
                <hr>

                <label>Please select the software you are familiar with:</label><br>
                <span>
                    <input type="checkbox" name="software_app" value="git"><br>Git
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="docker"><br>Docker
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="vs"><br>Visual Studio
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="vscode"><br>Visual Studio Code
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="mysql_workbench"><br>MySQL Workbench<br>
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="mac"><br>Mac OS
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="linux"><br>Linux OS
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="windows"><br>Windows OS
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="mobile"><br>Mobile OS (Android, IOS)<br>
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="jira"><br>Jira
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="azure"><br>Azure
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="slack"><br>Slack
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="trello"><br>Trello
                </span>
                <span>
                    <input type="checkbox" name="software_app" value="microsoft_teams"><br>Microsoft Teams<br>
                </span>
            </section>

            <!--------- END OF SOFTWARE CHECKBOXES ------------------->

            <!------- BEGINNING OF LEADERSHIP SKILLS QUESTIONS ------->

            <section>
                <h3>Leadership Skills</h3>
                <hr>

                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Strongly Disagree</th>
                            <th>Disagree</th>
                            <th>Neutral</th>
                            <th>Agree</th>
                            <th>Strongly Agree</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>I feel comfortable delivering presentations in front of people.</td>
                            <td><input type="radio" name="leadership_1_1" value="strong_disagree"></td>
                            <td><input type="radio" name="leadership_1_2" value="disagree"></td>
                            <td><input type="radio" name="leadership_1_3" value="neutral"></td>
                            <td><input type="radio" name="leadership_1_4" value="agree"></td>
                            <td><input type="radio" name="leadership_1_5" value="strong_agree"></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!------- END OF LEADERSHIP SKILLS QUESTIONS ------------->

            <!----------- BEGINNING OF FRONT-END QUESTIONS ------------>

            <section>
                <h3>Front-End</h3>
                <hr>

                <label>How well is your front-end development skills?</label><br>
                <input type="radio" name="front_end_1_1" value="Beginner"> Beginner
                <input type="radio" name="front_end_1_2" value="Novice"> Novice
                <input type="radio" name="front_end_1_3" value="Intermediate"> Intermediate
                <input type="radio" name="front_end_1_4" value="Advanced"> Advanced
                <input type="radio" name="front_end_1_5" value="Expert"> Expert<br><br>
                
                <label>How comfortable are you in utilizing HTML and CSS in the creation of a web page</label><br>
                <input type="radio" name="front_end_2_1" value="Beginner"> Beginner
                <input type="radio" name="front_end_2_2" value="Novice"> Novice
                <input type="radio" name="front_end_2_3" value="Intermediate"> Intermediate
                <input type="radio" name="front_end_2_4" value="Advanced"> Advanced
                <input type="radio" name="front_end_2_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you in the creation of JavaScript scripts?</label><br>
                <input type="radio" name="front_end_3_1" value="Beginner"> Beginner
                <input type="radio" name="front_end_3_2" value="Novice"> Novice
                <input type="radio" name="front_end_3_3" value="Intermediate"> Intermediate
                <input type="radio" name="front_end_3_4" value="Advanced"> Advanced
                <input type="radio" name="front_end_3_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with creating pages in PHP</label><br>
                <input type="radio" name="front_end_4_1" value="Beginner"> Beginner
                <input type="radio" name="front_end_4_2" value="Novice"> Novice
                <input type="radio" name="front_end_4_3" value="Intermediate"> Intermediate
                <input type="radio" name="front_end_4_4" value="Advanced"> Advanced
                <input type="radio" name="front_end_4_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with creating and processing interactable elements on a web page? (Data submissions, quizzes, drop downs, and menus)</label><br>
                <input type="radio" name="front_end_5_1" value="Beginner"> Beginner
                <input type="radio" name="front_end_5_2" value="Novice"> Novice
                <input type="radio" name="front_end_5_3" value="Intermediate"> Intermediate
                <input type="radio" name="front_end_5_4" value="Advanced"> Advanced
                <input type="radio" name="front_end_5_5" value="Expert"> Expert<br><br>
            </section>
            
            <!----------- END OF FRONT-END QUESTIONS ------------------>

            <!----------- BEGINNING OF BACK-END QUESTIONS ------------->

            <section>
                <h3>Back-End</h3>
                <hr>
                
                <label>How well is your back-end development skills?</label><br>
                <input type="radio" name="back_end_1_1" value="Beginner"> Beginner
                <input type="radio" name="back_end_1_2" value="Novice"> Novice
                <input type="radio" name="back_end_1_3" value="Intermediate"> Intermediate
                <input type="radio" name="back_end_1_4" value="Advanced"> Advanced
                <input type="radio" name="back_end_1_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with creating a database from provided data?</label><br>
                <input type="radio" name="back_end_2_1" value="Beginner"> Beginner
                <input type="radio" name="back_end_2_2" value="Novice"> Novice
                <input type="radio" name="back_end_2_3" value="Intermediate"> Intermediate
                <input type="radio" name="back_end_2_4" value="Advanced"> Advanced
                <input type="radio" name="back_end_2_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with loading and manipulating databases?</label><br>
                <input type="radio" name="back_end_3_1" value="Beginner"> Beginner
                <input type="radio" name="back_end_3_2" value="Novice"> Novice
                <input type="radio" name="back_end_3_3" value="Intermediate"> Intermediate
                <input type="radio" name="back_end_3_4" value="Advanced"> Advanced
                <input type="radio" name="back_end_3_5" value="Expert"> Expert<br><br>

                <label>How is your bug detection skills?</label><br>
                <input type="radio" name="back_end_4_1" value="Beginner"> Beginner
                <input type="radio" name="back_end_4_2" value="Novice"> Novice
                <input type="radio" name="back_end_4_3" value="Intermediate"> Intermediate
                <input type="radio" name="back_end_4_4" value="Advanced"> Advanced
                <input type="radio" name="back_end_4_5" value="Expert"> Expert<br><br>

                <label>How well is your database development skills?</label><br>
                <input type="radio" name="back_end_5_1" value="Beginner"> Beginner
                <input type="radio" name="back_end_5_2" value="Novice"> Novice
                <input type="radio" name="back_end_5_3" value="Intermediate"> Intermediate
                <input type="radio" name="back_end_5_4" value="Advanced"> Advanced
                <input type="radio" name="back_end_5_5" value="Expert"> Expert<br><br>
            </section>

            <!----------- END OF BACK-END QUESTIONS ------------------->

            <!----------- BEGINNING OF GUI QUESTIONS ------------------>

            <section>
                <h3>GUI</h3>
                <hr>

                <label>How well is your GUI development skills?</label><br>
                <input type="radio" name="gui_1_1" value="Beginner"> Beginner
                <input type="radio" name="gui_1_2" value="Novice"> Novice
                <input type="radio" name="gui_1_3" value="Intermediate"> Intermediate
                <input type="radio" name="gui_1_4" value="Advanced"> Advanced
                <input type="radio" name="gui_1_5" value="Expert"> Expert<br><br>

                <label>How would you rate your skills in GUI development?</label><br>
                <input type="radio" name="gui_2_1" value="Weakest"> Weakest
                <input type="radio" name="gui_2_2" value="Weak"> Weak
                <input type="radio" name="gui_2_3" value="Neutral"> Neutral
                <input type="radio" name="gui_2_4" value="Strong"> Strong
                <input type="radio" name="gui_2_5" value="Strongest"> Strongest<br><br>
            </section>

            <!----------- END OF GUI QUESTIONS ------------------------>

            <!----------- BEGINNING OF UX/UI QUESTIONS ---------------->

            <section>
                <h3>UX/UI</h3>
                <hr>

                <label>How well is your UX/UI design skills?</label><br>
                <input type="radio" name="uxui_1_1" value="Beginner"> Beginner
                <input type="radio" name="uxui_1_2" value="Novice"> Novice
                <input type="radio" name="uxui_1_3" value="Intermediate"> Intermediate
                <input type="radio" name="uxui_1_4" value="Advanced"> Advanced
                <input type="radio" name="uxui_1_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with wire framing and prototyping?</label><br>
                <input type="radio" name="uxui_2_1" value="Beginner"> Beginner
                <input type="radio" name="uxui_2_2" value="Novice"> Novice
                <input type="radio" name="uxui_2_3" value="Intermediate"> Intermediate
                <input type="radio" name="uxui_2_4" value="Advanced"> Advanced
                <input type="radio" name="uxui_2_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with usability testing?</label><br>
                <input type="radio" name="uxui_3_1" value="Beginner"> Beginner
                <input type="radio" name="uxui_3_2" value="Novice"> Novice
                <input type="radio" name="uxui_3_3" value="Intermediate"> Intermediate
                <input type="radio" name="uxui_3_4" value="Advanced"> Advanced
                <input type="radio" name="uxui_3_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with user interviews?</label><br>
                <input type="radio" name="uxui_4_1" value="Beginner"> Beginner
                <input type="radio" name="uxui_4_2" value="Novice"> Novice
                <input type="radio" name="uxui_4_3" value="Intermediate"> Intermediate
                <input type="radio" name="uxui_4_4" value="Advanced"> Advanced
                <input type="radio" name="uxui_4_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you with UI design?</label><br>
                <input type="radio" name="uxui_5_1" value="Beginner"> Beginner
                <input type="radio" name="uxui_5_2" value="Novice"> Novice
                <input type="radio" name="uxui_5_3" value="Intermediate"> Intermediate
                <input type="radio" name="uxui_5_4" value="Advanced"> Advanced
                <input type="radio" name="uxui_5_5" value="Expert"> Expert<br><br>
            </section>

            <!----------- END OF UX/UI QUESTIONS --------------------->

            <!----------- BEGINNING OF APP DEVELOPMENT QUESTIONS ----->

            <section>
                <h1>App Development</h1>
                <hr>
                
                <label>How well is your app development?</label><br>
                <input type="radio" name="app_dev_1_1" value="Beginner"> Beginner
                <input type="radio" name="app_dev_1_2" value="Novice"> Novice
                <input type="radio" name="app_dev_1_3" value="Intermediate"> Intermediate
                <input type="radio" name="app_dev_1_4" value="Advanced"> Advanced
                <input type="radio" name="app_dev_1_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you in development of an Apple application? (Swift)</label> <br>
                <input type="radio" name="app_dev_2_1" value="Beginner"> Beginner
                <input type="radio" name="app_dev_2_2" value="Novice"> Novice
                <input type="radio" name="app_dev_2_3" value="Intermediate"> Intermediate
                <input type="radio" name="app_dev_2_4" value="Advanced"> Advanced
                <input type="radio" name="app_dev_2_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you in development of a Samsung application? (Kotlin)</label><br>
                <input type="radio" name="app_dev_3_1" value="Beginner"> Beginner
                <input type="radio" name="app_dev_3_2" value="Novice"> Novice
                <input type="radio" name="app_dev_3_3" value="Intermediate"> Intermediate
                <input type="radio" name="app_dev_3_4" value="Advanced"> Advanced
                <input type="radio" name="app_dev_3_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you developing a cross-platform mobile application for both Samsung and Apple? (Dart via Flutter)</label><br>
                <input type="radio" name="app_dev_4_1" value="Beginner"> Beginner
                <input type="radio" name="app_dev_4_2" value="Novice"> Novice
                <input type="radio" name="app_dev_4_3" value="Intermediate"> Intermediate
                <input type="radio" name="app_dev_4_4" value="Advanced"> Advanced
                <input type="radio" name="app_dev_4_5" value="Expert"> Expert<br><br>

                <label>How comfortable are you in developing a web application?</label><br>
                <input type="radio" name="app_dev_5_1" value="Beginner"> Beginner
                <input type="radio" name="app_dev_5_2" value="Novice"> Novice
                <input type="radio" name="app_dev_5_3" value="Intermediate"> Intermediate
                <input type="radio" name="app_dev_5_4" value="Advanced"> Advanced
                <input type="radio" name="app_dev_5_5" value="Expert"> Expert<br><br>
            </section>

            <!----------- END OF APP DEVELOPMENT QUESTIONS ----------->

            <!------------- BEGINNING OF SOFT SKILLS QUESTIONS ------->

            <section>
                <h2>Soft Skills</h2>
                <hr>
            </section>

            <!------------- END OF SOFT SKILLS QUESTIONS ----------->

            <!------------- BEGINNING OF PERSONALITY QUESTIONS ------->
            <section>
                <hr>
                <label>I feel that I can effectively solve a problem utilizing my skill-set.</label><br>
                <input type="radio" name="leadership_2_1" value="Strongly Disagree"> Strongly Disagree
                <input type="radio" name="leadership_2_2" value="Disagree"> Disagree
                <input type="radio" name="leadership_2_3" value="Neutral"> Neutral
                <input type="radio" name="leadership_2_4" value="Agree"> Agree
                <input type="radio" name="leadership_2_5" value="Strongly Agree"> Strongly Agree<br><br>

                <label>Have you had any unique experience in internships that you would like to bring to the team?</label><br>
                <textarea name="leadership_3" rows="4" cols="50"></textarea><br><br>
            </section>

            <!------------- END OF PERSONALITY QUESTIONS ------------->

            <!-- SUBMIT BUTTON -->
            <button type="submit">Submit</button>
        </form>
    </body>
</html>