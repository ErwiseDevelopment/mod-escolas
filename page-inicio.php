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

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'banner' ) ?>
<!-- end banner -->

<!-- teaching -->
<?php echo get_template_part( 'template-parts/content', 'teaching' ) ?>
<!-- end teaching -->

<section class="innovation mt-5">

    <div class="container">

        <div class="row">   

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img
                        class="img-fluid"
                        src="<?php echo get_field( 'imagem_inovacao_evolucao' ) ?>"
                        alt="Inovação, evolutação e realização">
                    </div>

                    <div class="col-lg-6 d-none d-lg-block mt-4 mt-lg-0">
                    
                        <?php
                            $count = count( get_field( 'icones_inovacao_evolucao' ) );
                            $chunk = array_chunk( get_field( 'icones_inovacao_evolucao' ), ceil($count / 3) );
                        ?>

                        <div class="row">

                            <!-- loop -->
                            <?php foreach( $chunk[0] as $item ) : ?>
                                <div class="col-lg-3 m-2 px-0">

                                    <div class="l-innovation__card card border-0 u-bg-folk-primary hover:u-bg-folk-theme">

                                        <div class="card-img pt-4 px-4">
                                            <img
                                            class="img-fluid px-3"
                                            src="<?php echo $item[ 'icone' ] ?>"
                                            alt="Criatividade e imaginação">
                                        </div>

                                        <div class="card-body pt-2">

                                            <!-- <h3 class="u-font-size-14 u-font-weight-semibold text-center all:u-color-folk-white mb-0">
                                                Criatividade e <br>
                                                <span class="u-font-weight-black">Imaginação</span>
                                            </h3> -->

                                            <h3 class="u-font-size-12 u-font-weight-semibold text-center all:u-color-folk-white mb-0">
                                                <?php echo $item[ 'titulo' ]; ?> <br>
                                                <span class="u-font-weight-black text-uppercase"><?php echo $item[ 'titulo_com_negrito' ]; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- end loop -->
                        </div>

                        <div class="row justify-content-end">

                            <!-- loop -->
                            <?php foreach( $chunk[1] as $item ) : ?>
                                <div class="col-lg-3 m-2 px-0">

                                    <div class="l-innovation__card card border-0 u-bg-folk-primary hover:u-bg-folk-theme">

                                        <div class="card-img pt-4 px-4">
                                            <img
                                            class="img-fluid px-3"
                                            src="<?php echo $item[ 'icone' ] ?>"
                                            alt="Criatividade e imaginação">
                                        </div>

                                        <div class="card-body pt-2">

                                            <h3 class="u-font-size-12 u-font-weight-semibold text-center all:u-color-folk-white mb-0">
                                                <?php echo $item[ 'titulo' ]; ?> <br>
                                                <span class="u-font-weight-black text-uppercase"><?php echo $item[ 'titulo_com_negrito' ]; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- end loop -->
                        </div>

                        <div class="row">

                            <!-- loop -->
                            <?php foreach( $chunk[2] as $item ) : ?>
                                <div class="col-lg-3 m-2 px-0">

                                    <div class="l-innovation__card card border-0 u-bg-folk-primary hover:u-bg-folk-theme">

                                        <div class="card-img pt-4 px-4">
                                            <img
                                            class="img-fluid px-3 px-3"
                                            src="<?php echo $item[ 'icone' ] ?>"
                                            alt="Criatividade e imaginação">
                                        </div>

                                        <div class="card-body pt-2">

                                            <h3 class="u-font-size-12 u-font-weight-semibold text-center all:u-color-folk-white mb-0">
                                                <?php echo $item[ 'titulo' ]; ?> <br>
                                                <span class="u-font-weight-black text-uppercase"><?php echo $item[ 'titulo_com_negrito' ]; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- end loop -->

                            <div class="col-lg-3 m-2 px-0">

                                <a 
                                class="l-innovation__card card border-0 text-decoration-none u-bg-folk-primary hover:u-bg-folk-secondary"
                                href="<?php echo get_field( 'link_muito_mais_inovacao_evolucao' ) ?>">

                                    <div class="card-img pt-4 px-4">
                                        <img
                                        class="img-fluid px-3"
                                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-plus.png"
                                        alt="Ícone de mais conteúdos">
                                    </div>

                                    <div class="card-body pt-2">

                                        <h3 class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold text-center all:u-color-folk-white mb-0">
                                            e muito <br>
                                            <span class="u-font-weight-black text-uppercase">mais!</span>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- here -->
<?php echo get_template_part( 'template-parts/content', 'news' ) ?>
<!-- end here -->

<!-- calendar -->
<?php echo get_template_part( 'template-parts/content', 'calendar' ) ?>
<!-- end calendar -->

<!-- blogs -->
<?php echo get_template_part( 'template-parts/content', 'blogs' ) ?>
<!-- end blogs -->

<!-- purpose -->
<?php echo get_template_part( 'template-parts/content', 'purpose' ) ?>
<!-- end purpose -->

<!-- school -->
<?php echo get_template_part( 'template-parts/content', 'school' ) ?>
<!-- end school -->

<section>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <a href="<?php echo get_field( 'link_banner_final' ) ?>">
                    <img
                    class="img-fluid"
                    src="<?php echo get_field( 'banner_final_imagem' ) ?>"
                    alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- partners -->
<?php echo get_template_part( 'template-parts/content', 'partners' ) ?>
<!-- end partners -->

<!-- form contact -->
<?php echo get_template_part( 'template-parts/content', 'form-contact' ) ?>
<!-- end form contact -->

<img
class="img-fluid d-none"
data-src="<php echo get_template_directory_uri()>/../wp-bootstrap-starter-child/assets/images/image.png"
alt="">

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
