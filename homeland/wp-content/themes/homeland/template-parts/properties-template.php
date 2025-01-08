<?php
/*
    Template Name:Property-template
*/
get_header();
$slider = get_field('slider');
$price_text = get_field('price_text');
$price = get_field('price_number');
$bed_text = get_field('bed_text');
$bed = get_field('bed_number');
$bath_text = get_field('bath_text');
$bath = get_field('bath_number');
$sqft_text = get_field('sqft_text');
$sqft = get_field('sqft_number');
$home_type = get_field('home_type');
$year_built = get_field('year_built');
$pricesqft = get_field('pricesqft');
$title = get_field('title');
$description = get_field('description');
$desc1 = get_field('description1');
$desc2 = get_field('description2_');
$homes = get_field('homes');
$gallery = get_field('gallery');
$paragraph = get_field('paragraph');
?>
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
                <h1 class="mb-2">625 S. Berendo St</h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold">$1,000,500</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <div class="slide-one-item home-slider owl-carousel">
                        <?php if (!empty($slider)): ?>

                            <?php foreach ($slider as $sl): ?>
                                <?php $image = $sl['image'];
                                ?>
                                <div><img src="<?php echo esc_url($image); ?>" alt="Image" class="img-fluid"></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="bg-white property-body border-bottom border-left border-right">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3">$<?php echo number_format($price); ?></strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li>
                                    <span class="property-specs"><?php echo $bed_text; ?></span>
                                    <span class="property-specs-number"><?php echo $bed; ?> <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs"><?php echo $bath_text; ?></span>
                                    <span class="property-specs-number"><?php echo $bath; ?></span>

                                </li>
                                <li>
                                    <span class="property-specs"><?php echo $sqft_text; ?></span>
                                    <span class="property-specs-number"><?php echo number_format($sqft); ?></span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                            <strong class="d-block"><?php echo $home_type; ?></strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                            <strong class="d-block"><?php echo $year_built; ?></strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                            <strong class="d-block">$<?php echo number_format($pricesqft); ?></strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black"><?php echo $title; ?></h2>
                    <p><?php echo $description; ?></p>
                    <p><?php echo $desc1; ?></p>
                    <p><?php echo $desc2; ?></p>

                    <div class="row no-gutters mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Gallery</h2>
                        </div>
                        <?php if (!empty($gallery)): ?>
                            <?php foreach ($gallery as $image): ?>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <a href="<?php echo esc_url($image); ?>" class="image-popup gal-item"><img src="<?php echo esc_url($image); ?>" alt="Image" class="img-fluid"></a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="bg-white widget border rounded">

                    <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                    <div action="" class="form-contact-agent">
                        <div>
                            <?php echo do_shortcode('[contact-form-7 id="fea8836" title="front-contact"]'); ?>

                        </div>

                    </div>
                </div>

                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                    <p><?php echo $paragraph; ?></p>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="site-section site-section-sm bg-light">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="site-section-title mb-5">
                    <h2>Related Properties</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <?php if (!empty($homes)): ?>
                <?php foreach ($homes as $home): ?>
                    <?php
                    $image = $home['image'];
                    $title = $home['title'];
                    $desc = $home['desc'];
                    $price = $home['price'];
                    $bed = $home['bed'];
                    $bath = $home['bath'];
                    $sqft = $home['sqft'];
                    $tags = $home['tags'];
                    ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="<?php echo site_url('/index.php/property'); ?>" class="property-thumbnail">
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
                                <h2 class="property-title"><a href="<?php echo site_url('/index.php/property'); ?>"><?php echo $title; ?></a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span><?php echo $desc; ?></span>
                                <strong class="property-price text-primary mb-3 d-block text-success"><?php echo $price; ?></strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number"> <?php echo $bed; ?> <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number"><?php echo $bath; ?></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">SQ FT</span>
                                        <span class="property-specs-number"><?php echo $sqft; ?></span>

                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>

    <?php get_footer(); ?>