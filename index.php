<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Blank Page";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php"); //header

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["misc"]["sub"]["blank"]["active"] = true;
//include("inc/nav.php");

?>
    <!-- ==========================CONTENT STARTS HERE ========================== -->
    <!-- MAIN PANEL -->
    <div id="main" role="main">


        <!-- MAIN CONTENT -->
        <div id="content">



        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
    <!-- ==========================CONTENT ENDS HERE ========================== -->

    <!-- PAGE FOOTER -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-12 col-lg-5 col-xl-5 columns">
                    <h4>Newsletter</h4>
                    <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-lg-8 col-xl-8 columns">
                            <form class="form" action="#" method="POST">

                                <div class="">
                                    <div class="row collapse">

                                        <div class="small-10 columns">
                                            <input type="text" placeholder="Enter your email">
                                        </div>
                                        <div class="small-2 columns">
                                            <span class="postfix">Go!</span>
                                        </div>

                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 columns">
                    <h4>Our Office</h4>
                    <div id="tweet" class="twitter">
                        <p><!-- Languages --->
                        </p><div class="language_box">

                        </div>
                        <p></p><address>44 Osolo Way off MM In't Airport Rd Ajao Estate</address>
                        <address>70 Mushin Road, Isolo Lagos. </address>
                        <address>12 Association Avenue Surulere Ijesha Lagos,</address>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col">
                    <div class="contact-details">
                        <h4>Help Center</h4>
                        <ul class="side-nav" role="navigation" title="Link List">
                            <li role="menuitem"><a href="#">Why?</a></li>
                            <li role="menuitem"><a href="#">What is Stock Broking</a></li>
                            <li role="menuitem"><p><i class="fa fa-envelope"></i> <strong style="">Email:</strong> <a style="display: inline" href="mailto:support@stanbicstockbrokers.com">support@stanbicstockbrokers.com</a></p></li>


                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <div class="footer-copyright">

                <div class="row">
                    <div class="col-md-2 col-sm-12 col-lg-2 col-xl-2">
                        <a href="#" class="logo">
                            <img alt="Stanbic stock brokers " src="../public/img/logo2.png">
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-5 col-lg-5 col-xl-5">
                        <p> © 2014 All Rights reserved by <a href="#">Stanbic Stock Brokers</a></p>
                    </div>
                    <div class="col-md-5 col-sm-5 col-lg-5 col-xl-5 ">
                        <dl class="sub-nav" role="menu" title="Filter Menu List">
                            <dd role="menuitem"><a href="#">Partners</a></dd>
                            <dd role="menuitem"><a href="#">Privacy Policy</a></dd>
                            <dd role="menuitem"><a href="#">Terms &amp; Conditions</a></dd>
                        </dl>
                    </div>
                </div>

        </div>
    </footer>
    <!-- END PAGE FOOTER -->

<?php
//include required scripts
include("inc/scripts.php");
?>

    <!-- PAGE RELATED PLUGIN(S)
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->

    <script>

        $(document).ready(function() {
            // PAGE RELATED SCRIPTS
        })

    </script>

<?php
//include footer
include("inc/google-analytics.php");
?>