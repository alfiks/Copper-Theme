<?php
/*
 * Template Name: Portfolio item
 * Template Post Type: post, product
 */
  
 get_header();  ?>
<section id="content" role="main" class="portfolio">
    
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>


<?php get_template_part( 'nav', 'below-single' ); ?>

<?php get_footer(); ?>