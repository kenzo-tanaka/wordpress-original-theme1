<?php get_header(); ?><!-- call header -->
<main id="posts-main" class="clearfix">

  <div id="posts-content">

    <?php if(have_posts()): the_post(); ?>
      <article <?php post_class('kiji'); ?>>
      	<h1><?php the_title(); ?></h1><!-- call title -->
        <div class="post-format post-standard">
          <div class="m-thumbnail">
              <?php if( has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_direcotry_uri(); ?>/images/no-image.gif" alt="no-image"/>
              <?php endif; ?>
          </div>
        </div><!-- call thumbnail -->

        <?php the_content(); ?>
      </article>

    <?php endif; ?><!-- end roop -->
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?><!-- call footer -->