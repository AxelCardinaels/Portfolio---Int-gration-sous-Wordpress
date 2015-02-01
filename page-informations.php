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
          <h2 class="visuallyhidden ">Menu</h2>

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

          <?php $projets = new WP_Query(array(
                        'pagename' => 'informations',
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $image = get_field('photo'); ?>
        <section>
          <div class="intro intro--spaced">
            <h3 class="visuallyhidden"> Introduction </h3>
            <blockquote>« <?php the_field('intro') ?> »</blockquote>
          </div>
        </section>
        <section>

          
          <div class="bio">

            <span class="bio__portrait">
              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </span>

             <h4 class="bio__title"> Soyons brefs : </h4>
              <div class="bio__biographie">
                <?php the_field('biographie')?>
              </div>
            <h4 class="bio__title"> Rapide historique </H4>
            <ul class="history__list">
              <li><?php the_field('item1') ?></li>
              <li><?php the_field('item2') ?></li>
              <li><?php the_field('item3') ?></Li>
              <li><?php the_field('item4') ?></li>
              <li><?php the_field('item5') ?></li>
              <li><?php the_field('item6') ?></li>
            </ul>
          </div>
            
            
         
          
        </section>
        
        
       <?php endwhile; ?>
        <?php wp_reset_query(); ?>
  </div>
       

        <?php get_footer(); ?>