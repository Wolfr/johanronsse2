<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
    <nav id="nav-below" class="navigation">
        <div class="nav-previous">
            <?php next_posts_link(sprintf( __( '%s older', 'johanronsse' ), '<span class="meta-nav">&larr;</span>' ) ) ?>
        </div>
        <div class="nav-next">
            <?php previous_posts_link(sprintf( __( 'newer %s', 'johanronsse' ), '<span class="meta-nav">&rarr;</span>' ) ) ?>
        </div>
    </nav>
<?php } ?>