  <header id="header" class="header">
    <div class="header__container">
      <?php
      /**
       * Site Brand
       * is_frontpage() で、h1かdivか分岐
       */
      get_template_part('template-parts/siteBrand');
      ?><!-- #siteBrand-->
      <div class="header__inner">
        <?php
        /**
         * G Nav
         * 
         */
        get_template_part('template-parts/gNav');
        ?><!-- #gNav -->
        <a class="header__btn --telTo" href="tel:0778-53-1231"><img src="<?php echo QWEL_THEME_URI . '/assets/btn_tel.svg'; ?>"></a>
        <a class="header__btn --mailTo" href="mailTo:minami@p-meister.co.jp"><img src="<?php echo QWEL_THEME_URI . '/assets/btn_mail.svg'; ?>"></a>
        <ul class="gNav__socialMenu">
          <li><a href="https://www.instagram.com/product_meister/" target="_blank"><span data-icon="ei-sc-instagram" data-size="l"></span></a></li>
        </ul>
      </div>
    </div>
    <?php if (!is_front_page()) { ?>
      <div class="header__cover"></div>
    <?php } ?>
  </header><!-- #header -->
