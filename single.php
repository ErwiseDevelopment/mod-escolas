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

<section class="l-single-post py-5">

    <div class="container">

        <div class="row ">

            <div class="col-12 mb-5 pb-5">
                
                <div class="row justify-content-center">

                    <div class="col-lg-8">
                        
                        <!-- <img
                        class="img-fluid"
                        src="http://www.dombosco.net/wp-content/uploads/2021/12/48897837752_4ec846307d_o-e1639750168139-970x550.jpg"
                        alt="Nome do post"> -->

                        <?php
                            $altTitle = get_the_title();
                            
                            the_post_thumbnail('large', 
                                array(
                                    'class' => 'img-fluid w-100',
                                    'alt'   => $altTitle,
                            ));
                        ?>

                        <h1 class="l-single-post__title u-font-weight-bold my-4">
                            <!-- 5 curiosidades sobre a vida de Dom Bosco -->
                            <?php the_title() ?>
                        </h1>

                        <hr>

                        <span class="d-block">
                            <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae nibh in ex scelerisque facilisis. Donec interdum eros ac orci tempor consequat. Fusce id consequat libero, a porttitor dui. Nulla imperdiet vitae ligula id tincidunt. Nam in purus placerat, scelerisque justo eget, ornare lectus. Morbi enim turpis, convallis vel elit sed, posuere pulvinar velit. Proin condimentum turpis facilisis eros venenatis, et lacinia magna commodo. Vestibulum ante dolor, laoreet ac mi eget, viverra congue odio. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam id turpis cursus, tempus urna nec, pulvinar sem. Aenean lobortis dolor vel diam suscipit laoreet. Cras dapibus ligula sit amet elementum porttitor. Suspendisse eget finibus urna, vitae rhoncus felis. Curabitur quis pulvinar felis, non pellentesque lorem. <br>
                            Nam et nisi dictum, luctus mauris at, sodales sapien. Sed iaculis, neque a eleifend efficitur, odio nunc venenatis orci, quis bibendum enim turpis placerat lorem. Vivamus vel augue sit amet turpis consequat facilisis. Mauris sed fermentum diam. Cras placerat porta quam, in tristique leo sollicitudin et. Vivamus sagittis mi sed purus ultricies luctus. Praesent rutrum libero tellus, at egestas leo convallis vel. Proin molestie, leo id feugiat luctus, metus sem facilisis massa, quis pellentesque magna orci vitae nunc. Maecenas quis erat et mi sagittis mollis quis quis elit. <br><br>
                            Duis laoreet lobortis leo, at egestas felis feugiat at. Vivamus porttitor dolor vel justo lobortis iaculis. Sed ut eleifend magna. Aliquam nunc lectus, suscipit nec elit ut, venenatis auctor augue. Sed aliquam laoreet sapien, dignissim feugiat lorem vulputate quis. Morbi convallis commodo luctus. Nam sapien justo, sagittis non mi id, cursus mollis massa. Morbi in euismod odio. Morbi scelerisque eget neque et bibendum. Cras a ex in enim rhoncus consequat. Cras fringilla sagittis pharetra. Suspendisse condimentum posuere nulla non aliquet. Suspendisse vel enim tincidunt, ultricies libero eu, placerat diam. Cras mattis blandit lacus non imperdiet. <br>
                            In dapibus iaculis fringilla. Pellentesque auctor tortor leo, vehicula posuere nulla congue eu. Maecenas a metus lectus. Curabitur cursus sodales arcu eget lacinia. Donec accumsan euismod justo nec auctor. Duis eu metus in elit vestibulum faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sagittis cursus dui vel sollicitudin. Aliquam velit enim, tincidunt sodales erat id, ultrices efficitur felis. Donec viverra vel velit non congue. Sed mauris ligula, mollis at tellus ut, accumsan interdum leo. Nulla elementum ante eu justo feugiat lobortis. Curabitur eget erat et eros mattis fringilla et et libero. Aenean lacinia, eros laoreet porta commodo, diam metus viverra nunc, nec mollis sem lorem sed ipsum. <br><br>
                            Sed at tincidunt ipsum, sit amet viverra orci. Morbi tristique ex at ante sollicitudin sodales. Ut vitae urna nec arcu mollis lobortis ac at quam. Vestibulum tellus sapien, tincidunt eget auctor non, pellentesque a nisi. Morbi euismod, elit ut pellentesque pellentesque, sapien arcu venenatis est, non tincidunt nibh quam eget est. Cras varius velit in sapien viverra, quis consequat libero pellentesque. In hac habitasse platea dictumst. Curabitur hendrerit eros id tincidunt elementum. Nunc nibh eros, pulvinar ut lectus suscipit, elementum consectetur tellus.                         -->

                            <?php the_content() ?>
                        </span>
                    </div>

                    
                </div>
                <div class="row justify-content-center">

<div class="col-md-5 mt-3">
    <a 
    class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-3 px-5" 
    href="<?php echo get_home_url( null, 'inicio' ) ?>">
        Voltar para a página inicial
    </a>
</div>
</div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
