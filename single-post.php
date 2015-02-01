<?php get_header(); ?>


     <?php while(have_posts()): the_post()?>
     <?php $banniere = get_field('banniere') ?>

    <header>
      <div class="header__cache"></div>
      <img class="header__illu" src="<?php echo $banniere['url'] ?>" alt="<?php echo $banniere['alt'] ?>"/>
      <div class="header__text header__text--usual article__titre">
        <h1 class="header__title"><?php the_field('titre') ?></h1>
        
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
        <div class="wrapper--large">

          <section>

            
            <div class="single-article">
              

              <?php the_field('contenu')?>
              <div class="article__tag">
                <?php $posttags = get_the_tags() ?>
                      <?php if ($posttags): ?>
                        <?php foreach($posttags as $tag): ?>
                            <a class="post__tag" href="<?php echo get_tag_link($tag->term_taxonomy_id) ?>" title="Articles tagués <?php echo $tag->name ?>"><?php echo $tag->name ?></a> 
                        <?php endforeach ?>
                      <?php endif; ?>
              </div>

              
              
            </div>

             <?php endwhile; ?>
          
          
          
           
          </section>


       

        </div>
        
        <?php get_footer(); ?>
