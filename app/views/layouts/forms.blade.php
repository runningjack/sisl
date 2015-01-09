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
                gender: {required: true
                },
                mother_maiden_name: {required: true
                },
                residential_address: { required :true
                },
                mailing_address:{required: true
                },
                residence_date:{required : true
                },
                mm: { required: true
                },
                dd: { required: true
                },
                yy: {required: true
                },
                city: { required: true
                },
                phone: {required: true,minlength: 8
                },
                country_of_residence :{required: true
                },
                nationality: {required: true
                },
                other_country_pass:{required : true
                },
                identification_type :{required : true
                },
                identification_number :{required: true
                },
                issuance_date :{required: true
                },
                expiry_date :{required : true
                },
                place_of_issuance :{required :true
                },education_level:{required:true},company_name:{required:true},company_address:{required:true},company_phone:{required:true},annual_ave_income:{required:true},source_of_fund:{required:true},
                bank_name:{required:true},account_name:{required:true},account_number:{required:true},bvn:{required:true},
                kin_firstname:{required:true},kin_lastname:{required:true},kin_relationship:{required:true},kin_phone:{required:true}

            },

            messages: {
                firstname:      "Please specify your First name",
                lastname:       "Please specify your Last name",
                religion:       "Please specify your religion",
                gender:         "Please specify your gender",
                mother_maiden_name : "Please specify your mother's maiden name",
                residential_address :"Please specify your address of residence",
                mailing_address : "Please specify mailing address",
                residence_date  : "Please specify date of entrance into present residence",
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
                },
                country_of_residence                :"Please specify country of residence",
                nationality                         :"Please specify nationality",
                other_country_pass                  :"Please specify other country passport if any",
                identification_type                 :"Please specify identification type",
                place_of_issuance                   :"Please specify place of issuance",
                education_level:"Please specify education level",company_name:"Please specify company name",company_address:"Please specify company address",company_phone:"Please specify company phone",annual_ave_income:"Please specify average annual income",source_of_fund:"Please specify source of investment fund",
                bank_name:"Please specify bank name",account_name:"Please specify account name",account_number:"Please specify account number",bvn:"please specify bank verification number"
                kin_firstname:"Please specify firstname",kin_lastname:"Please specify lastname",kin_relationship:"Please specify relationship",kin_phone:"Please specify phon number"

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