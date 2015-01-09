<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/18/14
 * Time: 2:08 PM
 */
?>
<div id="myCarousel-2" class="carousel slide">
    <ol class="carousel-indicators">
        <?php $x=0;
        foreach($slideshows as $slideshow){
            echo  ($x==0) ? "<li data-target='#myCarousel-2' data-slide-to='".$x."' class='active'></li>" : "<li data-target='#myCarousel-2' data-slide-to='".$x."' ></li>";
            $x++;
        }
        ?>

    </ol>
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <?php $x=0;
        foreach($slideshows as $slideshow){


           echo  ($x==0) ? " <div class='item active' >" : "<div class='item' >";


            echo"<img src='". ASSETS_URL."/uploads/slideshow/".$slideshow->image."' alt='{$slideshow->title}'>
            <div class='carousel-caption caption-right'>
                <h4>".$slideshow->title."</h4>
                <p>
                    $slideshow->p_content
                </p>
                <br>
                <a href='javascript:void(0);' class='btn btn-info btn-sm'>Read more</a>
            </div>
        </div>";

        $x++;
        }
?>

    </div>
    <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
    <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
</div>