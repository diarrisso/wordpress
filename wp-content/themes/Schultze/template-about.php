<?php
/**
 *   Template Name: About
 * 
 * */ 
?>
<?php get_header('about')?>
<section class="main-about">
        <div class="banner_bg">
        </div>
</section>
<div class="about-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="about-container_img">
                    <img src="<?php the_field('bild_schultze'); ?>" alt="Dietlind-schultze" >
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="section-about-block-text  about-wrapper_text">
                    <h3><?php the_field('titeltext');?></h3>
                    <p><?php the_field('bild_text_description');?></p>
                    <p><?php the_field('bild_text_description_2');?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" kompetzen-block">
    <div class="kompetzen-block_item">
        <h5><?php the_field('kompetenzen_titel');?></h5>
        <?php if( have_rows('list') ): ?>
        <ul class="plan-liste">
        <?php while( have_rows('list') ): the_row(); ?>
            <li class="custome-first"><?php the_sub_field('list_kompetenzen'); ?></li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>     
    </div>
    <div class="container-kompetzen_img">
        <img src="<?php the_field('kompetenzen_bild');?>" alt="kompetzen-image">
    </div>
</section>
<!--Meeting info -->
<section class="meeting-block">
    <div class="container">
        <div class="block-kontakt-link_items about-kontakt-link_items ">
            <h5><?php the_field('gestalten_titel');?></h5>
            <P><?php the_field('gestalten_description');?></P>
        </div>
    </div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-6 feature-col">
            <div class="feature-content feature-content_one">
                <div> <?php the_field('kasten1');?></div>
            </div> 
        </div>
        <div class="col-lg-3 col-md-6 feature-col">
            <div class="feature-content feature-content_two">
                <div><?php the_field('kasten2');?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 feature-col">
            <div class="feature-content feature-content_three">
                <div><?php the_field('kasten3');?></div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 feature-col">
            <div class="feature-content feature-content_four">
                <div> <?php the_field('kasten4');?></div>
            </div>
        </div>
    </div>
    <?php 
    $link = get_field('kontakt_link');
    if( $link ): ?>
        <a class="btn btn-style" href="<?php echo esc_url( $link ); ?>">jetzt termin vereinbaren   
            <img src="<?= get_template_directory_uri();?>/img/link-flech.png" alt="btn-icon" class="btn-icon transform">
        </a>
    <?php endif; ?>
</div>
</section>
<?php get_footer('about'); ?>