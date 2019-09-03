<?php
/**
 *  For Blog Post
 */

?>

<section class="content-wrapper">
    <div class="content-container">
        <div class="container">

            <div class="blog-wrapper">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/post/content'); ?>

                    <?php endwhile; ?>

                    <?php
                        the_posts_pagination(array(
                            "screen_reader_text" => "",
                            "mid_size" => 2,
                            "prev_text" => __('Pre', 'eulite'),
                            "next_text" => __('Next', 'eulite'),
                        ));
                    ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/post/content', 'none'); ?>

                <?php endif; ?>

            </div>
            
        </div>
    </div>
</section>
