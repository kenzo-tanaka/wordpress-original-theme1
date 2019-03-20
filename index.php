<?php get_header(); ?><!-- call header --> 
<main id="posts-main" class="clearfix">

  <div id="posts-content">

    <?php if(is_category() ||  is_tag()): ?>
      <h1><?php single_cat_title() ?>の記事一覧</h1>
    <?php elseif(is_year()): ?>
      <h1><?php the_time("Y年") ?>の記事一覧</h1>
    <?php elseif(is_month()): ?>
      <h1><?php the_time("Y年m月") ?>の記事一覧</h1>
    <?php endif; ?>

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article <?php post_class('kiji-list'); ?>>
        <div class="post-format post-standard">
          <div class="m-thumbnail">
            <a href="<?php the_permalink(); ?>">
              <?php if( has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_direcotry_uri(); ?>/images/no-image.gif" alt="no-image"/>
              <?php endif; ?><!-- call thumbnail -->
            </a>
          </div>
        </div>

        <div class="entry-content">
          <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div class="entry-summary">
            <p>
              <?php the_excerpt(); ?>
            </p>
            <p class="readmore">
              <a href="<?php the_permalink(); ?>" class="link-more">Read more</a>
            </p>
          </div><!-- .entry-summary -->
        </div><!-- .entry-content -->
      </article>

    <?php endwhile; endif; ?><!-- end roop -->

    <div class="pagination">
      <?php echo paginate_links( array(
        'type' => 'list',
        'mid_size' => '1',
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;'
        ) ); ?>
    </div><!-- call pagination --> 
    
  </div>
</main>
<?php get_footer(); ?><!-- call footer -->