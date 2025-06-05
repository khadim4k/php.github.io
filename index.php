<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
  /* Cacher le carrousel sur desktop, afficher sur mobile */
  .carousel-mobile {
    display: none;
  }
  @media (max-width: 767.98px) {
    .grid-desktop {
      display: none;
    }
    .carousel-mobile {
      display: block;
    }
  }
  .card {
  border: 2px solid transparent;
  transition: border-color 0.3s ease;
  position: relative;
  overflow: hidden;
}

.card:hover {
  border-color: #dc3545; /* rouge Bootstrap */
}

.card::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(60deg, transparent, rgba(220, 53, 69, 0.7), transparent);
  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none;
}

.card:hover::before {
  opacity: 1;
  animation: shine 2s linear infinite;
}

@keyframes shine {
  0% { transform: translateX(-100%) rotate(45deg); }
  100% { transform: translateX(100%) rotate(45deg); }
}

</style>

<main class="container py-5">

  <h1 class="text-center mb-4">Boostez vos abonnés Instagram</h1>
  <p class="text-center mb-5 fs-5 text-secondary">
    Choisissez votre pack et augmentez rapidement votre audience.
  </p>

  <!-- Grille Desktop/Tablette -->
  <div class="row justify-content-center g-4 grid-desktop">

    <div class="col-md-6 col-lg-4">
      <div class="card text-center text-light h-100 bg-dark" itemscope itemtype="http://schema.org/Product">
        <div class="card-body d-flex flex-column">
          <h3 class="card-title mb-3">Pack Débutant</h3>
          <p class="card-text mb-4">1000 abonnés Instagram garantis en 24h.</p>
          <div class="mb-4 display-4 fw-bold">2500 F CFA</div>
          <a href="commande.php?pack=debutant&platform=instagram" class="btn btn-outline-danger mt-auto">Commander</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card text-center text-light h-100 bg-dark" itemscope itemtype="http://schema.org/Product">
        <div class="card-body d-flex flex-column">
          <h3 class="card-title mb-3">Pack Standard</h3>
          <p class="card-text mb-4">2000 abonnés Instagram en 48h, garantie satisfaction.</p>
          <div class="mb-4 display-4 fw-bold">4000 F CFA</div>
          <a href="commande.php?pack=standard&platform=instagram" class="btn btn-outline-danger mt-auto">Commander</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card text-center text-light h-100 bg-dark" itemscope itemtype="http://schema.org/Product">
        <div class="card-body d-flex flex-column">
          <h3 class="card-title mb-3">Pack Premium</h3>
          <p class="card-text mb-4">9000 abonnés premium en 72h, boost maximal.</p>
          <div class="mb-4 display-4 fw-bold">9000 F CFA</div>
          <a href="commande.php?pack=premium&platform=instagram" class="btn btn-outline-danger mt-auto">Commander</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Carrousel Mobile -->
  <div id="carouselAbonnes" class="carousel slide carousel-mobile" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active px-3">
        <div class="card text-center text-light bg-dark" itemscope itemtype="http://schema.org/Product">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title mb-3">Pack Débutant</h3>
            <p class="card-text mb-4">1000 abonnés Instagram garantis en 24h.</p>
            <div class="mb-4 display-4 fw-bold">2500 F CFA</div>
            <a href="commande.php?pack=debutant&platform=instagram" class="btn btn-outline-danger mt-auto">Commander</a>
          </div>
        </div>
      </div>

      <div class="carousel-item px-3">
        <div class="card text-center text-light bg-dark" itemscope itemtype="http://schema.org/Product">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title mb-3">Pack Standard</h3>
            <p class="card-text mb-4">2000 abonnés Instagram en 48h, garantie satisfaction.</p>
            <div class="mb-4 display-4 fw-bold">4000 F CFA</div>
            <a href="commande.php?pack=standard&platform=instagram" class="btn btn-outline-danger mt-auto">Commander</a>
          </div>
        </div>
      </div>

      <div class="carousel-item px-3">
        <div class="card text-center text-light bg-dark" itemscope itemtype="http://schema.org/Product">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title mb-3">Pack Premium</h3>
            <p class="card-text mb-4">9000 abonnés premium en 72h, boost maximal.</p>
            <div class="mb-4 display-4 fw-bold">9000 F CFA</div>
            <a href="commande.php?pack=premium&platform=instagram" class="btn btn-outline-danger mt-auto">Commander</a>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAbonnes" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselAbonnes" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Suivant</span>
    </button>
  </div>

  <!-- Section 2 -->

  <h1 class="text-center mt-5 mb-4">Boostez vos vues, partages, commentaires ou j'aime en commentaires sur TikTok</h1>
  <p class="text-center mb-5 fs-5 text-secondary">
    Choisissez votre pack et augmentez rapidement votre audience.
  </p>

  <!-- Grille Desktop/Tablette -->
  <div class="row justify-content-center g-4 grid-desktop">

    <div class="col-md-6 col-lg-4">
      <div class="card text-center text-light h-100 bg-dark" itemscope itemtype="http://schema.org/Product">
        <div class="card-body d-flex flex-column">
          <h3 class="card-title mb-3">Pack Débutant</h3>
          <p class="card-text mb-4">Recevez plus de 100 commentaires sur vos vidéos garanties en 24h.</p>
          <div class="mb-4 display-4 fw-bold">3000 F CFA</div>
          <a href="commande.php?pack=debutant&platform=tiktok" class="btn btn-outline-danger mt-auto">Commander</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card text-center text-light h-100 bg-dark" itemscope itemtype="http://schema.org/Product">
        <div class="card-body d-flex flex-column">
          <h3 class="card-title mb-3">Pack Standard</h3>
          <p class="card-text mb-4">Augmentez vos vues en vidéos jusqu'à +20k vues en 48h, garantie satisfaction.</p>
          <div class="mb-4 display-4 fw-bold">8000 F CFA</div>
          <a href="commande.php?pack=standard&platform=tiktok" class="btn btn-outline-danger mt-auto">Commander</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card text-center text-light h-100 bg-dark" itemscope itemtype="http://schema.org/Product">
        <div class="card-body d-flex flex-column">
          <h3 class="card-title mb-3">Pack Premium</h3>
          <p class="card-text mb-4">Recevez +10.000 likes en commentaires idéal pour les jeux concours.</p>
          <div class="mb-4 display-4 fw-bold">5000 F CFA</div>
          <a href="commande.php?pack=premium&platform=tiktok" class="btn btn-outline-danger mt-auto">Commander</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Carrousel Mobile -->
  <div id="carouselInteractions" class="carousel slide carousel-mobile mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active px-3">
        <div class="card text-center text-light bg-dark" itemscope itemtype="http://schema.org/Product">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title mb-3">Pack Débutant</h3>
            <p class="card-text mb-4">Recevez plus de 100 commentaires sur vos vidéos garanties en 24h.</p>
            <div class="mb-4 display-4 fw-bold">3000 F CFA</div>
            <a href="commande.php?pack=debutant&platform=tiktok" class="btn btn-outline-danger mt-auto">Commander</a>
          </div>
        </div>
      </div>

      <div class="carousel-item px-3">
        <div class="card text-center text-light bg-dark" itemscope itemtype="http://schema.org/Product">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title mb-3">Pack Standard</h3>
            <p class="card-text mb-4">Augmentez vos vues en vidéos jusqu'à +20k vues en 48h, garantie satisfaction.</p>
            <div class="mb-4 display-4 fw-bold">8000 F CFA</div>
            <a href="commande.php?pack=standard&platform=tiktok" class="btn btn-outline-danger mt-auto">Commander</a>
          </div>
        </div>
      </div>

      <div class="carousel-item px-3">
        <div class="card text-center text-light bg-dark" itemscope itemtype="http://schema.org/Product">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title mb-3">Pack Premium</h3>
            <p class="card-text mb-4">Recevez +10.000 likes en commentaires idéal pour les jeux concours.</p>
            <div class="mb-4 display-4 fw-bold">5000 F CFA</div>
            <a href="commande.php?pack=premium&platform=tiktok" class="btn btn-outline-danger mt-auto">Commander</a>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselInteractions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselInteractions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Suivant</span>
    </button>
  </div>

</main>

<?php include 'footer.php'; ?>
