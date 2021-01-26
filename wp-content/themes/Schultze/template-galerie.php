<?php
/**
 *   Template Name: galerie
 *  */
?>
<?php get_header('galerie');?>
<main class=" main-galerie">
    <div class="container-slide">
        <div class="banner-image-block bg-mobile-galerie">
            <img src="<?php the_field('galerie_hintergrund_bild');?>" alt="header-background-image" class="desktop-bg">
        </div>
    </div>
</main>
<!--
<div class="galerie-link">
    <ul class="nav-galerie">
        <li><a href="">ALLES</a></li>
        <li class="galerie_inndeko"><a href="">INNENDEKO </a></li>
        <li><a href="">STOFFE </a></li>
        <li><a href="">MÖBEL </a></li>
        <li class="lifestyle"><a  class="prev-lifestyle" href="">LIFESTYLE</a></li>
        <a href=""><img src="<?php echo get_template_directory_uri();?>/img/prev-icon.png" alt="prev-icon" class="pre-nav-galerie"></a>
    </ul>
</div>
-->
<section class="main-content">
<?php  // Check value exists.
    if( have_rows('galerie_bildern') ):?>
    <div class="galerie-grid  ">
        <?php while ( have_rows('galerie_bildern') ) : the_row();
            $galerie_image = get_sub_field('galerie_bilde');
        ?>
        <div class="galerie-grid-items ">
            <img src="<?=  $galerie_image;?>" alt="galerie-image">
        </div>
        <?php endwhile?>
    </div>
<?php endif;?>
</section>
<!-- <div class="pagination-block">
    <div class="pagination-block_items"> -->
        <!-- <a href=""><img src="<?php echo get_template_directory_uri();?>/img/prev.png" alt="prev-right" class="prev-right"></a> -->
        <!-- <a href="">1</a> -->
        <!-- <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <a href="">6</a>
        <a href="">7</a>
        <a  class="heide_a" href="">...</a> -->
        <!-- <a href=""><img src="<?php echo get_template_directory_uri();?>/img/prev-icon.png" alt="prev-left" class="prev-left"></a> -->
    <!-- </div>
</div> -->
<?php get_footer('galerie')?>