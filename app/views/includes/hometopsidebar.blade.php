<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/5/15
 * Time: 4:44 PM
 */
?>
<div class="sidebar light" style="background-color: #F3F3F3; margin-bottom: 20px; padding-bottom: 10px">
    <h4 class="title" style="background-color: #5782bd; color:#fff; padding:10px">Open An Account</h4>
    <div style="padding: 10px">


        <h4><i class="label"><img src="<?php echo ASSETS_URL; ?>/img/stanbic-register-online-icon.png"></i> Open An Account</h4>
        <hr>
        <form class="form-horizontal">
            <div class="form-group" >

                <div class="col-md-12">

                    <select class="form-control" id="oaccount" class="oaccount">
                        <option value="">--SELECT ACCOUNT TYPE--</option>
                        <option value="individual">Individual Account</option>
                        <option value="joint">Joint Account</option>
                        <option value="corporate">Corporate Account</option>

                    </select>

                </div>
            </div>
        </form>
        <hr>
        <!--<h4><i class="label"><img src="<?php /*echo ASSETS_URL; */?>/img/stanbic-contact-icon.png"></i> Help Center</h4>-->

        <img src='{{ASSETS_URL}}/img/stanbic-contact-us.png'>
    </div>



</div>
