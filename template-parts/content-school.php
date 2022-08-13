<section class="l-school py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-4">

                <div class="row">

                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h3 class="u-title--highlight offset-lg-1 u-line-height-100 u-font-weight-bold text-uppercase all:u-color-folk-primary mb-0">
                            nossa <br>
                            <span class="u-font-weight-black">escola:</span>
                        </h3>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-lg-end align-items-lg-end">

                        <div class="row justify-content-center">

                            <div class="col-12">
                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-2 px-5" 
                                href="<?php echo get_field ('nossa_estrutura','option')?>">
                                    Conheça nossa estrutura
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-school">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'nossa-escola',
                                'order'          => 'DESC' 
                            );

                            $schools = new WP_Query( $args );

                            if( $schools->have_posts() ) :
                                while( $schools->have_posts() ) : $schools->the_post();
                        ?>
                                    <div class="swiper-slide flex-wrap">

                                        <div class="col-lg-6 mb-3 mb-lg-0">

                                            <h5 class="l-school__title u-font-weight-black text-uppercase u-color-folk-secondary mb-5">
                                                <!-- laboratórios: -->
                                                <?php the_title() ?>
                                            </h5>

                                            <!-- <p>
                                                Pesquisar, investigar, descobrir! As aulas em 
                                                laboratório possibilitam ao estudante a experiência 
                                                do conhecimento pelo fazer e os alunos participam 
                                                ativamente de todo o processo de construção de 
                                                conhecimento, obtendo informações – levantando, 
                                                selecionando e confirmando hipóteses – através de 
                                                observações e experimentos. O Colégio Dom Bosco 
                                                conta com laboratórios modernos e equipados nas 
                                                áreas de Química, Física, Biologia,  Matemática e 
                                                Robótica Educacional, além do Atelier de Artes. 
                                                Destaque: O Laboratório de Física conta com um 
                                                Espaço Maker, com impressora 3D, onde os 
                                                estudantes produzem exercem a criatividade, a 
                                                autonomia e o protagonismo enquanto 
                                                pesquisadores.
                                            </p> -->

                                            <p>
                                                <?php the_content() ?>
                                            </p>
                                        </div>

                                        <div class="col-lg-6">

                                            <div class="row">

                                                <!-- loop -->
                                                <?php
                                                    if( have_rows( 'galeria_nossa_escola', get_the_ID() ) ) :
                                                        while( have_rows( 'galeria_nossa_escola', get_the_ID() ) ) : the_row();
                                                ?>
                                                            <div class="col-lg-6 l-school__col-child">
                                                                <img
                                                                class="img-fluid w-100 h-100"
                                                                src="<?php echo get_sub_field( 'imagem' ) ?>"
                                                                alt="<?php the_title() ?>">
                                                            </div>
                                                <?php
                                                        endwhile;
                                                    endif;
                                                ?>      
                                                <!-- end loop --> 

                                                <!-- <div class="col-6 l-school__col-child my-1">
                                                    <img
                                                    class="img-fluid w-100 h-100"
                                                    src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/school-image-1.png"
                                                    alt="">
                                                </div> 

                                                <div class="col-6 l-school__col-child my-1">
                                                    <img
                                                    class="img-fluid w-100 h-100"
                                                    src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/school-image-1.png"
                                                    alt="">
                                                </div> 

                                                <div class="col-6 l-school__col-child my-1">
                                                    <img
                                                    class="img-fluid w-100 h-100"
                                                    src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/school-image-1.png"
                                                    alt="">
                                                </div>  -->
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            endif;

                            wp_reset_query();
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-partners d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-prev-school"></div>
                <div class="swiper-button-next swiper-button-next-partners d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-next-school"></div>
            </div>
        </div>
    </div>
</section>