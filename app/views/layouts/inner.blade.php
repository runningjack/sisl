<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/18/14
 * Time: 2:04 PM
 */

require_once("inc/init.php");


require_once("inc/config.ui.php");




$page_css[] = "your_style.css";
?>
<!DOCTYPE html>
<html>
<head>
    @include('includes.head2')
</head>
<body>
@include('includes.header2')



<div class="row">
    <div class="row">&nbsp;</div>
    <div class="col-md-2 col-lg-2 col ">

        <div class="metro">
            <div class="sidebar light">
                <ul>
                    <li > <img src='{{ASSETS_URL}}/img/stanbic-contact-us.png'></li>



                </ul>
            </div>
        </div>

    </div>
    <div class="col-md-7 col-lg-7 col ">
        @yield('content')
    </div>
    <div class="col-md-3 col-lg-3 col ">

        @include('includes.sidebar')
    </div>
</div>





@include('includes.footer')
<?php
//include required scripts
include("inc/scripts.php");
?>



<script>

    $(document).ready(function() {
        // PAGE RELATED SCRIPTS
    })

</script>

<?php
//include footer
include("inc/google-analytics.php");
?>