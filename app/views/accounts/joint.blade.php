@extends("layouts.forms")
@section("content")

<h2>Joint Account Openning Form</h2>
<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">

<header>
    <span class="widget-icon"> <i class="fa fa-check"></i> </span>
    <h2>Joint Account Form </h2>

</header>

<!-- widget div-->
<div>


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
        <li data-target="#step9">
            <a href="#tab9" data-toggle="tab"> <span class="step">9</span> <span class="title"><!--Save Form--></span> </a>
        </li>
        <li data-target="#step10">
            <a href="#tab10" data-toggle="tab"> <span class="step">10</span> <span class="title"><!--Save Form--></span> </a>
        </li>
        <li data-target="#step11">
            <a href="#tab11" data-toggle="tab"> <span class="step">11</span> <span class="title"><!--Save Form--></span> </a>
        </li>
        <li data-target="#step12">
            <a href="#tab12" data-toggle="tab"> <span class="step">12</span> <span class="title"><!--Save Form--></span> </a>
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
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="First Name" type="text" name="firstname" id="firstname" value="{{Input::old('firstname')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Last Name" type="text" name="lastname" id="lastname" value="{{Input::old('lastname')}}">

                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Othernames" type="text" name="othernames" id="othernames" value="{{Input::old('othernames')}}">

                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Date of birth"  type="text" name="date_of_birth" value="{{Input::old('date_of_birth')}}" id="date_of_birth">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select name="place_of_birth" id="place_of_birth" class="form-control input-lg">
                        <option value="" selected="selected">Select Place of birth</option>
                        @if(count($countries) > 0)
                        @foreach($countries as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        @endif
                    </select>

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
                        <option value="">Select state of birth</option>
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
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="lga_of_birth" id="lga_of_birth">
                        <option value="">Select LGA</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-bank fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="religion" id="religion">
                        <option value="">Select religion</option>
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
                    <span class="input-group-addon"><i class="fa fa-child fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="gender" id="gender">
                        <option value="">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="E-mail" type="text" name="email" id="email" value="{{Input::old('email')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Telephone" type="text" name="phone" id="phone" value="{{Input::old('phone')}}">

                </div>
            </div>
        </div>
    </div>



</div>
<div class="tab-pane" id="tab2">
    <br>
    <h3><strong>Step 2</strong> - Basic Information II</h3>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Mother's Maiden Name" type="text" name="mother_maiden_name" id="mother_maiden_name" value="{{Input::old('mother_maiden_name')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="texarea">

                    <textarea class="form-control input-lg" placeholder="Residential Address" type="text" name="residential_address" id="residential_address" >{{Input::old('residential_address')}}</textarea>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input">

                    <textarea class="form-control input-lg" placeholder="Mailing Address" type="text" name="mailing_address" id="mailing_address">{{Input::old('mailing_address')}}</textarea>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Date of Entrance into present residence"  type="text" name="residence_date" value="{{Input::old('residence_date')}}" id="residence_date">

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
                        <option value="" >Select country of residence</option>
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
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select name="nationality" class="form-control input-lg">
                        @if(count($countries) > 0)
                        @foreach($countries as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        @endif
                    </select>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="other_country_pass" name="other_country_pass" value="Yes" @if(Input::old("other_country_pass") == "Yes") {{"checked"}} @endif >Yes
                    </label>
                </div>


            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">


                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio " type="radio" id="other_country_pass" name="other_country_pass" value="No" @if(Input::old("other_country_pass") == "No") {{"checked"}} @endif >No
                    </label>
                </div>

            </div>
        </div>
    </div>

    <fieldset>
        <legend>IDENTIFICATION</legend>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="identification_type" name="identification_type" value="Driver's Licence" @if(Input::old("identification_type") == "Driver's Licence") {{"checked"}} @endif > Drivers Licence
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="identification_type" name="identification_type" value="National ID Card" @if(Input::old("identification_type") == "National ID Card") {{"checked"}} @endif>National ID Card
                        </label>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 no-padding">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="identification_type" name="identification_type" value="International Passport" @if(Input::old("identification_type") == "International Passport") {{"checked"}} @endif>International Passport
                        </label>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>ID Number</label>
                        <input class="form-control input-lg " placeholder="ID Number" type="text" id="identification_number" name="identification_number" value="{{Input::old('identification_number')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>Issuance Date</label>
                        <input class="form-control input-lg " placeholder="Issuance Date" type="text" id="issuance_date" name="issuance_date" value="{{Input::old('issuance_date')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>Expiry Date</label>
                        <input class="form-control input-lg" placeholder="Expiry Date" type="text" name="expiry_date" id="expiry_date" value="{{Input::old('expiry_date')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>Place of Issuance</label>
                        <input class="form-control input-lg " placeholder="Place of Issuance" type="text" id="place_of_issuance" name="place_of_issuance" value="{{Input::old('place_of_issuance')}}" >
                    </div>
                </div>
            </div>
        </div>
    </fieldset>


</div>

<div class="tab-pane active" id="tab3">
    <br>
    <h3><strong>Step 3 </strong> - Joint Holder's Basic Information I</h3>
<br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="First Name" type="text" name="joint_firstname" id="joint_firstname" value="{{Input::old('joint_firstname')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Last Name" type="text" name="joint_lastname" id="joint_lastname" value="{{Input::old('joint_lastname')}}">

                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Othernames" type="text" name="joint_othernames" id="joint_othernames" value="{{Input::old('joint_othernames')}}">

                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Date of birth"  type="text" name="joint_date_of_birth" value="{{Input::old('joint_date_of_birth')}}" id="joint_date_of_birth">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select name="joint_place_of_birth" id="joint_place_of_birth" class="form-control input-lg">
                        <option value="" selected="selected">Select Place of birth</option>
                        @if(count($countries) > 0)
                        @foreach($countries as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        @endif
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="joint_state_of_birth" id="joint_state_of_birth">
                        <option value="">Select state of birth</option>
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
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="joint_lga_of_birth" id="joint_lga_of_birth">
                        <option value="">Select LGA</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-bank fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="joint_religion" id="joint_religion">
                        <option value="">Select religion</option>
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
                    <span class="input-group-addon"><i class="fa fa-child fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="joint_gender" id="joint_gender">
                        <option value="">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="E-mail" type="text" name="joint_email" id="joint_email" value="{{Input::old('joint_email')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Telephone" type="text" name="joint_phone" id="joint_phone" value="{{Input::old('joint_phone')}}">

                </div>
            </div>
        </div>
    </div>



</div>
<div class="tab-pane" id="tab4">
    <br>
    <h3><strong>Step 4</strong> - Joint Holder's Basic Information II</h3>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Mother's Maiden Name" type="text" name="joint_mother_maiden_name" id="joint_mother_maiden_name" value="{{Input::old('joint_mother_maiden_name')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="texarea">

                    <textarea class="form-control input-lg" placeholder="Residential Address" type="text" name="joint_residential_address" id="joint_residential_address" >{{Input::old('joint_residential_address')}}</textarea>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input">

                    <textarea class="form-control input-lg" placeholder="Mailing Address" type="text" name="joint_mailing_address" id="joint_mailing_address">{{Input::old('joint_mailing_address')}}</textarea>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Date of Entrance into present residence"  type="text" name="joint_residence_date" value="{{Input::old('joint_residence_date')}}" id="joint_residence_date">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select name="joint_country_of_residence" class="form-control input-lg">
                        <option value="" >Select country of residence</option>
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
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select name="joint_nationality" class="form-control input-lg">
                        @if(count($countries) > 0)
                        @foreach($countries as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        @endif
                    </select>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">

                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio" type="radio" id="joint_other_country_pass" name="joint_other_country_pass" value="Yes" @if(Input::old("other_country_pass") == "Yes") {{"checked"}} @endif >Yes
                    </label>
                </div>


            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">


                <div class="input">
                    <label class="radio ">
                        <input class="form-control radio " type="radio" id="other_country_pass" name="other_country_pass" value="No" @if(Input::old("other_country_pass") == "No") {{"checked"}} @endif >No
                    </label>
                </div>

            </div>
        </div>
    </div>

    <fieldset>
        <legend>IDENTIFICATION</legend>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="joint_identification_type" name="joint_identification_type" value="Driver's Licence" @if(Input::old("identification_type") == "Driver's Licence") {{"checked"}} @endif > Drivers Licence
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="joint_identification_type" name="joint_identification_type" value="National ID Card" @if(Input::old("identification_type") == "National ID Card") {{"checked"}} @endif>National ID Card
                        </label>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 no-padding">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="joint_identification_type" name="joint_identification_type" value="International Passport" @if(Input::old("identification_type") == "International Passport") {{"checked"}} @endif>International Passport
                        </label>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>ID Number</label>
                        <input class="form-control input-lg " placeholder="ID Number" type="text" id="joint_identification_number" name="joint_identification_number" value="{{Input::old('joint_identification_number')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>Issuance Date</label>
                        <input class="form-control input-lg " placeholder="Issuance Date" type="text" id="joint_issuance_date" name="joint_issuance_date" value="{{Input::old('joint_issuance_date')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>Expiry Date</label>
                        <input class="form-control input-lg" placeholder="Expiry Date" type="text" name="joint_expiry_date" id="joint_expiry_date" value="{{Input::old('joint_expiry_date')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="input-group">
                        <label>Place of Issuance</label>
                        <input class="form-control input-lg " placeholder="Place of Issuance" type="text" id="joint_place_of_issuance" name="joint_place_of_issuance" value="{{Input::old('joint_place_of_issuance')}}" >
                    </div>
                </div>
            </div>
        </div>
    </fieldset>


</div>


<div class="tab-pane" id="tab5">
<br>
<h3><strong>Step 5</strong> - EMPLOYMENT DETAILS</h3>
<br>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-graduation-cap fa-lg fa-fw"></i></span>
                <select name="joint_education_level" class="form-control input-lg">
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
<div class="tab-pane" id="tab6">
    <br>
    <h3><strong>Step 6</strong> - BANK DETAILS</h3>
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

<div class="tab-pane" id="tab7">
    <br>
    <h3><strong>Step 7</strong> - NEXT OF KIN DETAILS</h3>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <select class="form-control input-lg">
                        <option value="">Select Title</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="First Name" type="text" name="kin_firstname" id="kin_firstname" value="{{Input::old('kin_firstname')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Last Name" type="text" name="kin_lastname" id="kin_lastname" value="{{Input::old('kin_lastname')}}">

                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Othernames" type="text" name="kin_othernames" id="kin_othernames" value="{{Input::old('kin_othernames')}}" >

                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Date of birth"  type="text" name="kin_date_of_birth" value="{{Input::old('kin_date_of_birth')}}" id="kin_date_of_birth">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                    <select name="kin_nationality" class="form-control input-lg">
                        <option value="" selected="selected">Select Place of birth</option>
                        @if(count($countries) > 0)
                        @foreach($countries as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        @endif
                    </select>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <fieldset><legend><strong>Relationship</strong></legend>
            <div class="col-sm-4 no-padding">
                <div class="form-group ">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="kin_relationship" name="kin_relationship" value="Parent" style="margin-left: 0 !important;" @if(Input::old("kin_relationship") == "Parent") {{"checked"}} @endif>Parent
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="kin_relationship" name="kin_relationship" value="Child" STYLE="margin-left: 0 !important" @if(Input::old("kin_relationship") == "Child") {{"checked"}} @endif >Child
                        </label>
                    </div>

                </div>
            </div>


            <div class="col-sm-4 no-padding">
                <div class="form-group">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="kin_relationship" name="kin_relationship" value="Spouse" STYLE="margin-left: 0 !important" @if(Input::old("kin_relationship") == "Spouse") {{"checked"}} @endif >Spouse
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="form-group">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="kin_relationship" name="kin_relationship" value="Others" STYLE="margin-left: 0 !important" @if(Input::old("kin_relationship") == "Others") {{"checked"}} @endif>Others
                        </label>
                    </div>


                </div>
            </div>

        </fieldset>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="E-mail" type="text" name="kin_email" id="kin_email" value="{{Input::old('kin_email')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Telephone" type="text" name="kin_phone" id="kin_phone" value="{{Input::old('kin_phone')}}">

                </div>
            </div>
        </div>
    </div>

</div>

<div class="tab-pane" id="tab8">
    <br>
    <h3><strong>Step 8</strong> - Minor Only</h3>
    <br>

    <div class="row">

        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Minor name" type="text" name="minor_name" id="minor_name" value="{{Input::old('minor_name')}}">

                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-sm-6" >
            <div class="form-group">
                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Date of birth"  type="text" name="minor_date_of_birth" value="{{Input::old('minor_date_of_birth')}}" id="minor_date_of_birth">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-child fa-lg fa-fw"></i></span>
                    <select class="form-control input-lg" name="minor_gender" id="minor_gender">
                        <option value="">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>

                </div>
            </div>
        </div>
    </div>



</div>

<div class="tab-pane" id="tab9">
    <br>
    <h3><strong>Step 9</strong> - Questionaire</h3>
    <br>
    <div class="row">
        <fieldset><legend><strong>Have you occupied any political position?</strong></legend>
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

                            <input class="form-control input-lg"  placeholder="date from" type="text" name="political_office_date_from" id="political_office_date_from" value="{{Input::old('political_office_date_from')}}">
                        </div>

                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group">

                            <input class="form-control input-lg"  placeholder="Date to" type="text" name="political_office_date_to" id="political_office_date_to" value="{{Input::old('political_office_date_from')}}">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <fieldset><legend><strong>Have any of your close relative/associate occupied any political position?</strong></legend>
            <div class="col-sm-6 ">
                <div class="form-group ">

                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio" type="radio" id="political_associate" name="political_associate" value="Yes" @if(Input::old("political_associate") == "Yes") {{"checked"}} @endif  style="margin-left: 0 !important;">Yes
                        </label>
                    </div>


                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="form-group">


                    <div class="input">
                        <label class="radio ">
                            <input class="form-control radio " type="radio" id="political_associate" name="political_associate" @if(Input::old("political_associate") == "No") {{"checked"}} @endif value="No" STYLE="margin-left: 0 !important">No
                        </label>
                    </div>

                </div>
            </div>


            <hr>

        </fieldset>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa  fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="Specify associate position" type="text" name="associate_position" id="associate_position" value="{{Input::old('associate_position')}}">

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa  fa-lg fa-fw"></i></span>
                    <input class="form-control input-lg" placeholder="relationship" type="text" name="associate_relationship" id="associate_relationship" value="{{Input::old('associate_relationship')}}">

                </div>
            </div>
        </div>
    </div>
    <div class="assopol">
        <div class="row"  >
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa  fa-lg fa-fw"></i></span>
                        <input class="form-control input-lg" placeholder="Specify Political Office" type="text" name="associate_office" id="associate_office" value="{{Input::old('associate_office')}}">

                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group">

                                <input class="form-control input-lg" placeholder="Date from" type="text" name="asso_political_office_date_from" id="asso_political_office_date_from" value="{{Input::old('asso_political_office_date_from')}}">
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input">
                                <input class="form-control input-lg" placeholder="Date to"  type="text" name="asso_political_office_date_to" id="asso_political_office_date_to" value="{{Input::old('asso_politial_office_date_to')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="row">

    </div>
</div>
<div class="tab-pane" id="tab10">
    <br>
    <h3><strong>Step 10</strong> - Attestation</h3>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="checkbox">

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
<div class="tab-pane" id="tab11">
    <br>
    <h3><strong>Step 11</strong> - Uploads</h3>
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
        </fieldset>signature,photo,utility,identity
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

<div class="tab-pane" id="tab12">
    <br>
    <h3><strong>Step 12</strong> - Save Form</h3>
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