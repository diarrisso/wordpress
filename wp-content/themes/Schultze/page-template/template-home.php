<?php 
/**
 *   Template Name: Home 

*/ 

if ( is_front_page() ) :
    get_header();
else :
    get_header();
endif;

?>
    <main>
        <div class="container-slide">
            <div class="banner_slide" id="options-hoverpause">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide" >
                            <div class="banner-image-block">
                                <img src="<?php echo get_template_directory_uri();?>/img/carousel-img.jpg" alt="home-image-slide">
                                <div class="banner-image-text">
                                    <h4>Kunst  ist  Freiheit.</h4>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="banner-image-block">
                            <img src="<?php echo get_template_directory_uri();?>/img/carousel-img.jpg" alt="home-image-slide">
                                <div class="banner-image-text">
                                    <h4>Kunst  ist  Freiheit.</h4>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="banner-image-block">
                            <img src="<?php echo get_template_directory_uri();?>/img/carousel-img.jpg" alt="home-image-slide">
                                <div class="banner-image-text">
                                    <h4>Kunst  ist  Freiheit.</h4>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="banner-image-block">
                            <img src="<?php echo get_template_directory_uri();?>/img/carousel-img.jpg" alt="home-image-slide">
                                <div class="banner-image-text">
                                    <h4>Kunst  ist  Freiheit.</h4>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
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
        <div class="traume-text-block_container">
            <h3>(T)RÄUME INSZENIEREN</h3>
            <p class="heading-text">
                „Raumausstattung sollte die gleiche Aufmerksamkeit bekommen wie
                Kleiderkauf, denn die Räume in denen Sie leben sind wie eine zweite Haut.“
            </p>
            <div class="traume-text-block-items">
                <div>
                    Wenn wir uns neu einrichten wollen sollten wir uns
                    zunächst fragen, wie möchte ich mich in meinem
                    Zuhause fühlen? Brauche ich Anregung und Leben-digkeit
                    oder möchte ich Ruhe und Entspannung?
                </div>
                <div class="margin-custom">
                    Was möchte ich in den einzelnen Räumen tun und
                    wie werde ich sie nutzen wollen? Viele Aspekte die
                    bedacht werden müssen und genau dabei möchte
                    ich Ihnen behilfl ich sein und zur Seite stehen.
                </div>
            </div>
        </div>
    </section>
    <!--Galerie Link -->
    <section class="section-galerie-block">
        <div class="section-galerie-block-container">
            <div class="container_img">
                <img src="<?php echo get_template_directory_uri();?>/img/galerie-section-1.jpg" alt="home-galerie-image">
            </div>
            <div class="container_img">
                <img src="<?php echo get_template_directory_uri();?>/img/galerie-link3.jpg" alt="home-galerie-image">
            </div>
            <div class="container_img">
                <img src="<?php echo get_template_directory_uri();?>/img/galerie-link.jpg" alt="home-galerie-image">
            </div>
        </div>
        <div class="block-link-galerie">
            <p>Wie könnte Ihr Raum aussehen? Verschaffen Sie sich einen kleinen Eindruck davon.</p>
            <a href="/galerie.html" class="btn btn-style btn-style_galerie">GALERIE <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon transform"></a> 
        </div>
    </section>
    <!-- About link -->
    <section class="section-about-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="section-about-block-image">
                        <img src="<?php echo get_template_directory_uri();?>/img/schultze-about.jpg" alt="Schultze-dietlind" class="section-about-block_img">
                    </div>
                </div>
                <!-- <div></div> -->
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="section-about-block-text">
                        <h3>Dietlind Schultze</h3>
                        <p>
                            Mit mehr als 30 Jahren Berufserfahrung
                            kümmere ich mich um die bestmögliche
                            Inszenierungs Ihres Zuhauses.
                        </p>
                        <p>
                            Aus dem Gespräch mit dem Kunden entsteht
                            in meinem Kopf ein Entwurf für den Raum,
                            der zu dem Menschen passt, der in ihm lebt.
                        </p>
                            <a href="./about.html" class="  btn btn-style btn-home">ÜBER MICH 
                                <img src=" <?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon btn-icon-about">
                            </a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seeler section-->
    <div class="block-seeler">
        <div class="block-seeler-bg">
            <h4> Der Seele ein Zuhause schaffen.</h4>
            
        </div>
    </div>
    <!-- section stoffe und innendeko -->
    <div class="block-stoffe-dekoration">
        <div class="container">
            <div class="row justify-content-center  aligne-items-center ">
                <div class=" col-12 col-md-12 col-lg-4">
                    <div class="block-soffe-text">
                        <h5>STOFFE & <br> INNENDEKORATION</h5>
                        <p>
                            Die Wirkung eines Raumes kann eine Wohltat für Körper und Seele sein. Farben und Txtilien lassen
                            eine Wohnung lebendig werden und wecken be-stimmte Emotionen und Gefühle. 
                        </p>
                    </div>
                </div>
                <div class=" col-12 col-md-12 col-lg-4">
                    <div class="container-img-stoffe">
                        <img src="<?php echo get_template_directory_uri();?>/img/soffe-img.jpg" alt="stoffe-image">
                    </div>
                    <a href="" class="  btn btn-style btn-style_stoffe">STOFFE <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon"></a>   
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="container-img-innendeko">
                        <img src="<?php echo get_template_directory_uri();?>/img/innendeko-img.jpg" alt="innendeko-image" class="container-img-innendeko_img" >
                    
                            <a href="" class="  btn btn-style btn-style_innendeko">Innendeko<img src=" <?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon"></a> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- kontakt -->
    <section class="block-kontakt-link">
        <div class="container"
        >
            <div class="block-kontakt-link_items">
                <h5>LASSEN SIE UNS IHRE RÄUME GESTALTEN!</h5>
                <P>
                    Vereinbarens Sie jetzt eine Beratungstermin mit mir und lassen sich individuell beraten.
                    Wir finden eine Lösung ihr zuhause bestmöglich in szene zu setze und Ihre Lieblingsstücke mit
                    einszubinden.
                </P>
                <a href="./kontakt.html" class="  btn btn-style">KONTAKT <img src="<?php echo get_template_directory_uri();?>/img/link-flech.png" alt="icon-btn" class="btn-icon"></a>   
            </div>
        </div>
    </section>

    <?php
// if ( is_home() ) :
//     get_footer('block-footer' );
// elseif ( is_404() ) :
//     get_footer( '404' );
// else :
//     get_footer();
// endif;
?>
     <?php get_footer() ?>  	

