<?php
/*
    Template Name: Blog page
*/
get_header();
?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">Our Blog</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'order' => 'ASC',
                'orderby' => 'date',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', ['class' => 'img-fluid']);
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/images/default.jpg" class="img-fluid" alt="Default Image">';
                            }
                            ?>
                        </a>
                        <div class="p-4 bg-white">
                            <span class="d-block text-secondary small text-uppercase"><?php echo get_the_date(); ?></span>
                            <h2 class="h5 text-black mb-3">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata(); // Reset the query
            else :
                ?>
                <p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- End site-section -->

<?php get_footer(); ?>