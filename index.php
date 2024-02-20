<?php
$pageTitle="Garage Parrot";
require 'templates/header.php' ?>

    <main class="container">
      <section id="discover" class="discover-section">
        <h2><span>Renouveler</span></h2>
        <p class="section-subtitle discover-subtitle">le changement c'est maintenant</p>

        <div class="discover-content">
          <div class="text-discover-content">
            <h3>Et Si Votre Voiture Avait Fait Son Temps...</h3>
            <p name ="descriptions">
              La famille s'aggrandit? Votre voiture actuelle ne fait plus l'affaire? ou uniquement une envie de changement, NOUS SOMMES LA POUR VOUS. Avec notre service d'achat et de revente venez profitez d'occasions remis a neuf par notre equipe professionels et garanties afin de roulez l'esprit tranquille.
            </p>
            <a href="nav/occasions.php" class="discover-link">
              <span>Espace Occasions</span>
              <img src="ressources/right-chevron.svg" alt="right chevron" />
            </a>
          </div>
          <img
            src="ressources/vertical-porsche.jpg"
            alt="porsche car"
            class="discover-main-img"
          />
        </div>
      </section>

      <section class="side-apparition">
        <h2>Reparations</h2>
        <p class="section-subtitle">roulez en toute serenités</p>

        <div class="side-apparition-container">
          <div class="side-slide-content">
            <h3 name="prestation">Vidange</h3>
            <p name ="descriptions">
              garantissez a votre moteur de restez longtemps en vie en lui offrant une vidange
              
            </p>
            
          </div>
          <img name="illustrations" src="ressources/side-1.jpg" alt="porsche car" />
        </div>

        <div class="side-apparition-container">
          <img name="illustrations" src="ressources/side-2.jpg" alt="porsche car" />
          <div class="side-slide-content">
            <h3 name="prestation">Carrosserie</h3>
            <p>
              Votre voiture roule a merveille mais elle n'a plus l'eclat d'antan? Nous Sommes la pour ca!
            </p>
          </div>
        </div>

        <div class="side-apparition-container">
          <div class="side-slide-content">
            <h3 name="prestation">Climatisation</h3>
            <p name ="descriptions">
              Affrontez toute les temperatures exterieur aprés etre passé par notre service Climatisation 
            </p>
          </div>
          <img name="illustrations" src="ressources/side-3.jpg" alt="porsche car" />
        </div>
        <a href="nav/services.php" class="discover-link">
          <span>decouvrir Tout nos services</span>
          <img src="ressources/right-chevron.svg" alt="right chevron" />
        </a>
      </div>
      </section>
    </main>
    <footer>
    <?php
    require 'configuration/connexionBDD.php';
    require 'templates/footer.php'                
                    ?>
</footer>

    <script src="JS/app.js"></script>
  </body>
</html>
