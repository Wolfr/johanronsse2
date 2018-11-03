<?php get_header(); ?>

<main class="section">
    <div class="inner">
        <div class="content-inner">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (is_page(8) || is_page(669)) { ?>
                        <?php // Don't show title on projects page ?>
                    <?php } else { ?>
                        <header class="header">
                            <h1 class="entry-title"><?php the_title(); ?></h1> 
                            <p><?php the_time( get_option( 'date_format' ) ); ?></p>
                        </header>
                    <?php } ?>
                    <section class="entry-content">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        <?php the_content(); ?>
                        <?php edit_post_link(); ?>
                    </section>
                </article>

                <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>