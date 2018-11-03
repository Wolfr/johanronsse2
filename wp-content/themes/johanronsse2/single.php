<?php get_header(); ?>

<main class="section">
    <div class="inner">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('entry'); ?>

            <footer>
                <div class="footer-inner">
                    <div class="box">
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_directory') ?>/images/twitter.svg" class="twitter" alt="">
                                Like this article? <a href="https://twitter.com/intent/tweet?url=<?php $url = get_permalink(); echo urlencode($url); ?>&text=<?php the_title() ?>&via=johanronsse">Tweet about it</a>.
                            </li>
                        </ul>
                    </div>
                    <div class="box">
                        <img src="<?php bloginfo('template_directory') ?>/images/avatar.png" alt="Johan Ronsse" class="avatar">
                        <h2>About Johan</h2>
                        <p>User interface designer specialised in designing usable software. Co-founder of <a href="http://mono.company">Mono</a>.</p>
                    </div>
                </div>
            </footer>

            <?php if ( ! post_password_required() ) comments_template( '', true ); ?>

        <?php endwhile; endif; ?>

        <?php get_template_part( 'nav', 'below-single' ); ?>

    </div>
</main>

<?php get_footer(); ?>