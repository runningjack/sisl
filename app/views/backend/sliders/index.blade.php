<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/23/14
 * Time: 12:35 PM
 */
?>

<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Manage Slide ";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["frontend"]["sub"]["slideshow"]["sub"]["list"]["active"] = true;
include("inc/nav.php");

?>
    <!-- ==========================CONTENT STARTS HERE ========================== -->
    <!-- MAIN PANEL -->
    <div id="main" role="main">
        <?php
        //configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
        //$breadcrumbs["New Crumb"] => "http://url.com"
        $breadcrumbs["frontend"] = "";
        $breadcrumbs["Slideshow"] = "";
        include("inc/ribbon.php");
        ?>

        <!-- MAIN CONTENT -->
        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Slider <span>>
Manager</span></h1>

                </div>

            </div>

<section id="widget-grid">
<article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

<!-- Widget ID (each widget will need unique ID)-->
<!--End of widject -->

<div class="jarviswidget well transparent" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" role="widget" style="">
<!-- widget options:
usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

data-widget-colorbutton="false"
data-widget-editbutton="false"
data-widget-togglebutton="false"
data-widget-deletebutton="false"
data-widget-fullscreenbutton="false"
data-widget-custombutton="false"
data-widget-collapsed="true"
data-widget-sortable="false"

-->
<header role="heading">
    <span class="widget-icon"> <i class="fa fa-comments"></i> </span>
    <h2>Accordions </h2>

    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

<!-- widget div-->
<div role="content">

<!-- widget edit box -->
<div class="jarviswidget-editbox">
    <!-- This area used as dropdown edit box -->

</div>

<div class="widget-body">
    <h4>Image Size w:940px by h:417px</h4>
    {{ Form::open(array('action'=>array('Backend\HomeController@postSlideHome', 'slideimage'), 'method'=>'POST', 'class'=>'dropzone', 'id'=>'mydropzone')) }}
    {{-- Form::open(array('url'=>'backend/sliders/index/', 'method'=>'POST', 'class'=>'dropzone', 'id'=>'mydropzone' )) --}}<!--<form action="upload.php" class="dropzone" id="mydropzone">-->

    </form>

</div>
</div>
</div>
</article>
</section>


        <section id="widget-grid">
            <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

                <!-- Widget ID (each widget will need unique ID)-->
                <!--End of widject -->

                <div class="jarviswidget well transparent" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false" role="widget" style="">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header role="heading">
                        <span class="widget-icon"> <i class="fa fa-comments"></i> </span>
                        <h2>Accordions </h2>

                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                    <!-- widget div-->
                    <div role="content">

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>


                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body">
                            <div class="text-right">
                                <a href="#" id="dialog_link" class="btn btn-labeled btn-success">
                                    <span class="btn-label"><i class="glyphicon glyphicon-plus"></i> Add New </a></div>
                            <div id="dialog_simple" title="Dialog Simple Title">
                                <div id="msg"></div>
                                <p>
                                    {{ Form::open(array('action'=>array('Backend\HomeController@postAddPage', 'slidepost'), 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'fr')) }}
                                    @foreach($slideimages as $image)
                                    <div class="col-md-12">
                                        <label class="radio radio-inline">

                                            <input type="radio" id="image" name="image" class="radiobox" value="{{$image->img_name}}">
                                            <span><img src="{{ASSETS_URL}}/uploads/slideshow/{{$image->img_name}}" style="width:90px; height:55px" ></span>

                                        </label>

                                    </div>
                                    @endforeach


                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            Title
                                        </label>
                                        <div class="col-md-9">
                                            <section >
                                                <input type="text" class="col-md-12" id="title" name="title"  required="required" value="">
                                            </section>
                                        </div>
                                    </div>

                                <input type="hidden" id="type" name="type" value="slideshow" >
                                <input type="hidden" id="p_content" name="p_content">
                                <input type="hidden" id="parent_id" name="parent_id">
                                <input type="hidden" id="meta_keyword" name="meta_keyword">
                                <input type="hidden" id="meta_description" name="meta_description">
                                <input type="hidden" id="meta_title" name="meta_title">


                                    <div class="form-group">
                                        <label  class="col-md-3 control-label" >
                                            Url
                                        </label>
                                        <div class="col-md-9">
                                            <section >
                                                <input type="text" class="col-md-12" id="permalink" name="permalink"  required="required" value="">
                                            </section>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            Description</label>

                                        <div class="col-md-9">


                                            <textarea class="form-control" id="p_content" name="p_content" placeholder="Decription" rows="4"></textarea>

                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-9">
                                        <section>
                                            <p>&nbsp;</p>
                                            <button class="btn btn-success" type="submit" id="submit" name="submit" ><i class='fa fa-save'></i> Upload & Save</button>

                                        </section>
                                    </div>
                                </div>


                                </form>
                                </p>
                            </div>
                            <!-- end widget -->

                            <div class="panel-group smart-accordion-default" id="accordion">
                               @foreach($slideshows as $slideshow)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#{{$slideshow->id}}" class="collapsed">
                                                <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i>
                                                Slide {{$slideshow->id}} </a>
                                        </h4>
                                    </div>
                                    <div id="{{$slideshow->id}}" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            {{ Form::open(array('action'=>array('Backend\HomeController@postAddPage', 'delete'), 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'$slideshow->id')) }} <!--<form class="form-horizontal" id="{{$slideshow->id}}" method="get">-->

                                        <fieldset>
                                            <legend>Slide #{{$slideshow->id}}</legend>
<input type="hidden" id="id" name="id" value="{{$slideshow->id}}">
                                            <input type="hidden" name="type" value="{{$slideshow->type}}">
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    @foreach($slideimages as $image)
                                                    <label class="radio radio-inline">


                                                        <input type="radio" id="image" name="image" class="radiobox" value="{{$image->img_name}}" @if($image->img_name == $slideshow->image) {{"checked"}} @endif>
                                                        <span><img src="{{ASSETS_URL}}/uploads/slideshow/{{$image->img_name}}"  style="width:90px; height:55px" ></span>

                                                    </label>
                                                    @endforeach

                                                </div>



                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Title</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="title" id="title" type="text" value="{{$slideshow->title}}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Url</label>
                                                <div class="col-md-10">
                                                    <input class="form-control"  name="permalink" placeholder="" type="text" value="{{$slideshow->permalink}}" >


                                                </div>

                                            </div>

                                            <input type="hidden"  name="type" value="slideshow" >
                                            <input type="hidden"  name="p_content">
                                            <input type="hidden" name="parent_id">
                                            <input type="hidden"  name="meta_keyword">
                                            <input type="hidden"  name="meta_description">
                                            <input type="hidden"  name="meta_title">

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="description" placeholder="" rows="4">{{$slideshow->p_content}}</textarea>
                                                </div>
                                            </div>
<input type="hidden" name="oldimage" value="{{$slideshow->image}}">

                                        </fieldset>

                                            <p><input type="submit" name="update" value="update"  class="btn btn-primary btn-sm"><input type="submit" value="delete"  class="btn btn-danger btn-sm"></p>


                                        </form>

                                        </div>
                                    </div>
                                </div>
                               @endforeach

                            </div>

                        </div>
                        <!-- end widget content -->
<br>
                        <p>&nbsp;</p>
                    </div>
                    <!-- end widget div -->
</div>

            </article>
        </section>


        </div>
        <!-- END MAIN CONTENT -->
<br>
    </div>
    <!-- END MAIN PANEL -->
    <!-- ==========================CONTENT ENDS HERE ========================== -->

    <!-- PAGE FOOTER -->
<?php
// include page footer
include("inc/footer.php");
?>
    <!-- END PAGE FOOTER -->

<?php
//include required scripts
include("inc/scripts.php");
?>

    <!-- PAGE RELATED PLUGIN(S)
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->
    <script src="<?php echo ASSETS_URL; ?>/js/plugin/dropzone/dropzone.min.js"></script>
    <script>

        $(document).ready(function() {
            // PAGE RELATED SCRIPTS

            Dropzone.autoDiscover = true;
            $("#mydropzone").dropzone({
                //url: "/file/post",
                addRemoveLinks : true,
                maxFilesize: 0.5,
                dictResponseError: 'Error uploading file!'
            });

            $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
                _title : function(title) {
                    if (!this.options.title) {
                        title.html("&#160;");
                    } else {
                        title.html(this.options.title);
                    }
                }
            }));
            $('#dialog_link').click(function() {
                $('#dialog_simple').dialog('open');
                return false;

            });
            $('#dialog_simple').dialog({
                autoOpen : false,
                width : 600,
                resizable : false,
                modal : true,
                title : "<div class='widget-header'><h4><i class='fa fa-warning'></i> Add Image to Slide </h4></div>"

            });
        })

    </script>

<?php
//include footer
include("inc/google-analytics.php");
?>