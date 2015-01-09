<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/4/15
 * Time: 3:47 PM
 */ ?>
<style>
    .marquee {
        width: 100%;
        overflow: hidden;
        font-size: 10px !important;
        background: #f1f1f1;
        margin: 0;
        padding: 0;

    }
</style>
@extends("layouts.pricelist")
@section("content")
<section >
<div class="row">
<div class="col-lg-12 col-md-12" style="padding-left: 0">

    <div style="margin: 20px  0 15px; border-bottom: 2px solid #336dbd; padding-bottom: 4px; text-align: right"> <h3><strong>Market </strong> Watch</h3></div>
    <div class="row" style="margin: 0; padding:0">
        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 " style="color: #fff;
background-color: #a90329;
border-color: #900323;"" >
        Latest Price List
    </div>
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 " style="margin: 0; padding:0">
        <div class="marquee">

            @foreach($pricelists as $pricelist)
                            <span style="display: inline-block;
width: 10px;
height: 10px;
border-radius: 10px;
cursor: pointer;margin: 0;

background-color: #044893;"></span><span ><b >SYMBOL </b>{{rtrim($pricelist->symbol)}} <b>PRE. CLOSE </b> {{rtrim($pricelist->pclose)}} <b>OPEN </b> {{rtrim($pricelist->open)}}
                            <b>HIGH </b> {{rtrim($pricelist->high)}} <b>LOW </b> {{rtrim($pricelist->low)}} <b>CLOSE </b>

                                {{rtrim($pricelist->close)}}
                                @if($pricelist->close < $pricelist->pclose)
                                <img src="../img/down.gif">
                                @else
                                <img src="../img/up.gif">
                                @endif
                                <b>CHANGE </b> {{rtrim($pricelist->change)}}
                            <b>DEAL </b> {{rtrim($pricelist->deal)}} <b>VOLUME </b> {{rtrim($pricelist->volume)}} <b>VALUE</b>  {{rtrim(str_replace('"',"",$pricelist->value))}}</span>
            @endforeach
        </div>
    </div>
</div>
</div>
</section>

<div class="metro">
    <div class="grid fluid">
        <div class="row">
            <div class="span6">

                <div class="panel">
                    <div class="panel-header bg-Blue fg-white">
                        Top 5 Losers
                    </div>
                    <div class="panel-content">
                        <div class="row" id="anahead" >

                            <div class="col-md-12 col-lg-12 col-sm-12 col" id="hed" style="margin:0;padding:0;  ">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-4 col ">Symbol</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">PClose</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">Close</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">Loss</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">%Change</div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12 col-sm-12 col" style="margin:0;padding:0; font-size: 1.2rem">
                                <?php
                                $x=1;
                                foreach($toploosers as $toploser){
                                    $lose = $toploser->close - $toploser->pclose;
                                    echo"<div class='row'>
                                                    <div class='col-md-4 col-lg-4 col-sm-4 col'>".$toploser->symbol."</div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col'>".$toploser->pclose."</div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col'>".$toploser->close."</div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col fg-red'>".number_format($lose,2)."<span><img src='../img/down.gif'></span></div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col'>".$toploser->percentage_change."</div>


                                                </div>";
                                    $x++;
                                }
                                ?>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="span6 ">

                <div class="panel">
                    <div class="panel-header bg-Blue fg-white">
                        Top 5 Gainers
                    </div>
                    <div class="panel-content" >
                        <!-- <table class="table table-hover" >
                                                <thead style=" display:block;">
                                                <tr>

                                                    <th>Symbol</th>
                                                    <th>PClose</th>
                                                    <th>Close</th>
                                                    <th>Gain</th>
                                                    <th>%Change</th>


                                                </tr>
                                                </thead>
                                                <tbody style="height:300px; overflow-y:scroll; display:block;">
                                                <?php
                        /*                                                //print_r($topgainers);
                                                                     $x=0;
                                                                        foreach($topgainers as $topgainer){
                                                                            $gain = $topgainer->close - $topgainer->pclose;
                                                                        echo"<tr>
                                                                            <td>".$topgainer->symbol."</td>
                                                                            <td>".$topgainer->pclose."</td>
                                                                            <td>".$topgainer->close."</td>
                                                                            <td>".number_format($gain,2)."</td>
                                                                            <td>".$topgainer->percentage_change."</td>


                                                                        </tr>";
                                                                            $x++;
                                                                        }
                                                                        */?>
                                                <tr>
                                                    <td>ABCTRANS</td>
                                                    <td>0.77</td>
                                                    <td>0.82</td>
                                                    <td>0.05</td>
                                                    <td>6.49</td>


                                                </tr>

                                                </tbody>
                                            </table>style="height: 500px; overflow-y: scroll"-->

                        <div class="row" id="anahead" >

                            <div class="col-md-12 col-lg-12 col-sm-12 col" id="hed" style="margin:0;padding:0;  ">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-4 col ">Symbol</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">PClose</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">Close</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">Gain</div>
                                    <div class="col-md-2 col-lg-2 col-sm-2 col ">%Change</div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12 col-sm-12 col" style="margin:0;padding:0; font-size: 1.2rem">
                                <?php
                                $x=1;
                                foreach($topgainers as $topgainer){
                                    $gain = $topgainer->close - $topgainer->pclose;
                                    echo"<div class='row'>
                                                    <div class='col-md-4 col-lg-4 col-sm-4 col'>".$topgainer->symbol."</div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col'>".$topgainer->pclose."</div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col'>".$topgainer->close."</div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col fg-green'>".number_format($gain,2)."<span><img src='../img/up.gif'></span></div>
                                                    <div class='col-md-2 col-lg-2 col-sm-2 col'>".$topgainer->percentage_change."</div>


                                                </div>";
                                    $x++;
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="span4">

                <div class="panel" >
                    <div class="panel-header bg-darkRed fg-white">
                        Price List
                    </div>
                    <div class="panel-content" >
                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th>Symbol</th>
                                <th>PClose</th>
                                <th>Open</th>
                                <th>High</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>7UP</td>
                                <td>154.00</td>
                                <td>159.00</td>
                                <td>169.00</td>


                            </tr>
                            <tr>
                                <td>ABCTRANS</td>
                                <td>O.55</td>
                                <td>0.55</td>
                                <td>0.55</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>

@stop