<section id="wrap-content" class="blog-2col-grid">

<?php 

	$count = 0;	
	
	if (have_posts()) : while (have_posts()) : the_post(); 
	
	$classes_post = array('blog-item','blog-item-2col-grid');
	
	if ($count % 2 == 0): ?> <div class="row"> <?php endif; ?>
    
<div class="col-sm-6 col-md-6">

<article id="post-<?php the_ID(); ?>" <?php post_class($classes_post); ?> >

<div class="post-category"><?php the_category(' '); ?></div><!--post-category-->

<h2 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<ul class="post-meta">

<li class="meta-date"><?php echo get_the_date(get_option('date_format')); ?></li>

<li class="post-author"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php echo get_avatar( get_the_author_meta( 'user_email' ), '20' ); ?> <?php the_author_meta( 'display_name' ); ?></a></li>

<?php if ( is_sticky() && is_home() ) : ?>

<li class="meta-sticky"><?php esc_html_e('Featured', 'dina'); ?></li>
	
<?php endif; ?>

</ul>

<?php if ( has_post_thumbnail($post->ID ) ): ?>

<div class="post-image">

<a href="<?php the_permalink();?>">

<?php the_post_thumbnail('dina-post-img', array('class'=> 'img-responsive img-featured', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); 

 ?>
      
</a>

</div><!--post-image-->

<?php endif; ?>

<div class="post-content content-grid">

<?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?>

</div><!--post-content-->

<div class="more-btn">
<a class="view-more" href="<?php the_permalink() ?>"><?php esc_html_e('Read More', 'dina')?> </a>
</div>

</article>

</div>

 <?php $count++; if(($count % 2) == 0) {?> </div><!--end row--> <?php }?>

<?php endwhile;

if(($count % 2) == 1 ) {?> </div><!--end row--> <?php } ?>

<?php else: ?>

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
			<li class="newer-entries"><span><?php previous_posts_link(esc_html__('&larr; Prev', 'dina')) ?></span></li>
            <li class="older-entries"><span><?php next_posts_link(esc_html__('Next &rarr;', 'dina')) ?></span></li>
          </ul>
      
<?php endif; ?>

</section><!--blog-1col-->