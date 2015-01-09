<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/4/15
 * Time: 3:52 PM
 */

?>
@extends("layouts.inner")
@section("content")

@if (isset($downloads))
<h2>{{ "Downloads" }}</h2>

<ul class="media-list">


    @foreach($downloads as $download)
    <li class="media">

        <a class="pull-left" href="../{{$download->permalink}}">
            <img class="media-object" alt="64x64" src="../img/stanbic-download.png" style="width: 64px !important; height: 64px !important"> </a>
        <div class="media-body">
            <h4 class="media-heading">{{--$download->title--}}</h4>
            <p>
                {{--$download->description--}}
            </p>

        </div>
    </li>
    @endforeach
    @endif
</ul>
@stop