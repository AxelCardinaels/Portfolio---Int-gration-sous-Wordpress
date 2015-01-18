  <?php get_header(); ?>

    
    <header>
       <video class="header__video" autoplay loop>
          <source src="<?php echo get_template_directory_uri()?>/video/pluie.mp4" type="video/mp4"/>
           <source src="<?php echo get_template_directory_uri()?>/video/pluie.webm" type="video/webm"/>
        </video>
      <div itemscope itemtype="http://schema.org/Person" class="header__text header__text--usual">
        <h1 class="header__title">
          <span itemprop="name">Axel Cardinaels,</span>
          <span itemprop="jobTitle" class="header__subtitle">Dévelopeur web</span>
        </h1>
      </div>
      <nav class="menu menu--principal">
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

            <h3 class="section__title section__title--undecorated" > Tous les projets </h3>
            <div class="lasttravaux">
                <?php $projets = new WP_Query(array(
                        'post_type' => 'creations',
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $image = get_field('vignette_du_projet'); ?>


               <a itemscope itemtype="http://schema.org/CreativeWork" class="projets projets--listed" href="<?php the_permalink() ?>" title="Vers le projet <?php the_field('nom_du_projet') ?>">
                  <figure>
                    <img itemprop="image" class="projets__small-illustration" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                 </figure>

                  <div class="projets__content">
                      <h4 itemprop="name">
                     

                    <?php the_field('nom_du_projet') ?>

                    </h4>
                    <p itemprop="description">

                    <?php the_field('description_courte_du_projet') ?>

                  </p>

                  </div>
               </a>

                 <?php endwhile; ?>
                 <?php wp_reset_query(); ?>
            </div>


          </section>

        </div>
       
         <?php get_footer(); ?>