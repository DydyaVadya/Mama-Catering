<?php
/*
Template Name: Footer
*/
?>
<?php $post_id = 16;?>
<?php $fields = get_fields($post_id); ?>

<?php $bottom_logo = (isset($fields['bottom_logo'])) ? $fields['bottom_logo'] : ''; ?>
<?php $tagline = (isset($fields['tagline'])) ? $fields['tagline'] : ''; ?>
<?php $copyright = (isset($fields['copyright'])) ? $fields['copyright'] : ''; ?>
<?php $privacy_policy = (isset($fields['privacy_policy'])) ? $fields['privacy_policy'] : ''; ?>
<?php $personal_data = (isset($fields['personal_data'])) ? $fields['personal_data'] : ''; ?>

<?php $contact_us = (isset($fields['contact_us'])) ? $fields['contact_us'] : ''; ?>
<?php $visit_us = (isset($fields['visit_us'])) ? $fields['visit_us'] : ''; ?>
<?php $visit_us_address = (isset($fields['visit_us_address'])) ? $fields['visit_us_address'] : ''; ?>
<?php $follow_us = (isset($fields['follow_us'])) ? $fields['follow_us'] : ''; ?>


<?php $post_id = 102;?>
<?php $fields = get_fields($post_id); ?>

<?php $order_modal_title = (isset($fields['order_modal_title'])) ? $fields['order_modal_title'] : ''; ?>
<?php $order_modal_text = (isset($fields['order_modal_text'])) ? $fields['order_modal_text'] : ''; ?>
<?php $box_choose = (isset($fields['box_choose'])) ? $fields['box_choose'] : array(); ?>
<?php $for_order = (isset($fields['for_order'])) ? $fields['for_order'] : ''; ?>


<?php $post_id = 105;?>
<?php $fields = get_fields($post_id); ?>

<?php $thanks_title = (isset($fields['thanks_title'])) ? $fields['thanks_title'] : ''; ?>
<?php $thanks_info = (isset($fields['thanks_info'])) ? $fields['thanks_info'] : ''; ?>
<?php $thanks_logo = (isset($fields['thanks_logo'])) ? $fields['thanks_logo'] : ''; ?>



<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <div class="footer-logo-img">
                <a href="/"><img class="lazy" data-src="<?php echo $bottom_logo ?>" alt=""></a>
            </div>
            <div class="footer-logo-text">
                <p><?php echo $tagline ?></p>
            </div>
        </div>
        <div class="footer-data">
            <div class="footer-data-container">
                <h3><?php echo $contact_us ?></h3>
                <div class="footer-tel">
                    <a href="tel:<?php echo get_field( "phone_number", 11 ) ?>"><?php echo get_field( "phone_number", 11 ) ?></a>
                    <p>viber / whatsapp / telegram</p>
                </div>
            </div>
        </div>
        <div class="footer-data">
            <div class="footer-data-container">
                <h3><?php echo $visit_us ?></h3>
                <div class="footer-address">
                    <p><?php echo $visit_us_address ?></p>
                </div>
            </div>
        </div>
        <div class="footer-data social">
            <div class="footer-data-container">
                <h3><?php echo $follow_us ?></h3>
                <div class="footer-social-links">
                    <a href="<?php echo get_field( "yt_link", 5 ) ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve"> <path d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938 C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527 C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991 c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764 c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861 C204.394,157.263,202.325,160.684,199.021,162.41z"/></svg></span></a>
                    <a href="<?php echo get_field( "instagram_link", 5 ) ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"viewBox="0 0 17.5 17.5" style="enable-background:new 0 0 17.5 17.5;" xml:space="preserve"><path d="M17.5,4.8v7.8c0,2.7-2.2,4.8-4.8,4.8H4.8c-2.7,0-4.8-2.1-4.8-4.8V4.8C0,2.2,2.2,0,4.8,0h7.8 C15.3,0,17.5,2.2,17.5,4.8z M16,12.6V4.8c0-1.8-1.5-3.3-3.3-3.3H4.8C3,1.6,1.6,3,1.6,4.8v7.8c0,1.8,1.5,3.3,3.3,3.3h7.8 C14.5,15.9,16,14.4,16,12.6z M13.3,8.7c0,2.5-2,4.5-4.5,4.5c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5S13.3,6.2,13.3,8.7 C13.3,8.7,13.3,8.7,13.3,8.7z M11.7,8.7c-0.1-1.6-1.5-2.9-3.1-2.8C7.1,6,5.9,7.2,5.8,8.7c0,1.6,1.3,3,3,3 C10.4,11.7,11.7,10.4,11.7,8.7L11.7,8.7L11.7,8.7z M14.3,3.3c0.4,0.4,0.4,1.2,0,1.6c-0.2,0.2-0.5,0.3-0.8,0.3 c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0,0,0,0,0,0C13.8,2.9,14.1,3,14.3,3.3L14.3,3.3z"/></svg></span></a>
                    <a href="<?php echo get_field( "facebook_link", 5 ) ?>" target="_blank"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 6.7 14" style="enable-background:new 0 0 6.7 14;" xml:space="preserve"><path d="M5.2,2.5c-0.3,0-0.7,0.3-0.7,0.6v1.6h2.2v1.5L6.6,7h-2v7h-3V7H0V4.7h1.5V2.7C1.5,2.4,1.4,0,4.6,0h2.1v2.4 L5.2,2.5L5.2,2.5z"/></svg></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-info">
        <div class="footer-copyright">
            <p><?php echo $copyright ?></p>
            <a href="javascript:void(0)" data-izimodal-open="#privacy-policy">Политика конфиденциальности</a>
        </div>
        <div class="made-by">
            <p>Сделано в <a href="https://www.redlab.bz/" target="_blank"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 443.96 114.11" fill="#ed1c24"><path d="M404.6,27.8a42.93,42.93,0,0,0-28.24,10.6V0H361.45V71A43.16,43.16,0,1,0,404.6,27.8Zm0,71.39A28.24,28.24,0,1,1,432.84,71,28.27,28.27,0,0,1,404.6,99.19Z" transform="translate(-3.8)"></path><path d="M212.68,38.39A43.1,43.1,0,1,0,227.6,71V0H212.68Zm-28.24,60.8A28.24,28.24,0,1,1,212.68,71,28.27,28.27,0,0,1,184.44,99.19Z" transform="translate(-3.8)"></path><rect x="236.93" width="14.92" height="113.1"></rect><path d="M308.54,27.8a43.16,43.16,0,1,0,28.24,75.71v9.59H351.7V71A43.2,43.2,0,0,0,308.54,27.8Zm0,71.39A28.24,28.24,0,1,1,336.78,71,28.27,28.27,0,0,1,308.54,99.19Z" transform="translate(-3.8)"></path><path d="M18.71,29.65H3.8V113.1H18.71V68.42c0-15.57,12.67-25.7,28.24-25.7V27.8a42.93,42.93,0,0,0-28.24,10.6Z" transform="translate(-3.8)"></path><path d="M93.15,27.8a43.16,43.16,0,1,0,30.51,73.67L113.11,90.92A28.24,28.24,0,0,1,65.91,78.41H136.3V71A43.2,43.2,0,0,0,93.15,27.8ZM65.91,63.49a28.24,28.24,0,0,1,54.48,0Z" transform="translate(-3.8)"></path></svg></a></p>
        </div>
    </div>

</footer>


<div class="modal" id="food-box-modal">
    <div class="modal-container">
        <span class="close-modal" data-izimodal-close="#get-calculate"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>

        <div class="modal-title">
            <h3>Рассчитать мероприятие</h3>
            <p>Укажите номер телефона, мы перезвоним
                вам для уточнения деталей</p>
        </div>
        <form class="get-calculate" data-form-name="Рассчитать мероприятие">
            <label class="telephone">
                <input type="tel" placeholder="Ваш телефон" name="tel" autocomplete="on" maxlength="20">
                <span class="tel-icon"></span>
            </label>
            <button type="button" class="main-btn" onclick="orbox($(this).closest('form'));">Рассчитать мероприятие</button>
            <label class="confirm-data">
                <input type="checkbox" id="confirm-data" name="processing" checked="">
                <span>Я согласен на <i>обработку персональных данных</i></span>
            </label>
        </form>
    </div>
</div>

<div class="modal" id="get-calculate">
    <div class="modal-container">
        <span class="close-modal" data-izimodal-close="#get-calculate"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>

        <div class="modal-title">
            <h3>Рассчитать мероприятие</h3>
            <p>Укажите номер телефона, мы перезвоним
                вам для уточнения деталей</p>
        </div>
        <form class="get-calculate" data-form-name="Рассчитать мероприятие">
            <label class="telephone">
                <input type="tel" placeholder="Ваш телефон" name="tel" autocomplete="on" maxlength="20">
                <span class="tel-icon"></span>
            </label>
            <button type="button" class="main-btn" onclick="callme($(this).closest('form'));">Рассчитать мероприятие</button>
            <label class="confirm-data">
                <input type="checkbox" id="confirm-data" name="processing" checked="">
                <span>Я согласен на <i>обработку персональных данных</i></span>
            </label>
        </form>
    </div>
</div>

<div class="modal pink" id="thanks">
    <div class="modal-container">
        <span class="close-modal" data-izimodal-close="#thanks"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>

        <div class="modal-title">
            <h3><?php echo $thanks_title ?></h3>
            <p><?php echo $thanks_info ?></p>
        </div>
        <div class="modal-logo">
            <a href="/"><img src="<?php echo $thanks_logo ?>" alt=""></a>
            <p><?php echo $tagline ?></p>
        </div>

    </div>
</div>

<div class="modal" id="menu-example">
    <div class="modal-container big">
        <span class="close-modal" data-izimodal-close="#menu-example"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>
        <div class="menu-example-container">




        </div>
    </div>
    <div class="form-menu">
        <form class="get-calculate" data-form-name="Сформировать меню">
            <label class="telephone">
                <input type="tel" placeholder="Ваш телефон" name="tel" autocomplete="on" maxlength="20">
                <span class="tel-icon"></span>
            </label>
            <button type="button" class="main-btn" onclick="getmenu($(this).closest('form'));">Сформировать меню</button>
        </form>
    </div>
</div>

<div class="modal choose-box" id="chosen-box">
    <form class="choose-box-form" data-form-name="<?php echo $order_modal_title ?>">
        <div class="modal-container big">
            <span class="close-modal" data-izimodal-close="#chosen-box"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>
            <div class="modal-title">
                <h3><?php echo $order_modal_title ?></h3>
                <p><?php echo $order_modal_text ?></p>
            </div>
            <div class="choose-box-container">

                <?php   foreach( $box_choose as $item ){  ?>
                    <div class="choose-box-item">
                        <div class="choose-box-img">
                            <img src="<?php echo $item["box_choose_img"]; ?>" alt="">
                        </div>
                        <div class="choose-box-data">
                            <div class="choose-box-title">
                                <h4><?php echo $item["box_choose_title"]; ?></h4>
                                <p><?php echo $item["box_choose_description"]; ?></p>
                            </div>
                            <div class="menu-extra">
                                <ul>
                                    <?php foreach ($item["box_choose_content"] as $item_list) { ?>
                                        <li><?php echo $item_list["box_content_item"]; ?></li>
                                    <?php }; ?>
                                </ul>
                            </div>
                            <div class="box-price-data">
                                <div class="box-price-info">
                                    <p>цена:</p>
                                    <p><?php echo $item["box_choose_price"]; ?><span> грн.</span></p>
                                </div> 
                                <div class="box-info-wrapper">
                                	<label class="confirm-box"> 
                                    <input type="checkbox" name="chosen[]" value="<?php echo $item["box_choose_title"]; ?>">
                                    <span>Выбрать</span>
                                </label> 
                                </div>

                                <label class="quantity-box">
                                <!--<div class="input-buffer"></div> -->
                                <div class="quanitybox-wrap">
                                    <input type="text" name="quantity[]" value="1" maxlength="3" onkeyup="this.value=this.value.replace(/[^\d]/,'');if(this.value<1){this.value=this.value.replace('0','1')}">
                                     <ul class="button-group button-click">
                                        <li>
                                            <a href="javascript:void(0)" data-act="-">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve">
    <g>
        <path d="M465.167,211.613H240.21H26.69c-8.424,0-26.69,11.439-26.69,34.316s18.267,34.316,26.69,34.316h213.52h224.959    c8.421,0,26.689-11.439,26.689-34.316S473.59,211.613,465.167,211.613z"></path> 
    </g>
</svg>
                                        </a>
                                        </li> 
                                        <li>
                                            <a href="javascript:void(0)" data-act="+">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 491.86 491.86" style="enable-background:new 0 0 491.86 491.86;" xml:space="preserve">
    <g>
        <path d="M465.167,211.614H280.245V26.691c0-8.424-11.439-26.69-34.316-26.69s-34.316,18.267-34.316,26.69v184.924H26.69    C18.267,211.614,0,223.053,0,245.929s18.267,34.316,26.69,34.316h184.924v184.924c0,8.422,11.438,26.69,34.316,26.69    s34.316-18.268,34.316-26.69V280.245H465.17c8.422,0,26.69-11.438,26.69-34.316S473.59,211.614,465.167,211.614z"></path>
    </g>
</svg> 
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                                    
                                    <span>Количество</span>
                                </label> 
                                
                               
                            </div>
                        </div>
                    </div>
                <?php    }; ?>
            </div>
        </div>
        <div class="form-menu order-box">
            <div class="order-box-text">
                <p><?php echo $for_order ?></p>
            </div>
            <div class="get-calculate">
                <label class="telephone">
                    <input type="tel" placeholder="Ваш телефон" name="tel" autocomplete="on" maxlength="20">
                    <span class="tel-icon"></span>
                </label>
                <button type="button" class="main-btn" onclick="getbox($(this).closest('form'));">Заказать коробки</button>
            </div>
        </div>
    </form>
</div>







<div class="modal" id="privacy-policy">
    <div class="modal-container big">
        <span class="close-modal" data-izimodal-close="#privacy-policy"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>


        <div class="modal-title">
            <h3>Политика конфиденциальности</h3>
        </div>
        <div class="policy-text"><?php echo $privacy_policy ?></div>

    </div>
</div>


<div class="modal" id="personal-data">
    <div class="modal-container big">
        <span class="close-modal" data-izimodal-close="#personal-data"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>


        <div class="modal-title">
            <h3>Обработка персональных данных</h3>
        </div>
        <div class="policy-text"><?php echo $personal_data ?></div>

    </div>
</div>



<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.lazy.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/iziModal.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic-parallax.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mail_script.js" defer></script>
</body>
</html>