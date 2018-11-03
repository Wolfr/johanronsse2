<?php get_header(); ?>

<main class="section">
    <div class="inner">

        <ul class="article-list">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li class="article-list-item">
                    <?php get_template_part( 'entry' ); ?>
                </li>
            <?php endwhile; endif; ?>
        </ul>

        <?php get_template_part( 'nav', 'below' ); ?>

    </div>
</main>

<?php get_footer(); ?>