<?php
/*
 
 Template Name: Menu 2 Col
 
 */

get_header(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<?php $mt_page_title =  get_post_meta($post->ID, "mt_page_title", true);
	  $mt_page_subtitle = get_post_meta($post->ID, "mt_page_subtitle", true);
	  $mt_page_top_imgh = get_post_meta($post->ID, "mt_page_top_imgh", true);
  ?>

<section class="topSingleBkg topPageBkg" <?php if(!empty($mt_page_top_imgh)):?> style="height:<?php echo esc_attr( $mt_page_top_imgh ); ?>" <?php endif; ?>>  

<div class="item-content-bkg">

<div class="item-img" <?php if(!empty($image)):?> style="background-image:url('<?php echo esc_url($image[0]); ?>');" <?php endif;?>></div>

  <div class="inner-desc">	 
  
 <h1 class="post-title single-post-title"><?php if(!empty($mt_page_title)): echo esc_html($mt_page_title); else: the_title(); endif;?></h1>
 
 <?php if(!empty($mt_page_subtitle)): ?>
 
 <span class="post-subtitle"> <?php echo esc_html($mt_page_subtitle); ?></span>
 
 <?php endif; ?>
 
 	</div>
  
</div>  

</section>


<section id="wrap-content" class="page-content">

<div class="container">

<div class="row">

<div class="col-md-12">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" class="page-holder custom-page-template">

<?php the_content(); ?>

</div>
<?php  endwhile;

else: ?>

<p class="alignc"><?php esc_html_e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for. Try the menu above.', 'dina' ); ?></p>

<?php endif; ?>

</div><!--col-md-12-->

</div><!--row-->
</div><!--container-->
</section>

<section class="menu-2col-content">

<div class="container">
<div class="row">
<div class="col-md-12">

 <?php $categories=get_categories('taxonomy=menu_category');
 
 	   foreach($categories as $category):
  ?>
  
  <div class="categ-name <?php echo esc_attr($category->slug); ?>">
  <h2><?php echo esc_html($category->name); ?></h2> 
	<div class="categ-desc"><?php echo esc_html($category->description); ?></div>
  </div>
  
  <?php	global $wp_query;
       
	$defaults = array('post_type' => 'mt_menu', 'posts_per_page' => 100, 'menu_category' => $category->slug);
	$wp_query = new WP_Query($defaults);
		
	?>
    
    <div class="menu-holder menu-2col <?php echo esc_attr($category->slug); ?>">
             
	<?php while (have_posts() ) : the_post(); ?>
    
    <?php $mt_menu_item_price =  get_post_meta($post->ID, "mt_menu_item_price", true);
	  $mt_menu_item_desc = get_post_meta($post->ID, "mt_menu_item_desc", true);
  ?>
    
<div class="menu-post clearfix">

<?php if ( has_post_thumbnail($post->ID ) ):

$img_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

 ?>

<div class="menu-post-img"><a href="<?php echo esc_url($img_full[0]); ?>" class="lightbox" title="<?php the_title(); ?>"><?php the_post_thumbnail('dina-menu-img', array('alt' => '', 'title' => '')); ?> </a> </div>

<?php endif; ?>

<div class="menu-post-desc">

<h4><span class="menu-title"><?php the_title(); ?></span> <span class="menu-dots"></span><span class="menu-price"><?php echo esc_html($mt_menu_item_price); ?></span></h4>

<div class="menu-text"> <?php echo esc_html($mt_menu_item_desc); ?> </div>

</div>

</div>
    
     <?php endwhile; wp_reset_postdata(); ?>
      
      </div><!--menu-2-col-->
 
 <?php endforeach; ?>


</div><!--col-md-12-->
</div><!--row-->
</div><!--container-->
</section>



<?php get_footer(); ?>