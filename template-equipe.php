<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 *
 * Template Name: Modelo Equipe
 * Template Post Type: page
 */

get_header();
?>

<div id="primary">
<main id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <?php
                    $alt_title = get_the_title();

                    the_post_thumbnail('post-thumbnail',
                        array(
                            'class' => 'img-fluid',
                            'alt'   => $alt_title
                    ));
                ?>
            </div>
        </div>
    </div>
</section>

<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <!-- <h5 class="u-font-weight-medium text-center mb-5">
                    Utilidade Pública Estadual - Decreto 601 de 1950. <br><br>

                    Certificado de Assistência Social: 26.247 | CMDCA: 0492/95 | COMAS: 1060/2013
                </h5> -->

                <h5 class="u-font-weight-medium text-center mb-5">
                    <?php the_content() ?>
                </h5>

                <div class="row">

                    <!-- loop -->
                    <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'equipe',
                            'order'          => 'ASC'
                        );

                        $teams = new WP_Query( $args );

                        if( $teams->have_posts() ) :
                            while( $teams->have_posts() ) : $teams->the_post();
                    ?>
                                <div class="col-lg-4 my-3">

                                    <div class="card border-0">

                                        <div class="card-img">
                                            <!-- <img
                                            class="img-fluid"
                                            src="http://novolar.test/wp-content/uploads/2022/04/padre-paulo-manoel.jpeg"
                                            alt="Padre Paulo Manoel de Souza Profilo"> -->

                                            <?php
                                                $alt_title = get_the_title();

                                                the_post_thumbnail('post-thumbnail',
                                                    array(
                                                        'class' => 'img-fluid',
                                                        'alt'   => $alt_title
                                                ));
                                            ?>
                                        </div>

                                        <div class="card-body pl-0">

                                            <h4 class="u-font-weight-bold u-color-folk-theme">
                                                <!-- Padre Paulo Manoel de Souza Profilo -->
                                                <?php the_title() ?>
                                            </h4>

                                            <p class="u-font-size-14 u-font-weight-semibold">
                                                <!-- Diretor Local -->

                                                <?php
                                                    $team_function = get_the_terms(get_the_ID(), 'equipecat');
                                                    
                                                    echo $team_function[0]->name;
                                                ?>
                                            </p>

                                            
                                        </div>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        endif;
                    ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
