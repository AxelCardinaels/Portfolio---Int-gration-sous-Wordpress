

    <?php get_header(); ?>



    <header class="header--home">
       <video class="header__video" autoplay loop>
          <source src="<?php echo get_template_directory_uri()?>/video/pluie.mp4" type="video/mp4"/>
          <source src="<?php echo get_template_directory_uri()?>/video/pluie.webm" type="video/webm"/>

        </video>
      <div class="header__text header__text--home">
        <h1 class="header__title">Axel Cardinaels,
          <span class="header__subtitle">Dévelopeur web</span>
        </h1>
      </div>
      <nav class="menu menu--home">
          <h3 class="visuallyhidden ">Menu</h3>
          <?php         
          $args = array(
            'theme_location'  => 'top',
            'menu'            => '',
            'container'       => 'ul',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu__list',
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
          </nav>
        </header>
        <div class="wrapper--large clearfix">

      
          <section>
            <div class="intro intro--spaced">

              <h3 class="visuallyhidden"> Introduction </h3>
              <blockquote>« Passionné de design et traqueur de détails, je réalise des créations web à l’aide de technologies performantes telles que le HTML5, CSS3, Javascript et Php pour vous prodiguer des services de qualité. Je produis également diverses illustrations de temps à autre. »</blockquote>
            </div>
          </section>
          <section class="clearfix inner section--decorated">

            <h3 class="section__title section__title--decorated"> Derniers projets publiés </h3>
            <div class="lasttravaux clearfix">
                <?php $projets = new WP_Query(array(
                        'post_type' => 'creations',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $image = get_field('vignette_du_projet'); ?>


               <a class="projets projets--featured" href="<?php the_permalink() ?>" title="Vers le projet <?php the_field('nom_du_projet') ?>">
                  <figure>
                    <img class="projets__small-illustration" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                 </figure>

                  <div class="projets__content">
                    <h4>
                     

                    <?php the_field('nom_du_projet') ?>

                    </h4>
                    <p>

                    <?php the_field('description_courte_du_projet') ?>

                  </p>

                  </div>
               </a>

                 <?php endwhile; ?>
                 <?php wp_reset_query(); ?>
   

               <a class="bouton" href="http://localhost/wordpress/realisations/" title="Voir tous les projets">Voir les autres projets...</a>
          

            </div>

         

          </section>

          <section class="clearfix section--decorated">

            <h3  class="section__title section__title--decorated">Derniers articles du blogs et tweets</h3>
            <div class="blog-featured">
             <?php $projets = new WP_Query(array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      <?php while($projets->have_posts()): $projets->the_post()?>
                     

          

    
             
              <div class="post post--featured">
                  <span class="featured-post__type type--<?php the_field('type')?>">Post du blog : <?php the_field('titre') ?></span> 
                  <div>
                 <a class="post__link" href ="<?php the_permalink() ?>"><h4 class="post__title"><?php the_field('titre') ?></h4>
                
                <p class="post__description"><?php the_field('description') ?></p></a>
              </div>
              </div>
            
                
           <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          </div>   
              <div id="twitter">
                <h4 class="visuallyhidden"> Mes derniers tweets </h4>
                <a class="twitter-timeline" href="https://twitter.com/AxelCardinaels" data-widget-id="516839973958328320">Tweets de @AxelCardinaels</a>

              </div>

            </div>

          </section>
        </div>

         <?php get_footer(); ?>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
