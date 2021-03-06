<?php
/*

 Template Name: Menu 3 Col

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

<section class="menu-3col-content">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="post-<?php the_ID(); ?>" class="page-holder custom-page-template">
<br> 
                    <div class="container-fluid">
                        <div class="col-md-12 ">
                            <ul class="nav nav-tabs menu-tab nav-list mbl-nav" role="tablist" style="" >
                                <?php $categories=get_categories( array('hierarchichal' => 1 , 'order' => 'desc','orderby' => 'count','taxonomy'=>'menu_category'));
                                //print_r($categories);die;

 $i=1;
 $j=1;
                                foreach($categories as $category):?>
 
                                <li role="presentation" class=" tab-mbl <?php echo (($j==1)?"active":"" ); $j++; ?>">
                                    <a href="#<?php echo $category->slug?>" aria-controls="<?php echo $category->slug ?>" role="tab" data-toggle="tab"><?php echo $category->name ?></a>
                                </li>

                                <?php  endforeach; ?>
                            </ul></div>
<br><br> 
                       

                        <div class="menu-holder menu-3col <?php echo esc_attr($category->slug); ?>">


                            <div class="tab-content ">

                            	 <?php foreach($categories as $category):?>

                        <?php	global $wp_query;

                        $defaults = array('post_type' => 'mt_menu', 'posts_per_page' => 100, 'menu_category' => $category->slug);
                        $wp_query = new WP_Query($defaults);

                        ?>

                            
                                <div role="tabpanel" class="tab-pane <?php echo (($i==1)?"active":"" ); $i++; ?>" id="<?php echo $category->slug ?>" >
                                	                            	  <?php while (have_posts() ) : the_post(); ?>

                            <?php $mt_menu_item_price =  get_post_meta($post->ID, "mt_menu_item_price", true);
                            $mt_menu_item_desc = get_post_meta($post->ID, "mt_menu_item_desc", true);
                            ?>
                                    <div class="menu-post">

                                        <div class="menu-post-desc">

                                            <h4><span class="menu-title"><?php the_title(); ?></span> <span class="menu-dots"></span><span class="menu-price"><?php echo esc_html($mt_menu_item_price); ?></span></h4>

                                            <div class="menu-text"> <?php echo esc_html($mt_menu_item_desc); ?> </div>

                                        </div>

                                    </div>
                                     <?php endwhile; wp_reset_postdata(); ?>
                                </div>
                                        
                                          <?php endforeach; ?>
                            </div>
                   

                        </div><!--menu-3-col-->
                    </div>

                   


                </div><!--col-md-12-->
            </div><!--row-->
        </div>
    </div><!--container-->
</section>

<?php get_footer(); ?>
