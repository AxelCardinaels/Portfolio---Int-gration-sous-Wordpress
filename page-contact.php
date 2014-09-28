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
        <div class="container">

        
          <section class="titresans">

            <h3>Me dire bonjour !</h3>
            
            <div class="map">
              <div id="map-canvas"></div>
               <div class="oupeye"><p> Je proviens d'Oupeye, près du centre ville de Liège !</p></div>
           </div>

            <div class="messageform">
              <div class="intro">
                <blockquote>Des questions, une folle envie de me contacter ? Rien de plus simple en remplissant le petit formulaire si dessous !</blockquote>
            </div>
              <form method="post">
                <label class="visuallyhidden" for="nom">Votre nom</label>
                <input type="text" name="nom" placeholder="Votre Nom"/>

                <label class="visuallyhidden" for="email">Votre email</label>
                <input type="text" name="email" placeholder="Votre email"/>

                <label class="visuallyhidden" for="message">Votre nom</label>
                <textarea name="message" placeholder="Votre message"></textarea>
              
                <input type="submit" value="Envoyer le message" class="allproject"/>
              </form>
            </div>

            
          </section>


          



          
        </div>

        <?php get_footer(); ?>
       