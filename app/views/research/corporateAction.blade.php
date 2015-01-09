<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/4/15
 * Time: 3:51 PM
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
        <h2>Corporate Action Listing </h2>

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
                    <th style="width:7%">

                    </th>
                    <th class="hasinput" style="width:17%">
                        <input type="text" class="form-control" placeholder="Filter Name" />
                    </th>

                    <th >

                    </th>
                    <th >

                    </th>
                    <th></th>
                    <th >

                    </th>
                    <th class="hasinput" style="width:17%">
                        <input type="text" class="form-control" placeholder="Filter Payment Date" />
                    </th>

                </tr>
                <tr>
                    <th data-class="expand">SN</th>
                    <th data-hide="phone">Company</th>
                    <th data-hide="phone">Dividend</th>
                    <th data-hide="phone">Bonus</th>
                    <th data-hide="phone">Closure</th>
                    <th data-hide="phone">AGM Date</th>
                    <th data-hide="phone">Payment Date</th>

                </tr>
                </thead>

                <tbody id="listdata">
                @if(isset($pricelists))
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

@stop