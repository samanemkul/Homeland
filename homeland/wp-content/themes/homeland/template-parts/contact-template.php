<?php
/*
Template Name:Contact Page
*/
get_header();
?>
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">
                <?php echo do_shortcode('[contact-form-7 id="c4bdbc0" title="Contact form 1"]'); ?>



            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <?php if (is_active_sidebar('contact-sidebar')) : ?>
                        <aside id="contact-sidebar" class="widget-area">
                            <?php dynamic_sidebar('contact-sidebar'); ?>
                        </aside>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <?php
    $heading = get_field('heading');
    $describe = get_field('describe');
    $rows_to_display = get_field('repeater');
    ?>
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2><?php echo $heading; ?></h2>
                    <p><?php echo $describe; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($rows_to_display)) : ?>
                <?php foreach ($rows_to_display as $repeat) : ?>
                    <?php
                    $image = $repeat['image'];
                    $name = $repeat['name'];
                    $agent_name = $repeat['agent_name'];
                    $description = $repeat['description'];
                    $facebook = $repeat['facebook'];
                    $twitter = $repeat['twitter'];
                    $linkedin = $repeat['linked_in'];
                    ?>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="<?php echo esc_url($image); ?>" alt="Image" class="img-fluid rounded mb-4">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light text-black h4"><?php echo $name; ?></h2>
                                <span class="d-block mb-3 text-white-opacity-05"><?php echo $agent_name; ?></span>
                                <p><?php echo $description; ?></p>
                                <p>
                                    <a href="<?php echo esc_url($facebook); ?>" class="text-black p-2"><span class="icon-facebook"></span></a>
                                    <a href="<?php echo esc_url($twitter); ?>" class="text-black p-2"><span class="icon-twitter"></span></a>
                                    <a href="<?php echo esc_url($linkedin); ?>" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>
            <?php
                endforeach;
            else:
                echo '<p>Nothing found</p>';
            endif;
            ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>