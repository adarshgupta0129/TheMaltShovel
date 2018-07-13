<?php
/*
Template Name: Bar-Page

*/
?>

<?php get_header(); ?>



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

            <div class="col-md-10 col-md-offset-1">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" class="page-holder custom-page-template">


                    <div class="categ-name">
                        <h2>Wines</h2>
                    </div>

                    <div class="container-fluid">
                        <div class="col-md-11 col-md-offset-1">
                            <ul class="nav nav-tabs nav-list mbl-nav" role="tablist" style="" >
                                <li role="presentation" class="active tab-mbl"><a href="#House" aria-controls="House" role="tab" data-toggle="tab">HOUSE</a></li>
                                <li role="presentation" class="tab-mbl"><a href="#Whites" aria-controls="Whites" role="tab" data-toggle="tab">WHITES</a></li>
                                <li role="presentation" class="tab-mbl"><a href="#Rose" aria-controls="Rose" role="tab" data-toggle="tab">ROSE</a></li>
                                <li role="presentation" class="tab-mbl"><a href="#Reds" aria-controls="Reds" role="tab" data-toggle="tab">REDS</a></li>
                                <li role="presentation" class="tab-mbl"><a href="#Sparkling_Wines" aria-controls="Sparkling_Wines" role="tab" data-toggle="tab">SPARKLING WINES</a></li>
                                <li role="presentation" class="tab-mbl"><a href="#Champagne" aria-controls="Champagne" role="tab" data-toggle="tab">CHAMPAGNE</a>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="House" >
                                <center>
                                    <span class="wine-head">Wines<br></span>
                                    <span class="wine-head-qty">Glass 175ml/Glass 250ml/Bottel 7ccl/Volume</span><br><br><br>
                                    <span class="wine-name">Les Vignes Pays D'Oc Red (France)<br></span>
                                    <span class="wine-qty">£4.15/£5.45/£14.25/12.50%</span>  <br><br><br>
                                    <span class="wine-name">Les Vignes Pays D'Oc White (France)<br></span>
                                    <span class="wine-qty">£4.15/£5.45/£14.25/12%</span><br><br><br>
                                </center>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="Whites">
                                <center>
                                    <span class="wine-head">Wines<br></span>
                                    <span class="wine-head-qty">Glass 175ml/Glass 250ml/Bottel 7ccl/Volume</span><br><br><br>
                                    <span class="wine-name">Rioja Lopez de Haro Blanco (Spain) <br></span>
                                    <span class="wine-qty">-/-/£19.95/12.50%</span><br><br><br>
                                    <span class="wine-name">Domaine Provenquiere Viognier (France) <br></span>
                                    <span class="wine-qty">-/-/£18.45/12%</span><br><br><br>
                                    <span class="wine-name">Pinot Grigio Ardesia (Italy)<br></span>
                                    <span class="wine-qty">£4.95/£6.45/£17.45/12%</span><br><br><br>
                                    <span class="wine-name">Berton Estate Head over Heels Chardonnay (Australia) <br></span>
                                    <span class="wine-qty">£4.95/£6.45/£18.45/13%</span> <br><br><br>
                                    <span class="wine-name">Echeverria Estate Reserva Sauvignon Blanc <br></span>
                                    <span class="wine-qty">£5.35/£6.95/£19.95/13%</span><br><br><br>
                                    <span class="wine-name">Yealands Estate Sauvignon Blanc (New Zealand)<br></span>
                                    <span class="wine-qty">£6.95/£8.95/£26.95/12.50%</span><br><br><br>
                                    <span class="wine-name">Sancerre Domaine Cherrier (France)<br></span>
                                    <span class="wine-qty">-/-/£29.75/13%</span><br><br><br>
                                </center>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Rose">
                                <center>
                                    <span class="wine-head">Wines<br></span>
                                    <span class="wine-head-qty">Glass 175ml/Glass 250ml/Bottel 7ccl/Volume</span><br><br><br>
                                    <span class="wine-name">Sutter Home Zinfandel Blush (California, USA)<br></span>
                                    <span class="wine-qty">£4.75/£6.25/16.95/-</span><br><br><br>
                                    <span class="wine-name">Pinot Grigio Blush Ardesia (Italy)<br></span>
                                    <span class="wine-qty">£4.95/£6.45/17.45/-</span><br><br><br>
                                </center>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Reds">
                                <center>
                                    <span class="wine-head">Wines<br></span>
                                    <span class="wine-head-qty">Glass 175ml/Glass 250ml/Bottel 7ccl/Volume</span><br><br><br>
                                    <span class="wine-name"> Altitudes Cabernet Sauvignon Reserva (France)<br></span>
                                    <span class="wine-qty">-/-/£16.25/-</span><br><br><br>
                                    <span class="wine-name">Domaine Provenquiere Merlot (France)<br></span>
                                    <span class="wine-qty">£4.95/£6.45/£18.45/-</span><br><br><br>
                                    <span class="wine-name">Yellow Tail Shiraz (Australia)<br></span>
                                    <span class="wine-qty">£4.95/£6.45/£18.45/-</span><br><br><br>
                                    <span class="wine-name">Chateau Peyruchet Bordeaux (France)<br></span>
                                    <span class="wine-qty">-/-/£19.95 /-</span><br><br><br>
                                    <span class="wine-name">Los Haroldos  Chacabucco Malbec (Argentina)<br></span>
                                    <span class="wine-qty">£5.35/£6.95/£19.95/-</span><br><br><br>
                                    <span class="wine-name">Pinot Noir Ventisquero Single Block Grey<br></span>
                                    <span class="wine-qty">-/-/£29.95/-</span><br><br><br>
                                    <span class="wine-name">Sancerre Domaine Cherrier (France)<br></span>
                                    <span class="wine-qty">-/-/£29.75/13%</span><br><br><br>
                                </center>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Sparkling_Wines">
                                <center>
                                    <span class="wine-head">Wines<br></span>
                                    <span class="wine-head-qty">Glass 175ml/Glass 250ml/Bottel 7ccl/Volume</span><br><br><br>
                                    <span class="wine-name">Prosecco Romeo (Dry) (Italy)<br></span>
                                    <span class="wine-qty">-/-/£22.95/11.50%</span><br><br><br>
                                    <span class="wine-name">Prosecco IL Caggio (Dry) (Italy) 20cl bottle<br></span>
                                    <span class="wine-qty">-/-/£7.25/11%</span><br><br><br>
                                </center>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Champagne">
                                <center>
                                    <span class="wine-head">Wines<br></span>
                                    <span class="wine-head-qty">Glass 175ml/Glass 250ml/Bottel 7ccl/Volume</span><br><br><br>
                                    <span class="wine-name">Champagne Brugnon Premier Cru Brut (Dry)(France)
                                        <br></span>
                                    <span class="wine-qty">-/-/£39.95/12%</span><br><br><br>
                                    <br><br><br>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>


                <!--
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->

            </div>
            <?php  endwhile;

            else: ?>

            <p class="alignc"><?php esc_html_e( 'Sorry, but it seems we can&rsquo;t find what you&rsquo;re looking for. Try the menu above.', 'dina' ); ?></p>

            <?php endif; ?>

        </div><!--col-md-10-->

    </div><!--row-->
    </div><!--container-->
</section>




<?php get_footer(); ?>
