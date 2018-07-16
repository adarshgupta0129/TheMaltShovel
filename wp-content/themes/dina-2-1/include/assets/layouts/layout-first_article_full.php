<article id="post-<?php the_ID(); ?>" class="blog-item blog-item-1col" >

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

<div class="post-holder post-holder-all">

<div class="post-content">

<?php the_excerpt(); ?>

</div><!--post-content-->

<div class="more-btn">
<a class="view-more" href="<?php the_permalink() ?>"><?php esc_html_e('Read More', 'dina')?> </a>
</div>

</div><!--post holder-->

</article>