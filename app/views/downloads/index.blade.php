<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/29/14
 * Time: 1:06 PM
 */
require_once("inc/init.php");


require_once("inc/config.ui.php");
?>

@extends("layouts.inner")
@section("content")

@if (isset($downloads))
<h2>{{ "Downloads" }}</h2>
    <article class="col-sm-12 col-md-12 col-lg-12 no-padding">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget well transparent no-padding" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">


            <!-- widget div-->
            <div>



                <!-- widget content -->
                <div class="widget-body">

                    <div class="panel-group smart-accordion-default" id="accordion">
<?php $x = 1 ;?>
                        @foreach($categories as $category)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$category->id}}"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i>{{$category->title}}</a></h3>
                            </div>
                            <div id="collapse{{$category->id}}"  @if($x==1){{'class="panel-collapse collapse in"'}} @else {{'class="panel-collapse collapse"'}} @endif>
                                <div class="panel-body no-padding">
                                    <table class="table ">

                                        <tbody>
                                        {{--*/$childdocs = Post::where("parent_id","$category->id")->get()/*--}}
                                        @if(count($childdocs)>0)
                                        @foreach($childdocs as $childdoc)
                                        <tr>
                                            <td>{{$childdoc->title}}</td>
                                            <td>{{$childdoc->description}}</td>
                                            <td><a href="{{ASSETS_URL}}/{{$childdoc->permalink}}" target="_blank"><i class="fa fa-download"></i>Download</a> </td>

                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>{{"<td>No $category->title available for download</td>"}}</tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    {{--*/$x++/*--}}
                        @endforeach


                    </div>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->

    </article>

{{-- $page->p_content --}}
@else
<h2>Welcome</h2>

<p>There are no documents for download yet</p>
@endif

@stop