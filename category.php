<?php get_header(); ?>
<section id="content" role="main">
<header class="header">
<h4 class="entry-title"><?php _e( 'Category Archives: ', 'copper' ); ?><?php single_cat_title(); ?></h4>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>