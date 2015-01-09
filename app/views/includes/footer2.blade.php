<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/18/14
 * Time: 2:05 PM
 */
?>

<!-- PAGE FOOTER -->
<footer>

<div class="row" >


<?php $y=1;// print_r($pageblocks)
$list = array();
$list2 = array();
$list3 = array();
$listItem=array();
$listItem2 = array();
$menu =array();
$menu1 ="";
$link1 ="";

$col1 ="";
$col2 ="";
$col3 ="";

$data = array();
$footerobj =array();
$menuLink =array();
$text = array();
$text2 = array();
$text3 = array();
// $footerobj = new Post();
$data=array();
$maintxt =""; $d=1;?>

<?php foreach ($pageblocks as $pageblock2) {
    $pgposition2 = explode(",",$pageblock2->post_meta) ;
    $c = 1;

    $footerobj ="";
    if(in_array("footer",$pgposition2)  ){

        if($d ==1){
            $footerobj =  DB::table("posts")->where("id",$pageblock2->id)->get();

            if(count($footerobj) >0){
                //echo ' <div class="boxheader" style="margin:15px 25px 5px 0;"><h3>'.$pageblock2->title.'</h3></div>';
                $contentAll = explode("\r\n%",$footerobj[0]->description);  // get array of a single footer object

                $y =1;
                $datas = stripcslashes($contentAll[0]); //strips all mysql slashes this removes the new line character
                $datas = preg_replace(array('/"linkmr"/',"/'/"),"", $datas); // remove attached text for hyperlink
                $data= str_replace("%","%~^",$datas); //add additional character for exploding to identify list
                $data2 = explode("%",$data); // explode to identfy list
                // print_r($data2);
                $m=0;
                foreach($data2 as $key=>$value){

                    $valu  = explode("%",$value);
                    if(preg_match("/[~^]/",$value)){ //section that identifies list
                        array_push($list, $valu);

                    }else{
                        array_push($text,$valu);
                    }
                    $m++;
                }
            }


            $col1 .="<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12 '>";
            $col1 .= '<div class="boxheader" "><h4>'. $footerobj[0]->title.'</h4></div>';
            $col1 .= "<ul>";



            $col1.= getSubUL($list);
            $col1 .= "</ul>";
            $col1.='</div>';
        }



        if($d ==2){
            $footerobj =  DB::table("posts")->where("id",$pageblock2->id)->get();
            //print_r($footerobj);
            if(count($footerobj) >0){
                //echo ' <div class="boxheader" style="margin:15px 25px 5px 0;"><h3>'.$pageblock2->title.'</h3></div>';
                $contentAll = explode("\r\n%",$footerobj[0]->description);  // get array of a single footer object

                $ds = stripcslashes($contentAll[0]); //strips all mysql slashes this removes the new line character
                $ds = preg_replace(array('/"linkmr"/'),"", $ds); // remove attached text for hyperlink
                $da= str_replace("%","%~^",$ds); //add additional character for exploding to identify list
                $data2 = explode("%",$da); // explode to identfy list
                // print_r($data2);
                $m=0;
                foreach($data2 as $key=>$valu){

                    $val  = explode("%",$valu);

                    if(preg_match("/[~^]/",$valu)){ //section that identifies list

                        array_push($list2, $val);


                    }
                    if(!preg_match("/[~^]/",$valu)){
                        array_push($text2,$val);

                    }
                    $m++;
                }
            }



            $col2 .="<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12 '>";
            $col2 .= '<div class="boxheader" ><h4>'. $footerobj[0]->title.'</h4></div>';

            $col2 .= "<ul>";



            $col2.= getSubUL($list2);
            $col2 .= "</ul>";
            $col2.='</div>';
        }

        if($d ==3){
            $footerobj =  DB::table("posts")->where("id",$pageblock2->id)->get();
            //print_r($footerobj);
            if(count($footerobj) >0){
                //echo ' <div class="boxheader" style="margin:15px 25px 5px 0;"><h3>'.$pageblock2->title.'</h3></div>';
                $contentAll = explode("\r\n%",$footerobj[0]->description);  // get array of a single footer object

                $ds = stripcslashes($contentAll[0]); //strips all mysql slashes this removes the new line character
                $ds = preg_replace(array('/"linkmr"/'),"", $ds); // remove attached text for hyperlink
                $da= str_replace("%","%~^",$ds); //add additional character for exploding to identify list
                $data2 = explode("%",$da); // explode to identfy list

                $m=0;
                foreach($data2 as $key=>$valu){

                    $val  = explode("%",$valu);

                    if(preg_match("/[~^]/",$valu)){ //section that identifies list

                        array_push($list3, $val);


                    }
                    if(!preg_match("/[~^]/",$valu)){
                        array_push($text3,$val);

                    }
                    $m++;
                }
            }



            $col3 .="<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12 '>";
            $col3 .= '<div class="boxheader" ><h4>'. $footerobj[0]->title.'</h4></div>';

            $col3 .= "<ul>";



            $col3.= getSubUL($list3);
            $col3 .= "</ul>";
            $col3.='</div>';
        }



        $d++;
    }
    $c++;
}



function getSubUL($list){
    $listItems ="";

    foreach($list as $li){
        //print_r($li);
        //echo $li[0];
        if(preg_match("/[[]/",$li[0]) && preg_match("/[~^]/",$li[0]) ){
            $menuposStart = strpos($li[0],"[");
            $menuposEnd = strpos($li[0],"]");
            $linkposStart = strpos($li[0],"(");
            $linkposEnd = strpos($li[0],")");
            $menu1 = preg_replace(array("/[[]/","/[]]/"),"",substr($li[0],$menuposStart,$menuposEnd-2));
            $link1 = preg_replace(array("/[(]/","/[)]/","/'/"),"",substr($li[0],$linkposStart,$linkposEnd-2));
            $link = trim($link1);
            $listItems .="<li><a href='".$link."'>$menu1</a></li>" ;
        }elseif(preg_match("/[~^]/",$li[0]) && !preg_match("/[[]/",$li[0])){
            $menu1 = preg_replace("/[~^]/","",$li[0]);
            $listItems .="<li>$menu1</li>" ;
        }

    }
    return $listItems;
}


?>

<?php
echo $col1;
echo $col2;
echo $col3;

?>




<div class="col-md-3 col-sm-12 col-lg-3 col-xl-4 ">
    <div class="contact-details">
        <h4>Contact Us</h4>

        <p>Kindly call any of our underlisted customer care lines from Monday to Friday between 8.00 am and 5.00 pm:</p>

        <h5>Stanbic IBTC Stockbrokers Limited</h5>

        <b><i>(A member of Standard Bank Group)</i></b><br>
        Stanbic IBTC StockBrokers Limited<br/>
        IBTC Place, Walter Carington Crescent<br/>
        Victoria Island, Lagos<br/>
        Nigeria<br/>

    </div>
</div>


</div>

<div class="footer-copyright">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 center-block" style="text-align: center" >
                <span><a href="#" class="logo">
                        <!--<img alt="Stanbic stock brokers " src="../public/img/logo2.png" style="height: 37px !important; width: 31px !important" >-->
                    </a></span><span>&nbsp;</span><span>&nbsp;</span> <span> © 2014 All Rights reserved by <a href="/">Stanbic Stock Brokers</a></span>
        </div>

    </div>

</div>
</footer>
<!-- END PAGE FOOTER -->


