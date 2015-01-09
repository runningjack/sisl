<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/18/14
 * Time: 2:03 PM
 */
?>
<?php


require_once("inc/init.php");


require_once("inc/config.ui.php");



$page_title = "Welcome";

$page_css[] = "your_style.css";
?>
<!DOCTYPE html>
<html>
<head>
@include('includes.head')
</head>

@include('includes.header')


    <div class="row "  >
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12  ">
       <div class="row" style="margin-bottom: 20px">
            <?php $x=1;  ?>
            <?php foreach ($pageblocks as $pageblock) : ?>

                <?php $pgposition = explode(",",$pageblock->post_meta)  ;?>
                @if(in_array("home top",$pgposition) && $x<=3)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding ">

                    <div class="boxheader" style="margin:15px 25px 5px 0;"><h3>{{$pageblock->title}} </h3></div>
                    <p>{{$pageblock->description}}
                    </p>
                    @if($pageblock->parent_id != 0)
                    {{--*/ $parent = DB::table("posts")->where("id","=",$pageblock->parent_id)->first()/*--}}

                    <p><a href="{{ASSETS_URL}}{{"/"}}{{$parent->permalink}}" class="btn btn-info btn-sm">Read more</a></p>
                    @elseif($pageblock->permalink !="")
                    @endif
                </div>
                @endif
                <?php $x++;  ?>
            <?php endforeach ;?>

        </div>

       <div class="row" style="margin-bottom: 20px">
            <div class="col-lg-8 col-md-8 no-padding" >
                <div style="margin: 20px  0 15px; border-bottom: 2px solid #e18d00; padding-bottom: 4px"> <h3><strong>News </strong> Update</h3></div>
                <?php //print_r(); ?>
                <?php ?>
                @foreach($marketnews as $news)
                <div class="news" style="border-bottom: 1px dashed #d3d3d3; margin-bottom: 5px">
                    <div class="newsheader">
                        <h4><a href="posts/{{$news->permalink}}"> {{$news->title}}</a></h4>
                    </div>
                    <div class="newsbody">
                        <p>{{$news->description}} <a href="posts/{{$news->permalink}}">Read more</a></p>
                    </div>
                </div>
                @endforeach
            </div>

           <div class="col-lg-4 col-md-4" style="background-color: #f3f3f3" >
               <div style="margin: 20px  0 15px; border-bottom: 2px solid #e18d00; padding-bottom: 4px"> <h3><strong>Market </strong> News</h3></div>
               <?php $x=1;  ?>
               <?php ?>

               @foreach($marketnews as $news)
               @if($x <=2)
               <div class="news" style="border-bottom: 1px dashed #d3d3d3; margin-bottom: 5px">
                   <div class="newsheader">
                       <h4><a href="posts/{{$news->permalink}}"> {{$news->title}}</a></h4>
                   </div>
                   <div class="newsbody">
                       <p>{{$news->description}} <a href="posts/{{$news->permalink}}">Read more</a></p>
                   </div>
               </div>
               {{--*/ $x++ /*--}}
               @endif
               @endforeach
           </div>


        </div>

    </div><!--End of main content-->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 "><!--Sidebar Begins-->

            @include("includes.sidebar")

            </div>
        </div><!--End of sidebar-->

    </div><!--End of content layout-->




@yield('content')

<div class="row" style="margin-bottom: 20px">
    <?php $x=1;// print_r($pageblocks) ?>
    <?php foreach ($pageblocks as $pageblock2) : ?>


        <?php $pgposition2 = explode(",",$pageblock2->post_meta) ;?>
        @if(in_array("home bottom",$pgposition2) && $pageblock2->image !="" )
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  ">

            <div class="boxheader" style="margin:15px 25px 5px 0;"><h3>{{$pageblock2->title}} </h3></div>
            <p>
                @if($pageblock2->parent_id >0)
                    {{--*/ $post = \DB::table("posts")->where("id","=",$pageblock2->parent_id)->first() /*--}}

                <a href="{{ASSETS_URL}}{{'/'.$post->permalink}}"> <img src="./uploads/{{$pageblock2->image}}"></a>
                @else
                    <img src="./uploads/{{$pageblock2->image}}">
                @endif
            </p>

        </div>
        @endif
        <?php $x++;  ?>
    <?php endforeach ;?>

</div>

@include('includes.footer')
</body>
<?php
//include required scripts
include("inc/scripts.php");
?>

<!-- PAGE RELATED PLUGIN(S)
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->
<script type='text/javascript' src='<?php echo ASSETS_URL; ?>/js/jquery.marquee.min.js'></script>

<script>
    var globals = { 'bestmarktsell':0.9,'bestmarktbuy':1.1,'consideration':0,'charges':0,'proceed':0,'qty':0,'price':0,'bestmrktprice':0,pclose:0,'transtype':'' };
    $(document).ready(function() {
        // PAGE RELATED SCRIPTS
        $('.marquee').marquee({
            //speed in milliseconds of the marquee
            duration: 35000,
            //gap in pixels between the tickers
            gap: 50,
            //time in milliseconds before the marquee will start animating
            delayBeforeStart: 0,
            //'left' or 'right'
            direction: 'left',
            //true or false - should the marquee be duplicated to show an effect of continues flow
            duplicated: false
        });
        $("#trans_type").on("change",function(){
            if($(this).val() == "best market"){
                globals.price = bestMrkPrice($("#trans_type").val(),globals.pclose)
                $("#price").val(globals.price)
                $("#price").attr("readonly","readonly")
            }else{
                $("#price").removeAttr("readonly")
                $("#price").val(0)
                globals.price = 0
            }
            setVars();
            calculatePrice()
        })



        $("#symbol").on("change",function(){


            var request = $.ajax({
                url:"",
                type:"post",
                data:{symbol:$(this).val(),currency:""},
                dataType:"html"
            });

            request.done(function(data){
                globals.pclose = data;
                $("#pclose").val(data)
                globals.qty     =   $("#quantity").val();//document.getElementById("quantity").
                globals.price   =   $("#price").val();
                globals.pclose  =   data
                globals.transtype   =   $("#trans_type").val();



            })


            request.fail(function(){
                alert("Request failed: ")
            })


        })
        $("#pcondition").on("change",function(){
            if($(this).val() == "best market"){
                globals.price = bestMrkPrice($("#trans_type").val(),globals.pclose)
                $("#price").val(globals.price)
                $("#price").attr("readonly","readonly")
            }else{
                $("#price").removeAttr("readonly")
                $("#price").val(0)
                globals.price = 0
            }
            setVars();
            calculatePrice()
        })

        $("#quantity").on("keyup",function(){
            setVars();
            calculatePrice()
        })
        $("#quantity").on("keypress",function(evt){
            return isNumberKey(evt)
        })

        $("#price").on("keyup",function(){
            setVars();
            calculatePrice()
        })
        $("#price").on("keypress",function(evt){
            //return isNumberKey(evt)
        })
        $("#pclose").on("change",function(){
            setVars()
            if($(this).val() == "best market"){
                globals.price = bestMrkPrice(parseFloat($("#trans_type").val()),parseFloat(globals.pclose))
                $("#price").val(globals.price)
                $("#price").attr("readonly","readonly")
            }else{
                $("#price").removeAttr("readonly")
                $("#price").val(0)
                globals.price = 0
            }

            calculatePrice()
        })

        function calculatePrice(){

            //globals.price = $(this).val()

            globals.consideration   =     consideration(globals.price,globals.qty)
            globals.charges         =     charges(globals.transtype)

if(globals.transtype=="Sell"){
            var cost = parseFloat(globals.consideration)-parseFloat(globals.charges)
            //alert(globals.qty+" "+globals.price)
            $("#calculatorsit").html("<div class='row' ><div class='col-8 col'><h6>Consideration </h6></div><div class='col-4 col curr'>"+globals.consideration+"</div></div><div class='row' ><div class='col-8 col'><h6>Charges </h6></div><div class='col-4 col curr'>"+globals.charges+"</div></div><div class='row' ><div class='col-8 col'><h6>Proceed to sell </h6></div><div class='col-4 col curr'>"+cost+"</div></div>");
}else if(globals.transtype=="Buy"){
    var cost = parseFloat(globals.consideration)+parseFloat(globals.charges)
    $("#calculatorsit").html("<div class='row' ><div class='col-8 col'><h6>Consideration </h6></div><div class='col-4 col curr'>"+globals.consideration+"</div></div><div class='row' ><div class='col-8 col'><h6>Charges </h6></div><div class='col-4 col curr'>"+globals.charges+"</div></div><div class='row' ><div class='col-8 col'><h6>Cost of Purchase </h6></div><div class='col-4 col curr'>"+cost+"</div></div>");
}       $(".curr").formatCurrency()
        }
    })

    function setVars(){
        globals.qty     =   $("#quantity").val();//document.getElementById("quantity").
        globals.price   =   $("#price").val();
        globals.pclose  =   $("#pclose").val();
        globals.transtype   =   $("#trans_type").val();
        //globals.bestmrktprice   =     bestMrkPrice(globals.transtype,globals.pclose)
    }



    function bestMrkPrice(transType,closePrice){
        if(transType == "Sell"){
            globals.price = closePrice * globals.bestmarktsell
        }else if(transType =="Buy"){
            globals.price = closePrice * globals.bestmarktbuy
        }
        return globals.price;
    }

    function consideration(mkt, qty){
        return globals.consideration = mkt * qty;
    }

    function charges(transType){
        if(globals.consideration < 5000){
            if(transType=="Sell"){
                globals.charges = ((0.675/100)*globals.consideration)+4+4*5/100+50
            }else if(transType=="Buy"){
                globals.charges = ((0.375/100)*globals.consideration)+4+4*5/100+50
            }
        }else if(globals.consideration > 5000){
            if(transType=="Sell"){
                globals.charges = ((1.675/100)*globals.consideration)+4+4*5/100
            }else if(transType=="Buy"){
                globals.charges = ((1.375/100)*globals.consideration)+4+4*5/100
            }
        }

        return globals.charges;
    }

    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }


</script>

<?php
//include footer
include("inc/google-analytics.php");
?>
</html>