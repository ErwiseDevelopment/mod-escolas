<section class="l-blogs">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12">
                
                <div class="row">

                    <div class="col-lg-10 mb-3">

                        <h3 class="u-title--highlight u-line-height-100 u-font-weight-black text-uppercase all:u-color-folk-primary mb-0">
                            Blog
                        </h3>
                    </div>
                </div>
            </div>

            <?php
                $link_pattern = get_field( 'link_padrao_portal', 'option' );
                $blog_post_link = $link_pattern . get_field( 'link_do_post_blog', 'option' );
                $request_posts = wp_remote_get( $blog_post_link );

                if(!is_wp_error( $request_posts )) :
                    $body = wp_remote_retrieve_body( $request_posts );
                    $data = json_decode( $body );
                    $status = false;

                    if(!is_wp_error( $data )) :
                        foreach( $data as $rest_post ) :
                            $blogHightlightID = $rest_post->id;
                            $status = true;
            ?>
                            <div class="col-12 mb-4">

                                <div class="row">

                                    <div class="col-md-7">
                                        
                                        <img
                                        class="img-fluid w-100 h-100"
                                        src="<?php echo $rest_post->featured_image_src; ?>"
                                        alt="<?php echo $rest_post->title->rendered; ?>">
                                    </div>

                                    <div class="col-md-5 d-flex flex-column justify-content-center">
                                        <h4 class="l-blogs__highlight__title u-font-weight-bold">
                                            <?php echo $rest_post->title->rendered; ?>
                                        </h4>

                                        <p class="l-blogs__highlight__description u-font-weight-regular">
                                            <?php echo(limit_words($rest_post->post_excerpt, 25)); ?>
                                        </p>

                                        <div class="row">

                                            <div class="col-md-8 col-lg-6">
                                                <a 
                                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-3 px-5" 
                                                href="<?php echo esc_url( $rest_post->link ); ?>">
                                                    Ler mais
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php           if($status) 
                                break;
                        endforeach;
                    endif; 
                endif; 
            ?>

            <div class="col-lg-10 mt-3">

                <div class="row">
                    
                    <?php
                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );
                            $count = 0;

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
                                    if($rest_post->id != $blogHightlightID) :
                                        $count++;
                    ?>
                                        <div class="col-md-4 my-3 my-md-0">

                                            <div class="card h-100 border-0">

                                                <div class="card-img">
                                                    
                                                    <img
                                                    class="img-fluid"
                                                    src="<?php echo $rest_post->featured_image_src; ?>"
                                                    alt="<?php echo $rest_post->title->rendered; ?>">
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between px-0">

                                                    <div>
                                                        <h6 class="l-blogs__card-title u-font-weight-bold">
                                                            <?php echo $rest_post->title->rendered; ?>
                                                        </h6>

                                                        <p class="l-blogs__card-text mb-2">
                                                            <span class="u-font-weight-semibold">
                                                                <?php echo $rest_post->post_author; ?>
                                                            </span> <br>
                                                            <span class="u-font-weight-bold u-color-folk-secondary">
                                                                em <?php echo $rest_post->post_date; ?>
                                                            </span>
                                                        </p>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-8 col-xl-10">
                                                            <a 
                                                            class="l-blogs__read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-3 px-5" 
                                                            href="<?php echo esc_url( $rest_post->link ); ?>">
                                                                Ler mais
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    <?php           endif;
                                    if($count == 3) 
                                        break;
                                endforeach;
                            endif; 
                        endif; 
                    ?>
                </div>
            </div>

            <div class="col-md-4 col-lg-2 d-flex flex-column justify-content-center">

                <div class="row justify-content-center">

                    <div class="col-lg-12 d-flex justify-content-center my-4 px-0">

                        <a 
                        class="l-blogs__btn-more-content w-100 u-line-height-100 u-border-2 u-border-color-secondary d-block u-font-weight-bold text-center text-uppercase text-decoration-none u-color-folk-secondary hover:u-color-folk-white u-bg-folk-none hover:u-bg-folk-secondary p-3" 
                        href="<?php echo $link_pattern . get_field ('+_conteudos_btn','option')?>" target = "_blank"
                        data-aos="zoom-in">
                            + Conteúdos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>