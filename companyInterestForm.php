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

    <div class="container" style="margin-top: 109px;">
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
            }
            
            @media (max-width: 530px) {
                .tab button {
                    padding: 14px 6px !important;
                }
            }
            
            @media (max-width:530px) {
                .tab button {
                    font-size: 15px;
                    padding: 5px;
                    width: 50%;
                }
            }
        </style>

        <h2 style="text-align: center;margin-top: 60px;font-weight: bold;color: #eea412;font-size: 24px;">Company Interest Form</h2>
        <div class="tab">
            <button class="tablinks" onclick="openJnf(event, 'jnf')" style="font-weight: bold;">FILL JNF/JAF<br>DIRECT RECRUITMENT</button>
            <button class="tablinks" onclick="openJnf(event, 'summer-jnf')" style="font-weight: bold;">FILL JNF/JAF<br>FOR INTERNSHIP</button>
        </div>

        <div id="jnf" class="tabcontent" style="background: #ede7f6;">
            <div id="googleform" style="width: 100%;text-align: center;">
            </div>
        </div>

        <div id="summer-jnf" class="tabcontent" style="background: #ede7f6;">
            <div id="googleform-smr" style="width: 100%;text-align: center;">
            </div>
        </div>


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
        $(document).ready(function() {
            let w = window.innerWidth;
            if (w > 764) {
                $(".container #googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdMh11Nb5I1yAifpQDhbLxRwP7CA6Amn6gFQ__ftgQBK404ww/viewform?embedded=true' width='100%' height='1150' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: 0px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'id='idIframe'>Loading…</iframe>")
            } else if (w > 400 && w <= 764) {
                $(".container #googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdMh11Nb5I1yAifpQDhbLxRwP7CA6Amn6gFQ__ftgQBK404ww/viewform?embedded=true' width='100%' height='1300' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
            } else if (w <= 400) {
                $(".container #googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSdMh11Nb5I1yAifpQDhbLxRwP7CA6Amn6gFQ__ftgQBK404ww/viewform?embedded=true' width='100%' height='1300' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                $("#formimg").css("display", "none");
            }
        });


        $(document).ready(function() {
            let w = window.innerWidth;
            if (w > 764) {
                $('#googleform-smr').html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='100%' height='1250' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>")
            } else if (w > 400 && w <= 764) {
                $('#googleform-smr').html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='100%' height='1300' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
            } else if (w <= 400) {
                $('#googleform-smr').html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='100%' height='1320' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                $("#formimg").css("display", "none");
            }
        });
    </script>
    <style>
        .box {
            box-shadow: 0 0 5px 2px rgb(221, 218, 218);
            padding: 35px;
            border-radius: 10px;
            margin: 0 60px;
            margin-bottom: 60px;
        }
        
        .box>div {
            margin-bottom: 60px;
        }
        
        .box div div h3 {
            font-weight: bolder;
        }
        
        .box .divinp {
            position: relative;
            left: 100px;
            display: flex;
        }
        
        .box .divinp input {
            outline: none;
            border: none;
            width: 80%;
            /* border-radius: 10px; */
            border-bottom: 1px solid grey;
            /* //yhan border change krna h*/
            padding: 0px;
        }
        
        .box .divinp label {
            position: absolute;
            left: 18px;
            top: 0;
            transition: all 0.3s;
            color: rgb(136, 132, 132);
            cursor: text;
        }
        
        .box .divinp input:focus~label {
            top: -18px;
            color: rgb(77, 77, 235);
            font-size: smaller;
        }
        
        .box .divinp label:active~input {
            border: none;
        }
        
        div.btn {
            padding: 0;
        }
        
        div.btn input {
            background-color: rgb(144, 144, 255);
            color: white;
            width: 100px;
            align-self: center;
            border: 1px solid rgb(144, 144, 255);
            transition: all 0.3s;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px;
        }
        
        div.btn input:hover {
            color: rgb(144, 144, 255);
            background-color: white;
        }
        
        div.btn input:active {
            background-color: rgb(144, 144, 255);
            color: white;
            border: 1px solid rgb(144, 144, 255);
        }
        
        @media (max-width: 767px) {
            .box {
                margin: 0 10px 50px 10px;
                padding: 20px;
            }
            .box>div>div {
                display: flex;
                flex-direction: column;
                align-content: center;
                /* justify-content: center; */
                /* width: 100%; */
            }
            .box .divinp {
                position: relative;
                /* justify-content: center; */
                left: 0px;
            }
            .box>div>div h3 {
                margin-bottom: 20px;
                text-align: left;
            }
        }
    </style>
    <div id="contact" class="section wb">
        <div class="container" style="text-align: center;">
            <div class="section-title text-center">
                <h3 style="font-size: 22px;">Company Interest Form</h3>
            </div>
            <!-- end title -->
            <form action="contact.php">
                <div class="row">
                    <div class="row box">
                        <div class="col-12 col-md-10">
                            <h2 style="text-align: center;font-weight: bolder;margin-bottom: 30px;">Basic Details</h2>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h3>Company Name</h3>
                                </div>
                                <div class="col-12 col-md-6 divinp">
                                    <input type="text" id="cname" name="cname">
                                    <label for="cname">Company Name *</label>
                                    <!-- <span>Company Name *</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>Official Email-Id</h3>
                                </div>
                                <div class="col-md-6 col-12 divinp">
                                    <input type="text" id="email" name="email">
                                    <label for="email">Email-Id *</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>Company's Website Link(if any)</h3>
                                </div>
                                <div class="col-md-6 col-12 divinp">
                                    <input type="text" id="wlink" name="wlink">
                                    <label for="wlink">Website Link</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row box" style="width: 90%;">
                        <div class="col-12 col-md-10">
                            <h2 style="text-align: center;font-weight: bolder;margin-bottom: 30px;">Interested in</h2>
                            <div class="row" style="justify-content: left;">
                                <div class="col-12" style="text-align: left;margin-left: 50px;">
                                    <div>
                                        <input type="checkbox" id="placement" name="placement" value="placement">
                                        <label for="placement"><strong style="font-size: 22px;margin-left: 10px;"> Placement</strong></label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="ppo" name="ppo" value="ppo">
                                        <label for="ppo"><strong style="font-size: 22px;margin-left: 10px;">P.P.O</strong> </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="row box">
                        <div class="col-12 col-md-10">
                            <h2 style="text-align: center;font-weight: bolder;margin-bottom: 30px;">Contact Information</h2>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>HR Mobile No.</h3>
                                </div>
                                <div class="col-md-6 col-12 divinp">
                                    <input type="text" id="mno" name="number">
                                    <label for="mno">Mobile No. *</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>Alternate Contact no.</h3>
                                </div>
                                <div class="col-md-6 col-12 divinp">
                                    <input type="text" id="amno" name="anumber">
                                    <label for="amno">Alternate Contact no.</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>HR Mail ID</h3>
                                </div>
                                <div class="col-md-6 col-12 divinp">
                                    <input type="email" id="hemail" name="hemail">
                                    <label for="hemail">HR Mail ID *</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row box" style="width: 90%;">
                        <div class="col-12 col-md-10">
                            <h2 style="text-align: center;font-weight: bolder;margin-bottom: 30px;">Message</h2>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>Message</h3>
                                </div>
                                <div class="col-md-6 col-12 divinp">
                                    <input type="text" id="msg" name="msg">
                                    <label for="msg">Message</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="btn">
                    <input type="submit" value="submit">
                </div>
            </form>
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
    <script>
    </script>

</body>

</html>