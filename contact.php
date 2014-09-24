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
              <a href="about.html" title="Vers la page d'informations sur Axel Cardinaels">Informations</a>
            </li>
            <li>
              <a href="#" title="Vers la page de contact"  class="selected">Contact</a>
            </li>
          </ul>
          </nav>
        </header>
        <div class="container">

        
          <section class="titresans">

            <h3>Me dire bonjour !</h3>
            

            <div id="map-canvas">
            </div>

            <div class="messageform">
              <div class="intro">
              <blockquote>Des questions, une folle envie de me contacter ? Rien de plus simple en remplissant le petit formulaire si dessous !</blockquote>
            </div>
              <form method="post">
                <label class="visually-hidden" for="nom">Votre nom</label>
                <input type="text" name="nom" placeholder="Votre Nom"/>

                <label class="visually-hidden" for="email">Votre email</label>
                <input type="text" name="email" placeholder="Votre email"/>

                <label class="visuallyhidden" for="message">Votre nom</label>
                <textarea name="message">Votre message</textarea>
              </form>

            
          </section>


          



          
        </div>

        <?php get_footer(); ?>
       