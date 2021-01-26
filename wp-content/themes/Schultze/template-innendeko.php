<?php
/**
 *   Template Name: innendeko
 * 
 * */ 
?>
<?php get_header('innendeko'); ?>
<main class=" main-innendeko">
    <div class="container-slide">
        <div class="banner-image-block">
            <img src="<?php the_field('innendeko_hintergrund_bild');?>" alt="slide-image" class="">
            <div class="banner-image-text">
                <h4><?php the_field('innendeko_hintergrund_titel');?></h4>
            </div>
        </div>
    </div>
</main>
<div class="container">
    <div class="row d-flex justify-content-center innendeko-block ">
        <div class=" col-lg-4">
            <div class=" innendeko-left-img">
                <img src="<?php the_field('innen_kleine_bild');?>" alt="slide-image">
            </div>

        </div>
        <div class=" col-lg-8">
            <div class="innendeko-right-img">
                <img src="<?php the_field('innen_grose_bilde');?>" alt="slide-image">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="innendeko-heading">
                <h3><?php the_field('innen_title');?></h3>
                <p class=" innendeko-heading_first"><?php the_field('innendeko_description');?></p>
                <p class="innendeko-heading_above"><?php the_field('innendeko_description_2');?></p>
                <?php $link = get_field('uber_mich_link');?>
                <?php if($link): ?>
                    <a href="<?php echo esc_url( $link );?>" class="  btn btn-style btn-style_deko">ÜBER MICH
                        <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png" alt="btn-icon" class="btn-icon btn-icon-deko">
                    </a>
                <?endif;?>
            </div>
        </div>
    </div>
</div>
<section class="card-block">
    <div class="grid">
        <div class="grid-item">
            <div class="card_c">
                <img src="<?php the_field('card_image1');?>" alt="card-image" class="card_img">
                <div class="card-content">
                    <p class="card_text card_text_one"><?php the_field('card_text1');?></p>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card_c">
                <img src="<?php the_field('card_image2');?>" alt="card-image" class="card_img">
                <div class="card-content">
                    <p class="card_text car_text_center"><?php the_field('card_text2');?></p>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card_c">
                <img src="<?php the_field('card_image3');?>" alt="card-image" class="card_img">
                <div class="card-content">
                    <p class="card_text card_text_last"><?php the_field('card_text3');?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('innendeko');?>
