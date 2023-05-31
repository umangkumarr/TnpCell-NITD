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


    <div class="JNFsec animated animatedFadeInUp fadeInUpanimated animatedFadeInUp fadeInUp" style="margin-top:3%;">
        <div class=" contactJnf">
            <h1 style="font-weight: bold;color: #012970;margin-top: 10%;">Looking to
                Hire
                from
                NIT
                Delhi?
                <br>
                Fill
                the Job Notification Form today!!!
            </h1>
            <div class="col-lg-6">
                <img class="contact-us" src="images\contact-us.png" alt="contact-us">
            </div>
            <!-- </div>
    </div> -->
        </div class="tab ">
        <button class="btn btn-info  btn-sm jnfButton1 tablinks" onclick="openJnf(event, 'jnf')"
            style="font-weight: bold;">FILL
            JNF/JAF<br>DIRECT RECRUITMENT</button>
        <button class="btn btn-secondary  btn-sm jnfButton tablinks" onclick="openJnf(event, 'summer-jnf')"
            style="font-weight: bold;">FILL
            JNF/JAF<br>SUMMER INTERNSHIP</button>
    </div>
    <div id="jnf" class="tabcontent" style="background: #ede7f6;">
        <div id="googleform" style="width: 100%;text-align: center;">
        </div>
    </div>

    <div id="summer-jnf" class="tabcontent" style="background: #ede7f6;">
        <div id="googleform-smr" style="width: 100%;text-align: center;">
        </div>
    </div>
    <style>
        .host_version {
            overflow-x: hidden;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .contactJnf {
            padding: 8;
            margin: 10;
            display: flex;
            border: #012970;
            line-height: 10.6;
            margin-top: 20;


        }

        .contactJnf h1 {
            margin-left: 5%;
            margin-top: 7rem;
            ;
        }

        .contact-us {
            margin-top: 5rem;
            margin-left: 17%;
        }

        .jnfButton1 {
            padding: auto;
            margin-left: 10%;
            margin-bottom: 3%;

        }

        .jnfButton {
            padding: auto;
            margin-left: 2%;
            margin-bottom: 3%;
        }

        .JNFsec {
            /* ff 3.6+ */
            background: -moz-radial-gradient(circle at 47% 50%, rgba(0, 160, 255, 1) 0%, rgba(0, 188, 212, 0.21) 0%, rgba(0, 188, 212, 0.19) 50%, rgba(137, 130, 238, 0.09) 100%);

            /* safari 5.1+,chrome 10+ */
            background: -webkit-radial-gradient(circle at 47% 50%, rgba(0, 160, 255, 1) 0%, rgba(0, 188, 212, 0.21) 0%, rgba(0, 188, 212, 0.19) 50%, rgba(137, 130, 238, 0.09) 100%);

            /* opera 11.10+ */
            background: -o-radial-gradient(circle at 47% 50%, rgba(0, 160, 255, 1) 0%, rgba(0, 188, 212, 0.21) 0%, rgba(0, 188, 212, 0.19) 50%, rgba(137, 130, 238, 0.09) 100%);

            /* ie 10+ */
            background: -ms-radial-gradient(circle at 47% 50%, rgba(0, 160, 255, 1) 0%, rgba(0, 188, 212, 0.21) 0%, rgba(0, 188, 212, 0.19) 50%, rgba(137, 130, 238, 0.09) 100%);

            /* global 92%+ browsers support */
            background: radial-gradient(circle at 47% 50%, rgba(0, 160, 255, 1) 0%, rgba(0, 188, 212, 0.21) 0%, rgba(0, 188, 212, 0.19) 50%, rgba(137, 130, 238, 0.09) 100%);
            margin-top: 5%;
        }

        @media screen and (max-width: 580px) {
            .contact-us {
                display: none;
                background-color: #012970;
            }

            .contactJnf h1 {
                font-size: 1.5rem;
                width: 100%;
                text-align: left;
                margin-top: 5%;
            }
        }

        @media screen and (max-width:382px) {
            .jnfButton {
                margin-left: 10% !important;
            }

            .contactJnf {
                margin-top: 10% !important;
            }

        }

        @media screen and (max-width: 770px) {
            .contact-us {
                display: none;
                background-color: #012970;
            }
        }

        @media screen and (max-width: 1400px) {
            .contactJnf h1 {
                font-size: 2.6rem;
                width: 50%;
            }

        }
    </style>

    <div id="jnf" class="tabcontent" style="background: #ede7f6;">
        <div id="googleform" style="width: 100%;text-align: center;">
        </div>
    </div>

    <div id="summer-jnf" class="tabcontent" style="background: #ede7f6;">
        <div id="googleform-smr" style="width: 100%;text-align: center;">
        </div>
    </div>
    <!--JNF form-->





    <h1 class="animated animatedFadeInUp fadeInUpanimated animatedFadeInUp fadeInUp"
        style="margin-top:50px;color: #012970;text-align: center;font-weight: bolder;">Contact Us</h1>
    <div id="contact" class="section wb ">
        <div class="cards " style="text-align: center;">
            <div class="col-md-3">
                <div class="card bg-light card-block info-box shadow-lg p-3 mb-5 bg-white rounded"
                    style=" padding-top: 10%;">
                    <div class="head" style="display:flex; align-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-map-pin">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <h3><i class="bi bi-geo-alt"></i> Address</h3>
                    </div>
                    <a href="https://www.google.com/maps/dir//R48J%2B6V+National+Institute+of+Technology+Delhi,+National+Institute+of+Technology+Plot+No.+FA7,Zone,+P1,+GT+Karnal+Rd,+Delhi,+110036/@28.9025366,78.1580267,6z/data=!4m17!1m7!3m6!1s0x390d1b1923ada2e3:0x1169930518add2fe!2sNational+Institute+of+Technology+Delhi!8m2!3d28.8162558!4d77.1332341!16s%2Fm%2F0l8gg7v!4m8!1m0!1m5!1m1!1s0x390d1b1923ada2e3:0x1169930518add2fe!2m2!1d77.1332341!2d28.8162558!3e2"
                        target="_blank"
                        style="text-align: center; margin-top: 2.5%;padding-bottom: 3%;font-size: small;">
                        National Institute of Technology
                        <br>
                        Plot No. FA7,Zone P1,<br> GT Karnal Road, Delhi-110036
                    </a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 callus">
                <div class=" card bg-light card-block info-box shadow-lg p-3 mb-5 bg-white rounded"
                    style=" padding-top: 10%;">
                    <div class="head " style="display:flex">
                        <svg viewBox="0 0 24 24" width="44" height="44" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        </svg>
                        <h3><i class="bi bi-telephone "></i> Call Us</h3>
                    </div>
                    <p>
                        <a class="btn btn-outline-primary" style="margin-bottom:1.5%;font-size: small;"
                            href="tel:+91-011-33861065">+91-011-33861065</a>
                        <br>
                        <a class="btn btn-outline-primary" style="font-size: small;"
                            href="tel:+91-011-33861183">+91-011-33861183</a>
                    </p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="card bg-light card-block shadow-lg p-3 mb-5 bg-white rounded"
                    style=" padding-top: 10%; padding-bottom: 5%; margin-top: 2.5%;">
                    <div class="head" style="display:flex">
                        <svg viewBox="0 0 24 24" width="44" height="44" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <h3><i class="bi bi-envelope"></i> Email Us</h3>
                    </div>
                    <br>
                    <a class="btn btn-outline-primary " style="margin-left: 7%;margin-right: 7%;font-size: small;"
                        href="mailto:tnp@nitdelhi.ac.in">tnp@nitdelhi.ac.in</a>
                </div>
            </div>
        </div>

        <div class="col-md-9 ">
            <iframe id="itsmap" class="shadow-lg p-3 mb-5 bg-white rounded"
                style="border: 0; width: 100%; height: 500px ; margin-top: 2.5%;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13983.721902328205!2d77.1294815896788!3d28.811145645414022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b1923ada2e3%3A0x1169930518add2fe!2sNational%20Institute%20of%20Technology%20Delhi!5e0!3m2!1sen!2sin!4v1676659578362!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row">
        <div class="container" style="margin-top: 10px;">
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


                .card {
                    border: 0;
                }

                .card h1 {
                    color: #012970;
                }

                .head {
                    margin-left: 20%;
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




                }

                @media screen and (max-width: 760px) {
                    .tab button {
                        padding: 14px 6px !important;
                    }

                    .callus {
                        margin-top: 10px;
                    }

                }

                /* @media (max-width:530px) {
                    .tab button {
                        font-size: 15px;
                        padding: 5px;
                        width: 50%;
                    }
                } */

                @media screen and (min-width: 1000px) {

                    .cards {
                        display: flex;
                        margin-top: 0.5%;
                        margin-left: 10%;
                    }

                    #itsmap {
                        margin-left: 17%;
                        margin-top: 5%;
                    }

                    .card:hover {
                        cursor: pointer;
                        transform: scale(1.2);
                        transform-origin: 50% 65%;
                        transition: transform 1s, filter 2s ease-in-out;
                        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                    }


                    /* Animation */

                    @keyframes fadeInUp {
                        from {
                            transform: translate3d(0, 40px, 0)
                        }

                        to {
                            transform: translate3d(0, 0, 0);
                            opacity: 1
                        }
                    }

                    @-webkit-keyframes fadeInUp {
                        from {
                            transform: translate3d(0, 40px, 0)
                        }

                        to {
                            transform: translate3d(0, 0, 0);
                            opacity: 1
                        }
                    }

                    .animated {
                        animation-duration: 1s;
                        animation-fill-mode: both;
                        -webkit-animation-duration: 1s;
                        -webkit-animation-fill-mode: both
                    }

                    .animatedFadeInUp {
                        opacity: 0
                    }

                    .fadeInUp {
                        opacity: 0;
                        animation-name: fadeInUp;
                        -webkit-animation-name: fadeInUp;
                    }
                }

                /* .cards {
                    align-content: center;
                } */

                /* @media (min-width: 992px) {

                    #itsmap {
                        margin-left: 25%;
                    }
                } */

                @media screen and (min-width: 768px) {
                    #itsmap {
                        margin-left: 17%;
                        margin-top: 5%;
                    }

                    .cards {
                        display: flex;
                    }


                }

                @media (max-width: 768px) {

                    #itsmap {
                        margin-left: 0% !important;
                    }

                    .callus {
                        margin-top: 10px;
                    }
                }
            </style>



            <script>
                function openJnf(evt, JNF) {
                    var i, tabcontent, tablinks;
                    var temp = 0
                    if (document.getElementById(JNF).style.display === "block") {
                        console.log("yes")
                        temp = 1
                    } else {
                        temp = 0
                    }
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    if (temp == 0) {
                        document.getElementById(JNF).style.display = "block";
                        evt.currentTarget.className += " active";
                    }
                }
            </script>

        </div>
        <script>
            $(document).ready(function () {
                let w = window.innerWidth;
                if (w > 764) {
                    $("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdMh11Nb5I1yAifpQDhbLxRwP7CA6Amn6gFQ__ftgQBK404ww/viewform?embedded=true' width='100%' height='750' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: 0px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'id='idIframe'>Loading…</iframe>")
                } else if (w > 400 && w <= 764) {
                    $("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdMh11Nb5I1yAifpQDhbLxRwP7CA6Amn6gFQ__ftgQBK404ww/viewform?embedded=true' width='100%' height='1300' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                } else if (w <= 400) {
                    $(" #googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdMh11Nb5I1yAifpQDhbLxRwP7CA6Amn6gFQ__ftgQBK404ww/viewform?embedded=true' width='100%' height='1300' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                    $("#formimg").css("display", "none");
                }
            });


            $(document).ready(function () {
                let w = window.innerWidth;
                if (w > 764) {
                    $('#googleform-smr').html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='100%' height='750' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>")
                } else if (w > 400 && w <= 764) {
                    $('#googleform-smr').html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='100%' height='1300' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                } else if (w <= 400) {
                    $('#googleform-smr').html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='100%' height='1320' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                    $("#formimg").css("display", "none");
                }
            });
        </script>
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end section -->



    <!-- footer -->
    <?php include_once './utility/footer.php'; ?>

    <!-- copyrights -->
    <?php include_once './utility/copyrights.php'; ?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- Mapsed JavaScript -->
    <script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>

</html>