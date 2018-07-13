<?php
   if ( post_password_required() ) { ?>
<p class="alert"><?php esc_html_e('This post is password protected. Enter the password to view comments.', 'dina')?></p>
<?php
   return;
   }
   ?>
<!-- You can start editing here. -->
<section id="comments" class="comm-title">
   <?php if ( have_comments() ) : ?>
   <h5 class="single-subtitle"><span><?php comments_number(esc_html__('0 Comments', 'dina'), esc_html__('1 Comment', 'dina'), esc_html__('% Comments', 'dina') );?></span></h5>
   <ol class="commentlist">
      <?php wp_list_comments( array( 'callback' => 'dina_custom_comments' )); ?>
   </ol>
   <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
   <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
      <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'dina' ); ?></h2>
      <div class="nav-previous"><?php previous_comments_link(  esc_html__( '&larr; Older Comments', 'dina' ) ); ?></div>
      <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'dina' ) ); ?></div>
   </nav>
   <!-- /coment-nav-above -->
   <?php endif; ?>
   <?php else : // this is displayed if there are no comments so far ?>
   <?php if ( comments_open() ) : ?>
   <!-- If comments are open, but there are no comments. -->
   <?php else : // comments are closed ?>
   <!-- If comments are closed. -->
   <?php endif; ?>
   <?php endif; ?>
   <?php if ( comments_open() ) : ?>
   <div class="respond">
      <div id="comment-form-holder">
         <?php
            comment_form( array(
            	'title_reply' => '<span class="single-subtitle">'.esc_html__('Leave a Comment', 'dina').'</span>',
            
            	'fields' => array(
            		'author' => '<div class="row"><div class="col-sm-4"><input type="text" name="author" id="author" class="comm-field"  value="" placeholder="'.esc_attr__('Name', 'dina').'" size="22" tabindex="1"/></div>',
            		'email'  => '<div class="col-sm-4"><input type="text" name="email" id="email" class="comm-field" value="" placeholder="'.esc_attr__('Email', 'dina').'" size="22" tabindex="2" /></div>',
            		'url'    => '<div class="col-sm-4"><input type="text" name="url" id="url" class="comm-field" value="" placeholder="'.esc_attr__('Website', 'dina').'" size="22" tabindex="3" /></div></div>',
            	),
            	'comment_notes_before' => '',
            	'comment_field' => '<textarea name="comment" id="msg-contact" placeholder="'.esc_attr__('Comments', 'dina').'" rows="7" tabindex="3"></textarea>',
            	'comment_notes_after' => false,
            	'label_submit'      => esc_html__( 'Post Comment', 'dina')
            
            ) ); 
            
            ?>
         <div id="output-contact"></div>
      </div>
   </div>
   <?php endif; // if you delete this the sky will fall on your head ?>
</section>