<?php
/*
Template Name: Header
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $post_id = 11;?>
    <?php $fields = get_fields($post_id); ?>

    <?php $top_logo = (isset($fields['top_logo'])) ? $fields['top_logo'] : '';?>
    <?php $menu = (isset($fields['menu'])) ? $fields['menu'] : array(); ?>
    <?php $phone_number = (isset($fields['phone_number'])) ? $fields['phone_number'] : ''; ?>


    <meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title><?php echo wp_get_document_title(); ?></title>

    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/iziModal.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" type="text/css"/>


    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
<meta name="theme-color" content="#ffffff">
    
    <!-- open graph -->
    <meta property="og:site_name" content="Mama Catering">
     <meta property="og:url" content="http://mama-catering.com.ua" />
     <meta property="og:type" content="website" />
     <meta property="og:title" content="Mama Catering" />
     <meta property="og:description" content="" />
     <meta property="og:image" content="http://template.site/img/logo_max.png" />
     <meta property="og:locale" content="ru_RU">
     <!-- open graph -->
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6CDLDN');</script>
<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6CDLDN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php  
    $utm = $_GET['utm_term'];   
     if($utm == 'facebook') {    $multiTitle = 'всем пользователям Facebook';   }  
     elseif($utm == 'vkontakte') {    $multiTitle = ' всем пользователям Вконтакте ';  }  
     elseif($utm == 'ok') {    $multiTitle = ' всем пользователям Одноклассников ';  }  
     else{    $multiTitle = 'на твердотопливные котлы';  } 
     ?> 
     

<header>
    <div class="main-menu-container">
        <div class="container">
            <div class="menu-section">
                <div class="logo-icon">
                    <div class="menu-btn">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <a href="/"><img src="<?php echo $top_logo ?>" alt=""></a>
                    <div class="phone-info-mobile">
                    </div>
                </div>
                <nav class="main-menu">
                    <ol>
                        <?php   foreach( $menu as $item ){  ?>
                            <li><a href="#<?php echo $item["menu_link"]; ?>"><?php echo $item["menu_text"]; ?></a></li>
                        <?php    }; ?>
                    </ol>
                    <div class="social-links">
                        <a href="<?php echo get_field( "yt_link", 5 ) ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve"> <path d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938 C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527 C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991 c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764 c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861 C204.394,157.263,202.325,160.684,199.021,162.41z"/></svg></span></a>
                        <a href="<?php echo get_field( "instagram_link", 5 ) ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"viewBox="0 0 17.5 17.5" style="enable-background:new 0 0 17.5 17.5;" xml:space="preserve"><path d="M17.5,4.8v7.8c0,2.7-2.2,4.8-4.8,4.8H4.8c-2.7,0-4.8-2.1-4.8-4.8V4.8C0,2.2,2.2,0,4.8,0h7.8 C15.3,0,17.5,2.2,17.5,4.8z M16,12.6V4.8c0-1.8-1.5-3.3-3.3-3.3H4.8C3,1.6,1.6,3,1.6,4.8v7.8c0,1.8,1.5,3.3,3.3,3.3h7.8 C14.5,15.9,16,14.4,16,12.6z M13.3,8.7c0,2.5-2,4.5-4.5,4.5c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5S13.3,6.2,13.3,8.7 C13.3,8.7,13.3,8.7,13.3,8.7z M11.7,8.7c-0.1-1.6-1.5-2.9-3.1-2.8C7.1,6,5.9,7.2,5.8,8.7c0,1.6,1.3,3,3,3 C10.4,11.7,11.7,10.4,11.7,8.7L11.7,8.7L11.7,8.7z M14.3,3.3c0.4,0.4,0.4,1.2,0,1.6c-0.2,0.2-0.5,0.3-0.8,0.3 c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0,0,0,0,0,0C13.8,2.9,14.1,3,14.3,3.3L14.3,3.3z"/></svg></span></a>
                        <a href="<?php echo get_field( "facebook_link", 5 ) ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 6.7 14" style="enable-background:new 0 0 6.7 14;" xml:space="preserve"><path d="M5.2,2.5c-0.3,0-0.7,0.3-0.7,0.6v1.6h2.2v1.5L6.6,7h-2v7h-3V7H0V4.7h1.5V2.7C1.5,2.4,1.4,0,4.6,0h2.1v2.4 L5.2,2.5L5.2,2.5z"/></svg></span></a>
                    </div>
                </nav>
                <div class="phone-info">

                    <div class="phone-info-wrapper">
                        <div class="phone-icon"></div>
                        <div class="phone-number">
                            <a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>
                            <p>viber/whatsapp/telegram</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</header>