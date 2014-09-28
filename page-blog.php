 <?php get_header(); ?>
    
    <header>
       <video autoplay loop>
          <source src="<?php echo get_template_directory_uri()?>/video/pluie.mp4" type="video/mp4"/>
           <source src="<?php echo get_template_directory_uri()?>/video/pluie.webm" type="video/webm"/>
        </video>
      <div class="textheader">
        <h1>Axel Cardinaels,</h1>
        <h2>Dévelopeur web</h2>
      </div>
      <nav>
          <h3>Menu</h3>
           <?php         
          $args = array(
            'theme_location'  => 'top',
            'menu'            => '',
            'container'       => 'ul',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'items',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'depth'           => 0,
            'walker'          => '');

          wp_nav_menu($args);

        ?>
        </header>
        <div class="container">

        
          <section class="articleslist">
            <h3>Liste des articles</h3>


            
            <div class="tri">
              <a href="#" title="Trier les articles par date" class="triselect">Chronologiquement</a>
              <a href="#" title="Trier les articles par tags">Par thème</a>
              <a href="#" title="Trier les articles par provenance">Par provenance</a>


            </div>

            <div class="allarticles">

              <?php $projets = new WP_Query(array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $date = get_field('date'); 
                      $dateParts = str_split($date,2);

                      $jour = $dateParts[0];
                      $mois = $dateParts[1];

                      switch ($mois) {
                        case 01:
                            $mois = 'janvier';
                            break;
                        case 02:
                            $mois = 'février';
                            break;
                        case 03:
                            $mois = 'mars';
                            break;
                        case 04:
                            $mois = 'avril';
                            break;
                        case 05:
                            $mois = 'mai';
                            break;
                        case 06:
                            $mois = 'juin';
                            break;
                        case 07:
                            $mois = 'juillet';
                            break;
                        case 08:
                            $mois = 'aout';
                            break;
                        case 09:
                            $moisok = 'septembre';
                            break;
                        case 10:
                            $mois = 'octobre';
                            break;
                        case 11:
                            $mois = 'novembre';
                            break;
                        case 12:
                            $mois = 'décembre';
                            break;
                    };


                      $annee = $dateParts[2].$dateParts[3];
                  ?>
                     

              <article class="singlearticle">
                <h4><?php the_field('titre') ?></h4>
                <p><?php the_field('description') ?></p>
                <div class="infosarticle">
                  <p>Le <?php echo $jour.' '.$mois.' '.$annee ?></p>
                  <a class="tag" href="#" title="Article du thème...">#Yolo</a>  
                  <a class="tag" href="#" title="Article du thème...">#Coast</a>
                </div>
              </article>

           <?php endwhile; ?>
          <?php wp_reset_query(); ?>

            </div>

            
          </section>


          



          
        </div>

        <?php get_footer(); ?>