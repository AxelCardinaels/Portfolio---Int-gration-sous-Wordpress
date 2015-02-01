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
        </header>
        <div class="wrapper--large clearfix">

        
          <section>
            <h3 class="section__title section__title--undecorated">Liste des articles</h3>


            
            <div class="tri">
              <a href="#" title="Trier les articles par date" class="triselect">Chronologiquement</a>
              <div class="categories__container">
              <ul class="categories__list">
                <?php $args = array(
                  'show_count'         => 0,
                  'number'             => 10,
                  'orderby'            => 'count',
                  'order'              => 'DESC',
                  'title_li'           => __( 'Par thèmes :' ),
                );
 
wp_list_categories( $args ); ?>
              </ul>
              </div>

            </div>



            <div class="blog-unfeatured">

              <?php $projets = new WP_Query(array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $date = get_field('date'); 
                      $dateParts = str_split($date,2);

                      $jour = $dateParts[0];
                      $mois = $dateParts[1];

                      $tablemois =['01' => 'janvier',
                      '02' => 'février',
                      '03' => 'mars',
                      '04' => 'avril',
                      '05' => 'mai',
                      '06' => 'juin',
                      '07' => 'juillet',
                      '08' => 'aout',
                      '09' => 'septembre',
                      '10' => 'octobre',
                      '11' => 'novembre',
                      '12' => 'décembre'];

                      


                      $annee = $dateParts[2].$dateParts[3];
                  ?>
                     
              
              <article class="post post--unfeatured">
                <a class="post__link" href ="<?php the_permalink() ?>">
                  <h4 class="post__title"><?php the_field('titre') ?></h4>
                  <p class="post__description"><?php the_field('description') ?></p>
                </a>
                <div class="post__infos">
                  <p class="post__date">Le <?php echo $jour.' '.$tablemois[$mois].' '.$annee ?></p>
                  <?php $posttags = get_the_tags() ?>
                    <?php if ($posttags): ?>
                      <?php foreach($posttags as $tag): ?>
                          <a class="post__tag" href="<?php echo get_tag_link($tag->term_taxonomy_id) ?>" title="Articles tagués <?php echo $tag->name ?>"><?php echo $tag->name ?></a> 
                      <?php endforeach ?>
                    <?php endif; ?>
                </div>
              </article>

           <?php endwhile; ?>
          <?php wp_reset_query(); ?>

            </div>

            
          </section>


          



          
        </div>

        <?php get_footer(); ?>