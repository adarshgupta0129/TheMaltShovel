<?php $mt_sidebar = get_theme_mod( 'mt_sidebar', 'mt_sidebar_right'); ?>

<section id="wrap-content" class="blog-1col <?php if ( $mt_sidebar == 'mt_sidebar_no' ): ?> layout-1col-fw <?php endif;?>">

<?php 

	if (have_posts()) : while (have_posts()) : the_post(); 
	
   get_template_part('include/assets/layouts/layout', 'first_article_full');
		
?>

<?php  endwhile;

else: ?>

<div class="container">

<div class="row">

<div class="col-md-10 col-md-offset-1 alignc">

<h2 class="nothing-found"><?php esc_html_e( 'NOTHING FOUND', 'dina' ); ?></h2>

<p><?php esc_html_e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for. Try a new search or the menu above.', 'dina' ); ?></p>

<?php get_search_form(); ?>

</div>

</div>

</div>

<?php endif; ?>

<?php

 if(function_exists('dina_pagenavi') ) : ?>

	<?php dina_pagenavi();  ?>
       
	<?php else : ?>

  <ul class="other-entries">
			<li class="newer-entries"><span><?php previous_posts_link(esc_html_e('&larr; Prev', 'dina')) ?></span></li>
            <li class="older-entries"><span><?php next_posts_link(esc_html_e('Next &rarr;', 'dina')) ?></span></li>
          </ul>
      
<?php endif; ?>

</section><!--blog-1col-->