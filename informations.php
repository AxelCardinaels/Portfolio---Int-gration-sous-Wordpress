 <?php get_header(); ?>
    
    <header>
       <video autoplay loop>
          <source src="../video/pluie.mp4" type="video/mp4"/>
           <source src="../video/pluie.webm" type="video/webm"/>
        </video>
      <div class="textheader">
        <h1>Axel Cardinaels,</h1>
        <h2>Dévelopeur web</h2>
      </div>
      <nav>
          <h3>Menu</h3>
          <ul class="items">
            <li>
              <a href="../index.html" title="Vers la page d'acceuil" >Home</a>
            </li>
            <li>
              <a href="#" title="Vers la page regroupant mes travaux">Réalisations</a>
            </li>
            <li>
              <a href="blog.html" title="Vers le blog d'Axel Cardinaels">Blog</a>
            </li>
            <li>
              <a href="#" title="Vers la page d'informations sur Axel Cardinaels" class="selected">Informations</a>
            </li>
            <li>
              <a href="contact.html" title="Vers la page de contact">Contact</a>
            </li>
          </ul>
          </nav>
        </header>
        
        <?php 

        if(have_posts()):
          while(have_posts()):the_post();
            the_content();


          endwhile;
        endif;

        ?>

        <?php get_footer(); ?>