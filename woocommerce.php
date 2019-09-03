<?php
/**
 *  WooCommerce.
 */
get_header(); ?>

    <section class="content-wrapper woocommerce-wrapper">
        <div class="content-container">
            <div class="container">
                <div class="row">

                    <div class="twelve columns">

                        <?php if (have_posts()) : ?>
                            <?php woocommerce_content(); ?>
                        <?php endif; ?>
                        
                    </div>

                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
