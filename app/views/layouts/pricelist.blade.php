<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/4/15
 * Time: 4:50 PM
 */ ?>


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

    <div class="col-md-12 col-lg-12 col ">
        @yield('content')
    </div>

</div>





@include('includes.footer2')

<!-- END PAGE FOOTER -->
<script src="<?php echo ASSETS_URL; ?>/js/libs/jquery-ui-1.10.3.min.js"></script>
<script type='text/javascript' src='<?php echo ASSETS_URL; ?>/js/jquery.marquee.min.js'></script>

<?php
//include required scripts
include("inc/scripts.php");
?>

<!-- PAGE RELATED PLUGIN(S)
<script src="..."></script>-->

<script>

    $(document).ready(function() {
        // PAGE RELATED SCRIPTS
        $('.marquee').marquee({
            //speed in milliseconds of the marquee
            duration: 35000,
            //gap in pixels between the tickers
            gap: 25,
            //time in milliseconds before the marquee will start animating
            delayBeforeStart: 0,
            //'left' or 'right'
            direction: 'left',
            //true or false - should the marquee be duplicated to show an effect of continues flow
            duplicated: false
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