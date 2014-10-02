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
          
          </nav>
        </header>
        
        <div class="container clearfix">

          <?php $projets = new WP_Query(array(
                        'pagename' => 'informations',
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $image = get_field('photo'); ?>
        <section>
          <div class="intro with">
            <h3 class="visuallyhidden"> Introduction </h3>
            <blockquote>« <?php the_field('intro') ?> »</blockquote>
          </div>
        </section>
        <section class="titresans">

          
          <div class="bio">

            <span class="portrait">
              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </span>

             <h4> Soyons brefs : </h4>
            <p> <?php the_field('para1') ?> </p>
            <p> <?php the_field('para2') ?> </p>
            <p> <?php the_field('para3') ?> </p>
            <h4> Rapide historique </H4>
            <ul>
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