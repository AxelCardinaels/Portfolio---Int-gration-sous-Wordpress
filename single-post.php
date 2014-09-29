<?php get_header(); ?>


     <?php while(have_posts()): the_post()?>
     <?php $banniere = get_field('banniere') ?>

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
        <div class="container">


        
      
                     
           <section>
            <div class="intro introabout">

              <h3> Introduction </h3>
              <blockquote>« <?php the_field('titre') ?> »</blockquote>
            </div>
          </section>

          <section class="titresans">

            
            <div class="singlepost">
              

              <p><?php the_field('para1')?></p>
              
              <?php for($i=2;$i<=10;$i++): ?>
               <p><?php echo $i ?> </p>
              <?php if(!empty(the_field('para'.$i))): ?>
               <p><?php the_field('para'.$i) ?></p>
              
              <?php else: ?>
             
              <?php endif; ?>
              
              <?php endfor; ?>
            </div>
          
          
          
            <?php endwhile; ?>
          </section>


       

        </div>
        
        <?php get_footer(); ?>
