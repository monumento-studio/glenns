<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="curtain"></div>
    <div class="navigation slide-down-bar">
      <nav>
        <button class="hamburger hamburger--squeeze show-for-small" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
                  <?php if( has_nav_menu( 'primary' ) ) {
            wp_nav_menu(array(
              'theme_location'                        =>   'primary',
              'container'                             =>   false,
              'depth'                                 =>    6,
              'menu_class'                            =>    'left'
            ));
          }
          ?>

          <?php

            if( has_custom_logo() ){
              the_custom_logo();
            }else{
              ?> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a> <?php
            }

            ?>

        <ul class="right hide-for-small">
          <li class="cta"><a href="shop.html">Shop</a></li>
          <li><a href="cart.html">Cart (0)</a></li>
        </ul>

        <a href="cart.html" class="show-for-small">Cart (0)</a>
      </nav>
    </div>