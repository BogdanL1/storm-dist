<?php
/*
Template Name: project-1
*/
?>
<?php get_header('2'); ?>

    <?php $the_query = new WP_Query('p=40'); ?>
    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata();?>
  

  <div id="overlay" class="overlay"></div>


 

<!--
  =============================
              VIDEO BG
  =============================
-->
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    var videobackground = new $.backgroundVideo($('body'), {
      "align": "centerXY",
      "width": 1280,
      "height": 720,
      "path": "http://storm-dist/wp-content/themes/storm/media/",
      "filename": "sea_2",
      "types": ["mp4", "ogv", "webm"],
      "preload": true,
      "autoplay": true,
      "loop": true,
      "muted": true
    });
  });
</script>


<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.project').addClass('project-active');
    var pageH = $('.project').height();
    $('.content-viewport__inner').height(pageH);
  });
</script>
<script>
    (function($){
        $(window).on("load",function(){
            $("#scrollbar").mCustomScrollbar({
              scrollbarPosition: 'otside'
            });

        });
    })(jQuery);
</script>
<?php get_footer( ); ?>