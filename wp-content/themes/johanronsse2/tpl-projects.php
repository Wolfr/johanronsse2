<?php
/**
 * Template Name: projects
 */
?>

<?php get_header(); ?>

<section class="section" role="main">
    <div class="inner">

        <div class="content-inner">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <section class="entry-content">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        <?php the_content(); ?>
                        <div class="entry-links"><?php wp_link_pages(); ?></div>
                        <?php edit_post_link(); ?>
                    </section>
                </article>

                <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
            <?php endwhile; endif; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>