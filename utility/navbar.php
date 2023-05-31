<!-- Start header -->
<header class="top-navbar" style="height: 72px;position: fixed;z-index: 40;width: 100%;top: 0;left: 0;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: rgba(153,41,65,1); padding: 0;">
        <div class="container-fluid">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');

                #lg div div div span {
                    font-family: 'Times New Roman', Times, serif;
                    /* content: "NIT, DELHI"; */
                    color: white;
                    margin-left: 10px;
                    /* display: inline-block; */
                    cursor: pointer;
                }

                #lg {
                    /* padding-top: 10px; */
                    height: 72px;
                    padding-bottom: 0;
                    display: flex;
                    align-items: center;
                }

                .llll {
                    margin-top: 20px;
                }

                #logoo {
                    width: 140%;
                }

                @media (max-width:991px) {
                    #lg {
                        padding-top: 20px;
                        height: 60px;
                    }

                    .llll {
                        margin-top: 10px;
                    }

                    #logoo {
                        margin-right: 30px;
                    }
                }

                @media (max-width:430px) {
                    #logoo {
                        margin-right: 30px;
                        width: 60%;
                        padding-left: 5px;
                    }

                    .sm1 {
                        padding: 0;
                    }

                    .sm1 img {
                        margin-right: 0;
                    }

                    .sm11 {
                        margin-left: -28px;
                        padding: 0;
                    }

                    .sm11>span {
                        padding: 0;
                    }

                    .sm11>span {
                        font-size: 0.9rem;
                    }

                    .sm11>span span {
                        font-size: 0.8rem;
                    }
                }
            </style>
            <a class="navbar-brand" href="/" style="width: 200px; " id="lg">
                <div class="container llll">
                    <div class="row align-items-center">
                        <div class="column col-4 sm1"><img src="images/Logo_best.png" id="logoo" alt="" /></div>
                        <div class="column col-8 sm11" style="line-height: 20px; color: white;"><span>NIT DELHI
                                <br><span style="font-size: 0.9rem; font-family: Arial, Helvetica, sans-serif;">Training
                                    and Placement Cell</span></span>
                        </div>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation"
                style="    margin-right: 20px;">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host" style="height: 72px;">
                <style>
                    #ctm {
                        display: none;
                    }

                    @media (max-width:991px) {
                        #ct {
                            display: none;
                        }

                        #ctm {
                            display: block;
                        }

                        .top-navbar nav #navbars-host li {
                            margin: 0px 20px;
                            margin-left: 30px;
                        }

                        #sl {
                            margin-bottom: 10px;
                        }
                    }
                </style>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a class="nav-link" href="/">HOME</a></li>
                    <li class="nav-item dropdown"><a class="nav-link " id="dropdown-a" data-toggle="" href="#">WHY
                            RECRUIT @ NITD</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="whyrecruit.php" style="padding-right: 3px;">LIFE @ NITD</a>
                            <a class="dropdown-item" href="studentachievment.php" style="padding-right: 3px;">STUDENT
                                ACHIEVEMENTS</a>
                            <a class="dropdown-item" href="academics.php" style="padding-right: 3px;">ACADEMICS</a>
                            <a class="dropdown-item" href="departments.php" style="padding-right: 3px;">DEPARTMENTS</a>
                            <a class="dropdown-item" href="https://nitdelhi.irins.org/" style="padding-right: 3px;"
                                target="_blank">RESEARCH</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link " href="#" id="dropdown-a" data-toggle="">For Recruiters</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="Recruiters.php" style="padding-right: 3px;">PAST
                                RECRUITERS</a>
                            <a class="dropdown-item" href="statistics.php" style="padding-right: 3px;">PLACEMENT
                                STATISTICS</a>
                            <a class="dropdown-item" href="process.php" style="padding-right: 3px;">RECRUITMENT
                                PROCEDURE</a>
                            <a class="dropdown-item" href="companyInterestForm.php" style="padding-right: 3px;">COMPANY
                                INTEREST FORM</a>
                            <a class="dropdown-item" href="Brochure2024.pdf" style="padding-right: 3px;"
                                target="_blank">PLACEMENT BROCHURE (2022-23)</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: -0px;">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">For
                            Students</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="https://tnp-nitdelhi.herokuapp.com/"
                                style="padding-right: 3px;">STUDENT LOGIN</a>
                            <a class="dropdown-item" href="faq.php" style="padding-right: 3px;">FAQ</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="team.php"
                            style="padding-right: -5px;padding-left: 5px;">TEAM</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->