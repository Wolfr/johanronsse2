<?php get_header(); ?>

<section class="section" role="main">
    <div class="inner">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div class="content-inner">

                        <?php get_template_part( 'entry' ); ?>

                        <footer>
                            <div class="footer-inner">
                                <div class="box">
                                    <ul>
                                        <li>
                                            <img src="<?php bloginfo('template_directory') ?>/images/twitter.svg" class="twitter">
                                            
                                            Like this article? <a href="https://twitter.com/intent/tweet?url=<?php $url = get_permalink(); echo urlencode($url); ?>&text=<?php the_title() ?>&via=johanronsse">Tweet about it</a>.

                                        </li>
                                    </ul>
                                </div>
                                <div class="box">
                                    <img src="<?php bloginfo('template_directory') ?>/images/avatar.png" alt="Johan Ronsse" class="avatar">
                                    <h3>About Johan</h3>
                                    <p>User interface designer specialised in designing usable software. Co-founder of <a href="http://mono.company">Mono</a>.</p>
                                </div>
                            </div>
                        </footer>

                        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>

                    </div>
                </div>
            </div>

        <?php endwhile; endif; ?>



        <?php get_template_part( 'nav', 'below-single' ); ?>

    </div>
</section>

<?php get_footer(); ?>