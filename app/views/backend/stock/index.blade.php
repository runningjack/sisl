<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/25/14
 * Time: 10:15 AM
 */


//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Price List";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["stock"]["active"] = false;
include("inc/nav.php");
$breadcrumbs["Categories"] =""
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
                    <h1 class="page-title txt-color-blue"><i class="fa-fw fa fa-code"></i> Stock Listing <span>> Listing by upload</span></h1>
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
                                <h2>All Categories </h2>

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
                                            <span class="btn-label"><i class="glyphicon glyphicon-plus"></i> Add New </a>
                                    </div>
                                    <div id="dialog_simple" title="Dialog Simple Title">
                                        <div id="msg"></div>
                                        <p>
                                            {{ Form::open(array('url'=>'backend/stock/index/slideimage', 'method'=>'POST', 'class'=>'form-horizontal', 'files'=>true)) }}

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>Stock Date</h5>
                                                </div>
                                                <div class="col-md-9">


                                                        <div class="input-group">
                                                            <input type="date" name="mydate" placeholder="Select a date" class="form-control datepicker" >
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>

                                                    <p class="help-block alert-warning">
                                                       Select a date if date is not the same as today. If this field is empty the system assigns current date
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>Upload</h5>
                                                </div>

                                                    <div class="col-md-9">
                                                        <input type="file" id="fupload" name="fupload" class="btn btn-default" id="exampleInputFile1">
                                                        <p class="help-block alert-info">
                                                            Ensure that stock price list file is in the right format.
                                                        </p>
                                                    </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>Description</h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <section>
                                                        <input type="hidden" id="type" name="type" value="category" >
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
                                                <th style="width:7%">

                                                </th>
                                                <th class="hasinput" style="width:17%">
                                                    <input type="text" class="form-control" placeholder="Filter Name" />
                                                </th>

                                                <th style="width: 27%">

                                                </th>
                                                <th style="width:17%">

                                                </th>
                                                <th class="hasinput icon-addon">
                                                    <input id="dateselect_filter" type="text" placeholder="Filter Date Added" class="form-control datepicker" data-dateformat="yy/mm/dd">
                                                    <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
                                                </th>
                                                <th class="hasinput" style="width:16%">
                                                    <input type="text" class="form-control" placeholder="Filter Salary" />
                                                </th>
                                            </tr>
                                            <tr>
                                                <th data-class="expand">SN</th>
                                                <th data-hide="phone">Title</th>
                                                <th data-hide="phone">Description</th>
                                                <th data-hide="phone">link</th>
                                                <th data-hide="phone,tablet">Date Created</th>
                                                <th data-hide="phone,tablet">Date Modified</th>

                                            </tr>
                                            </thead>

                                            <tbody id="listdata">
                                            @if($pricelists)
                                            {{$pricelists}}
                                            @else
                                            <td colspan="5" >No listing available</td>

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
                title : "<div class='widget-header'><h4><i class='fa fa-warning'></i> Add New Stock Price List</h4></div>",

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