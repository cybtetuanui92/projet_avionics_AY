<?php
  require_once 'header.php';
?>

  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <img src="../pictures/logo/logo-avionics.webp" alt="Logo-Header-avionics" width="85" height="85">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#nos-différents-articles">Articles techniques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Matériel-medical">Articles médicaux aéroportés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contactez-nous</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
      <section id="presentation">
        <h1>Bienvenue chez AVIONICS&CO</h1>
        <div class="conteneurPresentationEntreprise">
          <p>
            Pionnier de l'aviation depuis sa création, AVIONICS&Co est à votre
            écoute et étudie chaque besoin clientèle avec circonspection, depuis
            son agrément MORPHEE (module de réanimation pour patient à haute
            élongation d'évacuation) !
          </p>
          <p>
            Créée il y a 250 ans, c'est une entreprise à l'échelle nationale et
            internationale fabriquant des pièces d'aéronefs et proposant, des
            services d'Echange Standard (Dépose/pose + test bon fonctionnement)
            effectués par nos techniciens agréés EMAR/FR66 (certification en
            vigueur).
          </p>
        </div>
      </section>

      <section id="Experts">
        <h3>- Nos Experts -</h3>
        <div class="contener-Expert">
          <h5>2 Ingénieurs techniciens:</h5>
          <p>
            Un <em>expert avionique</em> (électronique de bord, système embarqué
            informatique) et,<br>un <em>expert vecteur</em> (spécialiste
            moteur, carburant, hydraulique) sont à votre service.
          </p>
          <strong>1. EXPERT AVIONIQUE :</strong>
          <p>
            Notre expert avionique B2 est à votre service pour des tâches de
            spécialité electronique de bord (en base et en ligne). Certifié
            EMAR/FR66 et ancien FRA66, il saura s'appliquer avec rigueur et
            discipline.
          </p>
          <strong>2. EXPERT VECTEUR : </strong>
          <p>
            Notre expert vecteur B1 est disponible pour toute autre tâche de
            maintenance spécialisé dans les moteurs, structures des cellules,
            carburant, hydraulique et oxygène. Certifié ISO9001, sa réactivité
            et son professionnalisme seront des atouts pour vous servir avec
            minutie.
          </p>
        </div>
        <div class="presentation-tech">
          <div class="tech-Polyvalent-1">
            <img src="../pictures/ml.png" alt="technicienne avion/medical">
            <p>
              Nos techniciens sont polyvalents, ils sont formés à l'installation
              de pièces aéronefs civil ou militaire et aussi certifiés dans
              l'installation de module médical (Dispositif MORPHEE) dans les
              avions petits et longs-courier.
            </p>
          </div>
          <div class="tech-Polyvalent-2">
            <img
              src="../pictures/interieur_avion_module_morphee.jpg"
              alt="interieur_avion_module_morphee"
            >
            <p>
              <em>CONFIGURATION MODULE MORPHEE</em> <br>
              <br>
              Le module MORPHEE (module de réanimation pour patient à haute
              élongation d'évacuation) est unique sur le territoire, ce dernier
              est utilisé à des fins d'évacuation médical d'urgence, sur le
              territoire nationale comme aux 4 coins du globe, nottament lors de
              la dernière épidémie mondiale (COVID-19), où nos experts ont été
              sollicité avec vivacité.
            </p>
          </div>
        </div>
      </section>

      <section id="nos-différents-articles">
        <h2>- Nos "technicals" articles -</h2>
        <div class="conteneur">
          <!-- ICI DYNAMISME JAVASCRIPT -->
        </div>
        <div class="lien-vers-Ecom">
          <a href="../php/404.html"
            >Prêt au décollage, achetez-ICI
            <img src="../pictures/logo/logoJetLien.png" alt="logoJetLien">
          </a>
        </div>
      </section>
      
      <section id="Matériel-medical">
        <h2>- Matériel médical Aéroporté -</h2>
        <div class="conteneur">
          <div class="c-a">
            <div class="contener-article">
              <img src="../pictures/bouteillemedical.jpg" alt="bouteille" id="art-medic">
              <div class="titleAndDescription">
                <h4>Bouteille Oxygène</h4>

                <p class="description">
                  Oxygène médical en bouteille 5 litres (1000 l d'oxygène
                  médicinal)
                </p>
              </div>
            </div>
          </div>
          <div class="c-a">
            <div class="contener-article">
              <div class="img-Article">
                <img src="../pictures/bandage.jpg" alt="bat" id="art-medic1">
              </div>
              <div class="titleAndDescription">
                <h4>BANDAGE MILITAIRE</h4>

                <p class="description">
                  Bandage tout en un de 6 pouces est une solution pour traiter
                  les hémorragies graves. Conçu pour une application rapide et
                  facile.
                </p>
              </div>
            </div>
          </div>
          <div class="c-a">
            <div class="contener-article">
              <div class="img-articles">
                <img
                  src="../pictures/pensement.jpg"
                  alt="calculateur_avio1"
                  id="art-medic2"
                >
              </div>
              <div class="titleAndDescription">
                <h4>Pansement Thoracique</h4>

                <p class="description">
                  Le Chest seal dit <em>pansement thoracique</em> est un pad
                  venant s'appliquer par exemple sur une blessures pare-balle au
                  niveau du thorax pour éviter un éventuel pneumothorax étant la
                  deuxième cause de mortalité évitable en situation d'extrême
                  urgence. <br>
                  Celui-ci est un ventilé.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="lien-vers-Ecom">
          <a href="../php/404.html"
            >Prêt au décollage, achetez-ICI
            <img src="../pictures/logo/logoJetLien.png" alt="logoJetLien">
          </a>
        </div>
      </section>
      <!-- APPEL FORMULAIRE -->
      <?php  include 'new.html.php'; ?>
      <!--  CDN pour Bootstrap JavaScript et dépendances -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="../js/script.article.js"></script>
    </main>
  </body>
<?php
  require_once 'footer.php';
?>
