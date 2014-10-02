<?php get_header(); ?>


     <?php while(have_posts()): the_post()?>
     <?php $banniere = get_field('banniere') ?>
     <?php $bigimage = get_field('image_principale') ?>
     <?php $outils = get_field('outils') ?>

    <header>
      <div class="cache"></div>
      <img class="largeillu" src="<?php echo $banniere['url'] ?>" alt="<?php echo $banniere['alt'] ?>"/>
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


        
      
                     
           <section>
            <div class="intro with">

              <h3 class="visuallyhidden"> Introduction </h3>
              <blockquote>« <?php the_field('nom_du_projet') ?> »</blockquote>
            </div>
          </section>

          <section class="titresans">

            <div class="singleprojet">
            <span class="illuprojet clearfix">
              <img src="<?php echo $bigimage['url'] ?>" alt="<?php echo $bigimage['alt'] ?>"/>
            </span>
            <div class="textes">
              

              <?php the_field('contenu')?>
            </div>
            <div class="outils">
            <h4> Outils utilisés</H4>
            
            <ul>

              <?php foreach($outils as $outil): ?>
              <li><img src="<?php echo get_template_directory_uri()?>/img/<?php echo $outil ?>.png" alt="<?php echo $outil ?>"/></li>
            <?php endforeach ?>
            </ul>
          </div>
          
            <?php endwhile; ?>


       

        </div>
        
        <?php get_footer(); ?>
