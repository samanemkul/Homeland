<?php
/*
    Template Name: About page
*/
get_header();
$row1 = get_field('about');



?>
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">About Homeland</h1>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <?php
    if (have_rows('about')):
        while (have_rows('about')): the_row();
            if (get_row_layout() == 'about_page'):
                $heading = get_sub_field('company_heading');
                $about_description = get_sub_field('about-description');
                $leadership = get_sub_field('leadership');
                $leadership_description = get_sub_field('leader_description');
                $agen = get_sub_field('agen');
                $agen_description = get_sub_field('agen_description');
                $desc = get_sub_field('desc');
                $rows_to_display = get_sub_field('agents');
                $featured_image = get_sub_field('featured-image');
                $row_to_show = get_sub_field('agenta');
            endif;
        endwhile;
    endif;
    ?>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <img src="<?php echo esc_url($featured_image); ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-5 ml-auto">
                <div class="site-section-title">
                    <h2><?php echo $heading; ?></h2>
                </div>
                <p class="lead"><?php echo $about_description; ?></p>
                <p><?php echo $desc; ?></p>
                <p><a href="#" class="btn btn-outline-primary rounded-0 py-2 px-5">Read More</a></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2><?php echo $leadership; ?></h2>
                    <p><?php echo $leadership_description; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($rows_to_display)) : ?>
                <?php foreach ($rows_to_display as $repeat) : ?>
                    <?php
                    $limage = $repeat['limage'];
                    $name = $repeat['name'];
                    $agent = $repeat['agent'];
                    $description = $repeat['description'];
                    $facebook = $repeat['facebook'];
                    $twitter = $repeat['twitter'];
                    $linkedin = $repeat['linkedin'];
                    ?>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">


                            <img src="<?php echo esc_url($limage); ?>" alt="Image" class="img-fluid rounded mb-4">

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

            <?php
                endforeach;
            else:
                echo '<p>Nothing found</p>';
            endif;
            ?>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2><?php echo $agen; ?></h2>
                    <p><?php echo $agen_description; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($row_to_show)) : ?>
                <?php foreach ($row_to_show as $repeat) : ?>
                    <?php
                    $aimage = $repeat['aimage'];
                    $uname = $repeat['uname'];
                    $gen_name = $repeat['gen_name'];
                    $descript = $repeat['descript'];
                    $face = $repeat['face'];
                    $twit = $repeat['twit'];
                    $linked = $repeat['linked'];
                    ?>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="<?php echo esc_url($aimage); ?>" alt="Image" class="img-fluid rounded mb-4">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light text-black h4"><?php echo $uname; ?></h2>
                                <span class="d-block mb-3 text-white-opacity-05"><?php echo $gen_name; ?></span>
                                <p><?php echo $descript; ?></p>
                                <p>
                                    <a href="<?php echo esc_url($face); ?>" class="text-black p-2"><span class="icon-facebook"></span></a>
                                    <a href="<?php echo esc_url($twit); ?>" class="text-black p-2"><span class="icon-twitter"></span></a>
                                    <a href="<?php echo esc_url($linked); ?>" class="text-black p-2"><span class="icon-linkedin"></span></a>
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

<div class="site-section">
    <div class="container">
        <?php
        $title = get_field('title');
        $des = get_field('description');
        $repeat = get_field('repeater');
        ?>



        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <div class="site-section-title">
                    <h2><?php echo $title; ?></h2>
                </div>
                <p><?php echo $des; ?></p>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php if (!empty($repeat)): ?>
                <div class="col-md-8">
                    <div class="accordion unit-8" id="faqAccordion"> 
                        <?php $counter = 0;  
                        ?>
                        <?php foreach ($repeat as $item): ?>
                            <?php
                            $question = $item['questions'];
                            $answer = $item['answer'];
                            ?>
                            <div class="accordion-item">
                                <h3 class="mb-0 heading">
                                    <a class="btn-block"
                                        data-toggle="collapse"
                                        href="#collapse<?php echo $counter; ?>"
                                        role="button"
                                        aria-expanded="<?php echo ($counter === 0) ? 'true' : 'false'; ?>"
                                        aria-controls="collapse<?php echo $counter; ?>">
                                        <?php echo esc_html($question); ?><span class="icon"></span>
                                    </a>
                                </h3>
                                <div id="collapse<?php echo $counter; ?>"
                                    class="collapse<?php echo ($counter === 0) ? ' show' : ''; ?>"
                                    aria-labelledby="heading<?php echo $counter; ?>"
                                    data-parent="#faqAccordion"> 
                                    <div class="body-text">
                                        <p><?php echo esc_html($answer); ?></p>
                                    </div>
                                </div>
                            </div> 
                            <?php $counter++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                <p>No FAQs found.</p>
            <?php endif; ?>
        </div>


    </div>
</div>

<?php get_footer();
?>