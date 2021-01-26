
<section class="about-footer">
    <div class="container">
        <div class="block-footer-content">
            <div class="block-footer-img">
            <img src=" <?php the_field('footer_logo', 'option'); ?>" alt="logo-footer" >
            </div>
            <div>
            <?php wp_nav_menu( array(
                'theme_location'    => 'footer',
                'container'         => false,
                'menu_class'        => 'block-footer-content_link menu',
                ) );
                
                ?>
            </div>
        </div>
        </div>
    <footer> <p> &copy;<a href=" <?php the_field('grow_link', 'option'); ?>"> <?php the_field('copyright', 'option'); ?></a> </p></footer>
</section>
</body>
</html>
<?php wp_footer(); ?>
