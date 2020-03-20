<?php get_header(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Horizon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/zuv7hqs.css">
    <link rel="stylesheet" src="main.css">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick-theme.css'; ?>">

    <script src="<?php echo get_template_directory_uri() . '/js/jquery-3.4.1.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/slick.min.js'; ?>"></script>
</head>

<body>
    <div id="mainContainer" class="container">

        <!--------------------->
        <section id="headerHero">
            <div class="columns col-9 centered">
                <header class="col-12">
                    <nav id="menuNav" class="column col-12 centered">

                        <div id="logoContainer">
                            <?php $headerlogo = get_field('logo', 'options'); ?>
                            <a href="#"><img id="footerlogo" src="<?php echo esc_url($headerlogo['url']); ?>" alt="<?php echo esc_attr($headerlogo['alt']); ?>" /></a>
                        </div>

                        <ul class="white">
                            <li><a href="#">QUI SOMMES-NOUS ?</a></li>
                            <li><a href="#Offres">NOS OFFRES</a></li>
                            <li><a href="#Forces">NOS FORCES</a></li>
                            <li><a href="#Contact">CONTACT</a></li>
                        </ul>
                    </nav>
                </header>

                <div class="content col-12 centered">
                    <h1 class="yellow"><?php echo get_field('titre_header'); ?></h1>
                    <p class="white"><?php echo get_field('description_header'); ?></p>

                    <?php $cta_header = get_field('cta_header');?>
                    <a class="button white-button" href="<?php echo $cta_header['lien_cta']; ?>"><?php echo $cta_header['texte_cta']; ?></a>
                </div>

                <div class="col-9 centered" id="bottomHeaderBanner">
                    <?php $garanties = get_field('garanties_header');?>
                        <div class="columns center-text">
                            <p class="col-4 italic"><?php echo $garanties['element_1']; ?></p>
                            <p class="col-4 italic"><?php echo $garanties['element_2']; ?></p>
                            <p class="col-4 italic"><?php echo $garanties['element_3']; ?></p>
                        </div>
                </div>
            </div>
        </section>
        <!--------------------->


        <!--------------------->
        <section id="References1">
            <div class="content col-9 centered white">
            <?php $references_1 = get_field('references_1');?>
            <p><?php echo $references_1['titre']; ?></p>
            <img src="<?php echo esc_url($references_1['logo_1']['url']); ?>"  />
            <img src="<?php echo esc_url($references_1['logo_2']['url']); ?>"  />
            <img src="<?php echo esc_url($references_1['logo_3']['url']); ?>"  />
            <img src="<?php echo esc_url($references_1['logo_4']['url']); ?>"  />
            <img src="<?php echo esc_url($references_1['logo_5']['url']); ?>"  />
            </div>
        </section>
        <!--------------------->

        <!--------------------->
        <section id="Enjeux">
            <div class="content">
                <?php $enjeux = get_field('enjeux');?>
                    <h2 class="light"><?php echo $enjeux['titre']; ?></h2>
                    <p></p>
                    <p class="light"><?php echo $enjeux['sous_titre']; ?></p>
                    <p ><strong><?php echo $enjeux['tagline']; ?></strong></p>
            </div>
            <div class="image-container">
                <img src="<?php echo esc_url($enjeux['image']['url']); ?>"  />
            </div>
        </section>
        <!--------------------->

        <!--------------------->
        <section id="Cibles">
            <div class="content col-9 centered white">

                <div class="columns">
                    <div class="col-5">
                        <h2>Pour quoi ?</h2>
                        <p>Parce qu’un <strong>point de vue extérieur</strong> est souvent le bienvenu, mais qu’une
                            marque n’a pas
                            forcément besoin d’aide opérationnelle, nous mettons notre expertise stratégique au service
                            de vos enjeux etobjectifs sous forme de workshops, consulting, formations, livrables…</p>
                    </div>

                    <div class="col-2 gutter"></div>

                    <div class="col-5">
                        <h2>Pour qui ?</h2>
                        <p>Pour tous les décisionnaires Com et Marketing qui ont besoin de prendre
                            de la hauteur sur les sujets stratégiques. Pour les marques qui disposent
                            d’une agence mais qui ont besoin d’un oeil externe et expert.</p>

                        <p>Notre offre s’adresse aux : directions générales, directeurs du digital,
                            start-ups et entrepreneurs, décisionnaires marketing / communication
                            et chargés de communication.
                        </p>
                    </div>
                </div>

                <div class="columns">

                </div>
            </div>
        </section>
        <!--------------->

        <!--------------->
        <section id="Offres">
            <div class="content col-9 centered black center-text">
            <?php $nos_offres = get_field('nos_offres');?>
                <h2><?php echo $nos_offres['titre']; ?></h2>
                <p><?php echo $nos_offres['texte_1']; ?></p>
                <p><?php echo $nos_offres['texte_2']; ?></p>
                <p><?php echo $nos_offres['texte_3']; ?></p>
            </div>
        </section>
        
        <!--------------->
        <section id="Offre1" class="section-offre">
        <?php $offre1 = get_field('contenu_offre_1');?>

            <div class="content offre center-text">
                <h4> OFFRE #1 </h4>

                    <h3 class="light"><?php echo $offre1['titre']; ?></h3>
                    <p><?php echo $offre1['sous_titre']; ?></p>

                <h5>Offre</h5>

                    <p><?php echo $offre1['description']; ?></p>

                <h5>Objectifs</h5>

                <ul class="checklist">
                    <?php if( $offre1['objectif_1']) { ?>
                        <li><?php echo $offre1['objectif_1']; ?></li>
                    <?php } ?>
                    <?php if( $offre1['objectif_2']) { ?>
                        <li><?php echo $offre1['objectif_2']; ?></li>
                    <?php } ?>
                    <?php if( $offre1['objectif_3']) { ?>
                        <li><?php echo $offre1['objectif_3']; ?></li>
                    <?php } ?>
                    <?php if( $offre1['objectif_4']) { ?>
                        <li><?php echo $offre1['objectif_4']; ?></li>
                    <?php } ?>
                </ul>


                <a class="button black-button" href="<?php echo $offre1['lien_cta']; ?>"><?php echo $offre1['texte_cta']; ?></a>

            </div>
            <div class="offre image-container">
                <img src="<?php echo esc_url($offre1['image']['url']); ?>"  />
            </div>
        </section>
        <!--------------->
       
        <!--------------->
        <section id="Offre2" class="section-offre">
        <?php $offre2 = get_field('contenu_offre_2');?>

            <div class="offre image-container">
                <img src="<?php echo esc_url($offre2['image']['url']); ?>"  />
            </div>

            <div class="content offre center-text">

                <h4> OFFRE #2 </h4>

                    <h3 class="light"><?php echo $offre2['titre']; ?></h3>
                    <p><?php echo $offre2['sous_titre']; ?></p>

                <h5>Offre</h5>

                <ul>
                    <?php if( $offre2['element_1']) { ?>
                        <li> - <?php echo $offre2['element_1']; ?></li>
                    <?php } ?>
                    <?php if( $offre2['element_2']) { ?>
                        <li> - <?php echo $offre2['element_2']; ?></li>
                    <?php } ?>
                    <?php if( $offre2['element_3']) { ?>
                        <li> - <?php echo $offre2['element_3']; ?></li>
                    <?php } ?>
                    <?php if( $offre2['element_4']) { ?>
                        <li> - <?php echo $offre2['element_4']; ?></li>
                    <?php } ?>
                </ul>

                <h5>Objectifs</h5>

                <ul class="checklist">
                    <?php if( $offre2['objectif_1']) { ?>
                        <li><?php echo $offre2['objectif_1']; ?></li>
                    <?php } ?>
                    <?php if( $offre2['objectif_2']) { ?>
                        <li><?php echo $offre2['objectif_2']; ?></li>
                    <?php } ?>
                    <?php if( $offre2['objectif_3']) { ?>
                        <li><?php echo $offre2['objectif_3']; ?></li>
                    <?php } ?>
                    <?php if( $offre2['objectif_4']) { ?>
                        <li><?php echo $offre2['objectif_4']; ?></li>
                    <?php } ?>
                </ul>

                <a class="button black-button" href="<?php echo $offre2['lien_cta']; ?>"><?php echo $offre2['texte_cta']; ?></a>

            </div>
        </section>
        <!--------------->

        <!--------------->
        <section id="Offre3" class="section-offre">
        <?php $offre3 = get_field('contenu_offre_3');?>

            <div class="content offre center-text">

                <h4> OFFRE #2 </h4>

                    <h3 class="light"><?php echo $offre3['titre']; ?></h3>
                    <p><?php echo $offre3['sous_titre']; ?></p>

                <h5>Offre</h5>

                <ul>
                    <?php if( $offre3['element_1']) { ?>
                        <li> -<?php echo $offre3['element_1']; ?></li>
                    <?php } ?>
                    <?php if( $offre3['element_2']) { ?>
                        <li> -<?php echo $offre3['element_2']; ?></li>
                    <?php } ?>
                    <?php if( $offre3['element_3']) { ?>
                        <li> -<?php echo $offre3['element_3']; ?></li>
                    <?php } ?>
                    <?php if( $offre3['element_4']) { ?>
                        <li> -<?php echo $offre3['element_4']; ?></li>
                    <?php } ?>
                </ul>

                <h5>Objectifs</h5>

                <ul class="checklist">
                    <?php if( $offre3['objectif_1']) { ?>
                        <li><?php echo $offre3['objectif_1']; ?></li>
                    <?php } ?>
                    <?php if( $offre3['objectif_2']) { ?>
                        <li><?php echo $offre3['objectif_2']; ?></li>
                    <?php } ?>
                    <?php if( $offre3['objectif_3']) { ?>
                        <li><?php echo $offre3['objectif_3']; ?></li>
                    <?php } ?>
                    <?php if( $offre3['objectif_4']) { ?>
                        <li><?php echo $offre3['objectif_4']; ?></li>
                    <?php } ?>
                </ul>

                <a class="button black-button" href="<?php echo $offre3['lien_cta']; ?>"><?php echo $offre3['texte_cta']; ?></a>

            </div>

            <div class="offre image-container">
                <img src="<?php echo esc_url($offre2['image']['url']); ?>"  />
            </div>

        </section>
        <!--------------->

        <!--------------->
        <section id="Offre4" class="section-offre">
        <?php $offre4 = get_field('contenu_offre_4');?>

            <div class="offre image-container">
                <img src="<?php echo esc_url($offre4['image']['url']); ?>"  />
            </div>

            <div class="content offre center-text">

                <h4> OFFRE #2 </h4>

                    <h3 class="light"><?php echo $offre4['titre']; ?></h3>
                    <p><?php echo $offre4['sous_titre']; ?></p>

                <h5>Offre</h5>

                <ul>
                    <?php if( $offre4['element_1']) { ?>
                        <li> - <?php echo $offre4['element_1']; ?></li>
                    <?php } ?>
                    <?php if( $offre4['element_2']) { ?>
                        <li> - <?php echo $offre4['element_2']; ?></li>
                    <?php } ?>
                    <?php if( $offre4['element_3']) { ?>
                        <li> - <?php echo $offre4['element_3']; ?></li>
                    <?php } ?>
                    <?php if( $offre4['element_4']) { ?>
                        <li> - <?php echo $offre4['element_4']; ?></li>
                    <?php } ?>
                </ul>

                <h5>Objectifs</h5>

                <ul class="checklist">
                    <?php if( $offre4['objectif_1']) { ?>
                        <li><?php echo $offre4['objectif_1']; ?></li>
                    <?php } ?>
                    <?php if( $offre4['objectif_2']) { ?>
                        <li><?php echo $offre4['objectif_2']; ?></li>
                    <?php } ?>
                    <?php if( $offre4['objectif_3']) { ?>
                        <li><?php echo $offre4['objectif_3']; ?></li>
                    <?php } ?>
                    <?php if( $offre4['objectif_4']) { ?>
                        <li><?php echo $offre4['objectif_4']; ?></li>
                    <?php } ?>
                </ul>

                <a class="button black-button" href="<?php echo $offre4['lien_cta']; ?>"><?php echo $offre4['texte_cta']; ?></a>

            </div>
        </section>
        <!--------------->

        <!--------------->
        <section id="Reussite">
        <?php $reussite = get_field('reussite');?>

            <div class="content col-9 centered">

            <div class="row columns container-title">
                <div class="col-8">
                    <h2 class="white light italic"><?php echo $reussite['titre']; ?></h2>
                </div>
            </div>

                <div class="row columns container-logo">
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                </div>

                <div class="row columns container-logo">
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                </div>

                <div class="row columns container-logo">
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                </div>

                <div class="row columns container-logo">
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_1']['url']); ?>"  /></div>
                </div>
            
            </div>
        </section>
        <!--------------->

        <!--------------->
        <section id="Forces">
            <div class="content col-9 centered">

                <h3 class="light"><?php echo get_field('titre_forces'); ?></h3>

                <div class="row columns">

                    <div class="col-4 text-content">
                    <?php $force1 = get_field('force_1');?>
                        <h4><?php echo $force1['titre']; ?></h4>
                        <p><?php echo $force1['description']; ?></p>
                    </div>

                    <div class="col-4 text-content">
                    <?php $force2 = get_field('force_2');?>
                        <h4><?php echo $force2['titre']; ?></h4>
                        <p><?php echo $force2['description']; ?></p>
                    </div>

                    <div class="col-4 text-content">
                    <?php $force3 = get_field('force_3');?>
                        <h4><?php echo $force3['titre']; ?></h4>
                        <p><?php echo $force3['description']; ?></p>
                    </div>

 
                </div>

            </div>
            </section>
            <!--------------->

        
        <!--------------->
        <section id="Contact">
            <div class="content col-9 centered">

            </div>
        </section>
        <!--------------->

        <!--------------->
        <footer id="Footer">
            <div class="content col-9 centered">
                <nav>
                    <ul class="white">
                        <li><a href="#">QUI SOMMES-NOUS</a></li>
                        <li><a href="#">NOS OFFRES</a></li>
                        <li><a href="#">NOS FORCES</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </nav>

            </div>
        </footer>
        <!--------------->


    </div>
</body>

</html>