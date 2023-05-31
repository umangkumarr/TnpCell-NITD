<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>T&P Cell, NIT Delhi</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/download.png" type="image/x-icon" />

<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- <link rel="stylesheet" href="css/jquery.roadmap.min.css"> -->

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>
<script src="js/jquery.min.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

    <!-- Header -->
    <?php include_once './utility/navbar.php'; ?>

    <div class="container" style="margin-top: 109px;margin-bottom: 100px;">
        <style>
            body {
                font-family: Arial;
            }

            /* Style the tab */

            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */

            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */

            .tab button:hover {
                background-color: #f0b745;
            }

            /* Create an active/current tablink class */

            .tab button.active {
                background-color: #eea412;
            }

            /* Style the tab content */

            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }

            @media (max-width: 766px) and (min-width:530px) {
                .tab button {
                    padding: 14px 6px !important;
                }

                .tab button:nth-child(1) {
                    border-left: 1px solid #eea412;
                    border-right: 1px solid #eea412;
                }
            }

            @media (max-width: 530px) {
                .tab button {
                    padding: 14px 6px !important;
                }

                .tab button:nth-child(1) {
                    border-left: 1px solid #eea412;
                    border-right: 1px solid #eea412;
                }
            }

            @media (max-width:530px) {
                .tab button {
                    font-size: 13px;
                    padding: 3px;
                    width: 50%;
                }
            }

            @media (max-width: 992px) {
                .immg {
                    margin-top: 40px;
                }
            }
        </style>
        <h2
            style="text-align: center;margin-top: 60px;font-weight: bold;color: #eea412;font-size: 2.3rem;margin-bottom: 20px;">
            Academics</h2>
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="tab">
                    <button class="tablinks active" onclick="openJnf(event, 'jnf')"
                        style="font-weight: bold;">UNDERGRADUATE</button>
                    <button class="tablinks" onclick="openJnf(event, 'summer-jnf')"
                        style="font-weight: bold;">POSTGRADUATE</button>
                    <button class="tablinks" onclick="openJnf(event, 'phd')"
                        style="font-weight: bold;padding-left: 40px;padding-right: 50px;text-transform: none;">Ph.d.</button>
                </div>

                <div id="jnf" class="tabcontent" style="background: #ede7f6;display: block;">
                    <i class="fa fa-check"
                        style="    font-size: 20px;font-weight: 10;line-height: 0;margin-right: 8px;color: #4154f1;"></i>
                    <h4 style="    font-size: 18px;margin: 0;font-weight: 700;color: #012970;display: inline-block;">
                        B.Tech.</h4>
                    <p style="font-size: 16px;font-family: Arial, Helvetica, sans-serif;color: rgb(134, 132, 132);">NIT
                        Delhi offers following B.Tech. Programmes:<br>
                    <ul>
                        <li>Computer Science and Engineering</li>
                        <li>Electronics and Communication Engineering</li>
                        <li>Electrical and Electronics Engineering</li>
                    </ul>
                    </p>
                    <p
                        style="margin-top: 30px;border: 1px solid rgb(135, 135, 247);padding: 10px;border-radius: 5px;font-size: 20px;line-height: 1.5;color: #084298;">
                        While completion of courses bring students closer to completing their degree at NIT, what drives
                        the academic culture is the zeal to learn and apply, both from students’ as well as professors’
                        end. Many students come up with innovative,
                        novel ideas registered as patents, or even incubated as start-ups.</p>
                </div>

                <div id="summer-jnf" class="tabcontent" style="background: #ede7f6;">
                    <i class="fa fa-check"
                        style="    font-size: 20px;font-weight: 10;line-height: 0;margin-right: 8px;color: #4154f1;"></i>
                    <h4 style="    font-size: 18px;margin: 0;font-weight: 700;color: #012970;display: inline-block;">
                        M.Tech.</h4>
                    <p style="font-size: 16px;font-family: Arial, Helvetica, sans-serif;color: rgb(134, 132, 132);">NIT
                        Delhi offers following M.Tech. Programmes:<br>
                    <ul>
                        <li>Computer Science and Engineering<br>Specialisation in Analytics</li>
                        <li>Electronics and Communication Engineering<br>Specialisation in VLSI </li>
                        <li>Electronics and Communication Engineering<br>Specialisation in ECE </li>
                        <li>Electrical and Electronics Engineering<br>Specialisation in Power Electronics and Drive</li>
                        <li>Mechanical Engineering<br>Specialisation in CAD/CAM</li>
                    </ul>
                    </p>
                    <p
                        style="margin-top: 30px;border: 1px solid rgb(135, 135, 247);padding: 10px;border-radius: 5px;font-size: 20px;line-height: 1.5;color: #084298;">
                        While completion of courses bring students closer to completing their degree at NIT, what drives
                        the academic culture is the zeal to learn and apply, both from students’ as well as professors’
                        end. Many students come up with innovative,
                        novel ideas registered as patents, or even incubated as start-ups.</p>
                </div>
                <div id="phd" class="tabcontent" style="background: #ede7f6;">
                    <i class="fa fa-check"
                        style="    font-size: 20px;font-weight: 10;line-height: 0;margin-right: 8px;color: #4154f1;"></i>
                    <h4 style="    font-size: 18px;margin: 0;font-weight: 700;color: #012970;display: inline-block;">
                        Ph.d.</h4>
                    <p style="font-size: 16px;font-family: Arial, Helvetica, sans-serif;color: rgb(134, 132, 132);">
                        Students at NIT DELHI can persue any of the following Ph.d. Courses<br>
                    <ul>
                        <li>Ph.d. in Applied Physics</li>
                        <li>Ph.d. in Applied Chemistry</li>
                        <li>Ph.d. in Applied Mathematics</li>
                        <li>Ph.d. in Computer Science and Engineering</li>
                        <li>Ph.d. in Electrical and Electronics Engineering</li>
                        <li>Ph.d. in Electronics and Communication Engineering</li>
                        <li>Ph.d. in Humanities</li>
                        <li>Ph.d. in Environmental Engineering</li>
                    </ul>
                    </p>
                    <p
                        style="margin-top: 30px;border: 1px solid rgb(135, 135, 247);padding: 10px;border-radius: 5px;font-size: 20px;line-height: 1.5;color: #084298;">
                        While completion of courses bring students closer to completing their degree at NIT, what drives
                        the academic culture is the zeal to learn and apply, both from students’ as well as professors’
                        end. Many students come up with innovative,
                        novel ideas registered as patents, or even incubated as start-ups.</p>
                </div>
            </div>
            <div class="col-lg-5 col-12 immg">
                <img src="images/acd.png" alt="" style="width: 100%;height: auto;">
            </div>
        </div>



        <script>
            function openJnf(evt, JNF) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(JNF).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>

    </div>

    <!-- footer -->
    <?php include_once './utility/footer.php'; ?>

    <!-- copyrights -->
    <?php include_once './utility/copyrights.php'; ?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>

</html>