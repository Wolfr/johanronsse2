<?php
/**
 * Template Name: home
 */
?>

<?php get_header(); ?>

<main class="section">

    <div class="belief">
        <p>Hi, I'm Johan!</p>
        <p>I am a user interface designer living in Belgium. I run a design company called <a href="https://mono.company/">Mono</a>, which I founded with my business partner <a href="http://xavierbertels.com">Xavier</a>.</p>
        <p>I believe the way we interact with computers can be improved vastly. We are approaching a future with screens everywhere. I want to work on keeping that world human.</p>
        <p>Besides <a href="/blog">blogging</a> on this website, sometimes I <a href="http://twitter.com/wolfr_2">tweet</a>.</p>
        
    </div>

    <div class="featured-content">
        <p class="bordered-list-title">Active projects:</p>

        <ul class="bordered-list bordered-list-alt">
            <li>
                <a href="https://mono.company">
                    Mono Company<br>
                    <span>User interface design consultancy based in Belgium</span>
                </a>
            </li>
            <li>
                <a href="https://github.com/Wolfr/sveltekit-jui">
                    SvelteKit-JUI<br>
                    <span>User interface library powered by Svelte</span>
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

</main>

<?php get_footer(); ?>