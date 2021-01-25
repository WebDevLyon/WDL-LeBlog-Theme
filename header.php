<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class('container-fluid'); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header__top">
            <nav class="header__top__nav navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="header__top__nav__logo navbar-brand d-flex" href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>\img\WDL-logo-1.png" alt="Logo">
                        <p>| <span class="text-danger">Le Blog</span></p>
                    </a>
                    <div class=" collapse navbar-collapse" id="navbar-content">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main', // Defined when registering the menu
                            'container'      => false,
                            'depth'          => 2,
                            'menu_class'     => 'navbar-nav ml-auto',
                            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                        ));
                        ?>
                        <!-- <div class="header__top__user-btn"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                            </svg>
                        </div>-->
                    </div>
                </div>
            </nav>
            <div class="header__bottom__search-block text-center py-5">
                <div class="header__bottom__search-block__input"><?php get_search_form(); ?></div>
                <h2 class=" text-uppercase">l'actualité sur le domaine du web, du code et de l'informatique</h2>
                <div class="header__bottom__search-block__social ">
                    <p>Retrouver aussi Web Dev Lyon sur :</p>
                    <div class='d-flex justify-content-around w-50 m-auto'>
                        <a href="https://www.facebook.com/WebDevLyon" class='text-decoration-none text-light' target="_blank"><i class="header__bottom__social__icon fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/nicolas-lachise-5b4ab3192/" class='text-decoration-none text-light' target="_blank"><i class="header__bottom__social__icon fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/WebDevLyon" class='text-decoration-none text-light' target="_blank"><i class="header__bottom__social__icon fab fa-github"></i></a>
                        <a href="https://youtube.com/channel/UCK2sQJ_DJ65yUJ6Gu5ovsCw" class='text-decoration-none text-light' target="_blank"><i class="header__bottom__social__icon fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>