<?php
/*
Template Name: Special Layout
*/
get_header ();
if(have_posts()):
while(have_posts()) : the_post(); ?>
<article class="post page">
<h3><?php the_title(); ?></h3> 
<!-- info-box -->
<div class="info-box">
<h4> Disclaimer Title </h4>
<p>Please be careful abot what you wear in summer.It is really 
important to waer good cloths according to the season <p>
</div><!-- /info-box-->
<?php the_content(); ?>
</article>
 <?php endwhile;

else :
echo '<p>No Content found </p>' ;

endif;

get_footer();
?>