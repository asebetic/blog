<article class="single-post">
	<?php the_post_thumbnail('single-image'); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>
        <?php the_content(); ?>
    </p>

</article>
