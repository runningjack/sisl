@extends("layouts.forms")
@section("content")

<h2>Corporate Account Openning Form</h2>
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">

<header>
    <span class="widget-icon"> <i class="fa fa-check"></i> </span>
    <h2>Corporate Account Form </h2>

</header>

<!-- widget div-->
<div>

<!-- widget edit box -->
<div class="jarviswidget-editbox">
    <!-- This area used as dropdown edit box -->

</div>
<!-- end widget edit box -->

<!-- widget content -->
<div class="widget-body no-padding">

<div class="row">
@if(Session::has('error_message'))
<div class="alert alert-danger fade in">
    <button class="close" data-dismiss="alert">×</button>
    <i class="fa-fw fa fa-check"></i>{{Session::get('error_message')}}
</div>
@endif
@if(Session::has('success_message'))
<div class="alert alert-success fade in">
    <button class="close" data-dismiss="alert">×</button>
    <i class="fa-fw fa fa-check"></i>{{Session::get('success_message')}}
</div>
@endif

@if ( ! empty( $errors ) )
@foreach ( $errors->all() as $error )
<div class="alert alert-danger fade in">
    <button class="close" data-dismiss="alert">×</button>
    <i class="fa-fw fa fa-times"></i>{{$error}}

</div>

@endforeach
@endif

{{ Form::open(array('action'=>array('AccountController@postIndividual'), 'method'=>'POST','id'=>'wizard-1','novalidate'=>'novalidate', 'class'=>'form-horizontal', 'files'=>true)) }}
<!--<form  id="wizard-1"  novalidate="novalidate">-->
<div id="bootstrap-wizard-1" class="col-sm-12">
<div class="form-bootstrapWizard">
    <ul class="bootstrapWizard form-wizard">
        <li class="active" data-target="#step1">
            <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title"><!--Basic information I--></span> </a>
        </li>
        <li data-target="#step2">
            <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title"><!--Basic information II--></span> </a>
        </li>
        <li data-target="#step3">
            <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title"><!--Employment Details--></span> </a>
        </li>
        <li data-target="#step4">
            <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title"><!--Bank Details--></span> </a>
        </li>
        <li data-target="#step5">
            <a href="#tab5" data-toggle="tab"> <span class="step">5</span> <span class="title"><!--Next of Kin Details--></span> </a>
        </li>
        <li data-target="#step6">
            <a href="#tab6" data-toggle="tab"> <span class="step">6</span> <span class="title"><!--Minor Only--></span> </a>
        </li>
        <li data-target="#step7">
            <a href="#tab7" data-toggle="tab"> <span class="step">7</span> <span class="title"><!--Save Form--></span> </a>
        </li>
        <li data-target="#step8">
            <a href="#tab8" data-toggle="tab"> <span class="step">8</span> <span class="title"><!--Save Form--></span> </a>
        </li>

    </ul>
    <div class="clearfix"></div>
</div>
<div class="tab-content">
<div class="tab-pane active" id="tab1">
    <br>
    <h3><strong>Step 1 </strong> - Basic Information I</h3>
<br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-bank fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Company fullname" type="text" name="company_fullname" id="company_fullname" value="{{Input::old('company_fullname')}}">

                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-bank fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Company short name"  type="text" name="company_shortname" value="{{Input::old('company_shortname')}}" id="company_shortname">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Date of Incorporation"  type="text" name="date_of_incorporation" value="{{Input::old('date_of_incorporation')}}" id="date_of_birth">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="state_of_birth" id="state_of_birth">
                        <option value="">Place of Incorporation</option>
                        @if(count($states) > 0)
                        @foreach($states as $country)
                        <option value="{{$country->zone_id}},{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        @endif
                    </select>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-keyboard-o fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="RC Number"  type="text" name="rc_number" value="{{Input::old('rc_number')}}" id="rc_number">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-bank fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="business_sector" id="business_sector">
                        <option value="">Select business sector</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Islam">Islam</option>
                        <option value="Others">Others</option>
                    </select>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-keyboard-o fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Tax Identification Number (TIN)"  type="text" name="tin_number" value="{{Input::old('tin_number')}}" id="tin_number">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <fieldset><legend><strong>Company Type</strong></legend>
            <div class="col-sm-3 no-padding">
                <div class="form-group ">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="company_type" name="company_type" value="Limited Liability Company" @if(Input::old("company_type") == "Limited Liability Company") {{"checked"}} @endif>Limited Liability
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-3 no-padding">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="company_type" name="company_type" value="Partnership" @if(Input::old("company_type") == "Partnership") {{"checked"}} @endif STYLE="margin-left: 0 !important">Partnership
                        </label>
                    </div>

                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="company_type" name="company_type" value="Enterprise" @if(Input::old("company_type") == "Enterprise") {{"checked"}} @endif STYLE="margin-left: 0 !important">Enterprise
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-3 no-pa">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="company_type" name="company_type" value="Others" @if(Input::old("company_type") == "Others") {{"checked"}} @endif >Others
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>
        <hr>
    </div>



    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input">

                    <textarea class="form-control input-lg" placeholder="Company Address" type="text" name="company_address" id="company_address">{{Input::old('company_address')}}</textarea>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input">

                    <textarea class="form-control input-lg" placeholder="Company Mailing Address" type="text" name="mailing_address" id="mailing_address">{{Input::old('mailing_address')}}</textarea>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select name="country_of_residence" class="form-control input-lg">
                        <option value="" selected="selected">Select company country of residence</option>
                        @if(count($countries) > 0)
                        @foreach($countries as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Corporate Web Site" type="text" name="company_web_address" id="company_web_address" value="{{Input::old('company_web_address')}}">
                </div>
            </div>
        </div>
    </div>





    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Corporate E-mail" type="text" name="company_email" id="company_email" value="{{Input::old('company_email')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Telephone no(s)" type="text" name="company_phone" id="company_phone" value="{{Input::old('company_phone')}}">

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-fax fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Company Fax" type="text" name="company_fax" id="company_fax" value="{{Input::old('company_fax')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Purpose of Investment" type="text" name="investment_purpose" id="investment_purpose" value="{{Input::old('investment_purpose')}}">

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <fieldset><legend><strong>Annual Average Turnover <i>NGN</i></strong></legend>
            <div class="col-sm-4 no-padding">
                <div class="form-group ">
                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="annual_avg_income" name="annual_avg_income" value="Less Than 10 Million Naira" @if(Input::old("annual_ave_income") == "Less Than 10 Million Naira") {{"checked"}} @endif style="margin-left: 0 !important;">Less Than 10 Million Naira
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="form-group">
                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="annual_avg_income" name="annual_avg_income" value="Between 10 - 15 Million Naira" @if(Input::old("annual_ave_income") == "Between 10 - 15 Million Naira") {{"checked"}} @endif STYLE="margin-left: 0 !important">Between 10 - 15 Million Naira
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 no-padding">
                <div class="form-group">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="annual_avg_income" name="annual_avg_income" value="50 Million Naira and Above" @if(Input::old("annual_ave_income") == "50 Million Naira and Above") {{"checked"}} @endif STYLE="margin-left: 0 !important">50 Million Naira and Above
                        </label>
                    </div>


                </div>
            </div>

        </fieldset>
    </div>

    <div class="row">
        <fieldset><legend><strong>Source of Investment Fund</strong></legend>
            <div class="col-sm-4 no-padding">
                <div class="form-group ">
                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="source_of_fund" name="source_of_fund" value="Employment" @if(Input::old("source_of_fund") == "Employment") {{"checked"}} @endif style="margin-left: 0 !important;">Employment
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="source_of_fund" name="source_of_fund" value="Business" @if(Input::old("source_of_fund") == "Business") {{"checked"}} @endif STYLE="margin-left: 0 !important">Business
                        </label>
                    </div>

                </div>
            </div>


            <div class="col-sm-4 no-padding">
                <div class="form-group">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="source_of_fund" name="source_of_fund" value="Others" @if(Input::old("source_of_fund") == "Others") {{"checked"}} @endif STYLE="margin-left: 0 !important">Others
                        </label>
                    </div>


                </div>
            </div>

        </fieldset>
    </div>



</div>
<div class="tab-pane" id="tab2">
    <br>
    <h3><strong>Step 2</strong> - BANK DETAILS</h3>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-bank fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Bank name" type="text" name="bank_name" id="bank_name" value="{{Input::old('bank_name')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-link fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Bank branch" type="text" name="bank_branch" id="bank_branch" value="{{Input::old('bank_branch')}}">

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Account name" type="text" name="account_name" id="account_name" value="{{Input::old('account_name')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-keyboard-o fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Account number" type="text" name="account_number" id="account_number" value="{{Input::old('account_number')}}">

                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa  fa-keyboard-o fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Bank Verification Number" type="text" name="bvn" id="bvn" value="{{Input::old('bvn')}}">

                </div>
            </div>

        </div>

    </div>

</div>


<div class="tab-pane" id="tab3">
    <br>
    <h3><strong>Step 3</strong> - PRINCIPAL CONTACT</h3>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Principal Contact Person fullname" type="text" name="principal_contact_name" id="principal_contact_name" value="{{Input::old('principal_contact_name')}}">

                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Principal Contact Email"  type="text" name="principal_contact_email" value="{{Input::old('principal_contact_email')}}" id="principal_contact_email">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Principal Contact Phone"  type="text" name="principal_contact_phone" value="{{Input::old('principal_contact_phone')}}" id="residence_date">

                </div>
            </div>
        </div>
    </div>

</div>
<div class="tab-pane" id="tab4">
<br>
<h3><strong>Step 4</strong> - AUTHORIZED SIGNATORY I</h3>
<br>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-graduation-cap fa-lg fa-fw"></i></span>
                <select name="education_level" class="form-control input-lg">
                    <option value="">Select education level</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <fieldset><legend><strong>Employment Status</strong></legend>
        <div class="col-sm-3 no-padding">
            <div class="form-group ">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="employment_status" name="employment_status" value="Full Time" @if(Input::old("employment_status") == "Full Time") {{"checked"}} @endif>Full Time
                    </label>
                </div>


            </div>
        </div>
        <div class="col-sm-3 no-padding">
            <div class="form-group">


                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio " type="radio" id="employment_status" name="employment_status" value="Part Time" @if(Input::old("employment_status") == "Part Time") {{"checked"}} @endif STYLE="margin-left: 0 !important">Part Time
                    </label>
                </div>

            </div>
        </div>


        <div class="col-sm-3 no-padding">
            <div class="form-group">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="employment_status" name="employment_status" value="Self Employed" @if(Input::old("employment_status") == "Self Employed") {{"checked"}} @endif STYLE="margin-left: 0 !important">Self Employed
                    </label>
                </div>


            </div>
        </div>
        <div class="col-sm-3 no-padding">
            <div class="form-group">


                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio " type="radio" id="employment_status" name="employment_status" value="Retired" @if(Input::old("employment_status") == "Retired") {{"checked"}} @endif >Retired
                    </label>
                </div>

            </div>
        </div>
    </fieldset>
</div>
<hr>


<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                <select name="employment_segment" class="form-control input-lg">
                    <option value="" selected="selected">Employment Segment</option>
                    <option value="United States">United States</option>
                </select>

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                <select name="occupation" class="form-control input-lg">
                    <option value="" selected="selected">Occupation</option>
                    <option value="United States">United States</option>
                </select>


            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <strong>Date of Employment</strong>
    </div>
    <div class="col-sm-6 ">

        <div class="form-group">
            <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                <input class="form-control input-lg" placeholder="Date of employment"  type="text" name="employment_date" value="{{Input::old('employment_date')}}" id="employment_date">

            </div>
        </div>
    </div>





</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-bank fa-lg fa-fw"></i></span>
                <input class="form-control input-lg" placeholder="Company name" type="text" name="company_name" id="company_name" value="{{Input::old('company_name')}}">

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="texarea">

                <textarea class="form-control input-lg" placeholder="Company Address" type="text" name="company_address" id="company_address" >{{Input::old('company_address')}}</textarea>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                <input class="form-control input-lg" placeholder="Company phone" type="text" name="company_phone" id="company_phone" value="{{Input::old('company_phone')}}">

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-fax fa-lg fa-fw"></i></span>
                <input class="form-control input-lg" placeholder="Company fax" type="text" name="company_fax" id="company_fax" value="{{Input::old('company_fax')}}">

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                <input class="form-control input-lg" placeholder="E-mail" type="text" name="company_email" id="company_email" value="{{Input::old('company_email')}}">

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-link fa-lg fa-fw"></i></span>
                <input class="form-control input-lg" placeholder="Website" type="text" name="company_website" id="company_website" value="{{Input::old('company_website')}}">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <fieldset><legend><strong>Annual Average Income</strong></legend>
        <div class="col-sm-4 no-padding">
            <div class="form-group ">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="annual_ave_income" name="annual_ave_income" value="Less Than 10 Million Naira" @if(Input::old("annual_ave_income") == "Less Than 10 Million Naira") {{"checked"}} @endif style="margin-left: 0 !important;">Less Than 10 Million Naira
                    </label>
                </div>


            </div>
        </div>
        <div class="col-sm-4 no-padding">
            <div class="form-group">


                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio " type="radio" id="annual_ave_income" name="annual_ave_income" value="Between 10 - 15 Million Naira" @if(Input::old("annual_ave_income") == "Between 10 - 15 Million Naira") {{"checked"}} @endif STYLE="margin-left: 0 !important">Between 10 - 15 Million Naira
                    </label>
                </div>

            </div>
        </div>


        <div class="col-sm-4 no-padding">
            <div class="form-group">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="annual_ave_income" name="annual_ave_income" value="50 Million Naira and Above" @if(Input::old("annual_ave_income") == "50 Million Naira and Above") {{"checked"}} @endif STYLE="margin-left: 0 !important">50 Million Naira and Above
                    </label>
                </div>


            </div>
        </div>

    </fieldset>
</div>

<div class="row">
    <fieldset><legend><strong>Source of Investment Fund</strong></legend>
        <div class="col-sm-4 no-padding">
            <div class="form-group ">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="source_of_fund" name="source_of_fund" value="Employment" @if(Input::old("source_of_fund") == "Employment") {{"checked"}} @endif style="margin-left: 0 !important;">Employment
                    </label>
                </div>


            </div>
        </div>
        <div class="col-sm-4 no-padding">
            <div class="form-group">


                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio " type="radio" id="source_of_fund" name="source_of_fund" value="Business" @if(Input::old("source_of_fund") == "Business") {{"checked"}} @endif STYLE="margin-left: 0 !important">Business
                    </label>
                </div>

            </div>
        </div>


        <div class="col-sm-4 no-padding">
            <div class="form-group">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="source_of_fund" name="source_of_fund" value="Others" @if(Input::old("source_of_fund") == "Others") {{"checked"}} @endif STYLE="margin-left: 0 !important">Others
                    </label>
                </div>


            </div>
        </div>

    </fieldset>
</div>
</div>

<div class="tab-pane" id="tab5">
    <br>
    <h3><strong>Step 5</strong> - Questionaire</h3>
    <br>
    <div class="row">
        <fieldset><legend><strong>Please state if any of your Directors, Signatories or Major Shareholders have held any Political Position.</strong></legend>
            <div class="col-sm-6 ">
                <div class="form-group ">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="political_position" name="political_position" value="Yes" style="margin-left: 0 !important;" @if(Input::old("political_position") == "Yes") {{"checked"}} @endif >Yes
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="form-group">
                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" @if(Input::old("political_position") == "No") {{"checked"}} @endif id="political_position" name="political_position" value="No" STYLE="margin-left: 0 !important">No
                        </label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>
    </div>
    <div class="row" id="polpos" >
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Specify Political Office" type="text" name="political_office" id="political_office" value="{{Input::old('political_office')}}">
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                            <input class="form-control input-lg"  placeholder="date from" type="text" name="political_office_date_from" id="political_office_date_from" value="{{Input::old('political_office_date_from')}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                            <input class="form-control input-lg"  placeholder="Date to" type="text" name="political_office_date_to" id="political_office_date_to" value="{{Input::old('political_office_date_from')}}">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

    </div>
</div>
<div class="tab-pane" id="tab6">
    <br>
    <h3><strong>Step 6</strong> - Attestation</h3>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input">

                    <label class="checkbox">
                        <input class="checkbox " type="checkbox" id="attestation" name="attestation" value="1" @if(Input::old("attestation") == 1) {{"checked"}} @endif  > I attest that all informtion provided herein
                        is accurate and would notify you to update my records where any changes occurs.
                    </label>

                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<div class="tab-pane" id="tab7">
    <br>
    <h3><strong>Step 7</strong> - Uploads</h3>
    <br>
    <div class="row smart-form">
        <fieldset><legend> Upload signature</legend>
            <label class="help-block bg-color-blueDark txt-color-white">Ensure that you upload a valid utility bill not more than 3 month old</label>
            <label class="input input-file">
                                <span class="button">

                                    <input class="" type="file" name="file-signature" id="file-signature" onchange="document.getElementById('signature').value = this.value" >Browse</span>
                <input class="" placeholder="Upload your signature" type="text" id="signature" name="signature" readonly="" value="">
            </label>
        </fieldset>
    </div>
    <div class="row smart-form">
        <fieldset><legend> Upload recent passport photograph</legend>
            <label class="help-block bg-color-blueDark txt-color-white">Ensure that you upload a recent passport photograph</label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="file-photo" id="file-photo" onchange="document.getElementById('photo').value = this.value" >Browse</span>
                <input class="" type="text" id="photo" name="photo" readonly="" placeholder="Upload a valid passport photograph" value="">
            </label>
        </fieldset>
    </div>
    <div class="row smart-form">
        <fieldset><legend> Upload recent utility bill</legend>
            <label class="help-block bg-color-blueDark txt-color-white">Ensure that you upload a valid utility bill not more than 3 month old</label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="file-utility" id="file-utility" onchange="document.getElementById('utility').value = this.value" >Browse</span>
                <input class="" type="text" id="utility" name="utility" readonly="" value="">
            </label>
        </fieldset>
    </div>


    <div class="row smart-form">
        <fieldset><legend> Upload valid means of identification</legend>
            <label class="help-block bg-color-blueDark txt-color-white">Ensure that you upload a valid means of identification</label>
            <label class="input input-file">
                                <span class="button">
                                    <input class="" type="file" name="file-identity" id="file-identity" onchange="document.getElementById('identity').value = this.value" >Browse</span>
                <input class="" type="text" id="identity" name="identity" readonly="" value="">
            </label>
        </fieldset>
    </div>

    <br>
</div>

<div class="tab-pane" id="tab8">
    <br>
    <h3><strong>Step 8</strong> - Save Form</h3>
    <br>
    <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
    <h4 class="text-center"><button type="submit" >Click here to finish</button> </h4>
    <br>
    <br>
</div>

<div class="form-actions">
    <div class="row">
        <div class="col-sm-12">
            <ul class="pager wizard no-margin">
                <!--<li class="previous first disabled">
                <a href="javascript:void(0);" class="btn btn-lg btn-default"> First </a>
                </li>-->
                <li class="previous disabled">
                    <a href="javascript:void(0);" class="btn btn-lg btn-default"> Previous </a>
                </li>
                <!--<li class="next last">
                <a href="javascript:void(0);" class="btn btn-lg btn-primary"> Last </a>
                </li>-->
                <li class="next">
                    <a href="javascript:void(0);" class="btn btn-lg txt-color-darken"> Next </a>
                </li>
            </ul>
        </div>
    </div>
</div>

</div>
</div>
</form>
</div>

</div>
<!-- end widget content -->

</div>
<!-- end widget div -->

</div>

<!-- end widget -->      
@stop                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  