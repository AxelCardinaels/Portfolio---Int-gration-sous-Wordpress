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
        <div class="container clearfix">

        
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

                      $tablemois =['01' => 'janvier',
                      '02' => 'février',
                      '03' => 'mars',
                      '04' => 'avril',
                      '05' => 'mai',
                      '06' => 'juin',
                      '07' => 'juillet',
                      '08' => 'aout',
                      '09' => 'septembre',
                      '10' => 'octobre',
                      '11' => 'novembre',
                      '12' => 'décembre'];

                      


                      $annee = $dateParts[2].$dateParts[3];
                  ?>
                     
              
              <article class="singlearticle">
                <a class="linkarticle" href ="<?php the_permalink() ?>">
                  <h4><?php the_field('titre') ?></h4>
                  <p><?php the_field('description') ?></p>
                </a>
                <div class="infosarticle">
                  <p>Le <?php echo $jour.' '.$tablemois[$mois].' '.$annee ?></p>
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