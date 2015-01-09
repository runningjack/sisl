<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/4/15
 * Time: 3:45 PM
 */
?>
@extends("layouts.pricelist")
@section("content")
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
        <h2>Stock Price Listing </h2>

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
            <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">

                <thead>
                <tr>

                    <th class="hasinput" style="width:11%">
                        <input type="text" class="form-control" placeholder="Symbol" />
                    </th>

                    <th>

                    </th>
                    <th></th><th class="hasinput" style="width:8%">
                        <input type="text" class="form-control" placeholder="High" />
                    </th>

                    <th class="hasinput" style="width:8%">
                        <input type="text" class="form-control" placeholder="Low" />
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="hasinput icon-addon" >
                        <input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="dd/mm/yy">
                        <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
                    </th>


                </tr>
                <tr>

                    <th data-hide="phone">Symbol</th>
                    <th data-hide="phone">PClose</th>
                    <th data-hide="phone">Open</th>
                    <th data-class="expand">High</th>
                    <th data-hide="phone">Low</th>
                    <th data-hide="phone">Close</th>
                    <th data-hide="phone">Change</th>
                    <th data-class="expand">Deal</th>
                    <th data-hide="phone">Volume</th>
                    <th data-hide="phone">Value</th>
                    <th data-hide="phone">%Change</th>
                    <th data-hide="phone">Avg Price</th>
                    <th data-hide="phone,tablet">Stock Date </th>


                </tr>
                </thead>

                <tbody id="listdata">

                @if($pricelists)
                {{$pricelists}}
                @else
                <td colspan="13" >No listing available</td>

                @endif

                </tbody>

            </table>
        </div>
        <!-- end widget content -->

    </div>
    <!-- end widget div -->

</div>
<!-- end widget -->

@stop