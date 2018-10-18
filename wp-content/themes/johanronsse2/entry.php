<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php
            if ( is_singular() ) {
                echo '<h1 class="entry-title">';
            } else {
                echo '<h2 class="entry-title"><a rel="bookmark" href="';
                the_permalink();
                echo '"title="';
                the_title_attribute();
                echo '">';
            } ?>
                <?php the_title(); ?>
            <?php
                if ( is_singular() ) {
                    echo '</h1>';
                } else {
                    echo '</a></h2>';
                }
            ?>
        <p><?php the_time( get_option( 'date_format' ) ); ?> - Posted in <?php the_category(' '); ?></p>
    </header>
    <section class="entry-content">
        <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
    </section>
</article>