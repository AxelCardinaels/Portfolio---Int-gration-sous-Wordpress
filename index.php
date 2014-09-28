

    <?php get_header(); ?>



    <header class="home">
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
          
          <ul class="items">
            <li>
              <a href="#" title="Vers la page d'acceuil" class="selected">Home</a>
            </li>
            <li>
              <a href="#" title="Vers la page regroupant mes travaux">Réalisations</a>
            </li>
            <li>
              <a href="html/blog.html" title="Vers le blog d'Axel Cardinaels">Blog</a>
            </li>
            <li>
              <a href="html/about.html" title="Vers la page d'informations sur Axel Cardinaels">Informations</a>
            </li>
            <li>
              <a href="html/contact.html" title="Vers la page de contact">Contact</a>
            </li>
          </ul>
          </nav>
        </header>
        <div class="container">

      
          <section>
            <div class="intro">

              <h3> Introduction </h3>
              <blockquote>« Passionné de design et traqueur de détails, je réalise des créations web à l’aide de technologies performantes telles que le HTML5, CSS3, Javascript et Php pour vous prodiguer des services de qualité. Je produis également diverses illustrations de temps à autre. »</blockquote>
            </div>
          </section>
          <section>

            <h3> Derniers projets publiés </h3>
            <div class="lasttravaux">
                <?php $projets = new WP_Query(array(
                        'post_type' => 'creations',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $image = get_field('vignette_du_projet'); ?>


               <a class="projets featured" href="html/energyandcool.html" title="Vers le projet <?php the_field('nom_du_projet') ?>">
                  <figure>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                 </figure>

                  <div>
                    <h4>
                     

                    <?php the_field('nom_du_projet') ?>

                    </h4>
                    <p>

                    <?php the_field('description_courte_du_projet') ?>

                  </p>

                  </div>
               </a>

                 <?php endwhile; ?>
                 <?php wp_reset_query(); ?>
   

               <a class="allproject" href="html/projets.html" title="Voir tous les projets">Voir les autres projets...</a>
            </div>


          </section>

          <section>

            <h3>Derniers articles du blogs et tweets</h3>
            <div class="postsblog">
               
    
             
              <div class="posts">
                  <span class="tagprojet">Nouveau projet</span> 
                  <div>
                <h4>Titre d'un post du blog</h4>
                
                <p>Description rapide du contenu que le visiteur retrouvera dans l'article</p>
              </div>
              </div>
            
               <div class="posts">
                  <span class="tagblog">Nouveau post sur le blog</span> 
                <div>
                <h4>Titre d'un post du blog</h4>
                <p>Description rapide du contenu que le visiteur retrouvera dans l'article</p>
                </div>
              </div>
           
               <div class="posts">
                     <span class="tagblog">Nouveau post sur le blog</span> 
                     <div>
                <h4>Titre d'un post du blog</h4>
                <p>Description rapide du contenu que le visiteur retrouvera dans l'article</p>
              </div>
              </div>
                
              <div class="twitter">
                <h4> Mes derniers tweets </h4>

                <div>
                  <p>dskfsdpgs</p>
                  <p>dskfsdpgs</p>
                </div>

              </div>

            </div>

          </section>
        </div>

         <?php get_footer(); ?>
