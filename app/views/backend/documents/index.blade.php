<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/29/14
 * Time: 12:01 AM
 */

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */
$page_title = "";
$page_title = "Document Uploads";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["frontend"]["sub"]["document"]["sub"]["list"]["active"] = false;
include("inc/nav.php");
$breadcrumbs["frontend"] ="";


?>
    <script src="../../js/app.config.js"></script>
    <!-- ==========================CONTENT STARTS HERE ========================== -->
    <!-- MAIN PANEL -->
    <div id="main" role="main">
    <?php
    //configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
    //$breadcrumbs["New Crumb"] => "http://url.com"
    //$breadcrumbs["Pages"] = "";
    include("inc/ribbon.php");
    ?>

    <!-- MAIN CONTENT -->
    <div id="content">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Document <span>>uploads</span></h1>
        </div>

    </div>

    <!-- widget grid -->
    <section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->

        <!-- WIDGET END -->

        <!-- NEW WIDGET START -->
        <article class="col-md-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-2" data-widget-editbutton="false">
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
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>All Documents </h2>

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
                        @if(Session::has('error'))
                        <div class="alert alert-info no-margin fade in">
                            <button class="close" data-dismiss="alert">

                            </button> {{Session::get("error")}}
                            <i class="fa-fw fa fa-info"></i>

                        </div>
                        @endif
                        @if(Session::has('message'))
                        <div class="alert alert-info no-margin fade in">
                            <button class="close" data-dismiss="alert">

                            </button> {{Session::get("message")}}
                            <i class="fa-fw fa fa-info"></i>

                        </div>
                        @endif
                        <div class="text-right">
                            <a href="#" id="dialog_link" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="glyphicon glyphicon-upload"></i></span> Upload  New Document </a>
                        </div>
                        <div id="dialog_simple" title="Dialog Simple Title">
                            <div id="msg"></div>
                            <p>
                                {{ Form::open(array('url'=>'backend/documents/index/', 'method'=>'POST', 'class'=>'form-horizontal', 'files'=>true)) }}


                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Parent Category</h5>
                                </div>
                                <div class="col-md-9">



                                        <select class="form-control" id="parent_id" name="parent_id">

                                            <option value="">--SELECT CATEGORY--</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach

                                        </select>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Title</h5>
                                </div>
                                <div class="col-md-9">


                                    <div class="input-group">
                                        <input type="hidden" id="type" name="type" value="document" >

                                        <input type="hidden" id="p_content" name="p_content">

                                        <input type="hidden" id="permalink" name="permalink">
                                        <input type="hidden" id="meta_keyword" name="meta_keyword">
                                        <input type="hidden" id="meta_description" name="meta_description">
                                        <input type="hidden" id="meta_title" name="meta_title">
                                        <input type="text" name="title" id="title" placeholder="Enter document title" class="form-control " >

                                    </div>


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Upload</h5>
                                </div>

                                <div class="col-md-9">
                                    <input type="file" id="fupload" name="fupload" class="btn btn-default" >

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Description</h5>
                                </div>
                                <div class="col-md-9">
                                    <section>

                                        <textarea class="form-control" id="description" name="description" placeholder="Decription" rows="4"></textarea>
                                    </section>
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


                        <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">

                            <thead>

                            <tr>
                                <th data-class="expand">SN</th>
                                <th data-hide="phone">Title</th>
                                <th data-hide="phone">Description</th>
                                <th data-hide="phone">Category</th>
                                <th data-hide="phone">link</th>
                                <th data-hide="phone,tablet">Date Created</th>
                                <th data-hide="phone,tablet">Date Modified</th>

                            </tr>
                            </thead>

                            <tbody id="listdata">
                            @if(isset($pages))
                                @foreach($pages as $page)
                            <tr>
                                    <td>{{$page->id}}</td>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->description}}</td>
                                    <td>
                                        @if($page->has_parent == 1)
                                        {{--*/$parent = DB::table("posts")->where("id","=",$page->parent_id)->first()/*--}}
                                        {{$parent->title}}
                                        @endif
                                    </td>
                                    <td><a href="{{ASSETS_URL}}/{{$page->permalink}}" target="_blank" ><span><i class="fa fw fa-download"></i></span>Download</a></td>
                                    <td>{{date_format(date_create($page->created_at),"d/m/Y")}}</td>
                                    <td>{{date_format(date_create($page->updated_at),"d/m/Y")}}</td>
                            </tr>
                                @endforeach
                            @else
                            <td colspan="6" >No listing available</td>

                            @endif

                            </tbody>

                        </table>


                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>
        <!-- WIDGET END -->

        <!-- NEW WIDGET START -->




        <!-- WIDGET END -->

    </div>

    <!-- end row -->

    </section>
    <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
    <!-- ==========================CONTENT ENDS HERE ========================== -->

    <!-- PAGE FOOTER -->
<?php
// include page footer
Session::flush();
include("inc/footer.php");
?>
    <!-- END PAGE FOOTER -->
    <script src="<?php echo ASSETS_URL; ?>/js/libs/jquery-ui-1.10.3.min.js"></script>

<?php
//include required scripts
include("inc/scripts.php");
?>

    <!-- PAGE RELATED PLUGIN(S)
    <script src="..."></script>-->

    <script>

        $(document).ready(function() {
            // PAGE RELATED SCRIPTS

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
                title : "<div class='widget-header'><h4><i class='fa fa-upload'></i> Add New Document for Download</h4></div>"

            });


            /* BASIC ;*/
            var responsiveHelper_dt_basic = undefined;
            var responsiveHelper_datatable_fixed_column = undefined;
            var responsiveHelper_datatable_col_reorder = undefined;
            var responsiveHelper_datatable_tabletools = undefined;

            var breakpointDefinition = {
                tablet : 1024,
                phone : 480
            };



            /* END BASIC */


            /* COLUMN FILTER  */
            var otable = $('#datatable_fixed_column').DataTable({
                //"bFilter": false,
                //"bInfo": false,
                //"bLengthChange": false
                //"bAutoWidth": false,
                //"bPaginate": false,
                //"bStateSave": true // saves sort state using localStorage
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
                    "t"+
                    "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",

                "autoWidth" : true,
                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_datatable_fixed_column) {
                        responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_datatable_fixed_column.respond();
                }

            });

            // custom toolbar
            $("div.toolbar").html('<div class="text-right"></div>');

            // Apply the filter
            $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {

                otable
                    .column( $(this).parent().index()+':visible' )
                    .search( this.value )
                    .draw();

            } );
            /* END COLUMN FILTER */

            //yyyy-mm-dd hh:ii

        })

    </script>
    <script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.colVis.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.tableTools.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
<?php
//include footer
include("inc/google-analytics.php");
?>