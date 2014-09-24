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
        
        <?php 



        
        $the_query = new WP_Query('pagename=informations');

        if($the_query->have_posts()):
          
          while($the_query->have_posts()):$the_query->the_post();
            echo the_content();

          endwhile;
        
        endif;

        ?>

       

        <?php get_footer(); ?>