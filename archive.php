<?php
get_header();
?>

		<article class="content px-3 py-5 p-md-5">
        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post ();
                    get_template_part( 'template-parts/content', 'archive');

                }
            }
        ?>

	    </article>

    
<?php
get_footer();
?>
<?php get_header(); ?>



<div class="container">
    <h1> <?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="card">
            <div class="card-body">
                <h3> <?php the_title();?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>

            </div>
        </div>
    <?php endwhile; endif;?>
</div>
 

<?php get_footer(); ?>
