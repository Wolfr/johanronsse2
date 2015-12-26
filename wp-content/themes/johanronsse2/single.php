<?php get_header(); ?>

<section class="section" role="main">
    <div class="inner">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col-md-10 col-md-push-1">
                <?php get_template_part( 'entry' ); ?>

                <footer>
                    <div class="inner">
                        <div class="box">
                            <ul>
                                <li>Link to this article: <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></li>
                                <li>Have something to say? Tweet me <a href="https://twitter.com/johan_ronsse">@johan_ronsse</a> or e-mail me: <a href="mailto:blogreply@johanronsse.be">blogreply@johanronsse.be</a>.</li>
                            </ul>
                        </div>
                        <div class="box">
                            <img src="<?php bloginfo('template_directory') ?>/images/avatar.png" alt="Johan Ronsse">
                            <h3>About Johan</h3>
                            <p>User interface designer specialised in designing usable software. Co-founder of <a href="http://mono.company">Mono</a>.</p>
                        </div>
                    </div>
                </footer>

                <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
            </div>

        <?php endwhile; endif; ?>



        <?php get_template_part( 'nav', 'below-single' ); ?>

    </div>
</section>

<?php get_footer(); ?>