<?php $mt_gallery_images = get_field('upload_event_details');

?>

<section class="gallery-3colgrid-content">
	<div class="menu-holder menu-3col-grid-image gallery-holder-fs clearfix">

		<?php foreach ( $mt_gallery_images as $piece ):	?>

		<div class="menu-post gallery-post">

			<!-- 			<a href="<?php echo esc_url($piece['upload_event_image']); ?>" class="lightbox" title="<?php echo esc_html($piece['enter_event_name']); ?>"> -->

			<div class="item-content-bkg gallery-bkg">

				<div class="gallery-img" style="background-image:url('<?php if(!empty($piece['upload_event_image'])) echo esc_url($piece['upload_event_image']); ?>');"  >
 
				</div>

				<div class="menu-post-desc">
 
					<a href="<?php echo esc_url($piece['upload_event_image']); ?>">	<h4> <?php echo esc_html($piece['enter_event_name']); ?> </h4> </a>

						<!-- <div class="gallery-mglass"> -->
							<i class="fa fa-arrow-down" title="Download"
			 onclick= window.open('<?php echo esc_url($piece['upload_event_menu']);?>','_blank') style="cursor: pointer;color: white;font-size: 19px;font-weight: 900;line-height: 3;" > Download menu</i>
						<!-- </div>
 --> 				</div>

			</div>

			<!-- </a> -->

		</div>

		<?php endforeach; ?>

	</div>
</section><!--gallery-3colgrid-content-->