<?php get_header(); ?>
<section id="content" role="main">
<header class="header">
<h4 class="entry-title"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'copper' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'copper' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'copper' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'copper' ); }
?></h4>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>