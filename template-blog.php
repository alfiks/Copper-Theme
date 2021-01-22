<?php /* Template Name:Blog */ ?>

<?php get_header(); ?>

<section id="content" role="main" class="blog">
    
<div class="posts-row">

<?php query_posts( 'posts_per_page=10' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="entry-content post-cards">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
    <div class="card">
    <h2> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
                <a class="bt-w" href="<?php the_permalink(); ?>"> READ MORE</a>

    </div>


</section>

<?php endwhile; ?>
        <div class="clear"></div>

</div>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>