<?php

//Template Name: Template Home

get_header();

$imagen_de_fondo_1_hero = get_field('imagen_de_fondo_1_hero');
$imagen_de_fondo_2_hero = get_field('imagen_de_fondo_2_hero');
$imagen_de_fondo_movil_hero = get_field('imagen_de_fondo_movil_hero');
$frase_inicial_hero = get_field('frase_inicial_hero');

$imagen_de_fondo_1_us = get_field('imagen_de_fondo_1_us');
$imagen_de_fondo_2_us = get_field('imagen_de_fondo_2_us');
$imagen_movil_us = get_field('imagen_movil_us');
$frase_inicial_us = get_field('frase_inicial_us');
$texto_us = get_field('texto_us');
$texto_en_boton_us = get_field('texto_en_boton_us');
$link_a_pagina_us = get_field('link_a_pagina_us');

$titulo_de_la_seccion_shop = get_field('titulo_de_la_seccion_shop');
$texto_en_boton_shop = get_field('texto_en_boton_shop');
$link_a_shop = get_field('link_a_shop');

$imagen_de_fondo_1_business = get_field('imagen_de_fondo_1_business');
$imagen_de_fondo_2_business = get_field('imagen_de_fondo_2_business');
$frase_inicial_business = get_field('frase_inicial_business');
$texto_business = get_field('texto_business');
$texto_en_boton_business = get_field('texto_en_boton_business');
$link_a_pagina_business = get_field('link_a_pagina_business');

$titulo_recetas = get_field('titulo_recetas');

$imagen_de_fondo_contacto = get_field('imagen_de_fondo_contacto');
$titulo_contacto = get_field('titulo_contacto');
$texto_contacto = get_field('texto_contacto');
$texto_en_boton = get_field('texto_en_boton');
$link_a_pagina = get_field('link_a_pagina');


?>

    <section id="main" class="fullheight slide-up-fade-in">
      <div class="modulo parallax flex" data-parallax-speed="1" style="background-image:url('<?php echo $imagen_de_fondo_1_hero; ?>');background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="hide-for-small hide-for-medium modulo-inner parallax" data-parallax-speed="2" style="background-image:url('<?php echo $imagen_de_fondo_2_hero; ?>');background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
        <div class="show-for-small show-for-medium modulo-inner" style="background-image:url('<?php echo $imagen_de_fondo_movil_hero; ?>');background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
        <div class="row">
          <div class="large-75 large-centered small-100 columns">
            <h1 data-parallax-speed="2"><?php echo $frase_inicial_hero; ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section id="introAbout" class="fullheight">
      <div class="modulo parallax flex flex-column" data-parallax-speed="1" style="background-image:url('images/02-bg02.png');background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="hide-for-small hide-for-medium modulo-inner parallax" data-parallax-speed="2" style="background-image:url('images/02-bg01.png');background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
        <div class="show-for-small show-for-medium modulo-inner parallax" data-parallax-speed="2" style="background-image:url('images/atf2-mobile.png');background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
        <div class="row">
          <div class="large-50 medium-75 large-centered small-100 columns">
            <h2 class="yellow">Since<br>1992</h2>
            <p class="text-center">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="large-50 medium-75 large-centered small-100">
              <a href="about.html" class="button red text-center">Read More about Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="introShop" class="fullheight">
      <div class="modulo flex flex-column">
        <div class="row">
          <div class="large-50 medium-75 large-centered small-100 columns">
            <h2 class="green parallax" data-parallax-speed="0">Shop your favorites</h2>
          </div>
        </div>
        <div class="row intro-prods flex">
          <div class="large-50 medium-75 small-100 flex columns">
            <a class="product parallax text-center" href="product.html" data-parallax-speed=".25">
              <img src="images/product01.png" alt="">
              <span>4oz Bottle<br>
              <b>$0.00 MXN</b></span>
            </a>
            <a class="product parallax text-center" href="product.html" data-parallax-speed=".25">
              <img src="images/product02.png" alt="">
              <span>4oz Bottle<br>
              <b>$0.00 MXN</b></span>
            </a>
            <a class="product parallax text-center" href="product.html" data-parallax-speed=".25">
              <img src="images/product03.png" alt="">
              <span>4oz Bottle<br>
              <b>$0.00 MXN</b></span>
            </a>
          </div>
        </div>
          <a href="shop.html" class="text-center button green parallax" data-parallax-speed="0">View All Products</a>
      </div>
    </section>

    <section id="introBusiness" class="fullheight blue">
      <div class="modulo parallax flex flex-column" data-parallax-speed=".5" style="background-image:url('images/03-bg01.png');background-position:0 -50%;background-size:35%;background-repeat:no-repeat;">
        <div class="row">
          <div class="large-50 large-centered medium-75 small-100 columns">
            <div class="hide-for-small modulo-inner parallax" data-parallax-speed="1.5" style="background-image:url('images/03-bg02.png');background-position:110% 200%;background-size:35%;background-repeat:no-repeat;"></div>
            <h2 class="white parallax" data-parallax-speed="0">Serve your customers right</h2>
            <p class="text-center text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="large-50 large-centered small-100">
              <a href="about.html" class="text-center button white" data-parallax-speed="0">Grow your Business</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="introRecipes" class="fullheight">
      <div class="modulo flex flex-column">
        <div class="row">
          <div class="large-50 large-centered medium-75 small-100 columns">
            <h3 class="red parallax" data-parallax-speed="0">Glenn's<br>Favorite<br>Recipes</h3>
          </div>
          <div class="row flex recipes">
            <div class="large-50 small-100 columns">
              <a href="recipe.html" class="text-center">
                <img src="images/recipe01.jpg" alt="">
                <span>Minted Watermelon and Eclipses™ Tomato Salad</span>
              </a>
            </div>
            <div class="large-50 small-100 columns">
              <a href="recipe.html" class="text-center">
                <img src="images/recipe02.jpg" alt="">
                <span>Minted Watermelon and Eclipses™ Tomato Salad</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="introContact" class="fullheight yellowbg">
      <div class="modulo parallax flex flex-column" data-parallax-speed=".5" style="background-image:url('images/04-bg01.png');background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="row">
          <div class="large-50 medium-75 large-centered small-100 columns">
            <h2 class="white">Questions?<br>Reach out.</h2>
            <p class="text-center">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="large-50 medium-75 large-centered small-100">
              <a href="contact.html" class="button blue text-center">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>