<?php
include 'header.php';
include 'navbar.php';
?>

<style>
  body {
    background: #121212;
    color: #eee;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  main {
    max-width: 700px;
    margin: 3rem auto;
    padding: 0 1rem;
  }

  h1 {
    text-align: center;
    color: #dc3545;
    margin-bottom: 2rem;
  }

  #searchInput {
    width: 100%;
    padding: 0.75rem 1rem;
    margin-bottom: 2rem;
    border-radius: 8px;
    border: none;
    font-size: 1rem;
    background-color: #2a2a2a;
    color: #eee;
    box-shadow: 0 0 8px rgba(220, 53, 69, 0.4);
  }

  #searchInput::placeholder {
    color: #bbb;
  }

  .faq-item {
    background: #1e1e1e;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 0 12px rgba(220, 53, 69, 0.3);
    overflow: hidden;
  }

  .faq-question {
    padding: 1.2rem 1.5rem;
    cursor: pointer;
    font-weight: 600;
    position: relative;
    user-select: none;
    transition: background-color 0.3s ease;
  }

  .faq-question:hover {
    background-color: #2a2a2a;
  }

  .faq-question::after {
    content: '+';
    font-size: 1.8rem;
    color: #dc3545;
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    transition: transform 0.3s ease;
  }

  .faq-item.active .faq-question::after {
    content: '−';
    transform: translateY(-50%) rotate(180deg);
  }

  .faq-answer {
    max-height: 0;
    overflow: hidden;
    padding: 0 1.5rem;
    background-color: #2a2a2a;
    color: #ccc;
    font-size: 1rem;
    line-height: 1.5;
    transition: max-height 0.35s ease, padding 0.35s ease;
  }

  .faq-item.active .faq-answer {
    padding: 1rem 1.5rem 1.5rem;
    max-height: 500px; /* assez grand pour le contenu */
  }

  @media (max-width: 600px) {
    main {
      margin: 1.5rem 1rem;
    }
  }
</style>

<main>
  <h1>FAQ - Questions fréquentes</h1>

  <input type="text" id="searchInput" placeholder="Rechercher une question...">

  <div id="faqContainer">

    <div class="faq-item">
      <div class="faq-question">Comment fonctionne ce site ?</div>
      <div class="faq-answer">
        Ce site vous permet d’acheter des abonnés, likes, commentaires ou vues pour Instagram et TikTok. Après commande, vous êtes redirigé vers WhatsApp pour confirmer votre demande.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Pourquoi mes abonnés peuvent-ils baisser après commande ?</div>
      <div class="faq-answer">
        Certains abonnés peuvent être inactifs ou supprimer leur compte, ce qui est normal dans ce type de service. Les plateformes peuvent aussi retirer des interactions automatisées.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Que faire pour TikTok avant de commander ?</div>
      <div class="faq-answer">
        Mettez votre compte TikTok en public, assurez-vous que la vidéo concernée est publique, et ne supprimez pas la vidéo pendant le traitement (jusqu’à 72h).
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Est-ce que les services sont rapides ?</div>
      <div class="faq-answer">
        Les délais varient entre 24h et 72h selon le pack choisi. Certains services sont automatisés, donc la livraison est généralement rapide.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Y a-t-il des risques ?</div>
      <div class="faq-answer">
        Bien que les services soient conçus pour être sûrs, les plateformes comme Instagram et TikTok peuvent retirer des interactions ou bannir temporairement des comptes utilisant ce type de services.
      </div>
    </div>

    <!-- Section marketing & avantages -->

    <div class="faq-item">
      <div class="faq-question">Quels sont les avantages d’utiliser ces services pour Instagram ?</div>
      <div class="faq-answer">
        Augmenter rapidement votre nombre d’abonnés augmente votre visibilité, crédibilité et attractivité auprès de votre audience ou clients potentiels. Cela peut aussi aider à mieux référencer votre compte.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Quels sont les bénéfices marketing pour TikTok ?</div>
      <div class="faq-answer">
        Obtenir plus de vues, likes et commentaires augmente la viralité de vos vidéos. Cela favorise l’algorithme TikTok à promouvoir votre contenu auprès d’un public plus large.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Comment optimiser l’usage des services pour booster mon compte ?</div>
      <div class="faq-answer">
        Maintenez votre compte et contenu publics, soyez actif, engagez avec votre audience réelle, et utilisez ces services comme levier complémentaire, jamais comme seule stratégie.
      </div>
    </div>

  </div>
</main>

<script>
  // Accordéon FAQ
  document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
      const item = question.parentElement;
      const isActive = item.classList.contains('active');

      // Fermer tous les items
      document.querySelectorAll('.faq-item.active').forEach(activeItem => {
        activeItem.classList.remove('active');
      });

      // Ouvrir ou fermer l’item cliqué
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });

  // Recherche dynamique
  const searchInput = document.getElementById('searchInput');
  const faqContainer = document.getElementById('faqContainer');
  const faqItems = faqContainer.querySelectorAll('.faq-item');

  searchInput.addEventListener('input', () => {
    const filter = searchInput.value.toLowerCase();

    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question').textContent.toLowerCase();
      const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

      if (question.includes(filter) || answer.includes(filter)) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  });
</script>

<?php
include 'footer.php';
?>
