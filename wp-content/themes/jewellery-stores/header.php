<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

 <header class="header">
        <div class="container">
            <div class="header-main">

                <img src="assets/img/logo-header.png" alt="" class="header-main__logo">

                <div class="burger-menu">
                      <nav class="header-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => false, 
                        'menu_class' => 'header-menu__list', 
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'link_before' => '<span class="header-menu__item-link">',
                        'link_after' => '</span>', 
                    ));
                    ?>
                </nav>
                    <div class="header-auth">
                        <a href="" class="header-auth__login">Login /</a>
                        <a href="" class="header-auth__register">Register</a>
                    </div>
                    <div class="header-items">
                        <img class="header-items__shops" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/search-hurt-card-price.png" alt="">
                    </div>
                </div>
                <div class="btn-burger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
