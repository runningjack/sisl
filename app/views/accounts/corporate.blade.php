<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/22/14
 * Time: 2:32 PM
 */
?>

@extends("layouts.forms")
@section("content")



<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false">

<h2>Corporate Account Openning Form</h2>
<header>
    <h2>Corporate Account</h2>

</header>

<!-- widget div-->
<div>

<!-- widget edit box -->
<div class="jarviswidget-editbox">
    <!-- This area used as dropdown edit box -->

</div>
<!-- end widget edit box -->

<!-- widget content -->
<div class="widget-body fuelux">

<div class="wizard">
    <ul class="steps">
        <li data-target="#step1" class="active">
            <span class="badge badge-info">1</span>Step 1<span class="chevron"></span>
        </li>
        <li data-target="#step2">
            <span class="badge">2</span>Step 2<span class="chevron"></span>
        </li>
        <li data-target="#step3">
            <span class="badge">3</span>Step 3<span class="chevron"></span>
        </li>
        <li data-target="#step4">
            <span class="badge">4</span>Step 4<span class="chevron"></span>
        </li>
        <li data-target="#step5">
            <span class="badge">5</span>Step 5<span class="chevron"></span>
        </li>
        <li data-target="#step6">
            <span class="badge">6</span>Step 6<span class="chevron"></span>
        </li>
        <li data-target="#step7">
            <span class="badge">7</span>Step 7<span class="chevron"></span>
        </li>
        <li data-target="#step8">
            <span class="badge">8</span>Step 8<span class="chevron"></span>
        </li>
        <li data-target="#step9">
            <span class="badge">8</span>Step 9<span class="chevron"></span>
        </li>
    </ul>
    <div class="actions">
        <button type="button" class="btn btn-sm btn-primary btn-prev">
            <i class="fa fa-arrow-left"></i>Prev
        </button>
        <button type="button" class="btn btn-sm btn-success btn-next" data-last="Finish">
            Next<i class="fa fa-arrow-right"></i>
        </button>
    </div>
</div>
<div class="step-content">
<form class="form-horizontal smart-form" id="fuelux-wizard" method="post">

<div class="step-pane active" id="step1">
    <h3><strong>Step 1 </strong> - Validation states</h3>

    <!-- wizard form starts here -->

    <fieldset>
        <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col" >
            <label>Full Company Name </label>
            <label class="input"><i class="icon-prepend fa fa-user"></i>
                <input class="" type="text" name="company_full_name" id="company_full_name" value="" placeholder="Company fullname">
            </label>
        </div>
        </div>
        <div class="row">
            <section class="col col-6">
                <label>Company Short Name </label>
                <label class="input"><i class="icon-prepend fa fa-user"></i>
                    <input class="" type="text" name="company_short_name" id="company_short_name" value="" placeholder="Company shortname">
                </label>
            </section>
            <section class="col col-6">
                <label>Date of Incorporation </label>
                <label class="input"><i class="icon-prepend fa fa-calendar"></i>
                    <input class="" type="date" name="date_incorporation" id="date_incorporation" value="" placeholder="Date of Incorporation">
                </label>
            </section>
        </div>
        <div class="row">
            <section class="col col-6">
                <label class="label">Place of Incorporation </label>
                <label class="input"><i class="icon-prepend fa fa-user"></i>
                    <input class="" type="text" name="place_of_incorporation" id="place_of_incorporation" value="" placeholder="Place of incorporation">
                </label>
            </section>
            <section class="col col-6">
                <label class="label">RC Number </label>
                <label class="input"><i class="icon-prepend fa fa-legal"></i>
                    <input class="" type="text" name="RC_name" id="RC_name" value="" placeholder="RC Number">
                </label>
            </section>
        </div>

        <div class="row">
            <section class="col col-6">
                <label>Business Section </label>
                <label class="input"><i class="icon-prepend fa fa-bank"></i>
                    <input class="" type="text" name="business_sector" id="business_sector" value="" placeholder="Business Sector">
                </label>
            </section>
            <section class="col col-6">
                <label>Tax Identification Number TIN</label>
                <label class="input"><i class="icon-prepend fa fa-calculator"></i>
                    <input class="" type="text" name="tin_numberr" id="tin_number" value="" placeholder="TIN Number">
                </label>
            </section>
        </div>


        <div class="row">
            <section class="col col-12">
                <label class="label">Company Type  </label>
                <div class="inline-group">
                    <label class="radio ">
                        <input class="" type="radio" id="company_type" name="company_type" value="Limited Liability Company"><i></i>Limited Liability Company
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="company_type" name="company_type" value="Partnership"><i></i>Partnership
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="company_type" name="company_type" value="Enterprice"><i></i>Enterprice
                    </label>
                </div>
            </section>
        </div>


        <div class="row">
            <section class="col col-6">
                <label>Company Address</label>
                <label class="textarea"><i class="icon-prepend fa fa-envelope"></i>
                    <textarea class=""  name="company_address"  id="company_address" ></textarea>
                </label>
            </section>
            <section class="col col-6">
                <label>Mailing Address </label>
                <label class="textarea"><i class="icon-prepend fa fa-envelope"></i>
                    <textarea class=""  name="company_mailing_address"  id="compan_mailingy_address" ></textarea>
                </label>
            </section>
        </div>


        <div class="row">
            <section class="col col-6">
                <label class="label">Country of Residence</label>
                <label class="select">
                    <select class=""  name="company_country"  id="company_country" >
                        <option value="">Select country</option>
                    </select><i ></i>
                </label>
            </section>
            <section class="col col-6">
                <label class="label">Email Address </label>
                <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                    <input type="text" class="" id="company_email" name="company_email"  >
                </label>
            </section>
        </div>

        <div class="row">
            <section class="col col-6">
                <label class="label">Company Website </label>
                <label class="input"><i class="icon-prepend fa fa-link"></i>
                    <input type="text" class="" id="company_website" name="company_website"  >
                </label>
            </section>
            <section class="col col-6">
                <label>Company Phone</label>
                <label class="input"><i class="icon-prepend fa fa-phone"></i>
                    <input type="text" class="" id="company_phone" name="company_phone"  >
                </label>
            </section>

        </div>

        <div class="row">
            <section class="col col-6">
                <label>Company Fax </label>
                <label class="input"><i class="icon-prepend fa fa-fax"></i>
                    <input type="text" class="" id="company_fax" name="company_fax"  >
                </label>
            </section>
            <section class="col col-6">
                <label>Purpose of Investment</label>
                <label class="input">
                    <input type="text" class="" id="purpose_of_investment" name="purpose_of_investment"  >
                </label>
            </section>

        </div>


        <section >
            <label class="label">Source of Investment Fund  </label>
            <div class="inline-group">
                <label class="radio ">
                    <input class="" type="radio" id="source_of_found" name="source_of_found" value="Employment"><i></i>Employment
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="source_of_found" name="source_of_found" value="Business "><i></i>Business
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="source_of_found" name="source_of_found" value=""><i></i>Otherss
                </label>

            </div>
        </section>

        <section >
            <label class="label">Average Annual Turnover  </label>
            <div class="inline-group">
                <label class="radio ">
                    <input class="" type="radio" id="annual_income" name="annual_income" value="Less Than 10 Million Naira"><i></i>Less Than 10 Million Naira
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="annual_income" name="annual_income" value="Between 10 - 15 Million Naira "><i></i>Between 10 - 15 Million Naira
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="annual_income" name="annual_income" value="50 Million Naira and Above"><i></i>50 Million Naira and Above
                </label>

            </div>
        </section>


</div>

<div class="step-pane" id="step2">
    <h3><strong>Step 2 </strong> - Bank Account Details</h3>
    <div class="row">
        <section class="col col-6">
            <label class="label">Bank Name</label>
            <label class="input"><i class="icon-prepend fa fa-bank"></i>
                <input class="" type="text" name="bank_name" id="bank_name" value="" placeholder="Bank name">
            </label>
        </section>
        <section class="col col-6">
            <label class="label">Branch</label>
            <label class="input"><i class="icon-prepend fa fa-email"></i>
                <input class="" type="text" name="bank_branch" id="bank_branch" value="" placeholder="Bank branch">
            </label>
        </section>
    </div>

    <div class="row">
        <section class="col col-6">
            <label class="label">Account Name</label>
            <label class="input"><i class="icon-prepend fa fa-user"></i>
                <input class="" type="text" name="account_name" id="account_name" value="" placeholder="account name">
            </label>
        </section>
        <section class="col col-6">
            <label class="label">Account Number</label>
            <label class="input"><i class="icon-prepend fa "></i>
                <input class="" type="text" name="account_number" id="account_number" value="" placeholder="account Number">
            </label>
        </section>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-10 col-xs-12 col">
            <label class="label">Bank Verification Number</label>
            <label class="input"><i class="icon-prepend fa fa-user"></i>
                <input class="" type="text" name="bank_verification_number" id="bank_verification_number" value="" placeholder="Bank Verification Number">
            </label>
        </div>
    </div>

</div>

<div class="step-pane" id="step3">
<h3><strong>Step 3 </strong> - Principal Contact</h3>

    <div class="row">
        <section class="col col-6">
            <label class="label">Name</label>
            <label class="input"><i class="icon-prepend fa fa-user"></i>
                <input class="" type="text" name="contact_name" id="contact_name" value="" placeholder="contact name">
            </label>
        </section>
        <section class="col col-6">
            <label class="label">Phone Number</label>
            <label class="input"><i class="icon-prepend fa fa-phone "></i>
                <input class="" type="text" name="contact_phone_number" id="contact_phone_number" value="" placeholder="phone Number">
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <label class="label">E-mail</label>
            <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                <input class="" type="text" name="contact_email" id="contact_email" value="" placeholder="contact email">
            </label>
        </section>
        <!--<section class="col col-6">
            <label class="label"></label>
            <label class="input"><i class="icon-prepend fa "></i>
                <input class="" type="text" name="contact_phone_number" id="contact_phone_number" value="" placeholder="phone Number">
            </label>
        </section>-->
    </div>
</div>

<div class="step-pane" id="step4">
    <h3><strong>Step 4 </strong> Authorized Signature (1)</h3>

        <div class="row" >
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
            <label>Name </label>
            <label class="input"><i class="icon-prepend fa fa-user"></i>
                <input class="" type="text" name="authorized1_name" id="authorized1_name" value="" placeholder="Full name">
            </label>
            </div>
        </div>



    <div class="row">
        <section class="col col-6">
            <label>Date of Birth *</label>
            <div class="row">
                <section class="col col-4">
                    <label class="select">
                        <select id="authorized1mm" name="authorized1mm" required="required">
                            <option value="">Month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select><i></i>
                    </label>
                </section>
                <section class="col col-4">

                    <label class="select">
                        <select id="authorized1dd" name="authorized1dd" required="required">
                            <option value="">Day</option>
                            <?php
                            for($x=1;$x<=31;$x++){
                                if($x<10){$x="0".$x;}
                                echo"<option value='{$x}'>$x</option>";
                            }
                            ?>
                        </select><i></i>
                    </label>
                </section>
                <section class="col col-4">
                    <label class="select">
                        <select id="authorized1yy" name="authorized1yy" required="required">
                            <option value="">Year</option>
                            <?php
                            for($x=1;$x<=100;$x++){
                                $ddate = date("Y")-$x;
                                echo"<option value='$ddate'>".$ddate."</option>";
                            }
                            ?>
                        </select><i></i>
                    </label>
                </section>
            </div>

        </section>
        <section class="col col-6">
            <label>Place/Country of birth </label>
            <label class="input">
                <input class="" type="text" name="authorized1_pob" id="authorized1_pob" value="" placeholder="Place/Country of birth">
            </label>

        </section>
    </div>

    <div class="row">
        <section class="col col-6">

                <label>Gender *</label>
                <label class="select">
                    <select name="gender" id="gender">
                        <option value="">--Select  gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select><i></i>
                </label>
            </section>
        <section class="col col-6">
            <label>Nationality </label>
            <label class="select">
                <select name="authorized1_nationality" id="authorized1_nationality">
                    <option value="">--Select  country--</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Islam">Islam</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

    </div>


    <div class="row">
        <section class="col col-6">

                <label>Residence Address</label>
                <label class="select">
                    <select name="authorized1_residence_address" id="authorized1_residence_address">
                        <option value="">--Select your gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select><i></i>
                </label>
            </section>

        <section class="col col-6">
            <label>Country of Residence </label>
            <label class="select">
                <select name="authorized1_residence_country" id="authorized1_residence_country">
                    <option value="">--Select your country--</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Islam">Islam</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

    </div>

    <div class="row">
        <section class="col col-6">
            <label class="label">E-mail</label>
            <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                <input class="" type="text" name="authorized1_email" id="authorized1_email" value="" placeholder="contact email">
            </label>
        </section>
        <section class="col col-6">
            <label class="label">Phone</label>
            <label class="input"><i class="icon-prepend fa fa-phone "></i>
                <input class="" type="text" name="authorized1_phone" id="authorized1_phone" value="" placeholder="phone Number">
            </label>
        </section>
    </div>

    <fieldset>
        <legend>IDentification Details</legend>
        <div class="row">
            <section class="col col-12">
                <label class="label">ID Type  </label>
                <div class="inline-group">
                    <label class="radio ">
                        <input class="" type="radio" id="authorized1_id_type" name="authorized1_id_type" value="International Passport"><i></i>International Passport
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized1_id_type" name="authorized1_id_type" value="Driver's Licence"><i></i>Driver's Licence
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized1_id_type" name="authorized1_id_type" value="National ID Card"><i></i>National ID Card
                    </label>
                </div>
            </section>
        </div>


        <div class="row">
            <section class="col col-3">
                <label class="label">ID Number</label>
                <label class="input">
                    <input type="text" class="" id="authorized1_id_no" name="authorized1_id_no"  >
                </label>
            </section>
            <section class="col col-3">
                <label class="label">Issue Date</label>
                <label class="input">
                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized1_issue_date" name="authorized1_issue_date"  >

                </label>
            </section>
            <section class="col col-3">
                <label class="label">Expiry Date</label>
                <label class="input">
                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized1_expiry_date" name="authorized1_expiry_date"  >
                </label>
            </section>
            <section class="col col-3">
                <label class="label">Place of Issuance</label>
                <label class="input">
                    <input type="text" class="" id="authorized1_place_of_issuance" name="authorized1_place_of_issuance"  >
                </label>
            </section>
        </div>


        <div class="row">
            <section class="col-6 col">
                <label class="label">Designation</label>
                <label class="input">
                    <input type="text" class="" id="authorized1_designation" name="authorized1_designation"  >
                </label>
            </section>
            <section class="col-6 col">
                <label class="label">Class of Signture  </label>
                <div class="inline-group">
                    <label class="radio ">
                        <input class="" type="radio" id="authorized1_signature_class" name="authorized1_signature_class" value="A"><i></i>A
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized1_signature_class" name="authorized1_signature_class" value="B "><i></i>B
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized1_signature_class" name="authorized1_signature_class" value="C"><i></i>C
                    </label>

                </div>
            </section>

        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
                <label class="label">Upload Specimen </label>
                <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="authorized1_specimen" id="authorized1_specimen" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                    <input class="" type="text" name="authorized1_specimen" readonly="" value="">
                </label>
            </div>
        </div>


    </fieldset>




</div>


<div class="step-pane" id="step5">
    <h3><strong>Step 5 </strong> - Authorized Signature (2)</h3>

    <div class="row" >
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
            <label>Name </label>
            <label class="input"><i class="icon-prepend fa fa-user"></i>
                <input class="" type="text" name="authorized2_name" id="authorized2_name" value="" placeholder="Full name">
            </label>
        </div>
    </div>



    <div class="row">
        <section class="col col-6">
            <label>Date of Birth *</label>
            <div class="row">
                <section class="col col-4">
                    <label class="select">
                        <select id="authorized2mm" name="authorized2mm" required="required">
                            <option value="">Month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select><i></i>
                    </label>
                </section>
                <section class="col col-4">

                    <label class="select">
                        <select id="authorized2dd" name="authorized2dd" required="required">
                            <option value="">Day</option>
                            <?php
                            for($x=1;$x<=31;$x++){
                                if($x<10){$x="0".$x;}
                                echo"<option value='{$x}'>$x</option>";
                            }
                            ?>
                        </select><i></i>
                    </label>
                </section>
                <section class="col col-4">
                    <label class="select">
                        <select id="authorized2yy" name="authorized2yy" required="required">
                            <option value="">Year</option>
                            <?php
                            for($x=1;$x<=100;$x++){
                                $ddate = date("Y")-$x;
                                echo"<option value='$ddate'>".$ddate."</option>";
                            }
                            ?>
                        </select><i></i>
                    </label>
                </section>
            </div>

        </section>
        <section class="col col-6">
            <label>Place/Country of birth </label>
            <label class="input">
                <input class="" type="text" name="authorized2_pob" id="authorized2_pob" value="" placeholder="Place/Country of birth">
            </label>

        </section>
    </div>

    <div class="row">
        <section class="col col-6">

            <label>Gender *</label>
            <label class="select">
                <select name="gender" id="gender">
                    <option value="">--Select  gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>
        <section class="col col-6">
            <label>Nationality </label>
            <label class="select">
                <select name="authorized2_nationality" id="authorized2_nationality">
                    <option value="">--Select  country--</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Islam">Islam</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

    </div>


    <div class="row">
        <section class="col col-6">

            <label>Residence Address</label>
            <label class="select">
                <select name="authorized2_residence_address" id="authorized2_residence_address">
                    <option value="">--Select your gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

        <section class="col col-6">
            <label>Country of Residence </label>
            <label class="select">
                <select name="authorized2_residence_country" id="authorized2_residence_country">
                    <option value="">--Select your country--</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Islam">Islam</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

    </div>

    <div class="row">
        <section class="col col-6">
            <label class="label">E-mail</label>
            <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                <input class="" type="text" name="authorized2_email" id="authorized2_email" value="" placeholder="contact email">
            </label>
        </section>
        <section class="col col-6">
            <label class="label">Phone</label>
            <label class="input"><i class="icon-prepend fa fa-phone "></i>
                <input class="" type="text" name="authorized2_phone" id="authorized2_phone" value="" placeholder="phone Number">
            </label>
        </section>
    </div>

    <fieldset>
        <legend>IDentification Details</legend>
        <div class="row">
            <section class="col col-12">
                <label class="label">ID Type  </label>
                <div class="inline-group">
                    <label class="radio ">
                        <input class="" type="radio" id="authorized2_id_type" name="authorized2_id_type" value="International Passport"><i></i>International Passport
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized2_id_type" name="authorized2_id_type" value="Driver's Licence"><i></i>Driver's Licence
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized2_id_type" name="authorized2_id_type" value="National ID Card"><i></i>National ID Card
                    </label>
                </div>
            </section>
        </div>


        <div class="row">
            <section class="col col-3">
                <label class="label">ID Number</label>
                <label class="input">
                    <input type="text" class="" id="authorized2_id_no" name="authorized2_id_no"  >
                </label>
            </section>
            <section class="col col-3">
                <label class="label">Issue Date</label>
                <label class="input">
                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized2_issue_date" name="authorized2_issue_date"  >

                </label>
            </section>
            <section class="col col-3">
                <label class="label">Expiry Date</label>
                <label class="input">
                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized2_expiry_date" name="authorized2_expiry_date"  >
                </label>
            </section>
            <section class="col col-3">
                <label class="label">Place of Issuance</label>
                <label class="input">
                    <input type="text" class="" id="authorized2_place_of_issuance" name="authorized2_place_of_issuance"  >
                </label>
            </section>
        </div>


        <div class="row">
            <section class="col-6 col">
                <label class="label">Designation</label>
                <label class="input">
                    <input type="text" class="" id="authorized2_designation" name="authorized2_designation"  >
                </label>
            </section>
            <section class="col-6 col">
                <label class="label">Class of Signture  </label>
                <div class="inline-group">
                    <label class="radio ">
                        <input class="" type="radio" id="authorized2_signature_class" name="authorized2_signature_class" value="A"><i></i>A
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized2_signature_class" name="authorized2_signature_class" value="B "><i></i>B
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized2_signature_class" name="authorized2_signature_class" value="C"><i></i>C
                    </label>

                </div>
            </section>

        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
                <label class="label">Upload Specimen </label>
                <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="authorized2_specimen" id="authorized2_specimen" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                    <input class="" type="text" name="authorized2_specimen" readonly="" value="">
                </label>
            </div>
        </div>

    </fieldset>

</div>

<div class="step-pane" id="step6">
    <h3><strong>Step 6 </strong> - Authorized Signature (3)</h3>
    <div class="row" >
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
            <label>Name </label>
            <label class="input"><i class="icon-prepend fa fa-user"></i>
                <input class="" type="text" name="authorized3_name" id="authorized3_name" value="" placeholder="Full name">
            </label>
        </div>
    </div>



    <div class="row">
        <section class="col col-6">
            <label>Date of Birth *</label>
            <div class="row">
                <section class="col col-4">
                    <label class="select">
                        <select id="authorized3mm" name="authorized3mm" required="required">
                            <option value="">Month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select><i></i>
                    </label>
                </section>
                <section class="col col-4">

                    <label class="select">
                        <select id="authorized3dd" name="authorized3dd" required="required">
                            <option value="">Day</option>
                            <?php
                            for($x=1;$x<=31;$x++){
                                if($x<10){$x="0".$x;}
                                echo"<option value='{$x}'>$x</option>";
                            }
                            ?>
                        </select><i></i>
                    </label>
                </section>
                <section class="col col-4">
                    <label class="select">
                        <select id="authorized3yy" name="authorized3yy" required="required">
                            <option value="">Year</option>
                            <?php
                            for($x=1;$x<=100;$x++){
                                $ddate = date("Y")-$x;
                                echo"<option value='$ddate'>".$ddate."</option>";
                            }
                            ?>
                        </select><i></i>
                    </label>
                </section>
            </div>

        </section>
        <section class="col col-6">
            <label>Place/Country of birth </label>
            <label class="input">
                <input class="" type="text" name="authorized3_pob" id="authorized3_pob" value="" placeholder="Place/Country of birth">
            </label>

        </section>
    </div>

    <div class="row">
        <section class="col col-6">

            <label>Gender *</label>
            <label class="select">
                <select name="gender" id="gender">
                    <option value="">--Select  gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>
        <section class="col col-6">
            <label>Nationality </label>
            <label class="select">
                <select name="authorized3_nationality" id="authorized3_nationality">
                    <option value="">--Select  country--</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Islam">Islam</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

    </div>


    <div class="row">
        <section class="col col-6">

            <label>Residence Address</label>
            <label class="select">
                <select name="authorized3_residence_address" id="authorized3_residence_address">
                    <option value="">--Select your gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

        <section class="col col-6">
            <label>Country of Residence </label>
            <label class="select">
                <select name="authorized3_residence_country" id="authorized3_residence_country">
                    <option value="">--Select your country--</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Islam">Islam</option>
                    <option value="Others">Others</option>
                </select><i></i>
            </label>
        </section>

    </div>

    <div class="row">
        <section class="col col-6">
            <label class="label">E-mail</label>
            <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                <input class="" type="text" name="authorized3_email" id="authorized3_email" value="" placeholder="contact email">
            </label>
        </section>
        <section class="col col-6">
            <label class="label">Phone</label>
            <label class="input"><i class="icon-prepend fa fa-phone "></i>
                <input class="" type="text" name="authorized3_phone" id="authorized3_phone" value="" placeholder="phone Number">
            </label>
        </section>
    </div>

    <fieldset>
        <legend>IDentification Details</legend>
        <div class="row">
            <section class="col col-12">
                <label class="label">ID Type  </label>
                <div class="inline-group">
                    <label class="radio ">
                        <input class="" type="radio" id="authorized3_id_type" name="authorized3_id_type" value="International Passport"><i></i>International Passport
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized3_id_type" name="authorized3_id_type" value="Driver's Licence"><i></i>Driver's Licence
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized3_id_type" name="authorized3_id_type" value="National ID Card"><i></i>National ID Card
                    </label>
                </div>
            </section>
        </div>


        <div class="row">
            <section class="col col-3">
                <label class="label">ID Number</label>
                <label class="input">
                    <input type="text" class="" id="authorized3_id_no" name="authorized3_id_no"  >
                </label>
            </section>
            <section class="col col-3">
                <label class="label">Issue Date</label>
                <label class="input">
                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized3_issue_date" name="authorized3_issue_date"  >

                </label>
            </section>
            <section class="col col-3">
                <label class="label">Expiry Date</label>
                <label class="input">
                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized3_expiry_date" name="authorized3_expiry_date"  >
                </label>
            </section>
            <section class="col col-3">
                <label class="label">Place of Issuance</label>
                <label class="input">
                    <input type="text" class="" id="authorized3_place_of_issuance" name="authorized3_place_of_issuance"  >
                </label>
            </section>
        </div>


        <div class="row">
            <section class="col-6 col">
                <label class="label">Designation</label>
                <label class="input">
                    <input type="text" class="" id="authorized3_designation" name="authorized3_designation"  >
                </label>
            </section>
            <section class="col-6 col">
                <label class="label">Class of Signture  </label>
                <div class="inline-group">
                    <label class="radio ">
                        <input class="" type="radio" id="authorized3_signature_class" name="authorized3_signature_class" value="A"><i></i>A
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized3_signature_class" name="authorized3_signature_class" value="B "><i></i>B
                    </label>
                    <label class="radio ">
                        <input class="" type="radio" id="authorized3_signature_class" name="authorized3_signature_class" value="C"><i></i>C
                    </label>

                </div>
            </section>

        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
                <label class="label">Upload Specimen </label>
                <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="authorized3_specimen" id="authorized3_specimen" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                    <input class="" type="text" name="authorized3_specimen" readonly="" value="">
                </label>
            </div>
        </div>


    </fieldset>

</div>

<div class="step-pane" id="step7">
<h3><strong>Step 7 </strong> - Authorized Signature (4)</h3>
<div class="row" >
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
        <label>Name </label>
        <label class="input"><i class="icon-prepend fa fa-user"></i>
            <input class="" type="text" name="authorized4_name" id="authorized4_name" value="" placeholder="Full name">
        </label>
    </div>
</div>



<div class="row">
    <section class="col col-6">
        <label>Date of Birth *</label>
        <div class="row">
            <section class="col col-4">
                <label class="select">
                    <select id="authorized4mm" name="authorized4mm" required="required">
                        <option value="">Month</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select><i></i>
                </label>
            </section>
            <section class="col col-4">

                <label class="select">
                    <select id="authorized4dd" name="authorized4dd" required="required">
                        <option value="">Day</option>
                        <?php
                        for($x=1;$x<=31;$x++){
                            if($x<10){$x="0".$x;}
                            echo"<option value='{$x}'>$x</option>";
                        }
                        ?>
                    </select><i></i>
                </label>
            </section>
            <section class="col col-4">
                <label class="select">
                    <select id="authorized4yy" name="authorized4yy" required="required">
                        <option value="">Year</option>
                        <?php
                        for($x=1;$x<=100;$x++){
                            $ddate = date("Y")-$x;
                            echo"<option value='$ddate'>".$ddate."</option>";
                        }
                        ?>
                    </select><i></i>
                </label>
            </section>
        </div>

    </section>
    <section class="col col-6">
        <label>Place/Country of birth </label>
        <label class="input">
            <input class="" type="text" name="authorized4_pob" id="authorized4_pob" value="" placeholder="Place/Country of birth">
        </label>

    </section>
</div>

<div class="row">
    <section class="col col-6">

        <label>Gender *</label>
        <label class="select">
            <select name="gender" id="gender">
                <option value="">--Select  gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select><i></i>
        </label>
    </section>
    <section class="col col-6">
        <label>Nationality </label>
        <label class="select">
            <select name="authorized4_nationality" id="authorized4_nationality">
                <option value="">--Select  country--</option>
                <option value="Christianity">Christianity</option>
                <option value="Islam">Islam</option>
                <option value="Others">Others</option>
            </select><i></i>
        </label>
    </section>

</div>


<div class="row">
    <section class="col col-6">

        <label>Residence Address</label>
        <label class="select">
            <select name="authorized4_residence_address" id="authorized4_residence_address">
                <option value="">--Select your gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select><i></i>
        </label>
    </section>

    <section class="col col-6">
        <label>Country of Residence </label>
        <label class="select">
            <select name="authorized4_residence_country" id="authorized4_residence_country">
                <option value="">--Select your country--</option>
                <option value="Christianity">Christianity</option>
                <option value="Islam">Islam</option>
                <option value="Others">Others</option>
            </select><i></i>
        </label>
    </section>

</div>

<div class="row">
    <section class="col col-6">
        <label class="label">E-mail</label>
        <label class="input"><i class="icon-prepend fa fa-envelope"></i>
            <input class="" type="text" name="authorized4_email" id="authorized4_email" value="" placeholder="contact email">
        </label>
    </section>
    <section class="col col-6">
        <label class="label">Phone</label>
        <label class="input"><i class="icon-prepend fa fa-phone "></i>
            <input class="" type="text" name="authorized4_phone" id="authorized4_phone" value="" placeholder="phone Number">
        </label>
    </section>
</div>

<fieldset>
    <legend>IDentification Details</legend>
    <div class="row">
        <section class="col col-12">
            <label class="label">ID Type  </label>
            <div class="inline-group">
                <label class="radio ">
                    <input class="" type="radio" id="authorized4_id_type" name="authorized4_id_type" value="International Passport"><i></i>International Passport
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="authorized4_id_type" name="authorized4_id_type" value="Driver's Licence"><i></i>Driver's Licence
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="authorized4_id_type" name="authorized4_id_type" value="National ID Card"><i></i>National ID Card
                </label>
            </div>
        </section>
    </div>


    <div class="row">
        <section class="col col-3">
            <label class="label">ID Number</label>
            <label class="input">
                <input type="text" class="" id="authorized4_id_no" name="authorized4_id_no"  >
            </label>
        </section>
        <section class="col col-3">
            <label class="label">Issue Date</label>
            <label class="input">
                <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized4_issue_date" name="authorized4_issue_date"  >

            </label>
        </section>
        <section class="col col-3">
            <label class="label">Expiry Date</label>
            <label class="input">
                <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="authorized4_expiry_date" name="authorized4_expiry_date"  >
            </label>
        </section>
        <section class="col col-3">
            <label class="label">Place of Issuance</label>
            <label class="input">
                <input type="text" class="" id="authorized4_place_of_issuance" name="authorized4_place_of_issuance"  >
            </label>
        </section>
    </div>


    <div class="row">
        <section class="col-6 col">
            <label class="label">Designation</label>
            <label class="input">
                <input type="text" class="" id="authorized4_designation" name="authorized4_designation"  >
            </label>
        </section>
        <section class="col-6 col">
            <label class="label">Class of Signture  </label>
            <div class="inline-group">
                <label class="radio ">
                    <input class="" type="radio" id="authorized4_signature_class" name="authorized4_signature_class" value="A"><i></i>A
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="authorized4_signature_class" name="authorized4_signature_class" value="B "><i></i>B
                </label>
                <label class="radio ">
                    <input class="" type="radio" id="authorized4_signature_class" name="authorized4_signature_class" value="C"><i></i>C
                </label>

            </div>
        </section>

    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col">
            <label class="label">Upload Specimen </label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="authorized4_specimen" id="authorized4_specimen" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                <input class="" type="text" name="authorized4_specimen" readonly="" value="">
            </label>
        </div>
    </div>


</fieldset>

</div>

<div class="step-pane" id="step8">
    <h3><strong>Step 8  </strong> - Atestation &amp; Document Uploads</h3>
    <fieldset>
        <section>
            <label class="label">We attest that all information provided herein is accurate and would notify you to update our records where any change occurs</label>
            <label class="checkbox "><input class="" type="checkbox" name="agreement" id="agreement" value=""><i></i> We agree to the Terms and Conditions. 	</label>
        </section>

        <section>
            <label class="label">Mandate</label>
            <label class="input">
                <input type="text" class="" id="mandate" name="mandate"  >
            </label>
        </section>

        <section>
            <label class="label">Upload Director Signature 1</label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="signature1" id="signature1" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                <input class="" type="text" name="file_signature1" readonly="" value="">
            </label>
        </section>

        <section>
            <label class="label">Upload Director Signature 1</label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="signature2" id="signature2" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                <input class="" type="text" name="file_signature2" readonly="" value="">
            </label>
        </section>




        <section>
            <label class="label">Upload Mean of Identification </label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="identity" id="identity" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                <input class="" type="text" name="file-identity" readonly="" value="">
            </label>
        </section>




        <section>
            <label class="label">Upload Utility </label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="utility" id="utility" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                <input class="" type="text" name="file-utility" readonly="" value="">
            </label>
        </section>
    </fieldset>
</div>

<div class="step-pane" id="step9">
    <h3><strong>Step   </strong> - Finalize</h3>
    <br>
    <br>
    <h1 class="text-center text-success"><i class="fa fa-check"></i> Congratulations!
        <br>
        <small>Click finish to end wizard</small></h1>
    <br>
    <br>
    <br>
    <br>
</div>

</form>
</div>

</div>
<!-- end widget content -->

</div>
<!-- end widget div -->

</div>
<!-- end widget -->


@stop


<script type="text/javascript">


    $(document).ready(function() {

        var $validator = $("#wizard-1").validate({

            rules: {
                email: {
                    required: true,
                    email: "Your email address must be in the format of name@domain.com"
                },
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                country: {
                    required: true
                },
                city: {
                    required: true
                },
                postal: {
                    required: true,
                    minlength: 4
                },
                wphone: {
                    required: true,
                    minlength: 10
                },
                hphone: {
                    required: true,
                    minlength: 10
                }
            },

            messages: {
                fname: "Please specify your First name",
                lname: "Please specify your Last name",
                email: {
                    required: "We need your email address to contact you",
                    email: "Your email address must be in the format of name@domain.com"
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
