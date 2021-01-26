<?php 
/**
 *   Template Name: Startseite
*/ 

if ( is_front_page() ) :
    get_header();
else :
    get_header();
endif;
?>
<?php
?>
<main>
    <div class="container-slide">
    <?php 
        // Check value exists.
        if( have_rows('content-home') ):?>
        <div class="banner_slide" id="options-hoverpause">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php while ( have_rows('content-home') ) : the_row(); ?>
                        <?php if (get_row_layout() === 'kopfbereich') :
                            $image = get_sub_field('banner_slide_bild'); 
                            $text = get_sub_field('banner_slide_titel');?>
                        <li class="glide__slide" >
                            <div class="banner-image-block">
                                <img src="<?php print_r($image);?>" alt="home-image-slide">
                                <div class="banner-image-text">
                                    <h4> <?php echo $text ;?></h4>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
            </ul>
            </div>
        <?php endif ;?>
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
    <!-- main end -->
    <section class="traume-text-block">
    <?php while ( have_rows('content-home') ) : the_row(); ?>
                        <?php if (get_row_layout() === 'text-und-citate') :
                            $titel = get_sub_field('text-titel'); 
                            $textlink = get_sub_field('text-link');
                            $textrech = get_sub_field('text-recht');
                            $citate = get_sub_field('text-citate');
                        ?>
        <div class="traume-text-block_container">
            <h3><?php echo $titel ;?></h3>
            <p class="heading-text"> <?php echo $citate ;?></p>
            <div class="traume-text-block-items">
                <div> <?php echo $textlink ;?></div>
                <div class="margin-custom"> <?php echo $textrech ;?></div>
            </div>
        </div>
        <?php endif ;?>
        <?php endwhile ;?>
    </section>
    <!--Galerie Link -->
    <section class="section-galerie-block">
        <div class="section-galerie-block-container">
            <?php if( have_rows('content-home') ):?>
            <?php while ( have_rows('content-home') ) : the_row(); ?>
            <?php if (get_row_layout() === 'galerie-bereich') :
                $image1 = get_sub_field('galerie-bild1'); 
                $image2 = get_sub_field('galerie-bild2'); 
                $image3 = get_sub_field('galerie-bild3'); 
                $galerie_description = get_sub_field('galerie-text');
                $link = get_sub_field('banner_slide_titel');
            ?>
                <div class="container_img">
                    <img src="<?= $image1;?>" alt="home-galerie-image">
                </div>
                <div class="container_img">
                    <img src="<?= $image2 ;?>" alt="home-galerie-image">
                </div>
                <div class="container_img">
                    <img src="<?= $image3 ;?>" alt="home-galerie-image">
                </div>
            <!-- </div> -->
            <div class="block-link-galerie">
                <p><?= $galerie_description ;?></p>
                <?php 
                    $link = get_sub_field('galerie-link');
                    if( $link ): ?>
                        <a href="<?php echo esc_url( $link ); ?>" class="btn btn-style btn-style_galerie">GALERIE
                            <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon transform">
                        </a> 
                    <?php endif; ?>
            </div>
        </div>
            <?php endif ;?>
            <?php endwhile ;?>
            <?php endif;?> 
    </section>
    <!-- About link -->
    <section class="section-about-block">
        <div class="container">
        <?php if( have_rows('content-home') ):?>
        <?php while ( have_rows('content-home') ) : the_row(); ?>
        <?php if (get_row_layout() === 'uber_mich') :
            $Schultz = get_sub_field('bild'); 
            $name = get_sub_field('vorname-name'); 
            $beschrebung = get_sub_field('text-description'); 
            $beschrebung2 = get_sub_field('text-description_2'); 
            $galerie_description = get_sub_field('galerie-text');
            $link = get_sub_field('banner_slide_titel');
            ?>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="section-about-block-image">
                        <img src="<?= $Schultz;?>" alt="Schultze-dietlind" class="section-about-block_img">
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="section-about-block-text">
                        <h3> <?= $name ;?> </h3>
                        <p> <?=$beschrebung ;?></p>
                        <p><?=$beschrebung2;?></p>
                        <?php 
                    $übermich_link = get_sub_field('uber-mich-link');
                    if( $übermich_link ): ?>
                    <a href="<?php echo esc_url( $übermich_link ); ?>" class="  btn btn-style btn-home">ÜBER MICH 
                        <img src=" <?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon btn-icon-about">
                    </a> 
                <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ;?>
        <?php endwhile ;?>
        <?php endif;?> 
    </section>
    <!-- seeler section-->
    <div class="block-seeler">
        <?php if( have_rows('content-home') ):?>
        <?php while ( have_rows('content-home') ) : the_row(); ?>
        <?php if (get_row_layout() === 'seele') :
            $text_seele = get_sub_field('seele-text'); 
        ?>
        <div class="block-seeler-bg">
            <h4> <?= $text_seele ;?></h4>
            
        </div>
        <?php endif ;?>
        <?php endwhile ;?>
        <?php endif;?> 
    </div>
    <!-- section stoffe und innendeko -->
    <div class="block-stoffe-dekoration">
        <div class="container">
            <?php if( have_rows('content-home') ):?>
            <?php while ( have_rows('content-home') ) : the_row(); ?>
            <?php if (get_row_layout() === 'stoffe_&_innendeko') :
            $titel_descrption= get_sub_field('stoffe_innendeko_description'); 
            $titel = get_sub_field('titel-stoffe-innendeko'); 
            $stoffe_image= get_sub_field('stoffe_bild'); 
            $innendeko_image = get_sub_field('innendeko-bild');
            $link_stoffe = get_sub_field('stoffe-galerie-link');
            $link_innendeko = get_sub_field('lnnendeko-bild-link');
            ?>
            <div class="row justify-content-center  aligne-items-center ">
                <div class=" col-12 col-md-12 col-lg-4">
                    <div class="block-soffe-text">
                        <h5><?=$titel;?></h5>
                        <p><?=$titel_descrption;?></p>
                    </div>
                </div>
                <div class=" col-12 col-md-12 col-lg-4">
                    <div class="container-img-stoffe">
                        <img src="<?= $stoffe_image;?>" alt="stoffe-image">
                    </div>
                    <?php if( $link_stoffe ): ?>
                    <a href="<?php echo esc_url( $link_stoffe ); ?>" class="  btn btn-style btn-style_stoffe">STOFFE
                        <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon">
                    </a>   
                    <?php endif;?>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="container-img-innendeko">
                        <img src="<?= $innendeko_image;?>" alt="innendeko-image" class="container-img-innendeko_img" >
                        <?php if($link_innendeko):?>
                        <a href="<?= esc_url($link_innendeko);?>" class="  btn btn-style btn-style_innendeko">Innendeko
                            <img src=" <?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon">
                        </a> 
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php endif ;?>
        <?php endwhile ;?>
        <?php endif;?> 
        </div>
    </div>
    <!-- kontakt -->
    <section class="block-kontakt-link">
        <div class="container">
            <?php if( have_rows('content-home') ):?>
            <?php while ( have_rows('content-home') ) : the_row(); ?>
            <?php if (get_row_layout() === 'kontakt-bereich') :
            $titel_bereich = get_sub_field('titel-bereich'); 
            $description_bereich = get_sub_field('text-descriptiom');
            $link_kontakte = get_sub_field('link-kontakt');
            ?>
            <div class="block-kontakt-link_items">
                <h5><?= $titel_bereich;?></h5>
                <P><?= $description_bereich;?></P>
                <?php if($link_kontakte):?>
                <a href="<?= esc_url($link_kontakte);?>" class="btn btn-style">KONTAKT 
                    <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon">
                </a>   
                <?php endif ;?>
            </div>
            <?php endif ;?>
            <?php endwhile ;?>
            <?php endif;?> 
        </div>
    </section>
<?php get_footer() ?>  	

