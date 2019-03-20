<?php get_header(); ?>


  <div id="post-content">

    <?php if(have_posts()): the_post(); ?>
      <div <?php post_class('kiji'); ?>>

        <h1><?php the_title(); ?></h1><!-- call title -->
        <div class="post-format post-standard">
            <div class="thumbnail">
                <?php if( has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_direcotry_uri(); ?>/images/no-image.gif" alt="no-image"/>
                <?php endif; ?>
            </div>
        </div><!-- call thumbnail -->
        <?php the_content(); ?><!-- call content -->
      </div>
    <?php endif; ?><!-- end roop -->
  </div>

 <?php get_footer(); ?>