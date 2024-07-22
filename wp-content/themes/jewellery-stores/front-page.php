<?php

get_header();
?>
    <section class="main-block">

        <div class="container">
            <div class="main-box">
                <div class="main">
                    <p class="main-pre__title">Donec sollicitudin</p>
                    <h1 class="main-title">JEWELLERY STORE</h1>
                    <p class="main-desc">
                        An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable
                        now
                        unpleasing. Son law
                        garden chatty temper. Oh children provided to mr elegance marriage strongly
                    </p>
                    <div class="main-btns">
                        <button class="main-btn__shop">
                            <a href="<?php the_field( 'shop_now_button' ); ?>">Shop Now</a>
                        </button>

                        <button class="main-btn__more">
                           <a href="<?php the_field( 'view_more_button' ); ?>">View More</a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </section> <!-- main -->

    <section class="featured-products__block">
        <div class="featured-products">
            <div class="container">

                <p class="featured-products__mark">Adipisicing elit</p>

                <h2 class="featured-products__title">
                    FEATURED PRODUCTS
                </h2>
                <p class="featured-products__desc">There are many variations of passages of lorem ipsum available.
                </p>
                <div class="featured-products__main">

                    <div class="featured-products__main-item">
                        <h2 class="featured-products__main-title">
                            TRISTIQUE JUST
                        </h2>
                        <p class="featured-products__main-desc">
                            Started now shortly had for assured hearing expense led juvenile.
                        </p>

                    </div>
                    <div class="featured-products__carrousel">
                        <button class="carousel__arrow carousel__arrow--left"></button>

                        <div class="carousel__wrapper">
                            <div class="carousel__inner">
         <?php
            $category_name = get_field( 'set_category' );
            $count_product = get_field( 'amount_of_output_products' );

            $category = get_term_by('name', $category_name, 'product_cat');

            if ($category) :

                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => $count_product, 
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'term_id',
                            'terms'    => $category->term_id, 
                        ),
                    ),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        global $product;
                        ?>
                        <div class="featured-products__item">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'shop_catalog')); ?>" 
                                        alt="<?php echo esc_attr(get_the_title()); ?>" 
                                        class="featured-products__item-img">
                                </a>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/default-product.png" 
                                    alt="Default Image" 
                                    class="featured-products__item-img">
                            <?php endif; ?>
                            <h2 class="featured-products__item-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title();?>
                                </a>
                            </h2>
                            <p class="featured-products__item-category">
                                <?php 
                                $categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                        echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
                                    }
                                } else {
                                    echo 'Uncategorized';
                                }
                                ?>
                            </p>
                            <p class="featured-products__item-price">
                                <?php echo $product->get_price_html(); ?>
                            </p>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            endif;
            ?>
                            </div>
                        </div>
                        <button class="carousel__arrow carousel__arrow--right"></button>
                    </div>
                </div>
                <!-- featured-products__main -->

                <div class="special-offer__block">
                    <div class="special-offer">
                        <div class="special-offer__info">
                            <p class="special-offer-pre__title">Special offer</p>
                            <h2 class="special-offer__title">Mauris Rhoncus</h2>
                            <p class="special-offer__desc">Curabitur non nullat amet.</p>
                            <button class="special-offer__btn"><a href="<?php the_field( 'special_offer_button' ); ?>">View More</a></button>
                        </div>

                    </div><!-- special-offer -->

                    <div class="special-offer__featured">
                        <h2 class="special-offer__featured__title">FEATURED PRODUCTS</h2>

                        <?php
                                $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'name',
                                'terms'    => 'featured',
                                'operator' => 'IN',
                            ),
                        ),
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $product = wc_get_product(get_the_ID());
                            ?>
                            <div class="special-offer__featured-item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'shop_catalog')); ?>" 
                                            alt="<?php echo esc_attr(get_the_title()); ?>" 
                                            class="special-offer__featured-item__img">
                                    </a>
                                <?php else : ?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/default-product.png" 
                                        alt="Default Image" 
                                        class="special-offer__featured-item__img">
                                <?php endif; ?>

                                <div class="special-offer__featured-item__details">
                                    <h3 class="special-offer__featured-item__details-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <p class="special-offer__featured-item__details-price">
                                        <?php echo $product->get_price_html(); ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;

?>
                  </div> <!-- special-offer__featured -->


                    <div class="special-offer__new-products">
                        <h2 class="special-offer__new-products__title">
                            New Products
                        </h2>


                        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                global $product; 
                ?>
                <div class="special-offer__new-products__item">
                    <?php if (has_post_thumbnail()) :  ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'shop_catalog')); ?>" 
                                alt="<?php echo esc_attr(get_the_title()); ?>" 
                                class="special-offer__new-products__item-img">
                        </a>
                    <?php else : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/default-product.png" 
                            alt="Default Image" 
                            class="special-offer__new-products__item-img">
                    <?php endif; ?>

                    <div class="special-offer__new-products__item-details">
                        <h3 class="special-offer__new-products__item-detail__title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p class="special-offer__new-products__item-detail__price">
                            <?php echo $product->get_price_html(); ?>
                        </p>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>


                    </div><!-- special-offer__new-products -->
                </div><!-- special-offer__block -->
                <!-- container -->
            </div>
        </div><!-- featured-products -->
    </section>

    <section class="jewerly-design__block">
        <div class="jewerly-design">
            <div class="container">
                <p class="jewerly-design__mark">Adipisicing elit</p>

                <h2 class="jewerly-design__title">JEWELRY DESIGN BLOG</h2>

                <p class="jewerly-design__desc">There are many variations of passages of lorem ipsum
                    available.</p>

                <div class="jewerly-design-carrousel">
                    <button class="carousel__arrow carousel__arrow-post--left"></button>

                    <div class="carousel__wrapper">
                        <div class="carousel__inner">



<?php

$post_ids = $jewelry_design_blog = get_field( 'jewelry_design_blog' ); 

$args = array(
    'post_type' => array('post', 'page', 'product'),
    'post__in' => $post_ids, 
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="jewerly-design-carrousel-item">
            <p class="jewerly-design-carrousel-item__published"><?php echo get_the_date('d M.'); ?></p>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="jewerly-design-carrousel-item__img">
            <?php else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flat-picked.png" alt="" class="jewerly-design-carrousel-item__img">
            <?php endif; ?>
            <p class="jewerly-design-carrousel-item__category">
                <?php
                if (get_post_type() === 'product') {
                    $terms = get_the_terms(get_the_ID(), 'product_cat');
                    if (!empty($terms)) {
                        echo esc_html($terms[0]->name);
                    }
                } else {
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    }
                }
                ?>
            </p>
            <h2 class="jewerly-design-carrousel-item__title"><?php the_title(); ?></h2>
            <div class="jewerly-design-carrousel-item__authorinfo">
                <p class="jewerly-design-carrousel-item__authorinfo-pre-text">Posted by</p>
                <img class="jewerly-design-carrousel-item__authorinfo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/author.png" alt="">
                <p class="jewerly-design-carrousel-item__authorinfo-name"><?php the_author(); ?></p>
            </div>
            <p class="jewerly-design-carrousel-item__text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="jewerly-design-carrousel-item__link">Continue reading</a>
        </div>
    <?php endwhile;
else :
    echo '<p>No posts found</p>';
endif;

wp_reset_postdata();
?>

                        </div>
                    </div>

                    <button class="carousel__arrow carousel__arrow-post--right"></button>
                </div>


            </div> <!-- container -->

        </div> <!-- jewerly-design -->
        </div>



    </section> <!-- jewerly-design__block -->




<?php get_footer();