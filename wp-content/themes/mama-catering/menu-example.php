<?php
/*
Template Name: Menu Example
*/
?>


<?php $post_id = get_queried_object_id(); ?>
<?php $fields = get_fields($post_id); ?>


<?php $example_menu = (isset($fields['example_menu'])) ? $fields['example_menu'] : ''; ?>
<?php $example_dishes = (isset($fields['example_dishes'])) ? $fields['example_dishes'] : array(); ?>
<?php $example_menu_extra = (isset($fields['example_menu_extra'])) ? $fields['example_menu_extra'] : ''; ?>
<?php $extra_example_dishes = (isset($fields['extra_example_dishes'])) ? $fields['extra_example_dishes'] : array(); ?>


<div class="modal" id="menu-example">
    <div class="modal-container big">
        <span class="close-modal" data-izimodal-close="#menu-example"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 13 13" style="enable-background:new 0 0 13 13;" xml:space="preserve"><path d="M10.7,0.1l2.1,2.1L8.6,6.5l4.2,4.2l-2.1,2.1L6.5,8.6l-4.2,4.2l-2.1-2.1l4.2-4.2L0.1,2.3l2.1-2.1l4.2,4.2 L10.7,0.1z"/></svg></span>
        <div class="menu-example-wrapper">

            <div class="modal-title">
                <h3><?php echo $example_menu; ?></h3>
            </div>
            <div class="menu-example">


                <?php foreach ($example_dishes as $item) { ?>
                    <div class="menu-example-item">
                        <div class="menu-example-img">
                            <img src="<?php echo $item["dish_img"]; ?>" alt="">
                        </div>
                        <div class="menu-example-text">
                            <p><?php echo $item["dish_name"]; ?></p>
                        </div>
                    </div>
                <?php }; ?>

            </div>

            <?php if ($extra_example_dishes) { ?>
                <div class="modal-title">
                    <h4><?php echo $example_menu_extra; ?></h4>
                </div>
                <div class="menu-extra">
                    <ul>
                        <?php foreach ($extra_example_dishes as $item) { ?>
                            <li><?php echo $item["extra_dish_name"]; ?></li>
                        <?php }; ?>
                    </ul>
                </div>
            <?php } ?>
            <div class="exact-amount">
                <h4>Вы уже знаете, сколько человек будет
                    на вашем мероприятии?</h4>
                <p>Давайте сформируем ваше индивидуальное меню</p>
            </div>
        </div>

    </div>
    <div class="form-menu">
        <form class="get-calculate" data-form-name="Сформировать меню">
            <label class="telephone">
                <input type="tel" placeholder="Ваш телефон" name="tel">
                <span class="tel-icon"></span>
            </label>
            <button class="main-btn">Сформировать меню</button>
        </form>
    </div>
</div>