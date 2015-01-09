<!DOCTYPE html>
<html lang="en-us" <?php echo implode(' ', array_map(function($prop, $value) {
    return $prop.'="'.$value.'"';
}, array_keys($page_html_prop), $page_html_prop)) ;?>>

<style>

    .post-highlight{
        margin: 20px  0 15px; border-bottom: 2px solid #336dbd; padding-bottom: 4px
    }
    .post-container{
        border-bottom: 1px dashed #d3d3d3; margin-bottom: 5px
    }
    .post-head{

    }

    .post-body{

    }
</style>
<style>

    .post-highlight{
        margin: 20px  0 15px; border-bottom: 2px solid #336dbd; padding-bottom: 4px
    }
    .post-container{
        border-bottom: 1px dashed #d3d3d3; margin-bottom: 5px
    }
    .post-head{

    }

    .post-body{

    }

    .marquee {
        width: 100%;
        overflow: hidden;

        background: #f1f1f1;
        margin: 0;
        padding: 0;

    }
    .smart-form .label{
        margin-bottom: 0px;
    }
    div#anahead{
        margin-top: 0 !important;
        padding-top: 0 !important;
    }
    div#anahead .col .row .col{
        padding:0;
        margin:0;
        padding: 0;
        font-size: 13px;
        line-height: 12pt;
        vertical-align: top;
        border-bottom: 1px #eaeaea solid;
    }
    div#hed .col{
        font-weight: bold !important;
        background-color: #57889c;
        padding: 8px 1px !important;
        color:#fff;
    }
    div.js-marquee{
        font-size: 11px;
    }
</style>

<body <?php echo implode(' ', array_map(function($prop, $value) {
    return $prop.'="'.$value.'"';
}, array_keys($page_body_prop), $page_body_prop)) ;?>>

<!-- POSSIBLE CLASSES: minified, fixed-ribbon, fixed-header, fixed-width
     You can also add different skin classes such as "smart-skin-1", "smart-skin-2" etc...-->
<?php
if (!$no_main_header) {

?>
<!-- HEADER -->
<div style="background-image: url('<?php echo ASSETS_URL; ?>/img/header_bg.png'); ">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-2 col ">
            <div style="margin:10px 0;" ><a href="<?php echo ASSETS_URL; ?>" alt="Stanbic IBTC Stockbrokers logo" > <img src="<?php echo ASSETS_URL; ?>/img/logo.png"></a></div>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-9 ">
            <p>&nbsp;</p>
        </div>
    </div>
</div>

<div style="background-color: #F3F3F3">
    <div class="row" >
        <article class="col-sm-12">
            <div class="collapse navbar-collapse navbar-inverse">
                <ul class="nav navbar-nav">
                    <?php
                    $menunavs = DB::table("menus")->orderBy("sort_order","asc")->get();
                    foreach($menunavs as $mainmenu){
                        if($mainmenu->menu_type =="mainmenu" && !$mainmenu->has_child){
                            echo "<li >
                                    <a href=".ASSETS_URL."/$mainmenu->link>$mainmenu->title</a>
                                </li>";
                        }elseif($mainmenu->menu_type =="mainmenu" && $mainmenu->has_child){
                            echo "<li >
                                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' href='javascript:void(0);'>$mainmenu->title <b class='caret''></b></a>";
                            if($mainmenu->menu_type =="mainmenu"){ //get second level menu for first level

                                echo "<ul class='dropdown-menu'>";
                                $submenus = Menu::where("parent_id","=",$mainmenu->id)->get();
                                foreach($submenus as $submenu){
                                    echo"<li>
                                                   <a href=".ASSETS_URL."/$submenu->link>$submenu->title</a>
                                                </li>";
                                }
                                echo "</ul>";
                            }
                            echo"</li>";
                        }
                    }
                    ?>





                    <!--<li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Large Dropdown <b class="caret"></b></a>

                        <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">
                                        Glyphicons
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Available glyphs</a>
                                    </li>
                                    <li class="disabled">
                                        <a href="javascript:void(0);">How to use</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Examples</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">
                                        Dropdowns
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Example</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Aligninment options</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Headers</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Disabled menu items</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">
                                        Button groups
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Basic example</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Button toolbar</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Sizing</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Nesting</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Vertical variation</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">
                                        Button dropdowns
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Single button dropdowns</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">
                                        Input groups
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Basic example</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Sizing</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Checkboxes and radio addons</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">
                                        Navs
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Pills</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Justified</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">
                                        Navbar
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Default navbar</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Text</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Non-nav links</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Component alignment</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Fixed to top</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Fixed to bottom</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Static top</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Inverted navbar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>-->
                </ul>

                <form class="navbar-form navbar-left pull-right" role="search">
                    <div class="form-group">
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </form>

            </div>

        </article>

    </div>
</div>
<!--End of nav container -->
<div style="border-top:5px solid #3276b1"></div>

<!-- END HEADER -->


<?php
}
?>
