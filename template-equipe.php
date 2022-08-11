<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Single Temas
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

                <?php 
                    $posts_priority = array();

                    $categories_priority = [
                        'Diretoria',
                        'Coordenador'
                    ];

                    $args = array(
                        'posts_per_page' => -1,
                        'post_type'      => 'equipe',
                        'order'          => 'DESC',
                    );

                    $teams = new WP_Query( $args );

                    foreach( $categories_priority as $category_priority ) :
                ?>
                        <div class="row justify-content-center">

                            <!-- loop -->
                            <?php
                                if( $teams->have_posts() ) :
                                    while( $teams->have_posts() ) : $teams->the_post();

                                        $terms = get_the_terms( get_the_ID(), 'equipecat' );

                                        foreach( $terms as $term ) :
                                            if( preg_match("/{$category_priority}/i", $term->name)) :
                                                array_push( $posts_priority, get_the_ID() );
                            ?>
                                                <div class="col-lg-4 my-3">

                                                    <div class="card border-0">

                                                        <div class="card-img">

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
                                                                <?php echo $term->name; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> 
                            <?php                                    
                                            endif;
                                        endforeach;
                                    endwhile;
                                endif;
                            ?>
                            <!-- end loop -->
                        </div>
                <?php endforeach; ?>

                <div class="row justify-content-center">

                    <!-- loop -->
                    <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'equipe',
                            'order'          => 'DESC',
                            'post__not_in'   => $posts_priority
                        );

                        $teams = new WP_Query( $args );

                        if( $teams->have_posts() ) :
                            while( $teams->have_posts() ) : $teams->the_post();
                    ?>
                                <div class="col-lg-4 my-3">

                                    <div class="card border-0">

                                        <div class="card-img">

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
                                                    $terms = get_the_terms( get_the_ID(), 'equipecat' );
                                                    echo $terms[0]->name;
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
