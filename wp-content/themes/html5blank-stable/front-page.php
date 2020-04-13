<?php get_header(); ?>
<body>
	<!---------------------------------------->
	<!---------------------------------------->
	<!--- DEVELOPPEMENT PAR NCP MULTIMEDIA --->
	<!------https://ncpmultimedia.com/-------->
	<!------mail: ncpmedia21@gmail.com-------->
	<!---------------------------------------->
	<!----------------------------------------> 
    <div id="mainContainer" class="container">

        <!--------------------->
        <?php $herobg = get_field('hero_background');?>
        <section id="headerHero" style="background-image: url(<?php echo $herobg['url']; ?>);">
            <div class="columns col-9 centered">
                <header class="col-12">
                    <nav id="menuNav" class="column col-12 centered">

                        <div id="logoContainer">
                            <?php $headerlogo = get_field('logo', 'options'); ?>
                            <a href="#"><img id="footerlogo" src="<?php echo esc_url($headerlogo['url']); ?>" alt="<?php echo esc_attr($headerlogo['alt']); ?>" /></a>
                        </div>

                        <ul class="white">
                            <li><a href="#Enjeux">QUI SOMMES-NOUS ?</a></li>
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
                    <a class="button white-button" href="#Offres"><?php echo $cta_header['texte_cta']; ?></a>
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
                <div class="row columns">
                    <div>
                        <?php $references_1 = get_field('references_1');?>
                        <p><?php echo $references_1['titre']; ?></p>
                    </div>
                        <img src="<?php echo esc_url($references_1['logo_1']['url']); ?>"  />
                        <img src="<?php echo esc_url($references_1['logo_2']['url']); ?>"  /> 
                        <img src="<?php echo esc_url($references_1['logo_3']['url']); ?>"  />
                        <img src="<?php echo esc_url($references_1['logo_4']['url']); ?>"  />
                        <img src="<?php echo esc_url($references_1['logo_5']['url']); ?>"  />
                </div>
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
            <?php $who_why = get_field('who_why');?>

        
                <div class="row columns">
                    <div class="col-5">
                        <h2><?php echo $who_why['titre_1']; ?></h2>
                        <p><?php echo $who_why['description_1']; ?></p>
                    </div>

                    <div class="col-2 gutter"></div>

                    <div class="col-5">
                        <h2><?php echo $who_why['titre_2']; ?></h2>
                        <p><?php echo $who_why['description_2']; ?></p>
                        <p><?php echo $who_why['description_3']; ?></p>
                    </div>
                </div>

                <div class="row columns hybrid">

                    <div class="image-container col-3">
                        <img src="<?php echo esc_url($who_why['image']['url']); ?>"  />
                    </div>
    
                    <div class="col-1 gutter"></div>
                    <div class="list-container col-8 columns">
                        <div class="col-4">
                                <h4 class="yellow"> <?php echo $who_why['titre_liste_1']; ?></h4>

                                <ul>
                                    <?php if (have_rows('who_why_liste_1')) :
                                        while (have_rows('who_why_liste_1')) : the_row(); ?>
                                        <li><?php the_sub_field('element');?> </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                        </div>

                        <div class="col-4">
                        <h4 class="yellow"> <?php echo $who_why['titre_liste_2']; ?></h4>
                    
                                <ul>
                                    <?php if (have_rows('who_why_liste_2')) :
                                        while (have_rows('who_why_liste_2')) : the_row(); ?>
                                        <li><?php the_sub_field('element');?> </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                        </div>

                        
                        <div class="col-4">
                        <h4 class="yellow hide"> <?php echo $who_why['titre_liste_2']; ?></h4>
                                <ul>
                                    <?php if (have_rows('who_why_liste_3')) :
                                        while (have_rows('who_why_liste_3')) : the_row(); ?>
                                        <li><?php the_sub_field('element');?> </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                        </div>
                    </div>


        
                </div>
            </div>
        </section>
        <!--------------->

        <!--------------->
        <section id="Offres">
            <div class="content col-9 centered black center-text">
            <?php $nos_offres = get_field('nos_offres');?>
                <h2 class="light"><?php echo $nos_offres['titre']; ?></h2>
                <p><?php echo $nos_offres['texte_1']; ?></p>
                <p><?php echo $nos_offres['texte_2']; ?></p>
                <p><?php echo $nos_offres['texte_3']; ?></p>
            </div>
        
        </section>
    
        <!--------------->
        <section id="Offre1" class="section-offre">
        <div id="Placeholder"><div class="triangle"></div></div>
        <?php $offre1 = get_field('contenu_offre_1');?>

            <div class="content offre center-text">
                <h4> OFFRE #1 </h4>

                    <h3 class="light paint paint-white"><?php echo $offre1['titre']; ?></h3>
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


                <a class="button black-button" href="#Contact"><?php echo $offre1['texte_cta']; ?></a>

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

                <h3 class="light paint paint-yellow"><?php echo $offre2['titre']; ?></h3>
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

                <a class="button black-button" href="#Contact"><?php echo $offre2['texte_cta']; ?></a>

            </div>
        </section>
        <!--------------->

        <!--------------->
        <section id="Offre3" class="section-offre">
        <?php $offre3 = get_field('contenu_offre_3');?>

            <div class="content offre center-text">

                <h4> OFFRE #3 </h4>

                    <h3 class="light paint paint-yellow"><?php echo $offre3['titre']; ?></h3>
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

                <a class="button black-button" href="#Contact"><?php echo $offre3['texte_cta']; ?></a>

            </div>

            <div class="offre image-container">
                <img src="<?php echo esc_url($offre3['image']['url']); ?>"  />
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

                <h4> OFFRE #4 </h4>

                    <h3 class="light paint paint-white"><?php echo $offre4['titre']; ?></h3>
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

                <a class="button black-button" href="#Contact"><?php echo $offre4['texte_cta']; ?></a>

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
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_2']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_3']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_4']['url']); ?>"  /></div>
                </div>

                <div class="row columns container-logo">
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_5']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_6']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_7']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_8']['url']); ?>"  /></div>
                </div>

                <div class="row columns container-logo">
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_9']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_10']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_11']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_12']['url']); ?>"  /></div>
                </div>

                <div class="row columns container-logo">
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_13']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_14']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_15']['url']); ?>"  /></div>
                    <div class="col-3"><img src="<?php echo esc_url($reussite['logo_16']['url']); ?>"  /></div>
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

        <!----------------------------------->
        <section id="Contact">
                <div class="content column col-9 centered">

                    <div class="row columns">
                        <div class="col-6 centered text-center">
                            <h3 class="light"><?php echo get_field('titre_contact'); ?><h3>
                        </div>
                    </div>

                    <div class="columns">
                        <?php echo get_field('contact_form'); ?>
                    </div>
                </div>
            </section>
            <!----------------------------------->

        <!--------------->
        <footer id="Footer">
            <div class="content col-9 centered">
                <nav>
                    <ul class="white">
                        <li><a href="#Enjeux">QUI SOMMES-NOUS ?</a></li>
                        <li><a href="#Offres">NOS OFFRES</a></li>
                        <li><a href="#Forces">NOS FORCES</a></li>
                        <li><a href="#Contact">CONTACT</a></li>
                    </ul>
                </nav>

                <div id="footerElements">
                        <?php $footerlogo = get_field('logo_footer', 'options'); ?>
                        <a href="#"><img id="footerlogo" src="<?php echo esc_url($footerlogo['url']); ?>" alt="<?php echo esc_attr($footerlogo['alt']); ?>" /></a>
                        <p>© Braaxe - Tous droits reservés</p>
                </div>

            </div>
        </footer>
        <!--------------->


    </div>
</body>

</html>