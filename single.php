<?php get_header(); ?>



<div class="container">
    <h1> <?php the_title(); ?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="contents">

        <?php the_content(); ?>

    </div>
    <?php endwhile; endif;?>
</div>
 

<?php get_footer(); ?>