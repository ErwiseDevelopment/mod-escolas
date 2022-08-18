<?php
                            $link_pattern = get_field( 'link_padrao_portal', 'option' );
                          
                        ?>

<section class="l-here my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <div class="row">

                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h3 class="u-title--highlight u-line-height-100 u-font-weight-bold text-uppercase all:u-color-folk-primary mb-0">
                            <span class="u-font-weight-black">Acontecendo</span> <br>
                            por aqui:
                        </h3>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-lg-end align-items-end">

                        <div class="row justify-content-end">

                            <div class="col-md-12">

                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-2 px-5" 
                                href="<?php echo $link_pattern . get_field ('','option')?>" target = "_blank">
                                    Ver todas as notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-here">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            $link_pattern = get_field( 'link_padrao_portal', 'option' );
                            $post_link = $link_pattern . get_field( 'link_do_post', 'option' );
                            $categoria_noticia = get_field( 'categoria_da_noticia', 'option' );
                            $request_posts = wp_remote_get( $post_link );

                            if(!is_wp_error( $request_posts )) :
                                $body = wp_remote_retrieve_body( $request_posts );
                                $data = json_decode( $body );

                                if(!is_wp_error( $data )) :
                                    foreach( $data as $rest_post ) :
                        ?>
                                        <div class="swiper-slide align-items-start">

                                            <div class="card border-0">
                                                
                                                <div class="l-here__card-img card-img">
                                                    <!-- <img
                                                    class="img-fluid"
                                                    src="<php echo get_template_directory_uri()>/../wp-bootstrap-starter-child/assets/images/here-image-1.png"
                                                    alt=""> -->

                                                    <img
                                                    class="img-fluid w-100 h-100"
                                                    src="<?php echo $rest_post->featured_image_src; ?>"
                                                    alt="<?php echo $rest_post->title->rendered; ?>">
                                                </div>

                                                <div class="card-body">

                                                    <h4 class="l-here__card-title u-font-weight-bold text-center text-uppercase u-color-folk-primary">
                                                        <!-- Parque sedia 1º Encontro Nacional de Poesia, Folclore e Ancestralidade -->
                                                        <?php echo $rest_post->title->rendered; ?>
                                                    </h4>

                                                    <!-- <p class="l-here__card-text u-font-weight-medium text-justify">
                                                        Nesta sexta-feira, dia 3 de setembro, o 
                                                        Parque Dom Bosco recebeu o 1º Encontro 
                                                        Nacional de Poesia, Folclore e 
                                                        Ancestralidade. O evento buscou encantar 
                                                        as crianças, adolescentes e jovens com a 
                                                        apresentação e valorização da identidade 
                                                        cultural brasileira […]
                                                    </p> -->

                                                    <p class="l-here__card-text u-font-weight-medium text-justify">
                                                        <?php echo $rest_post->post_excerpt; ?>
                                                    </p>

                                                    <p class="l-here__card-date u-font-weight-bold u-color-folk-theme">
                                                        <!-- 15 de setembro de 2021 -->
                                                        <?php 
                                                            $data = $rest_post->post_date;
                                                            list($data_day, $data_month, $data_year) = explode("/", $data);
                                                            $data_long_month = get_long_month( $data_month );

                                                            echo $data_day . ' de ' . $data_long_month . ' de ' . $data_year;  
                                                        ?>
                                                    </p>

                                                    <div class="row">

                                                        <div class="col-md-8">

                                                            <a 
                                                            class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-2 px-5" 
                                                            href="<?php echo esc_url( $rest_post->link ); ?>" target="_blank">
                                                                Ler mais
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                    endforeach;
                                endif; 
                            endif; 
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev-partners d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-prev-here"></div>
                <div class="swiper-button-next swiper-button-next-partners d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-next-here"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>