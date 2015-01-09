<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/19/14
 * Time: 9:59 AM
 */



//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Add New";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["pages"]["sub"]["addnew"]["active"] = true;
include("inc/nav.php");

?>
    <script src="../../js/app.config.js"></script>
    <!-- ==========================CONTENT STARTS HERE ========================== -->
    <!-- MAIN PANEL -->
    <div id="main" role="main">
        <?php
        //configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
        //$breadcrumbs["New Crumb"] => "http://url.com"
        $breadcrumbs["Pages"] = "";
        include("inc/ribbon.php");
        ?>

        <!-- MAIN CONTENT -->
        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Pages <span>> Add New</span></h1>

                </div>

            </div>
            <section>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <div class="text-left">
                        {{HTML::decode(HTML::linkRoute('pageslisting','<span class="btn-label"><i class="glyphicon glyphicon-back"></i> Back to Pages'))}}
                    </div>
                </div>
            </section>
            {{ Form::open(array('', 'method'=>'POST', 'class'=>'form-horizontal', 'files'=>true)) }}
            <div class="row">
                <div class="col-sm-9">



                    <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" role="widget" style="">
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
                        <header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus"></i></a>  </div>
                            <span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
                            <h2 class="font-md"><strong>Set </strong> <i>Content</i></h2>

                            <!--<span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span>-->
                        </header>

                        <!-- widget div-->

                        <div role="content" style="display: block;">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body">

                                <fieldset>
                                    <legend></legend>
                                    @if($errors->has("title"))
                                    <div class="alert alert-danger fade in">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <i class="fa-fw fa fa-times"></i>{{$errors->first("title",":message")}}

                                    </div>

                                    @endif
                                    @if($errors->has("permalink"))
                                    <div class="alert alert-danger fade in">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <i class="fa-fw fa fa-times"></i>{{$errors->first("permalink",":message")}}

                                    </div>

                                    @endif
                                    @if($errors->has("p_content"))
                                    <div class="alert alert-danger fade in">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <i class="fa-fw fa fa-times"></i>{{$errors->first("p_content",":message")}}
                                    </div>

                                    @endif

                                <div class="form-group">
                                    <label class="col-md-1 control-label">Title</label>
                                    <div class="col-md-11">
                                        <input class="form-control" placeholder="New Page Title" id="title" name="title" type="text" required="required" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-1 control-label">Url</label>
                                    <div class="col-md-11">
                                        <input class="form-control" placeholder="Page Url" id="permalink" name="permalink" type="text" required="required" readonly>
                                    </div>
                                </div>
                                </fieldset>

<input type="hidden" id="created_by" name="created_by">
                                <input type="hidden" id="type" name="type" value="page">

                            </div>
                            <!-- end widget content -->

                            <!-- widget content -->
                            <div class="widget-body ">

                                <textarea id="p_content" name="p_content">
                                    &lt;h1&gt;&lt;img alt="Saturn V carrying Apollo 11" class="right" src="http://localhost/PHP_HTML_Version2/img/demo/sample.jpg"/&gt; Apollo 11&lt;/h1&gt; &lt;p&gt;&lt;b&gt;Apollo 11&lt;/b&gt; was the spaceflight that landed the first humans, Americans &lt;a href="http://en.wikipedia.org/wiki/Neil_Armstrong" title="Neil Armstrong"&gt;Neil Armstrong&lt;/a&gtgt; and &lt;a href="http://en.wikipedia.org/wiki/Buzz_Aldrin" title="Buzz Aldrin"&gt;Buzz Aldrin&lt;/a&gt;, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.&lt;/p&gt; &lt;p&gt;Armstrong spent about &lt;strike&gt;three and a half&lt;/strike&gt; two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&amp;nbsp;kg) of lunar material for return to Earth. A third member of the mission, &lt;a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)" title="Michael Collins (astronaut)"&gt;Michael Collins&lt;/a&gt;, piloted the &lt;a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module" title="Apollo Command/Service Module"&gt;command&lt;/a&gt; spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.&lt;/p&gt; &lt;h2&gt;Broadcasting and &lt;em&gt;quotes&lt;/em&gt; &lt;a id="quotes" name="quotes"&gt;&lt;/a&gt;&lt;/h2&gt; &lt;p&gt;Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:&lt;/p&gt; &lt;blockquote&gt;&lt;p&gt;One small step for [a] man, one giant leap for mankind.&lt;/p&gt;&lt;/blockquote&gt; &lt;p&gt;Apollo 11 effectively ended the &lt;a href="http://en.wikipedia.org/wiki/Space_Race" title="Space Race"&gt;Space Race&lt;/a&gt; and fulfilled a national goal proposed in 1961 by the late U.S. President &lt;a href="http://en.wikipedia.org/wiki/John_F._Kennedy" title="John F. Kennedy"&gt;John F. Kennedy&lt;/a&gt; in a speech before the United States Congress:&lt;/p&gt; &lt;blockquote&gt;&lt;p&gt;[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.&lt;/p&gt;&lt;/blockquote&gt; &lt;h2&gt;Technical details &lt;a id="tech-details" name="tech-details"&gt;&lt;/a&gt;&lt;/h2&gt; &lt;table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse;margin:10px 0 10px 15px;"&gt; &lt;caption&gt;&lt;strong&gt;Mission crew&lt;/strong&gt;&lt;/caption&gt; &lt;thead&gt; &lt;tr&gt; &lt;th scope="col"&gt;Position&lt;/th&gt; &lt;th scope="col"&gt;Astronaut&lt;/th&gt; &lt;/tr&gt; &lt;/thead&gt; &lt;tbody&gt; &lt;tr&gt; &lt;td&gt;Commander&lt;/td&gt; &lt;td&gt;Neil A. Armstrong&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Command Module Pilot&lt;/td&gt; &lt;td&gt;Michael Collins&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Lunar Module Pilot&lt;/td&gt; &lt;td&gt;Edwin &amp;quot;Buzz&amp;quot; E. Aldrin, Jr.&lt;/td&gt; &lt;/tr&gt; &lt;/tbody&gt; &lt;/table&gt; &lt;p&gt;Launched by a &lt;strong&gt;Saturn V&lt;/strong&gt; rocket from &lt;a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center" title="Kennedy Space Center"&gt;Kennedy Space Center&lt;/a&gt; in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of &lt;a href="http://en.wikipedia.org/wiki/NASA" title="NASA"&gt;NASA&lt;/a&gt;&amp;#39;s Apollo program. The Apollo spacecraft had three parts:&lt;/p&gt; &lt;ol&gt; &lt;li&gt;&lt;strong&gt;Command Module&lt;/strong&gt; with a cabin for the three astronauts which was the only part which landed back on Earth&lt;/li&gt; &lt;li&gt;&lt;strong&gt;Service Module&lt;/strong&gt; which supported the Command Module with propulsion, electrical power, oxygen and water&lt;/li&gt; &lt;li&gt;&lt;strong&gt;Lunar Module&lt;/strong&gt; for landing on the Moon.&lt;/li&gt; &lt;/ol&gt; &lt;p&gt;After being sent to the Moon by the Saturn V&amp;#39;s upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the &lt;a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis" title="Mare Tranquillitatis"&gt;Sea of Tranquility&lt;/a&gt;. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the &lt;a href="http://en.wikipedia.org/wiki/Pacific_Ocean" title="Pacific Ocean"&gt;Pacific Ocean&lt;/a&gt; on July 24.&lt;/p&gt; &lt;hr/&gt; &lt;p style="text-align: right;"&gt;&lt;small&gt;Source: &lt;a href="http://en.wikipedia.org/wiki/Apollo_11"&gt;Wikipedia.org&lt;/a&gt;&lt;/small&gt;&lt;/p&gt;
                                </textarea>

                            </div>
                            <!-- end widget content -->

                            <div class="widget-body">
                                <div class="col-sm-12">

                                    <fieldset>
                                            <legend>Meta Setting</legend>
                                            <div class="form-group">
                                                <label >Meta Title</label>

                                                <textarea id="meta_title" name="meta_title" class="form-control" placeholder="Title" rows="4"></textarea>

                                            </div>
                                            <div class="form-group">
                                                <label class="">Meta Keyword</label>

                                                <textarea id="meta_keyword" name="meta_keyword" class="form-control" placeholder="Keyword" rows="4"></textarea>

                                            </div>
                                            <div class="form-group">
                                                <label class="">Meta Description</label>

                                                    <textarea class="form-control" placeholder="Description" rows="4" name="meta_description" id="meta_description"></textarea>

                                            </div>
                                    </fieldset>

                                </div>
                            </div>


                        </div>

                        <!-- end widget div -->

                    </div>

                </div>
                <div class="col-sm-3">

                    <div class="jarviswidget jarviswidget-sortable" id="wid-id-12" data-widget-load="ajax/demowidget.php" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" role="widget">
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
                        <header role="heading" class=""><div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);" class="button-icon jarviswidget-refresh-btn" data-loading-text="&nbsp;&nbsp;Loading...&nbsp;" rel="tooltip" title="" data-placement="bottom" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>     </div>
                            <h2><strong>Publish &amp;</strong> <i>Page Sttings</i></h2>

                            <span class="jarviswidget-loader" style="display: none;"><!--<i class="fa fa-refresh fa-spin"></i></span>--></header>

                        <!-- widget div-->
                        <div role="content" class="">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-cog"></i>Save &amp; Publish</button>
                                        <!--<a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-cog"></i> Save &amp; Publish</a>-->

                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label>Select Parent</label>
                                        <select class="form-control" id="parent_id" name="parent_id">
                                            <option value="">--SELECT PARENT PAGE--</option>
                                            @foreach($pages as $page)
                                            <option value="{{$page->id}}">{{$page->title}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Layout</label>
                                        <select class="form-control" id="layout" name="layout">
                                            <option>default</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6" style="margin: 0; padding: 0">
                                            <input class="form-control" id="sortorder" name="sortorder" placeholder="Sort Order" type="text">
                                        </div>
                                        <div class="col-md-6" >
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="view_status" name="view_status" value="visible" class="checkbox style-0">
                                                <span>Hide</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                            </div>

                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>


                </div>
            </div>

            </form>
        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
    <!-- ==========================CONTENT ENDS HERE ========================== -->

    <!-- PAGE FOOTER -->
<?php
// include page footer
include("inc/footer.php");
?>
    <!-- END PAGE FOOTER -->

<?php
//include required scripts
include("inc/scripts.php");
?>

    <!-- PAGE RELATED PLUGIN(S)-->

    <script src="<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/ckeditor.js"></script>

    <script>


        $(document).ready(function() {
            CKEDITOR.replace( 'p_content', { height: '380px', startupFocus : true} );
            var perma =""
            // PAGE RELATED SCRIPTS

            // switch style change
            $('input[name="checkbox-style"]').change(function() {
                //alert($(this).val())
                $this = $(this);

                if ($this.attr('value') === "switch-1") {
                    $("#switch-1").show();
                    $("#switch-2").hide();
                } else if ($this.attr('value') === "switch-2") {
                    $("#switch-1").hide();
                    $("#switch-2").show();
                }

            });

            // tab - pills toggle
            $('#show-tabs').click(function() {
                $this = $(this);
                if($this.prop('checked')){
                    $("#widget-tab-1").removeClass("nav-pills").addClass("nav-tabs");
                } else {
                    $("#widget-tab-1").removeClass("nav-tabs").addClass("nav-pills");
                }

            });

            $("#title").keyup(function(){

                perma = $(this).val()
                perma = perma.replace(" ","-")
                perma = perma.toLowerCase()
                //alert("all good")
                $("#permalink").val(perma)
            })



        });

    </script>

<?php
//include footer
include("inc/google-analytics.php");
?>