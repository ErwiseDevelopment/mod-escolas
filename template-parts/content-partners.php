<section class="l-links my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-4">

                <div class="row justify-content-end">

                    <div class="col-lg-5 mb-3 mb-md-0">
                        <h3 class="u-title--highlight u-line-height-100 u-font-weight-bold text-uppercase all:u-color-folk-primary mb-0">
                            Nossos <br> 
                            <span class="u-font-weight-black">Parceiros:</span>
                        </h3>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-md-end align-items-end">

                        <div class="row justify-content-end">

                            <div class="col-md-12">

                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-2 px-5" 
                                href="<?php echo get_field ('seja_um_parceiro','option')?>">
                                    Seja um parceiro
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center mt-4">

                <!-- swiper -->
                <div class="swiper-container js-swiper-partners">

                    <div class="swiper-wrapper">

                        <?php 
                            if(have_rows( 'parceiros', 'option' )) : 
                                while(have_rows( 'parceiros', 'option' )) : the_row();
                        ?>
                                    <div class="swiper-slide">
                                        <a 
                                        href="<?php echo get_sub_field( 'link_logo_parceiros' ) ?>"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_sub_field( 'logo_parceiros' ) ?>"
                                            alt="<?php the_title() ?>">
                                        </a>
                                    </div>
                        <?php endwhile;
                            endif;
                        ?>
                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev-partners after::u-color-folk-white u-bg-folk-primary js-swiper-button-prev-partners"></div>
                <div class="swiper-button-next swiper-button-next-partners after::u-color-folk-white u-bg-folk-primary js-swiper-button-next-partners"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>