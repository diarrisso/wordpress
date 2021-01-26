
<section class="">
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
    <footer>
        <p> &copy;<a href=" <?php the_field('grow_link', 'option'); ?>"> <?php the_field('copyright', 'option'); ?></a> </p>
    </footer>
</section>
<script>
var checkbox = document.querySelector('#options-hoverpause-checkbox')
var glide = new Glide('.banner_slide', {
    hoverpause: checkbox.checked,
    type: 'carousel',
    autoplay: 8000,
    gap: 0,
    perView: 1,
    breakpoints: {
    1200: {
        perView: 1
    },
    800: {
        perView: 1
    }
    }
})
checkbox.addEventListener('change', function () {
    glide.update({
    hoverpause: checkbox.checked   })
})

glide.mount()
</script>
</body>
<?php wp_footer(); ?>

</html>
