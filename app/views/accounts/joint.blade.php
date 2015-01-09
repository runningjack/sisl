<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/22/14
 * Time: 2:33 PM
 */

?>

@extends("layouts.forms")
@section("content")


<h2>Joint Account Openning Form</h2>
<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false">


<header>
    <h2>Joint Account</h2>

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
                    <h3><strong>Step 1 </strong> - Personal Data</h3>

                    <!-- wizard form starts here -->

                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label>Title </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="text" name="title" id="title" value="" placeholder="title">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>First name </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="text" name="fname" id="fname" value="" placeholder="First name">
                                </label>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-6">
                                <label>Middle name </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="text" name="mname" id="mname" value="" placeholder="Middle name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Last name </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="text" name="lname" id="lname" value="" placeholder="Last name">
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label>Religion </label>
                                <label class="select">
                                    <select name="religion" id="religion">
                                        <option value="">--Select your religion--</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Gender *</label>
                                <label class="select">
                                    <select name="gender" id="gender">
                                        <option value="">--Select your gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                        </div>


                        <div class="row">
                            <section class="col col-6">
                                <label>Date of Birth *</label>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="select">
                                            <select id="mm" name="mm" required="required">
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
                                            <select id="dd" name="dd" required="required">
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
                                            <select id="yy" name="yy" required="required">
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
                                    <input class="" type="pob" name="pob" value="" placeholder="Place/Country of birth">
                                </label>

                            </section>
                        </div>


                        <div class="row">
                            <section class="col col-6">
                                <label>State of Origin <small>Nigerians Only</small> </label>
                                <label class="select">
                                    <select name="religion" id="religion">
                                        <option value="">--Select your religion--</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>LGA *</label>
                                <label class="select">
                                    <select name="gender" id="gender">
                                        <option value="">--Select your gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                        </div>


                        <div class="row">
                            <section class="col col-6">
                                <label class="label">E-mail Address</label>
                                <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                                    <input class="" type="email" name="email" value="" placeholder="E-mail">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">Mobile Phone</label>
                                <label class="input"><i class="icon-prepend fa fa-phone"></i>
                                    <input class="" type="text" name="mobile_phone" id="mobile_phone" value="" placeholder="Mobile Phone">
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Landline</label>
                                <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                                    <input class="" type="phone" name="landphone" id="landphone" value="" placeholder="land phone">
                                </label>
                            </section>
                            <!--<section class="col col-6">
                                <label class="input"><i class="icon-prepend fa fa-phone"></i>
                                    <input class="" type="text" name="phone" value="" placeholder="Phone">
                                </label>
                            </section>-->
                        </div>
                    </fieldset>


                </div>

                <div class="step-pane" id="step2">
                    <h3><strong>Step 2 </strong> - Alerts</h3>
                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label>Mother's Maiden Name</label>
                                <label class="input"><i class="icon-prepend fa fa-user-md"></i>
                                    <input class="" type="text" name="mmname" value="" placeholder="Morther's maiden name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Residential Address</label>
                                <label class="textarea"><i class="icon-prepend fa fa-hdd-o"></i>
                                    <textarea class=""name="raddress"  placeholder="Residential address"></textarea>
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label>Mailing Address</label>
                                <label class="textarea"><i class="icon-prepend fa fa-envelope"></i>
                                    <textarea class=""  name="maddress"  placeholder="Mailing address"></textarea>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Date of Entrance into present residential </label>
                                <label class="input">
                                    <input type="text" class="" id="raddress_date" name="raddress_date"  >
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label>Country of Residence</label>

                                <label class="select">
                                    <select name="gender" id="gender">
                                        <option value="">--Select your country of residence--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Nationality </label>

                                <label class="select">
                                    <select name="gender" id="gender">
                                        <option value="">--Select your nationality--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-12">
                                <label class="label">Do you carry other country's passport other than Nigeria?  </label>
                                <div class="inline-group">
                                    <label class="radio ">
                                        <input class="" type="radio" id="other_country_pass" name="other_country_pass" value="Yes"><i></i>Yes
                                    </label>
                                    <label class="radio ">
                                        <input class="" type="radio" id="other_country_pass" name="other_country_pass" value="No"><i></i>No
                                    </label>
                                </div>
                            </section>
                        </div>
                        </fieldset>
                    <br>
                    <fieldset>
                    <legend>IDentification Details</legend>
                        <div class="row">
                            <section class="col col-12">
                                <label class="label">ID Type  </label>
                                <div class="inline-group">
                                    <label class="radio ">
                                        <input class="" type="radio" id="id_type" name="id_type" value="International Passport"><i></i>International Passport
                                    </label>
                                    <label class="radio ">
                                        <input class="" type="radio" id="id_type" name="id_type" value="Driver's Licence"><i></i>Driver's Licence
                                    </label>
                                    <label class="radio ">
                                        <input class="" type="radio" id="id_type" name="id_type" value="National ID Card"><i></i>National ID Card
                                    </label>
                                </div>
                            </section>
                        </div>


                        <div class="row">
                            <section class="col col-3">
                                <label class="label">ID Number</label>
                                <label class="input">
                                    <input type="text" class="" id="id_no" name="id_no"  >
                                </label>
                            </section>
                            <section class="col col-3">
                                <label class="label">Issue Date</label>
                                <label class="input">
                                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="issue_date" name="issue_date"  >

                                </label>
                            </section>
                            <section class="col col-3">
                                <label class="label">Expiry Date</label>
                                <label class="input">
                                    <input type="text" class="form-control" data-mask="99/99/9999" data-mask-placeholder="-" id="expiry_date" name="expiry_date"  >
                                </label>
                            </section>
                            <section class="col col-3">
                                <label class="label">Place of Issuance</label>
                                <label class="input">
                                    <input type="text" class="" id="place_of_issuance" name="place_of_issuance"  >
                                </label>
                            </section>
                        </div>


                    </fieldset>




                </div>

                <div class="step-pane" id="step3">
                    <h3><strong>Step 3 </strong> - Employment Details</h3>
                    <fieldset>


                            <section>
                                <label class="label">Level of Qualification </label>
                                <label class="select col-12">
                                    <select name="religion" id="religion" class="col-12">
                                        <option value="">--Level of qualification--</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>



                        <div class="row">
                            <section class="col col-12">
                                <label class="label">Employment Status  </label>
                                <div class="inline-group">
                                    <label class="radio ">
                                        <input class="" type="radio" id="employment_status" name="employment_status" value="Full Time"><i></i>Full Time
                                    </label>
                                    <label class="radio ">
                                        <input class="" type="radio" id="employment_status" name="employment_status" value="Part Time"><i></i>Part Time
                                    </label>
                                    <label class="radio ">
                                        <input class="" type="radio" id="employment_status" name="employment_status" value="Retired"><i></i>Retired
                                    </label>
                                    <label class="radio ">
                                        <input class="" type="radio" id="employment_status" name="employment_status" value="Self Employed"><i></i>Self Employed
                                    </label>
                                    <label class="radio ">
                                        <input class="" type="radio" id="employment_status" name="employment_status" value=""><i></i>Others
                                    </label>
                                </div>
                            </section>
                        </div>
                    <div class="row">
                        <section class="col col-6">
                            <label class="label">Employment Segment </label>
                            <label class="select">
                                <select name="employment_segment" id="employment_segment">
                                    <option value="">--Employment Segment--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select><i></i>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="label">Occuption  </label>
                            <label class="select">
                                <select name="occupation" id="occupation">
                                    <option value="">--Occupation--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select><i></i>
                            </label>
                        </section>
                    </div>





                            <section>
                                <label>Appointed Date *</label>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="select">
                                            <select id="appmm" name="appmm" required="required">
                                                <option value="">Month</option>
                                                <option value="O1">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select><i></i>
                                        </label>
                                    </section>
                                    <section class="col col-4">

                                        <label class="select">
                                            <select id="appdd" name="appdd" required="required">
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
                                            <select id="appyy" name="appyy" required="required">
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
                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Company Name</label>
                                <label class="input"><i class="icon-prepend fa fa-bank"></i>
                                    <input class="" type="phone" name="company_name" id="company_name" value="" placeholder="Company name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">Company Address</label>
                                <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                                    <input class="" type="text" name="company_address" id="company_address" value="" placeholder="Company address">
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Office telephone</label>
                                <label class="input"><i class="icon-prepend fa fa-phone"></i>
                                    <input class="" type="phone" name="office_phone" id="office_phone" value="" placeholder=" phone">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">Fax Number</label>
                                <label class="input"><i class="icon-prepend fa fa-fax"></i>
                                    <input class="" type="text" name="office_fax" id="office_fax" value="" placeholder="Company Fax">
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Officail E-mail Address</label>
                                <label class="input"><i class="icon-prepend fa fa-email"></i>
                                    <input class="" type="phone" name="official_email" id="official_email" value="" placeholder=" official email  ">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">Official Website</label>
                                <label class="input"><i class="icon-prepend fa fa-link"></i>
                                    <input class="" type="text" name="official_website" id="official_website" value="" placeholder="Web url">
                                </label>
                            </section>
                        </div>



                        <section >
                            <label class="label">Annual Average Income  </label>
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


                    </fieldset>
                </div>

                <div class="step-pane" id="step4">
                    <h3><strong>Step 4 </strong> Bank Detail</h3>
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

                    <section>
                        <label class="label">Bank Verification Number</label>
                        <label class="input"><i class="icon-prepend fa fa-user"></i>
                            <input class="" type="text" name="bank_verification_number" id="bank_verification_number" value="" placeholder="Bank Verification Number">
                        </label>
                    </section>
                </div>


                <div class="step-pane" id="step5">
                    <h3><strong>Step 5 </strong> - Next of Kin</h3>

                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label>Title </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="kin_text" name="kin_title" id="title" value="" placeholder="title">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>First name </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="text" name="kin_fname" id="kin_fname" value="" placeholder="First name">
                                </label>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-6">
                                <label>Middle name </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="text" name="kin_middle_name" id="kin_middle_name" value="" placeholder="Middle name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Last name </label>
                                <label class="input"><i class="icon-prepend fa fa-user"></i>
                                    <input class="" type="text" name="kin_last_name" id="kin_last_lname" value="" placeholder="Last name">
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label>Gender *</label>
                                <label class="select">
                                    <select name="kin_gender" id="kin_gender">
                                        <option value="">--Select gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Nationality </label>
                                <label class="select">
                                    <select name="kin_nationality" id="kin_nationality">
                                        <option value="">--Select nationality--</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>

                        </div>

                        <section >
                            <label class="label">Source of Investment Fund  </label>
                            <div class="inline-group">
                                <label class="radio ">
                                    <input class="" type="radio" id="kin_relationship" name="kin_relationship" value="Parent"><i></i>Parent
                                </label>
                                <label class="radio ">
                                    <input class="" type="radio" id="kin_relationship" name="kin_relationship" value="Child "><i></i>Child
                                </label>
                                <label class="radio ">
                                    <input class="" type="radio" id="kin_relationship" name="kin_relationship" value="Spouse"><i></i>Spouse
                                </label>
                                <label class="radio ">
                                    <input class="" type="radio" id="kin_relationship" name="kin_relationship" value="Brother"><i></i>Sister
                                </label>
                                <label class="radio ">
                                    <input class="" type="radio" id="kin_relationship" name="kin_relationship" value="Brother"><i></i>Others
                                </label>

                            </div>
                        </section>


                        <div class="row">
                            <section class="col col-6">
                                <label>Date of Birth *</label>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="select">
                                            <select id="kinmm" name="kinmm" required="required">
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
                                            <select id="kindd" name="kindd" required="required">
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
                                            <select id="kinyy" name="kinyy" required="required">
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
                                <label class="label">Mobile Phone</label>
                                <label class="input"><i class="icon-prepend fa fa-phone"></i>
                                    <input class="" type="text" name="kin_mobile_phone" id="kin_mobile_phone" value="" placeholder="Mobile Phone">
                                </label>
                            </section>
                        </div>



                        <div class="row">
                            <section class="col col-6">
                                <label class="label">E-mail Address</label>
                                <label class="input"><i class="icon-prepend fa fa-envelope"></i>
                                    <input class="" type="kin_email" name="kin_email" value="" placeholder="E-mail">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label>Residential Address</label>
                                <label class="textarea"><i class="icon-prepend fa fa-hdd-o"></i>
                                    <textarea class=""name="kin_address" id="kin_address"  placeholder="Residential address"></textarea>
                                </label>
                            </section>
                        </div>
</fieldset>

                </div>

                <div class="step-pane" id="step6">
                    <h3><strong>Step 6 </strong> - Minor &amp; Questionnaire!</h3>
                    <fieldset>
                        <section>
                            <label class="label">Fullname</label>
                            <label class="input"><i class="icon-prepend fa fa-user"></i>
                                <input class="" type="minor_fullname" name="minor_fullname" value="" placeholder="Fullname">
                            </label>
                        </section>
                        <div class="row">
                            <section class="col col-6">
                                <label>Date of Birth *</label>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="select">
                                            <select id="minormm" name="minormm" required="required">
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
                                            <select id="minordd" name="minordd" required="required">
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
                                            <select id="minoryy" name="minoryy" required="required">
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
                                <label>Gender *</label>
                                <label class="select">
                                    <select name="minor_gender" id="minor_gender">
                                        <option value="">--Select gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select><i></i>
                                </label>
                            </section>
                        </div>
                    </fieldset>
                </div>

                <div class="step-pane" id="step7">
                    <h3><strong>Step  </strong> - Atestation &amp; Document Uploads</h3>
                    <fieldset>
                        <section>
                            <label class="label">By filling this form you have GG</label>
                            <label class="checkbox "><input class="" type="checkbox" name="agreement" id="agreement" value=""><i></i> I agree to the Terms and Conditions.	</label>
                        </section>

                        <section>
                            <label class="label">Upload Your Signature </label>
                            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="signature" id="signature" onchange="this.parentNode.nextSibling.value = this.value" value="">Browse</span>
                                <input class="" type="text" name="file-signature" readonly="" value="">
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

                <div class="step-pane" id="step8">
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
