<?php get_header(); ?>


     <?php while(have_posts()): the_post()?>
     <?php $banniere = get_field('banniere') ?>

    <header>
      <div class="cache"></div>
      <img class="largeillu" src="<?php echo $banniere['url'] ?>" alt="<?php echo $banniere['alt'] ?>"/>
      <div class="textheader article__titre">
        <h1><?php the_field('titre') ?></h1>
        
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

            
            <div class="singlepost">
              

              <?php the_field('contenu')?>
              <div class="article__tag">
                <?php $posttags = get_the_tags() ?>
                      <?php if ($posttags): ?>
                        <?php foreach($posttags as $tag): ?>
                            <a class="tag" href="<?php echo get_tag_link($tag->term_taxonomy_id) ?>" title="Articles tagués <?php echo $tag->name ?>"><?php echo $tag->name ?></a> 
                        <?php endforeach ?>
                      <?php endif; ?>
              </div>

              
              
            </div>

             <?php endwhile; ?>
          
          
          
           
          </section>


       

        </div>
        
        <?php get_footer(); ?>
