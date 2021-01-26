<?php 
/*
*   Template Name: stoffe
*/
?>
<?php get_header('stoffe')?>
<main class="main-stoffe">
        <div class="container-slide">
        <?php 
        // Check value exists.
        if( have_rows('stoffe_slide_bild') ):?>
            <div class="banner_slide" id="options-hoverpause">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                    <?php while ( have_rows('stoffe_slide_bild') ) : the_row();
                        $image_slide = get_sub_field('bild_slide');
                        ?>
                        <li class="glide__slide">
                            <div class="banner-image-block slide-stoffe-image">
                                <img src="<?=  $image_slide;?>" alt="slide-image">
                                <div class="banner-image-text">
                                </div>
                            </div>
                        </li>
                        <?//php endif; ?>
                    <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                </div>
                <p class="paragraph">
                    <label><input id="options-hoverpause-checkbox" type="checkbox">
                </p>
            </div>
        </div>
    </main>
    <div class="container">
        <div class="row d-flex justify-content-center stoffe-textile-block">
            <div class=" col-12 col-lg-7">
                <div class="stoffe-textile-heading">
                    <h3><?= the_field('stoffe__&_textilien_titel');?></h3>
                    <p><?php the_field('stoffe__&_textilien_description');?></p>
                </div>
            </div>
            <div class=" col-2 col-lg-5">
                <div class="textile-img">
                    <img src="<?php the_field('stoffe_kleine_bild');?>" alt="textile-img">
                </div>
            </div>
            <div class=" col-12 col-lg-12">
                <div class="stoffe-img">
                    <img src="<?php the_field('stoffe_grose_bild');?>" alt="stoffe-image">
                </div>
            </div>
        </div>
    </div>
    <section class="stoffe-block">
        <div class="stoffe-block-flex">
            <div class="stoffe-block-flex-text">
                <h3 class="stoffe-title"><?= the_field('stoffe_und_farben');?></h3>
                <p class="stoffe-text"><?= the_field('stoffe_und_farben_description');?></p>
                <?php 
                    $link = get_field('termin_vereinbaren_link');
                    if( $link ): ?>
                        <a href="<?php echo esc_url( $link );?>" class="  btn btn-style btn-style_galerie"> TERMIN VEREINBAREN
                            <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png"
                            alt="btn-icon" class="btn-icon transform">
                        </a>
                    <?php endif;?>
            </div>
            <div class="stoffe-block-flex-img">
                <img src="<?php the_field('bild_stoffe_und_farben');?>" alt="stoffe-image">
            </div>
        </div>
    </section>
    <div class="container">
        <h3 class="section-galerie-heading"><?php the_field('einsatzmoglichkeiten_titel');?></h3>
       <?php  // Check value exists.
        if( have_rows('einsatz_bildern') ):?>
        <div class="row align-items-center">
        <?php while ( have_rows('einsatz_bildern') ) : the_row();
                        $image_einsatz = get_sub_field('bild_einsatz');
                        ?>
            <div class=" col-12 col-lg-3 col-md-6 ">
                <div class="galerie-container">
                    <img src="<?=  $image_einsatz;?>" alt="einsatz-image">
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer('stoffe')?>