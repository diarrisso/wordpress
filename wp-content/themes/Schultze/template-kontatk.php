<?php
/**
*   Template Name: kontakt 
*/ 
get_header('kontakte'); ?>

<main class="block-kontakt-formular">
    <div class="kontakt-flex-container">
    <div class="kontakt-img"> <img src="<?php the_field('bilde_von_buro');?>" alt="bureau-image">
    </div>
    <div class="formular-flex-container">
        <div class="block-heading">
        <h3><?php the_field('kontakt_titel');?></h3>
        <p><?php the_field('kontakt_description');?></p>
    </div>
    <div class="block-adresse">
        <?php if( have_rows('kontakt_block_adresse') ): ?>
        <ul>
            <?php while( have_rows('kontakt_block_adresse') ): the_row(); 
            $list_adresse = get_sub_field('list_adresse');
        ?>
        <li><?= $list_adresse;?></li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>
		<?php if( have_rows('kontakt_info') ): ?>
        <ul>
		<?php while( have_rows('kontakt_info') ): the_row(); 
            $list_adresse_info = get_sub_field('list_phone_mail');
        ?>
            <li><?= $list_adresse_info;?> </li>
			<?php endwhile; ?>
        </ul>
		<?php endif; ?>
    </div>
    <div class="form-block">
        <div class="form-row">
        <?php echo do_shortcode( '[contact-form-7 id="371" title="Untitled"]' ); ?>
        </div>
    </div>
    </div>
</div>
</main>
<?php get_footer('kontakte');?>