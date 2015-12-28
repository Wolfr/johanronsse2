<?php
/**
 * Template Name: home
 */
?>

<?php get_header(); ?>

<section class="section" role="main">
    <div class="inner">

        <p class="bordered-list-title">Latest projects:</p>

        <ul class="bordered-list bordered-list-alt">
            <li>
                <a href="http://mono.company">
                    Mono Company<br>
                    <span>User interface design consultancy based in Belgium</span>
                </a>
            </li>
            <li>
                <a href="http://bedrock.mono.company">
                    Bedrock<br>
                    <span>Static site generator to make epic HTML prototypes</span>
                </a>
            </li>
            <li>
                <a href="http://kanamaster.com">
                    Kana Master<br>
                    <span>iPhone application to learn the Japanese hiragana and katakana character sets</span>
                </a>
            </li>
        </ul>

        <p class="bordered-list-title">Latest research:</p>

        <ul class="bordered-list bordered-list-alt">
            <li>
                <a href="/research/windows-10">Windows 10</a>
            </li>
            <li>
                <a href="/research/apple-watch">Apple Watch</a>
            </li>
        </ul>

        <p class="bordered-list-title">Latest blog posts:</p>

        <ul class="bordered-list bordered-list-alt">
        <?php
            $recent_posts = wp_get_recent_posts(3);
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
            }
        ?>
        </ul>
    </div>
    
</section>

<?php get_footer(); ?>