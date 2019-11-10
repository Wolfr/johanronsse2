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
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                	 width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                                <path d="M16,4.04c-0.589,0.261-1.221,0.437-1.885,0.517c0.678-0.406,1.198-2.049,1.443-2.815c-0.634,0.376-1.337,0.649-2.085,0.796
                                	c-0.599-0.638-1.452-1.036-2.396-1.036c-1.813,0-3.283,1.469-3.283,3.281c0,0.257,0.029,0.508,0.085,0.748
                                	C5.152,5.393,2.733,4.087,1.114,2.102C0.831,2.586,0.669,3.15,0.669,3.751c0,1.138,0.579,2.143,1.46,2.731
                                	c-0.538-0.017-1.044-0.165-1.487-0.41c0,0.014,0,0.027,0,0.041c0,1.59,1.132,2.916,2.633,3.218C3,9.406,2.71,9.446,2.411,9.446
                                	c-0.211,0-0.417-0.021-0.618-0.059c0.418,1.304,1.63,2.252,3.066,2.279c-1.123,0.88-2.539,1.405-4.077,1.405
                                	c-0.265,0-0.526-0.015-0.783-0.046c1.453,0.931,3.178,1.474,5.032,1.474c6.038,0,9.34-4,9.34-8.336c0-0.142-0.003-0.284-0.01-0.424
                                	C15.003,5.276,15.56,4.698,16,4.04z"/>
                                </svg>
                                
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