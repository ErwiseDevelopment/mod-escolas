<section class="l-teaching">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-center">

                    <!-- loop -->
                    <?php
                        $args = array(
                            'posts_per_page' => 5,
                            'post_type'      => 'teaching-mode',
                            'order'          => 'ASC'
                        );

                        $modes = new WP_Query( $args );

                        if( $modes->have_posts() ) :
                            while( $modes->have_posts() ) : $modes->the_post();
                    ?>
                                <div 
                                class="l-teaching__item col-6 col-lg-2 d-flex flex-column justify-content-center align-items-center py-4 js-items-teaching"
                                data-value="<?php the_title() ?>">

                                    <!-- <p class="l-teaching__item__title u-line-height-100 u-font-weight-semibold text-center text-uppercase all:u-color-folk-white mb-0">
                                        Educação <br>
                                        <span class="u-font-weight-black">infantil</span>
                                    </p> -->

                                    <p class="l-teaching__item__title u-line-height-100 u-font-weight-semibold text-center text-uppercase all:u-color-folk-white mb-0">
                                        <?php the_title() ?>
                                    </p>

                                    <span class="l-teaching__item__year u-font-weight-semibold text-center u-color-folk-white">
                                        <!-- 3 a 5 anos -->
                                        <?php echo get_field( 'idade_modo_ensino' ) ?>
                                    </span>
                                </div>
                    <?php
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                    <!-- end loop -->

                    <!-- <div class="l-teaching__item col-2 d-flex flex-column justify-content-center align-items-center py-4">

                        <p class="l-teaching__item__title u-line-height-100 u-font-weight-semibold text-center text-uppercase all:u-color-folk-white mb-0">
                            Educação <br>
                            <span class="u-font-weight-black">infantil</span>
                        </p>

                        <span class="l-teaching__item__year u-font-weight-semibold text-center u-color-folk-white">
                            3 a 5 anos
                        </span>
                    </div>

                    <div class="l-teaching__item col-2 d-flex flex-column justify-content-center align-items-center py-4">

                        <p class="l-teaching__item__title u-line-height-100 u-font-weight-semibold text-center text-uppercase all:u-color-folk-white mb-0">
                            Educação <br>
                            <span class="u-font-weight-black">infantil</span>
                        </p>

                        <span class="l-teaching__item__year u-font-weight-semibold text-center u-color-folk-white">
                            3 a 5 anos
                        </span>
                    </div>

                    <div class="l-teaching__item col-2 d-flex flex-column justify-content-center align-items-center py-4">

                        <p class="l-teaching__item__title u-line-height-100 u-font-weight-semibold text-center text-uppercase all:u-color-folk-white mb-0">
                            Educação <br>
                            <span class="u-font-weight-black">infantil</span>
                        </p>

                        <span class="l-teaching__item__year u-font-weight-semibold text-center u-color-folk-white">
                            3 a 5 anos
                        </span>
                    </div>

                    <div class="l-teaching__item col-2 d-flex flex-column justify-content-center align-items-center py-4">

                        <p class="l-teaching__item__title u-line-height-100 u-font-weight-semibold text-center text-uppercase all:u-color-folk-white mb-0">
                            Educação <br>
                            <span class="u-font-weight-black">infantil</span>
                        </p>

                        <span class="l-teaching__item__year u-font-weight-semibold text-center u-color-folk-white">
                            3 a 5 anos
                        </span>
                    </div> -->
                </div>
            </div>

            <!-- loop -->
            <?php
                $args = array(
                    'posts_per_page' => 5,
                    'post_type'      => 'teaching-mode',
                    'order'          => 'ASC'
                );

                $modes = new WP_Query( $args );

                if( $modes->have_posts() ) :
                    while( $modes->have_posts() ) : $modes->the_post();
            ?>
                        <div 
                        class="col-12 d-none js-sections-teaching"
                        data-value="<?php the_title() ?>">

                            <div class="row">

                                <div class="col-lg-9 pr-lg-0">
                                    
                                    <div class="l-teaching__box p-4">

                                        <div class="row">

                                            <div class="col-lg-6">
                                                <!-- <img
                                                class="img-fluid"
                                                src="<php echo get_template_directory_uri()>/../wp-bootstrap-starter-child/assets/images/ensino-image-1.png"
                                                alt=""> -->

                                                <?php
                                                    $alt_title = get_the_title(); 

                                                    the_post_thumbnail( 
                                                        'post-thumbnail',
                                                        array(
                                                            'class' => 'img-fluid',
                                                            'alt'   => $alt_title
                                                    ));
                                                ?>
                                            </div>

                                            <div class="col-lg-6 mt-3 mt-lg-0">

                                                <!-- <h4 class="l-teaching__title u-font-weight-semibold text-uppercase all:u-color-folk-cyan">
                                                    educação <span class="u-font-weight-black">infantil</span>
                                                </h4> -->

                                                <h4 class="l-teaching__title u-font-weight-semibold text-uppercase all:u-color-folk-cyan">
                                                    <?php the_title() ?>
                                                </h4>

                                                <!-- <p class="l-teaching__description">
                                                    A Educação Infantil do Salesiano recebe 
                                                    crianças a partir dos três anos incompletos (sem 
                                                    fralda). É nesta fase da vida (zero a 6 anos) que a 
                                                    criança tem seu maior desenvolvimento, e 
                                                    investir numa Educação de qualidade é 
                                                    essencial para os passos seguintes da vida. Aulas 
                                                    contextualizadas e aprendizagem significativa 
                                                    através de: história, música, roda de conversa, 
                                                    fantoche, teatro, brincadeiras, filme, passeios e 
                                                    muito mais.
                                                </p> -->

                                                <p class="l-teaching__description">
                                                    <?php the_content() ?>
                                                </p>

                                                <div class="row">

                                                    <div class="col-md-7">
                                                        <a 
                                                        class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-cyan py-2 px-5" 
                                                        href="<?php the_permalink() ?>">
                                                            Saiba mais
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 d-flex pl-lg-0">

                                    <div class="w-100 d-flex flex-column justify-content-center u-bg-folk-primary px-3">

                                        <!-- loop -->
                                        <?php
                                            if( have_rows( 'observacoes_modo_ensino', get_the_ID() ) ) :
                                                while( have_rows( 'observacoes_modo_ensino', get_the_ID() ) ) : the_row();
                                        ?>
                                                    <p class="l-teaching__description u-font-weight-medium u-color-folk-white mb-1">
                                                        <!-- // Educação para a arte -->
                                                        // <?php echo get_sub_field( 'item' ) ?>
                                                    </p>
                                        <?php
                                                endwhile;
                                            endif;
                                        ?>
                                        <!-- end loop -->

                                        <!-- <p class="l-teaching__description u-font-weight-medium u-color-folk-white mb-1">
                                            // Educação para a arte
                                        </p>

                                        <p class="l-teaching__description u-font-weight-medium u-color-folk-white mb-1">
                                            // Educação para a arte
                                        </p>

                                        <p class="l-teaching__description u-font-weight-medium u-color-folk-white mb-1">
                                            // Educação para a arte
                                        </p>

                                        <p class="l-teaching__description u-font-weight-medium u-color-folk-white mb-1">
                                            // Educação para a arte
                                        </p> -->
                                        
                                        <p class="l-teaching__description u-font-weight-black u-color-folk-cyan mb-1">
                                            e muito +
                                        </p>
                                    </div>
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