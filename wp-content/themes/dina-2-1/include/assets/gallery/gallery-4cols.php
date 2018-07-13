<?php $mt_gallery_images = get_field('mt_gallery_images');

	if(!empty($mt_gallery_images)):
	
 ?>
 
<section class="gallery-container">

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="gallery-4colgrid-content">
<div class="menu-holder menu-3col-grid-image gallery-holder gallery-4col clearfix">
 

<?php foreach ( $mt_gallery_images as $piece ):	?>
    
 <div class="menu-post gallery-post">
 
<a href="<?php echo esc_url($piece['url']); ?>" class="lightbox" title="<?php echo esc_html($piece['caption']); ?>">

<div class="item-content-bkg gallery-bkg">

<div class="gallery-img" style="background-image:url('<?php if(!empty($piece['url'])) echo esc_url($piece['url']); ?>');"></div>

<div class="menu-post-desc">

<h4><?php echo esc_html($piece['caption']); ?></h4>
<div class="gallery-mglass"><i class="fa fa-search"></i></div>
</div>

</div>

</a>

</div>    
    

<?php endforeach; ?>

</div>
</div><!--gallery-4colgrid-content-->

</div><!--col-md-12-->
</div><!--row-->
</div><!--container-->
</section>

<?php endif; ?>