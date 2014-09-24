

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
               <a class="projets" href="html/energyandcool.html" title="Vers le projet energy and cool.be">
                  <figure>
                    <img src="<?php echo get_template_directory_uri()?>/img/energyandcool.png" alt="Projet Energy and cool"/>
                 </figure>

                  <div>
                    <h4>EnergyAndCool.be</h4>
                    <p> Site réalisé pour la société Energy And Cool, une société visant à aider à la gestion du stress en entreprise</p>

                  </div>
               </a>
               <a class="projets" href="html/cbseraing.html" title="Vers le projet CbSeraing.be">
                  <figure>
                    <img src="<?php echo get_template_directory_uri()?>/img/cbseraing.png" alt="Projet CbSeraing.be"/>
                  </figure>


                   <div>
                    <h4>CbSeraing.be</h4>
                    <p> Site réalisé pour le comité de Baptème de Seraing, un comité de guindaille estudiantin.</p>
            
                  </div>
              </a>

               <a class="projets" href="html/irc.html" title="Vers le projet Concept d'un chat irc">
                  <figure>
                    <img src="<?php echo get_template_directory_uri()?>/img/irc.png" alt="Projet Concept d'un chat irc"/>
                  </figure>

                  <div>
                    <h4>Concept de chat IRC</h4>
                    <p>Etant un utilisateur régulier d'un chat IRC, je me suis pris à imaginer le miens..</p>
            
                  </div>
               </a>
               <a  class="projets" href="html/macintosh.html" title="Vers le projet illustration d'un Macintosh en flat Design">
                  <figure>
                    <img src="<?php echo get_template_directory_uri()?>/img/macintosh.png" alt="Projet illustration d'un Macintosh en Flat Design"/>
                  </figure>

                   <div>
                    <h4>Illustration d'un Macintosh en Flat Design</h4>
                    <p>Pour les 25 ans du mac, j'ai donc décidé de réaliser cette petite illustration...</p>
            
                  </div>
              </a>

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
