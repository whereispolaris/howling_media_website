<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
      <?php if (is_front_page() && !is_home() ): ?>

        <h1>Static Front Page</h1>

      <?php endif; ?>
      <!-- Blog Home -->
      <?php if (is_home() ): ?>

        <h1>Blog</h1>
        <p>This is the blog and this is what is going to display</p>

      <?php endif; ?>
      <!-- Page (Not Front Page) -->
      <?php if (is_page() && !is_front_page() ): ?>

        <h1>Page</h1>

      <?php endif; ?>
      <!-- Single Post -->
      <?php if (is_single() && !is_attachment() ): ?>

        <h1>Post</h1>

      <?php endif; ?>
      <!-- Single Attachment (Media) -->
      <?php is (is_attachment() ); ?>

        <h1>Attachment</h1>

      <?php endif; ?>
      <!-- Category Archive -->
      <?php is (is_category() ); ?>

        <h1><?php single_cat_title(); ?></h1>

      <?php endif; ?>
      <!-- Tag Archive -->
      <?php is (is_tag() ); ?>

        <h1><?php single_tag_title(); ?></h1>

      <?php endif; ?>
      <!-- Author Archive -->
      <?php is (is_author() ); ?>

        <h1><?php the_archive_title(); ?></h1>

      <?php endif; ?>
      <!-- Date Archive -->
      <?php is (is_date() ); ?>

        <h1><?php the_archive_title(); ?></h1>

      <?php endif; ?>
      <!-- 404 Page -->
      <?php is (is_404() ); ?>

        <h1>404 puto</h1>

      <?php endif; ?>


    </div>

<?php get_footer(); ?>
