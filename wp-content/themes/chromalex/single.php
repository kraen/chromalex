<?php get_header(); ?>


    <section id="content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<? the_ID(); ?>" <?php post_class(); ?>>

          <section class="left-col">

          </section>

          <section class="right-col">
            <header>
              <h1><? the_title(); ?></h1>
            </header>

            <?php the_content(); ?>
          </section>


        </article>
      <?php endwhile; ?>
        <!-- post navigation -->
      <?php else: ?>
        <!-- no posts found -->
      <?php endif; ?>
    </section>

<?php get_footer(); ?>
