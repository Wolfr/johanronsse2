<?php get_header(); ?>

<section class="section" role="main">
    <div class="inner">

        <div class="article-list">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="article-list-item">
                    <div class="col-md-10 col-md-push-1">
                        <?php get_template_part( 'entry' ); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>

        <?php get_template_part( 'nav', 'below' ); ?>

    </div>
</section>

<?php get_footer(); ?>