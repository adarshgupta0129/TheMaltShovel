<?php $mt_gallery_images = get_field('upload_image_menu');

print_r($mt_gallery_images);
exit;
	if(!empty($mt_gallery_images)):
		
 ?>
 
<section class="gallery-3colgrid-content">
<div class="menu-holder menu-3col-grid-image gallery-holder-fs clearfix">
 
<?php foreach ( $mt_gallery_images as $piece ):	?>
    
<div class="menu-post gallery-post">
 
<a href="<?php echo esc_url($piece['upload_event_image']); ?>" class="lightbox" title="<?php echo esc_html($piece['enter_event_name']); ?>">

<div class="item-content-bkg gallery-bkg">

<div class="gallery-img" style="background-image:url('<?php if(!empty($piece['upload_event_image'])) echo esc_url($piece['upload_event_image']); ?>');"></div>

<div class="menu-post-desc">

<h4><?php echo esc_html($piece['enter_event_name']); ?></h4>
<div class="gallery-mglass"><i class="fa fa-search"></i></div>
</div>

</div>

</a>

</div>

<?php endforeach; ?>

</div>
</section><!--gallery-3colgrid-content-->

<?php endif; ?>