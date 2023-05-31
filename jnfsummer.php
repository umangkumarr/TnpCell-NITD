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
<script src="js/jquery.js"></script>
<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">



     <!-- Header -->
     <?php include_once './utility/navbar.php'; ?>


    <style>
        #contact {
            margin-top: 72px;
        }
        
        @media (max-width:991px) {
            #contact {
                margin-top: 50px;
            }
        }
    </style>
    <div id="contact" class="section wb" style="background: #ede7f6;">
        <div class="container" style="display: flex;flex-direction: column;align-items: center;justify-content: center;background: #ede7f6;margin-top: -20px;">
            <style>
                #contact div a.smjnf {
                    color: #eea412;
                    border-color: #eea412;
                }
                
                #contact div a.smjnf:hover {
                    color: white;
                    border-color: #eea412;
                    background-color: #eea412;
                }
            </style>
            <a class="hover-btn-new smjnf" href="jnfsummer.html" style="padding: 0 4px;position: absolute;top: 50px;right: 70px;"><span style="padding: 0;margin: 0;font-weight: 500;">Fill JNF/JAF</span></a>
            <div class="section-title text-center">
                <h3 style="color: #eea412;margin-top: 0px;">FILL THE SUMMER JNF/JAF</h3>
                <p class="lead">Please fill the following details, So that we could be able to understand your requirements and placements</p>
            </div>
            <!-- end title -->
            <div style="text-align: center;" id="formimg"><img src="images/nit.jpg" alt="" height="400px" width="100%" style="z-index: 3; border-radius: 10px;"></div>
            <div id="googleform" style="width: 100%;text-align: center;">
            </div>
            <script>
                $(document).ready(function() {
                    let w = window.innerWidth;
                    if (w > 764) {
                        $("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='640' height='1250' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: -200px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>")
                    } else if (w > 400 && w <= 764) {
                        $("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='90%' height='1300' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: -200px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                    } else if (w <= 400) {
                        $("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSe9VUf6xubCy1ErJECtsIAFYLSnMbesY4yYWwFG4rP5eYcwHg/viewform?embedded=true' width='106%' height='1320' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: -10px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                        $("#formimg").css("display", "none");
                    }
                    // if(w>764){
                    // 	$("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSftfbPxv2KiEKZowAaqPADyz4hs21F9Q08X564WNIqI4yt2Uw/viewform?embedded=true' width='640' height='1840' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: -200px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>")
                    // }else if(w>400 && w<=764){
                    // 	$("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSftfbPxv2KiEKZowAaqPADyz4hs21F9Q08X564WNIqI4yt2Uw/viewform?embedded=true' width='90%' height='2000' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: -200px;background: #ede7f6;margin-right: 0;margin-left: 0;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                    // }else if(w<=400){
                    // 	$("#googleform").html("<iframe src='https://docs.google.com/forms/d/e/1FAIpQLSftfbPxv2KiEKZowAaqPADyz4hs21F9Q08X564WNIqI4yt2Uw/viewform?embedded=true' width='109%' height='2050' frameborder='0' marginheight='0' marginwidth='0' style='scroll-behavior: smooth;margin-bottom: 20px;margin-top: 10px;background: #ede7f6;margin-right: 0;margin-left: -10px;padding: 0;border-radius: 20px;'>Loading…</iframe>");
                    // 	$("#formimg").css("display","none");
                    // }
                });
            </script>
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
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
    <!-- Mapsed JavaScript -->
    <script src="js/mapsed.js"></script>
    <script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>

</html>