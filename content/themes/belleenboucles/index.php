<?php get_header(); ?>

<div class="slideshow-container">

            <!-- <div class="mySlides fade">
              <img src="/images/1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
              <img src="/images/2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
              <img src="/images/3.jpg" style="width:100%">
            </div> -->
            <?php
                 if(is_home() || is_front_page()){
                        echo do_shortcode('[smartslider3 slider=2]');
                }
            ?>
           
            </div>
            <br>

            <!-- <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div> -->
          </div>

<?php get_footer(); ?>