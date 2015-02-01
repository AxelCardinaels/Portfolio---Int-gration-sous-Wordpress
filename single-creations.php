<?php get_header(); ?>


     <?php while(have_posts()): the_post()?>
     <?php $banniere = get_field('banniere') ?>
     <?php $bigimage = get_field('image_principale') ?>
     <?php $outils = get_field('outils') ?>

    <header>
      <div class="header__cache"></div>
      <img class="header__illu" src="<?php echo $banniere['url'] ?>" alt="<?php echo $banniere['alt'] ?>"/>
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
        <div itemscope itemtype="http://schema.org/CreativeWork" class="wrapper--large clearfix">


        
      
                     
           <section>
            <div class="intro intro--spaced">

              <h3 class="visuallyhidden"> Introduction </h3>
              <blockquote itemprop="name">« <?php the_field('nom_du_projet') ?> »</blockquote>
            </div>
          </section>

          <section>

            <div class="projet--single">
            <span class="clearfix">
              <img itemprop="image" class="projet__illustration--large" src="<?php echo $bigimage['url'] ?>" alt="<?php echo $bigimage['alt'] ?>"/>
            </span>
            <div itemprop="description" class="projet__texte">
              <?php the_field('contenu')?>
            </div>
            <div class="projet__outils">
            <h4 class="outils__title"> Outils utilisés</H4>
            
            <ul class="outils__list">

              <?php foreach($outils as $outil): ?>
              <li class="outils__item"><img class="outils__icon" src="<?php echo get_template_directory_uri()?>/img/<?php echo $outil ?>.png" alt="<?php echo $outil ?>"/></li>
            <?php endforeach ?>
            </ul>
          </div>
          
            <?php endwhile; ?>


       

        </div>
        
        <?php get_footer(); ?>
