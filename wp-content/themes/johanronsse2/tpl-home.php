<?php
/**
 * Template Name: home
 */
?>

<?php get_header(); ?>

<section class="section" role="main">
    <div class="inner">

        <p class="bordered-list-title">Recent projects:</p>

        <ul class="bordered-list bordered-list-alt">
            <li>
                <a href="https://mono.company">
                    Mono Company<br>
                    <span>User interface design consultancy based in Belgium</span>
                </a>
            </li>
            <li>
                <a href="http://bestof2017.johanronsse.be">
                    Best of 2017<br>
                    <span>A side project showcasing the best of 2017 in movies, music and more.</span>
                </a>
            </li>
        </ul>

        <p class="bordered-list-title">Latest blog posts:</p>

        <ul class="bordered-list bordered-list-alt">
        <?php
            $args = array (
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'category',
                        'field'     => 'slug',
                        'terms'     => 'uncategorized',
                        'operator'  => 'NOT IN'
                    )
                ));
            $recent_posts = wp_get_recent_posts($args);
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
            }
        ?>
        </ul>
    </div>
    
</section>

<?php get_footer(); ?>