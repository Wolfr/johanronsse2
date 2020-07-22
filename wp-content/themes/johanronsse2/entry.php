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
        <p>
            <time><?php the_time( get_option( 'date_format' ) ); ?></time> - 
            Posted in <?php the_category(' '); ?>

            <?php
                $comments_number = get_comments_number();
                if ( 1 === $comments_number ) {
                    printf('- 1 comment');
                } else if ( 0 === $comments_number ) {
                    // Do nothing, don't put focus on comments if there are none
                } else {
                    echo '- ' . $comments_number . ' comments';
                }
            ?>
            
        </p>
    </header>
    <section class="entry-content">
        <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
    </section>
</article>




