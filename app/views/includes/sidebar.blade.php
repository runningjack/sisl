<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/18/14
 * Time: 2:06 PM
 */
?>



        <div class="sidebar light" style="background-color: #F3F3F3; margin-bottom: 20px; padding-bottom: 10px">
            <h4 class="title" style="background-color: #5782bd; color:#fff; padding:10px">Open An Account</h4>
            <div style="padding: 10px">


                <h4><i class="label"><img src="<?php echo ASSETS_URL; ?>/img/stanbic-register-online-icon.png"></i> Open An Account</h4>
                <hr>
                <form class="form-horizontal">
                <div class="form-group">

                    <div class="col-md-12">

                        <select class="form-control" id="select-1">
                            <option value="">--SELECT ACCOUNT TYPE--</option>
                            <option value="individual">Individual Account</option>
                            <option value="joint">Joint Account</option>
                            <option value="corporate">Corporate Account</option>

                        </select>

                    </div>
                </div>
                </form>
            </div>

        </div>


<!-- Accoridion Stanbic Stock Brokers-->
<div class="jarviswidget well transparent" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">



    <!-- widget div-->
    <div>



        <!-- widget content -->
        <div class="widget-body">
            <h4 class="title" style="background-color: #5782bd; color:#fff; padding:10px">Utilities</h4>
            <div class="panel-group smart-accordion-default" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i><img src="<?php echo ASSETS_URL; ?>/img/stanbic-calculator-icon.png"> Calculator</a></h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body no-padding">
                            <div style=" background-color: #f1f1f1; padding:10px; color:#fff">

                                <form class="smart-form" >
                                    <section class="" style="margin-bottom: 2px">
                                        <label class="label"><small>Transaction Type</small></label>
                                        <label class="select">
                                            <select name="trans_type" id="trans_type">
                                                <option value="">--SELECT BUY/SELL--</option>
                                                <option value="Buy">Buy</option>
                                                <option value="Sell">Sell</option>
                                            </select><i></i>
                                        </label>
                                    </section>
                                    <section class="" style="margin-bottom: 2px">
                                        <label class="label" ><small>Symbol</small></label>
                                        <label class="select">
                                            <select name="symbol" id="symbol">
                                                <option value="">--SELECT SYMBOL--</option>
                                                <?php
                                                foreach($symbols as $symbol){
                                                    echo "<option value='$symbol->symbol'>$symbol->symbol</option>";
                                                }
                                                ?>

                                            </select><i></i>
                                        </label>
                                    </section>


                                    <section class="" style="margin-bottom: 2px">
                                        <label class="label"><small>Previous Close</small></label>
                                        <label class="input"><i class="icon-prepend">₦</i>
                                            <input class="" type="text" name="pclose" id="pclose" value="0" placeholder="Previous Close" readonly  />
                                        </label>
                                    </section>
                                    <section style="margin-bottom: 2px">
                                        <label class="label"><small>Quantity</small></label>
                                        <label class="input">
                                            <input class="" type="number" name="quantity" id="quantity" value="0" placeholder="Quantity" />
                                        </label>
                                    </section>
                                    <section style="margin-bottom: 2px">
                                        <label class="label"><small>Price Condition</small></label>
                                        <label class="select" >
                                            <select name="pcondition" id="pcondition">
                                                <option value="">--SELECT PRICE CONDITION--</option>
                                                <option value="best market">Best Market Price</option>
                                                <option value="sell"> > or = (Sell)</option>
                                                <option value="buy"> < or = (Buy)</option>

                                            </select><i></i>
                                        </label>
                                    </section>
                                    <section style="margin-bottom: 2px" >
                                        <label class="label"><small>Market Price</small></label>
                                        <label class="input"><i class="icon-prepend">₦</i>
                                            <input class="" type="text" name="price" id="price" value="0" placeholder="Market Price" />
                                        </label>
                                    </section>
                                    <div id="calculatorsit">

                                    </div>




                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                <i class="fa fa-lg fa-angle-down pull-right"></i> <i class="fa fa-lg fa-angle-up pull-right"></i>
                                <img src="<?php echo ASSETS_URL; ?>/img/stanbic-download-icon.png"> Form Downloads</a></h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end widget content -->

    </div>
    <!-- end widget div -->

</div>
<!-- end widget -->


