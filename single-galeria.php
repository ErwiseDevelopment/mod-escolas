<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<section class="mb-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <!-- <img
                class="img-fluid"
                src=""
                alt="<php the_title() ?>"> -->

                <?php
                    $alt_title = get_the_title();

                    echo get_the_post_thumbnail( 303, 'post-thumbnail', array( 'class' => 'img-fluiw w-100', 'style' => 'object-fit:cover', 'alt' => $alt_title) ); ?>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- <php 
                        if( have_rows( 'galeria' ) ) :
                            while( have_rows( 'galeria' ) ) : the_row();
                    ?>
                                <div class="col-3 my-3 js-photos" data-value="<php echo $count; ?>">
                                    <img
                                    class="img-fluid w-100"
                                    style="height:190px!important;object-fit:cover"
                                    src="<php echo get_sub_field( 'foto' ) ?>"
                                    alt="<php the_title() ?>">
                                </div>
                    <php   endwhile;
                        endif;
                    ?> -->

                    <?php $images = get_field('galeria');
                    $count= -1;

                        if ($images) :
                                foreach($images as $image) :
                                $count++;
                    ?>
                                <div class="col-3 my-3 js-photos" data-value="<?php echo $count; ?>">
                                    <img
                                    class="img-fluid w-100"
                                    style="height:190px!important;object-fit:cover"
                                    src="<?php echo $image[ 'url' ] ?>"
                                    alt="<?php the_title() ?>">
                                </div>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-5 mt-3">
                <a 
                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-3 px-5" 
                href="<?php echo get_home_url( null, 'fotos' ) ?>">
                    Voltar para a página de galeria
                </a>
            </div>
        </div>
    </div>
</section>

<!-- modal photos -->
<div class="l-modal-photos d-flex justify-content-center align-items-center js-modal-photos">
    
    <div class="l-modal-photos__overlay js-modal-photos-overlay"></div>
    <span class="l-modal-photos__close js-modal-photos-close">x</span>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-8">

                <!-- swiper -->
                <div class="swiper-container js-swiper-modal-photos">

                    <div class="swiper-wrapper">
                        
                        <!-- slide -->
                        <?php
                            if( $images ) :
                                foreach( $images as $image ) :
                        ?>
                                    <div class="swiper-slide">
                                        <img
                                        class="l-modal-photos__image img-fluid w-100"
                                        src="<?php echo $image[ 'url' ]; ?>"
                                        alt="<?php the_title() ?>">
                                    </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-modal-photos u-color-folk-white js-swiper-button-prev-modal-photos"></div>
                <div class="swiper-button-next swiper-button-next-modal-photos js-swiper-button-next-modal-photos"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</div>
<!-- end modal photos -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
