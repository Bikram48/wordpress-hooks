<h1>Custom Theme</h1>
<?php
 if ( have_posts() ):
        while ( have_posts() ) : the_post();?>
        <article class="post">
            <h2><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h2>
            <?php echo the_content();?>
            <?php echo the_excerpt(); ?>
        </article>
        <?php
        endwhile;
    else :
        echo '<p>There are no posts!</p>';
    endif;