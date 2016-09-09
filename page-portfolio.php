<?php
get_header ();
if(have_posts()):
while(have_posts()) : the_post(); ?>
<article class="post page">

<!--column-container -->
<div class="column-container clearfix">
    <!-- title-column -->
    <div class ="title-column">
         <h3><?php the_title() ; ?></h3> 
    </div > <!-- /title-column -->
<div class ="text-column">
<?php the_content() ; ?> 
</div > <!-- /text-column -->
</div>
</article>
 <?php endwhile;

else :
echo '<p>No Content found </p>' ;

endif;

get_footer()
?>