<?php
/*
    Template Name: Home page
*/
$slider = get_field('slider');
$details = get_field('details');
$agent_title = get_field('agent_title');
$agent_desc = get_field('agent_desc');
$agent_repeat = get_field('agent_repeat');
$blog = get_field('blog');
$blog_desc = get_field('blog_desc');
$choose = get_field('choose');
$choose_desc = get_field('choose_desc');
$chooseus = get_field('chooseus');
$listing_types = get_field_object('listing_types');
$offer_type = get_field_object('offer_type');
$select_city = get_field_object('select_city');


get_header();
?>
<div class="slide-one-item home-slider owl-carousel">
    <?php foreach ($slider as $item): ?>
        <?php
        $image = $item['background_image'];
        $title = $item['tilte'];
        $price = $item['price'];
        $see_details = $item['see_details'];
        $see = $item['see'];
        $sale = $item['sale'];

        ?>

        <div class="site-blocks-cover overlay" style="background-image: url(<?php echo esc_url($image); ?>);">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <?php if (!empty($sale)): ?>
                            <div class="offer-type-wrap">
                                <?php foreach ($sale as $tag): ?>
                                    <span class="offer-type bg-<?php echo strtolower(str_replace(' ', '-', $tag)); ?>">
                                        <?php echo esc_html($tag); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <h1 class="mb-2"><?php echo $title; ?></h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?php echo $price; ?></strong></p>
                        <p><a href="<?php esc_url($see); ?>" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2"><?php echo esc_html($see_details); ?></a></p>
                    </div>
                </div>
            </div>

        </div>
    <?php endforeach; ?>
</div>




<div class="site-section site-section-sm pb-0">
    <div class="container">
        <div class="row">
            <form class="form-search col-md-12" style="margin-top: -100px;">
                <div class="row  align-items-end">
                    <div class="col-md-3">
                        <label for="list-types">Listing Types</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                                <?php foreach ($listing_types['choices'] as $value => $label): ?>
                                    <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="offer-types">Offer Type</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                                <?php foreach ($offer_type['choices'] as $value => $label): ?>
                                    <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="select-city">Select City</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                                <?php foreach ($select_city['choices'] as $value => $label): ?>
                                    <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
                    <div class="mr-auto">
                        <a href="#" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                        <a href="<?php echo site_url('/index-php-list/'); ?>" class="icon-view view-list"><span class="icon-view_list"></span></a>

                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <div>
                            <a href="#" class="view-list px-3 border-right active">All</a>
                            <a href="#" class="view-list px-3 border-right">Rent</a>
                            <a href="#" class="view-list px-3">Sale</a>
                        </div>


                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select class="form-control form-control-sm d-block rounded-0">
                                <option value="">Sort by</option>
                                <option value="">Price Ascending</option>
                                <option value="">Price Descending</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="site-section site-section-sm bg-light">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'paged' => $paged,
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()) : ?>

        <div class="container">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                if (!empty($details)): ?>
                    <div class="row mb-5">
                        <?php foreach ($details as $items):
                            $image = $items['image'];
                            $tags = $items['tags'];
                            $title = $items['title'];
                            $location = $items['location'];
                            $price = $items['price'];
                            $bed = $items['bed'];
                            $bath = $items['bath'];
                            $sqft = $items['sqft'];
                        ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="property-entry h-100">
                                    <a href="<?php echo site_url('index.php/property'); ?>" class="property-thumbnail">
                                        <div class="offer-type-wrap">
                                            <?php if (!empty($tags)): ?>
                                                <?php foreach ($tags as $tag): ?>
                                                    <span class="offer-type bg-<?php echo strtolower($tag); ?>">
                                                        <?php echo esc_html($tag); ?>
                                                    </span>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                        <img src="<?php echo esc_url($image); ?>" alt="Image" class="img-fluid">
                                    </a>
                                    <div class="p-4 property-body">
                                        <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                        <h2 class="property-title">
                                            <a href="<?php echo site_url('index.php/property'); ?>"><?php echo esc_html($title); ?></a>
                                        </h2>
                                        <span class="property-location d-block mb-3">
                                            <span class="property-icon icon-room"></span>
                                            <?php echo esc_html($location); ?>
                                        </span>
                                        <strong class="property-price text-primary mb-3 d-block text-success">
                                            <?php echo $price ?>
                                        </strong>
                                        <ul class="property-specs-wrap mb-3 mb-lg-0">
                                            <li>
                                                <span class="property-specs">Beds</span>
                                                <span class="property-specs-number"><?php echo esc_html($bed); ?> <sup>+</sup></span>
                                            </li>
                                            <li>
                                                <span class="property-specs">Baths</span>
                                                <span class="property-specs-number"><?php echo esc_html($bath); ?></span>
                                            </li>
                                            <li>
                                                <span class="property-specs">SQ FT</span>
                                                <span class="property-specs-number"><?php echo esc_html($sqft); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>
            <?php endwhile; ?>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-pagination">
                        <?php
                        echo paginate_links(array(
                            'total'        => $query->max_num_pages,
                            'current'      => $paged,
                            'prev_text'    => __('« Prev'),
                            'next_text'    => __(' »'),
                        ));
                        ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>





<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <div class="site-section-title">
                    <h2><?php echo $choose; ?></h2>
                </div>
                <p><?php echo $choose_desc; ?></p>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($chooseus)): ?>
                <?php foreach ($chooseus as $item): ?>
                    <?php
                    $image = $item['image'];
                    $title = $item['title'];
                    $description = $item['description'];
                    $readmore = $item['readmore'];
                    ?>

                    <div class="col-md-6 col-lg-4">
                        <a href="<?php echo esc_url($image); ?>" class="service text-center">
                            <img src="<?php echo esc_url($image); ?>" alt="" style="width: 60px; height: 59.73px;">
                            <span class="<?php echo esc_url($image); ?>"></span>
                            <h2 class="service-heading"><?php echo $title; ?></h2>
                            <p><?php echo $description; ?></p>
                            <p><span class="read-more"><?php echo esc_url($readmore); ?></span></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <div class="site-section-title">
                    <h2><?php echo $blog; ?></h2>
                </div>
                <p><?php echo $blog_desc; ?></p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'date',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="col-md-6 col-lg-4 mb-4 d-flex align-items-stretch">
                        <div class="card h-100">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid']);
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default.jpg') . '" class="card-img-top img-fluid" alt="' . esc_attr__('Default Image', 'textdomain') . '">';
                                }
                                ?>
                            </a>
                            <div class="card-body">
                                <span class="d-block text-secondary small text-uppercase"><?php echo get_the_date(); ?></span>
                                <h2 class="h5 text-black mb-3">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata(); // Reset the query
            else :
                ?>
                <p><?php esc_html_e('No posts found.'); ?></p>
            <?php endif; ?>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>



<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2><?php echo  $agent_title; ?></h2>
                    <p><?php echo $agent_desc; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($agent_repeat)): ?>
                <?php foreach ($agent_repeat as $agents): ?>
                    <?php
                    $image = $agents['image'];
                    $name = $agents['name'];
                    $agent = $agents['agent'];
                    $description = $agents['description'];
                    $facebook = $agents['facebook'];
                    $twitter = $agents['twitter'];
                    $linkedin = $agents['linked_in'];
                    ?>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="<?php echo esc_url($image); ?>" alt="Image" class="img-fluid rounded mb-4">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light text-black h4"><?php echo $name; ?></h2>
                                <span class="d-block mb-3 text-white-opacity-05"><?php echo $agent; ?></span>
                                <p><?php echo $description; ?></p>
                                <p>
                                    <a href="<?php echo esc_url($facebook); ?>" class="text-black p-2"><span class="icon-facebook"></span></a>
                                    <a href="<?php echo esc_url($twitter); ?>" class="text-black p-2"><span class="icon-twitter"></span></a>
                                    <a href="<?php echo esc_url($linkedin); ?>" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>



        </div>
    </div>
</div>
<?php get_footer(); ?>