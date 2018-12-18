<?php
/*
Template Name: Main Page
*/
get_header();
?>
<?php $post_id = 5; ?>
<?php $fields = get_fields($post_id); ?>

<?php $facebook_link = (isset($fields['facebook_link'])) ? $fields['facebook_link'] : ''; ?>
<?php $yt_link = (isset($fields['yt_link'])) ? $fields['yt_link'] : ''; ?>
<?php $instagram_link = (isset($fields['instagram_link'])) ? $fields['instagram_link'] : ''; ?>
<?php $top_plate = (isset($fields['top_plate'])) ? $fields['top_plate'] : ''; ?>
<?php $what_we_do = (isset($fields['what_we_do'])) ? $fields['what_we_do'] : ''; ?>
<?php $main_section = (isset($fields['main_section'])) ? $fields['main_section'] : ''; ?>
<?php $people_quantity = (isset($fields['people_quantity'])) ? $fields['people_quantity'] : ''; ?>
<?php $calculate_event = (isset($fields['calculate_event'])) ? $fields['calculate_event'] : ''; ?>
<?php $organize_events = (isset($fields['organize_events'])) ? $fields['organize_events'] : ''; ?>

<?php $catering_section = (isset($fields['catering_section'])) ? $fields['catering_section'] : ''; ?>
<?php $catering_sub_title = (isset($fields['catering_sub_title'])) ? $fields['catering_sub_title'] : ''; ?>
<?php $catering_advantages = (isset($fields['catering_advantages'])) ? $fields['catering_advantages'] : array(); ?>


<?php $events_section = (isset($fields['events_section'])) ? $fields['events_section'] : ''; ?>
<?php $events_sub_title = (isset($fields['events_sub_title'])) ? $fields['events_sub_title'] : ''; ?>
<?php $events_sub_text = (isset($fields['events_sub_text'])) ? $fields['events_sub_text'] : ''; ?>
<?php $event_example = (isset($fields['event_example'])) ? $fields['event_example'] : array(); ?>



<?php $order_section = (isset($fields['order_section'])) ? $fields['order_section'] : ''; ?>
<?php $taste_plate = (isset($fields['taste_plate'])) ? $fields['taste_plate'] : ''; ?>
<?php $order_title = (isset($fields['order_title'])) ? $fields['order_title'] : ''; ?>
<?php $order_text = (isset($fields['order_text'])) ? $fields['order_text'] : ''; ?>
<?php $order_advantages = (isset($fields['order_advantages'])) ? $fields['order_advantages'] : array(); ?>


<?php $box_section = (isset($fields['box_section'])) ? $fields['box_section'] : ''; ?>
<?php $box_sub_title = (isset($fields['box_sub_title'])) ? $fields['box_sub_title'] : ''; ?>
<?php $box_sub_text = (isset($fields['box_sub_text'])) ? $fields['box_sub_text'] : ''; ?>
<?php $box_slider = (isset($fields['box_slider'])) ? $fields['box_slider'] : array(); ?>
<?php $box_extra_title = (isset($fields['box_extra_title'])) ? $fields['box_extra_title'] : ''; ?>
<?php $thematic_events = (isset($fields['thematic_events'])) ? $fields['thematic_events'] : array(); ?>




<?php $reviews_section = (isset($fields['reviews_section'])) ? $fields['reviews_section'] : ''; ?>
<?php $reviews_sub_title = (isset($fields['reviews_sub_title'])) ? $fields['reviews_sub_title'] : ''; ?>
<?php $reviews_sub_text = (isset($fields['reviews_sub_text'])) ? $fields['reviews_sub_text'] : ''; ?>
<?php $reviews_slider = (isset($fields['reviews_slider'])) ? $fields['reviews_slider'] : array(); ?>


<?php $extra_events_section = (isset($fields['extra_events_section'])) ? $fields['extra_events_section'] : ''; ?>
<?php $extra_events_sub_title = (isset($fields['extra_events_sub_title'])) ? $fields['extra_events_sub_title'] : ''; ?>
<?php $extra_events_sub_text = (isset($fields['extra_events_sub_text'])) ? $fields['extra_events_sub_text'] : ''; ?>
<?php $extra_events_slider = (isset($fields['extra_events_slider'])) ? $fields['extra_events_slider'] : array(); ?>


<?php $process_section = (isset($fields['process_section'])) ? $fields['process_section'] : ''; ?>
<?php $food_plate = (isset($fields['food_plate'])) ? $fields['food_plate'] : ''; ?>
<?php $process_sub_title = (isset($fields['process_sub_title'])) ? $fields['process_sub_title'] : ''; ?>
<?php $process_sub_text = (isset($fields['process_sub_text'])) ? $fields['process_sub_text'] : ''; ?>
<?php $process_advantages = (isset($fields['process_advantages'])) ? $fields['process_advantages'] : array(); ?>


<?php $food_photos_section = (isset($fields['food_photos_section'])) ? $fields['food_photos_section'] : ''; ?>
<?php $food_photos_sub_title = (isset($fields['food_photos_sub_title'])) ? $fields['food_photos_sub_title'] : ''; ?>
<?php $food_photos_sub_text = (isset($fields['process_sub_text'])) ? $fields['food_photos_sub_text'] : ''; ?>


<?php
// Supply a user id and an access token
$userid = "7923023625";
$accessToken = "7923023625.2c58a08.0f9eab00d73945a58f2ad4a107a101a9" ;


/*$userid = "480922565";
$accessToken = "480922565.f23f490.1865c622aefa4bb1971eca05da19d2fd";*/

// Gets our data
function fetchData($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 7);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

// Pulls and parses data.
$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
$result = json_decode($result);
?>





<div class="main-info">
    <div class="scroll-down">
        <div class="scroll-down-container">
            <p>листайте ниже</p>
            <span class="scroll-icon"></span>
            <span class="scroll-bg"></span>
        </div>
    </div>
    <span class="tomato parallax-item" data-direction="top"></span>
    <span class="parsley parallax-item" data-direction="bottom"></span>
    <span class="main-info-bg"></span>
    <span class="top-plate lazy" data-src="<?php echo $top_plate ?>"></span>
    <div class="main-info-container">
        <div class="social-links">
            <a href="<?php echo $yt_link ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve"> <path d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938 C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527 C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991 c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764 c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861 C204.394,157.263,202.325,160.684,199.021,162.41z"/></svg></span></a>
            <a href="<?php echo $facebook_link ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                                                              y="0px" viewBox="0 0 6.7 14"
                                                                              style="enable-background:new 0 0 6.7 14;"
                                                                              xml:space="preserve"><path
                                d="M5.2,2.5c-0.3,0-0.7,0.3-0.7,0.6v1.6h2.2v1.5L6.6,7h-2v7h-3V7H0V4.7h1.5V2.7C1.5,2.4,1.4,0,4.6,0h2.1v2.4 L5.2,2.5L5.2,2.5z"/></svg></span></a>
            <a href="<?php echo $instagram_link ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               x="0px" y="0px" viewBox="0 0 17.5 17.5"
                                                                               style="enable-background:new 0 0 17.5 17.5;"
                                                                               xml:space="preserve"><path
                                d="M17.5,4.8v7.8c0,2.7-2.2,4.8-4.8,4.8H4.8c-2.7,0-4.8-2.1-4.8-4.8V4.8C0,2.2,2.2,0,4.8,0h7.8 C15.3,0,17.5,2.2,17.5,4.8z M16,12.6V4.8c0-1.8-1.5-3.3-3.3-3.3H4.8C3,1.6,1.6,3,1.6,4.8v7.8c0,1.8,1.5,3.3,3.3,3.3h7.8 C14.5,15.9,16,14.4,16,12.6z M13.3,8.7c0,2.5-2,4.5-4.5,4.5c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5S13.3,6.2,13.3,8.7 C13.3,8.7,13.3,8.7,13.3,8.7z M11.7,8.7c-0.1-1.6-1.5-2.9-3.1-2.8C7.1,6,5.9,7.2,5.8,8.7c0,1.6,1.3,3,3,3 C10.4,11.7,11.7,10.4,11.7,8.7L11.7,8.7L11.7,8.7z M14.3,3.3c0.4,0.4,0.4,1.2,0,1.6c-0.2,0.2-0.5,0.3-0.8,0.3 c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0,0,0,0,0,0C13.8,2.9,14.1,3,14.3,3.3L14.3,3.3z"/></svg></span></a>
        </div>
        <div class="container">
            <div class="services-data">
                <div class="services-text">
                    <p><?php echo $what_we_do ?></p>
                </div>
                <div class="services-title">
                    <h1><?php echo $main_section ?></h1>
                    <p><?php echo $people_quantity ?></p>
                </div>
                <div class="services-price">

                    <p><?php echo $calculate_event ?></p>
                    <button type="button" class="main-btn" data-izimodal-open="#get-calculate">Рассчитать стоимость</button>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="catering">
    <div class="container">
        <div class="section-title" id="top">
            <h2><span><?php echo $catering_section ?></span></h2>
        </div>
        <div class="section-sub-title">
            <h3><?php echo $catering_sub_title ?></h3>
        </div>
        <div class="catering-advantages-container">
            <div class="advantages-img">
                <!--<img class="lazy" data-src="images/" alt="">-->
            </div>
            <div class="catering-advantages">
                <?php foreach ($catering_advantages as $item) { ?>
                    <div class="catering-item">
                        <div class="catering-item-container">
                            <div class="catering-icon"><?php echo $item["advantages_svg"]; ?></div>
                            <div class="catering-text">
                                <h3><?php echo $item["advantages_title"]; ?></h3>
                                <p><?php echo $item["advantages_text"]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
</div>

<div class="events-example">
    <div class="container">
        <div class="section-title">
            <h2><span><?php echo $events_section ?></span></h2>
        </div>
        <div class="events-container">
            <div class="section-sub-title">
                <h3><?php echo $events_sub_title ?></h3>
                <p><?php echo $events_sub_text ?></p>
            </div>

            <div class="event-container">
                <?php foreach ($event_example as $item) { ?>
                    <div class="event-item-container" <?php if ($item["event_anchor"]) { ?>id="<?php echo $item["event_anchor"]; ?>"<?php } ?>>
                        <?php if ($item["event_example_title"]) { ?>
                            <div class="section-title sub-title">
                                <h2><span><?php echo $item["event_example_title"]; ?></span></h2>
                            </div>
                        <?php } ?>
                        <div class="event-item">
                            <div class="event-item-img">
                                <?php if ($item["event-extra_text"]) { ?>
                                <div class="event-item-extra">
                                    <?php if ($item["event-extra_img"]) { ?>
                                <span><img class="lazy" data-src="<?php echo $item["event-extra_img"]; ?>" alt=""></span>
                                <?php } ?>
                                <p><?php echo $item["event-extra_text"]; ?></p>
                            </div>
                            <?php } ?>
                                <img class="lazy" data-src="<?php echo $item["event_example_img"]; ?>" alt="">
                            </div>
                            <div class="event-item-info">
                                <h4><span><?php echo $item["event_example_sub_title"]; ?></span></h4>
                                <div class="event-info-text"><?php echo $item["event_example_text"]; ?></div>
                                <div class="event-btn">
                                    <button type="button" class="main-btn" data-izimodal-open="#get-calculate" data-modal = "<?php echo $item["event_example_sub_title"]; ?>">Рассчитать
                                        мероприятие
                                    </button>
                                    <a href="javascript:void(0)"
                                       onclick="load_page('<?php echo $item["event_example_menu"]; ?>');"><span
                                                class="menu-icon"></span>Посмотреть пример меню</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>

            </div>


        </div>
    </div>
</div> 

<div class="taste">
    <span class="taste-plate lazy" data-src="<?php echo $taste_plate ?>"></span>
    <span class="tomato parallax-item"  data-direction="top"></span>
    <div class="container">
        <div class="section-title" id="anchor-box">
            <h2><span><?php echo $order_section ?></span></h2>
        </div>
        <div class="taste-info">
            <p><?php echo $order_title ?><span><?php echo $order_text ?></span></p>
            <ul>
                <?php foreach ($order_advantages as $item) { ?>
                    <li><?php echo $item["order_item_advantage"]; ?></li>
                <?php }; ?>
            </ul>
            <button type="button" class="main-btn" data-izimodal-open="#chosen-box">Заказать еду</button>
        </div>
    </div>
</div>

<div class="section-bg">
    <div class="examples">
        <div class="container">
            <div class="section-title">
                <h2><span><?php echo $box_section ?></span></h2>
            </div>
            <div class="section-sub-title">
                <h3><?php echo $box_sub_title ?></h3>
                <p><?php echo $box_sub_text ?></p>
            </div>

            <div class="examples-slider-container">
                <div class="examples-control slider-prev"><span></span></div>
                <div class="examples-control slider-next"><span></span></div>
                <div class="examples-slider">
                    <?php foreach ($box_slider as $item) { ?>
                        <div class="example-item">
                            <div class="example-item-container">
                                <div class="example-item-img">
                                    <img data-lazy="<?php echo $item["box_slider_img"]; ?>" alt="">
                                </div>
                                <div class="example-item-text">
                                    <h4><?php echo $item["box_slider_title"]; ?></h4>
                                    <div class="example-item-info">
                                        <ul>
                                            <?php foreach ($item["box_slider_description"] as $item_list) { ?>
                                                <li><?php echo $item_list["box_description"]; ?></li>
                                            <?php }; ?>
                                        </ul>
                                    </div>
                                    <div class="example-item-option">
                                        <div class="example-item-price">
                                            <div class="item-price-info">
                                                <p>Вес:</p>
                                                <p><?php echo $item["box_slider_weight"]; ?><span> г.</span></p>
                                            </div>
                                            <div class="item-price-info">
                                                <p>цена:</p>
                                                <p><?php echo $item["box_slider_price"]; ?><span> грн.</span></p>
                                            </div>
                                        </div>
                                        <div class="option-chosen">
                                            <button type="button" class="main-btn" data-izimodal-open="#food-box-modal">Выбрать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>
                </div>
            </div>


            <div class="section-sub-title">
                <h3><?php echo $box_extra_title ?></h3>
            </div>

            <div class="thematic-events">
                <?php foreach ($thematic_events as $item) { ?>

                    <div class="example-item">
                        <div class="example-item-container">
                            <div class="example-item-img">
                                <img class="lazy" data-src="<?php echo $item["thematic_events_img"]; ?>" alt="">
                            </div>
                            <div class="example-item-text">
                                <h4><?php echo $item["thematic_events_title"]; ?></h4>
                                <div class="example-item-info"><?php echo $item["thematic_events_text"]; ?></div>
                                <div class="example-item-btn">

                                    <div class="option-chosen">
                                        <button type="button" class="main-btn" data-izimodal-open="#get-calculate">Рассчитать
                                            мероприятие
                                        </button>
                                        <a href="javascript:void(0)"
                                           onclick="load_page('<?php echo $item["thematic_events_menu"]; ?>');"><span
                                                    class="menu-icon"></span>Посмотреть
                                            пример
                                            меню</a>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                <?php }; ?>

            </div>
        </div>
    </div>
    <div class="reviews" id="anchor-reviews">
        <div class="container">
            <div class="section-title">
                <h2><span><?php echo $reviews_section ?></span></h2>
            </div>

            <div class="section-sub-title">
                <h3><?php echo $reviews_sub_title ?></h3>
                <p><?php echo $reviews_sub_text ?></p>
            </div>

            <div class="reviews-slider-container">
                <div class="reviews-control slider-prev"><span></span></div>
                <div class="reviews-control slider-next"><span></span></div>
                <div class="reviews-slider">

                    <?php foreach ($reviews_slider as $item) { ?>
                        <div class="review-item-container">
                            <div class="review-item">
                                <div class="review-info">
                                    <div class="review-text-bg">
                                        <?php foreach ($item["reviews_info"] as $item_list) { ?>

                                            <div class="review-text">
                                                <div class="review-text-icon"><?php echo $item_list["reviews_info_svg"]; ?></div>
                                                <div class="review-text-data">
                                                    <p>
                                                        <span><?php echo $item_list["reviews_info_option"]; ?></span><?php echo $item_list["reviews_info_describe"]; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php }; ?>
                                    </div>
                                </div>
                                <div class="review-video-item">
                                    <div class="review-video">
                                        <img data-lazy="<?php echo $item["reviews_video_img"]; ?>" alt="">
                                        <div class="review-video-container"
                                             data-src="<?php echo $item["reviews_video"]; ?>">
                                            <div class="review-video-text">
                                                <button type="button" class="play-video"><span></span></button>
                                                <p><?php echo $item["reviews_video_text"]; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="events" id="anchor-event">
    <div class="container">
        <div class="section-title">
            <h2><span><?php echo $extra_events_section ?></span></h2>
        </div>
        <div class="section-sub-title">
            <h3><?php echo $extra_events_sub_title ?></h3>
            <p><?php echo $extra_events_sub_text ?></p>
        </div>
        <div class="events-slider-container">
            <div class="events-control-wrapper">
                <div class="events-control slider-prev"><span></span></div>
                <div class="events-control slider-next"><span></span></div>
            </div>

            <div class="events-slider">
                <?php foreach ($extra_events_slider as $key => $item) { ?>
                    <div class="events-item">
                        <div class="events-item-container">
                            <div class="events-column">
                                <div class="slider-count">
                                    <p><span class="current-slide"></span><span class="total-slides"></span></p>
                                </div>
                                <div class="events-item-img">
                                    <picture>
                                        <source media="(min-width: 800px)" srcset="<?php echo $item["extra_events_img"]["sizes"]["large"]; ?>, <?php echo $item["extra_events_img"]["sizes"]["large"]; ?> 2x">
                                                    <source media="(min-width: 400px)" srcset="<?php echo $item["extra_events_img"]["sizes"]["medium"]; ?>, <?php echo $item["extra_events_img"]["sizes"]["large"]; ?> 2x">
                                                    <source media="(min-width: 300px)" srcset="<?php echo $item["extra_events_img"]["sizes"]["thumbnail"]; ?>, <?php echo $item["extra_events_img"]["sizes"]["large"]; ?> 2x">
                                                    <img data-lazy="<?php echo $item["extra_events_img"]["sizes"]["large"]; ?>" srcset="<?php echo $item_list["more_events_img"]["sizes"]["large"]; ?> 2x" alt="">
                                                </picture>
                                    
                                </div>
                            </div>
                            <div class="events-column">
                                <div class="events-item-text">
                                    <?php echo $item["extra_events_text"]; ?>
                                </div>
                                <div class="events-item-prev">
                                    <?php foreach ($item["extra_events_more_img"] as $item_list) { ?>
                                        <?php if ($item_list["more_events_img"]) { ?>
                                            <a class="item-prev-img" data-fancybox="events-gallery<?php echo $key ?>" href="<?php echo $item_list["more_events_img"]["sizes"]["large"]; ?>">
                                                <picture>
                                                    <source media="(min-width: 800px)" srcset="<?php echo $item_list["more_events_img"]["sizes"]["medium"]; ?>, <?php echo $item_list["more_events_img"]["sizes"]["large"]; ?> 2x">
                                                    <source media="(min-width: 350px)" srcset="<?php echo $item_list["more_events_img"]["sizes"]["thumbnail"]; ?>, <?php echo $item_list["more_events_img"]["sizes"]["large"]; ?> 2x">
                                                    <img data-lazy="<?php echo $item_list["more_events_img"]["sizes"]["large"]; ?>" srcset="<?php echo $item_list["more_events_img"]["sizes"]["large"]; ?> 2x" alt="">
                                                </picture>


                                                
                                            </a>

                                        <?php }; ?>
                                        

                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
</div>

<div class="process" id="anchor-process">
    <span class="tomato parallax-item" data-direction="bottom"></span>
    <span class="food-plate parallax-item lazy" data-direction="top" data-src="<?php echo $food_plate ?>"></span>
    <div class="container">
        <div class="section-title">
            <h2><span><?php echo $process_section ?></span></h2>
        </div>
        <div class="section-sub-title">
            <h3><?php echo $process_sub_title ?></h3>
            <p><?php echo $process_sub_text ?></p>
        </div>
        <div class="process-steps">
            <?php   foreach( $process_advantages as $item ){  ?>
                <div class="step-item">
                    <div class="step-number"><p><?php echo $item["process_advantage_number"]; ?></p></div>
                    <div class="step-description">
                        <p><?php echo $item["process_advantage_text"]; ?></p>
                    </div>
                </div>
            <?php    }; ?>


        </div>
        <div class="section-title sub-title">
            <h2><span><?php echo $food_photos_section ?></span></h2>
        </div>
        <div class="section-sub-title">
            <h3><?php echo $food_photos_sub_title ?></h3>
            <p><?php echo $food_photos_sub_text ?></p>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <?php $output = array_slice($result->data, 0, 7); ?>
                <div class="gallery-column-left"></div>
                <div class="gallery-column-right"></div>

                <?php foreach ($output as $post): ?>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img class="lazy" data-src="<?= $post->images->standard_resolution->url ?>" alt="">
                            <div class="gallery-btn">
                                <a data-fancybox="gallery" href="<?= $post->images->standard_resolution->url ?>">Увеличить</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<div class="bottom-info">

    <div class="scroll-down">
        <div class="scroll-down-container">
            <p>наверх</p>
            <span class="scroll-icon"></span>
        </div>
    </div>

    <div class="container">
        <div class="section-title">
            <h2><span>MAMA</span></h2>
        </div>
        <div class="bottom-info-text">
            <div class="bottom-info-data">
                <div class="services-title">
                    <h3><?php echo $organize_events ?></h3>
                    <p><?php echo $people_quantity ?></p>
                </div>
                <div class="services-price">
                    <p><?php echo $calculate_event ?></p>
                    <button type="button" class="main-btn" data-izimodal-open="#get-calculate">Рассчитать стоимость</button>
                </div>
            </div>
            <div class="bottom-info-img">
                <div class="bottom-img">
                    <img class="lazy" data-src="<?php echo get_template_directory_uri(); ?>/images/cook.png" alt="">
                </div>

            </div>
        </div>
        <div class="section-title sub-title">
            <h2><span>CATERING</span></h2>
        </div>
    </div>
</div>


<!--$('#thanks').iziModal('open');-->

<?php get_footer(); // Подключаем футер ?>
<script>

    function load_page(url) {
        $.get(url, function (data) {
            $data = $(data);
            $project_modal = $('#menu-example .menu-example-container');
            $project_modal.append($data.find('.menu-example-wrapper'));
        }, "html");
        setTimeout(function () {
            $('#menu-example').iziModal('open');
        }, 500);

    }

</script>