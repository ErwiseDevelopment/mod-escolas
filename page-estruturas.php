<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">
                <?php
                    $alt_title = get_the_title();

                    the_post_thumbnail( 'post-thumbnail',
                        array(
                            'class' => 'img-fluid',
                            'alt'   => $alt_title
                    ));
                ?>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- content -->
<section class="l-structures pt-5">

    <div class="container">

        <div class="row">

            <!-- loop -->
            <?php 
                $count = 0;
                
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'      => 'nossa-escola',
                    'order'          => 'DESC'
                );

                $structures = new WP_Query( $args );

                if( $structures->have_posts() ) :
                    while( $structures->have_posts() ) : $structures->the_post();
                        $count++;   
            ?>
                        <div class="col-12 l-structures__col-child my-5">

                            <div class="row">

                                <div class="col-lg-6 l-structures__item-child d-flex justify-content-center align-items-center mb-3 mb-lg-0 px-lg-5">
                                    <div>
                                        <h4 class="u-font-weight-extrabold text-uppercase u-color-folk-secondary mb-4">
                                            <!-- Laboratórios: -->
                                            <?php the_title() ?>
                                        </h4>

                                        <span class="d-block u-font-size-14 u-font-weight-medium text-justify">
                                            <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta laudantium explicabo fugiat expedita aperiam, aliquid quod facilis. Consequatur sunt laborum, eveniet ea molestiae similique veniam aperiam modi ut. Perspiciatis, iste. <br>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta laudantium explicabo fugiat expedita aperiam, aliquid quod facilis. Consequatur sunt laborum, eveniet ea molestiae similique veniam aperiam modi ut. Perspiciatis, iste. <br>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta laudantium explicabo fugiat expedita aperiam, aliquid quod facilis. Consequatur sunt laborum, eveniet ea molestiae similique veniam aperiam modi ut. Perspiciatis, iste. -->
                                            <?php 
                                                echo (limit_words( get_the_content(), 100));
                                            ?>

                                            <!-- <php if( get_field( 'conheca_nossa_estrutura_nossa_escola' ) ) : ?>
                                                <a 
                                                class="d-block u-font-weight-semibold u-color-folk-secondary mt-4"
                                                href="<php echo get_field( 'conheca_nossa_estrutura_nossa_escola' ) ?>">
                                                    Conheça nossa estrutura
                                                </a>
                                            <php endif; ?> -->
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6 l-structures__item-child">

                                    <!-- swiper -->
                                    <div class="swiper-container js-swipers js-swiper-structures-<?php echo $count; ?>">

                                        <div class="swiper-wrapper">

                                            <!-- slide -->
                                            <?php
                                                $images = array();
                                                if( have_rows( 'galeria_nossa_escola' ) ) :
                                                    while( have_rows( 'galeria_nossa_escola' ) ) : the_row();
                                                        array_push( $images, get_sub_field( 'imagem' ) );
                                            ?>
                                                        <div class="swiper-slide">
                                                            <img
                                                            class="img-fluid"
                                                            src="<?php echo get_sub_field( 'imagem') ?>"
                                                            alt="<?php the_title() ?>">
                                                        </div> 
                                            <?php
                                                    endwhile;
                                                endif;
                                            ?>
                                            <!-- end slide -->
                                        </div>
                                    </div>

                                    <!-- navigations -->
                                    <?php if( $images ) : ?>
                                        <div class="swiper-button-prev swiper-button-prev-partners swiper-button-prev-structures d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-prev-structures-<?php echo $count; ?>"></div>
                                        <div class="swiper-button-next swiper-button-next-partners swiper-button-next-structures d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-next-structures-<?php echo $count; ?>"></div>
                                    <?php endif; ?>
                                    <!-- end swiper -->
                                </div>
                            </div>
                        </div>
            <?php 
                    endwhile;
                endif;
                
                wp_reset_query();
            ?>
            <!-- end loop -->
        </div>
    </div>
</section>
<!-- end content -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
