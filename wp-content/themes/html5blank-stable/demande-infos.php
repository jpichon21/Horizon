<?php /* Template Name: demande informations  */  ?>
<?php get_header(); ?>
<section id ="infosForm">

    <div class="content col-9 centered">

        <div class="columns">
            <div class="col-5 text">
            <?php $infos = get_field('demande_infos');?>
                <h1><?php echo $infos['titre']; ?></h1>
                <p><?php echo $infos['description_1']; ?></p>
                <p><?php echo $infos['description_2']; ?></p>

                <h2><?php echo $infos['titre_2']; ?></h2>

                    <ul>
                    
                        <li> <?php echo $infos['element_1']; ?> </li>
                        <li> <?php echo $infos['element_2']; ?> </li>
                        <li> <?php echo $infos['element_3']; ?> </li>

                    </ul>

                <h4>Ils nous font confiance </h4>

                <div class="logos">
                    <div class="logo-container">
                        <img src="<?php echo esc_url($infos['logo_1']['url']); ?>"  />
                    </div>
                    <div class="logo-container">
                        <img src="<?php echo esc_url($infos['logo_2']['url']); ?>"  />
                    </div>
                    <div class="logo-container">
                        <img src="<?php echo esc_url($infos['logo_3']['url']); ?>"  />
                    </div>
                    <div class="logo-container">
                        <img src="<?php echo esc_url($infos['logo_4']['url']); ?>"  />
                    </div>
                        
                </div>
            </div>

            <div class="col-1 gutter"></div>

            <div class="col-5 form">
         
                        <?php echo get_field('contact_form_2'); ?>
            

            </div>
            
        </div>
    </div>

</section>