<?php
  if (!empty($_POST))
  {
    //
    // Configuration de l'email
    //
    $destinataire   = 'axel.cardinaels@gmail.com';
    $objet      = 'AxelCardinaels.be - Vous avez un message';

    //
    // Initialisation de quelques variables
    //
    $message = [];
    extract($_POST);

    //
    // Vérifications et envoi de l'email
    //
    if ($nom && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $message)
    {
      $headers  = 'From :' . $nom . ' <' . $email . '>' . ' ';
      $headers .= 'Reply-To : ' . $email . ' ';
      $headers .= 'Le message : ' . $message;

      if(mail($destinataire, $objet, $headers))
      {
        $message = [
          'type'    => 'success',
          'message' => 'Le message a été correctement envoyé.'
        ];
      }
      else
      {
        $message = [
          'type'    => 'error',
          'message' => 'Le message n\'a pas été envoyé. Veuillez réessayer.'
        ];
      }
    }
    else
    {
      $message = [
        'type'    => 'error',
        'message' => 'Les champs marqués d\'une astérisque sont obligatoires.'
      ];
    }
  }

?>



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

        
          <section itemscope itemtype="http://schema.org/Person" class="vcard">

            <h3 class="section__title section__title--undecorated">Dites moi bonjour !</h3>

             <?php $projets = new WP_Query(array(
                        'pagename' => 'contact',
                       

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      
            
            <div class="map">
              <div id="map-canvas"></div>
               <div class="map__hoverlay"><p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="adr"><span itemprop="addressLocality" class="locality"> Je proviens d'<?php the_field('ville') ?></span><span itemprop="addressRegion" class="region">, près du centre ville de <?php the_field('region') ?> !</span></p></div>
           </div>

            <div class="form-container">
              <div class="intro form__intro">
                <h3 class="visuallyhidden"> Introuction </h3>
                <blockquote>« <?php the_field('intro') ?> »</blockquote>
              </div>

            <?php
              if (isset($message))
              {
                echo '<p class="' . $message['type'] . '">' . $message['message'] . '</p>';
              }
            ?>

              <p itemprop="name" class="fn visuallyhidden">Axel Cardinaels</p>
              <form method="post">
                <label class="visuallyhidden" for="nom">Votre nom</label>
                <input type="text" name="nom" placeholder="Votre nom"/>

                <label class="visuallyhidden" for="email">Votre email</label>
                <input type="text" name="email" placeholder="Votre email"/>

                <label class="visuallyhidden" for="message">Votre nom</label>
                <textarea name="message" placeholder="Votre message"></textarea>
              
                <input type="submit" value="Envoyer le message" class="bouton"/>
              </form>
            </div>
            


         <?php endwhile; ?>
        <?php wp_reset_query(); ?>
            
          </section>


          


          
        </div>

        <?php get_footer(); ?>
       