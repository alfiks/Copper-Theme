<?php get_header(); ?>


<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>

    <div class="clear"> </div>
</section>
<?php get_template_part( 'nav', 'below' ); ?>

<?php get_footer(); ?>