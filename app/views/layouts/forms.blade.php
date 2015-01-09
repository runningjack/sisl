<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/24/14
 * Time: 1:18 PM
 */
?>


<?php

//initilize the page
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

    <div class="col-md-9 col-lg-9 col ">
        @yield('content')
    </div>
    <div class="col-md-3 col-lg-3 col ">

        <div role="content">
            <div class="jarviswidjet ">
                <p><img src="<?php echo ASSETS_URL; ?>/img/stanbicibtc_stockbrokers.png"> </p>
            </div>
        </div>
    </div>
</div>




@include('includes.footer2')
<?php
//include required scripts
include("inc/scripts.php");
?>

<script src="<?php echo ASSETS_URL; ?>/js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/fuelux/wizard/wizard.min.js"></script>

<script>

    $(document).ready(function() {
        // PAGE RELATED SCRIPTS


        var $validator = $("#wizard-1").validate({

            rules: {
                email: {
                    required: true,
                    email: "Your email address must be in the format of name@domain.com"
                },
                firstname: {
                    required: true
                },
                lastname: {
                    required: true
                },
                religion: {
                    required: true
                },
                gender: {
                    required: true
                },
                mm: {
                    required: true
                },
                dd: {
                    required: true
                },
                yy: {
                    required: true
                },
                city: {
                    required: true
                },
                postal: {
                    required: true,
                    minlength: 4
                },
                phone: {
                    required: true,
                    minlength: 8
                },
                hphone: {
                    required: true,
                    minlength: 10
                }
            },

            messages: {
                firstname:      "Please specify your First name",
                lastname:       "Please specify your Last name",
                religion:       "Please specify your religion",
                gender:         "Please specify your gender",
                mm:             "Please specify your month of birth",
                dd:             "Please specify your date of birth",
                yy:             "Please specify your year of birth",
                phone:{
                    required:   "Please specify your phone number",
                    minlength:  "Your phone number must be of a minimum of 8"
                },
                email: {
                    required:   "We need your email address to contact you",
                    email:      "Your email address must be in the format of name@domain.com"
                }
            },

            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });

        $('#bootstrap-wizard-1').bootstrapWizard({
            'tabClass': 'form-wizard',
            'onNext': function (tab, navigation, index) {
                var $valid = $("#wizard-1").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                } else {
                    $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                        'complete');
                    $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                        .html('<i class="fa fa-check"></i>');
                }
            }
        });



        // fuelux wizard
        var wizard = $('.wizard').wizard();

        wizard.on('finished', function (e, data) {
            //$("#fuelux-wizard").submit();
            //console.log("submitted!");
            $.smallBox({
                title: "Congratulations! Your form was submitted",
                content: "<i class='fa fa-clock-o'></i> <i>1 seconds ago...</i>",
                color: "#5F895F",
                iconSmall: "fa fa-check bounce animated",
                timeout: 4000
            });

        });



    })

</script>

<?php
//include footer
include("inc/google-analytics.php");
?>