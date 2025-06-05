<?php
$packs = [
    'instagram' => [
        'debutant' => [
            'title' => 'Pack Débutant Instagram',
            'description' => '1000 abonnés livrés en 24h.',
            'price' => 2500,
        ],
        'standard' => [
            'title' => 'Pack Standard Instagram',
            'description' => '2000 abonnés en 48h.',
            'price' => 4000,
        ],
        'premium' => [
            'title' => 'Pack Premium Instagram',
            'description' => '9000 abonnés en 72h.',
            'price' => 9000,
        ],
    ],
    'tiktok' => [
        'debutant' => [
            'title' => 'Pack Débutant TikTok',
            'description' => '100+ commentaires en 24h.',
            'price' => 3000,
        ],
        'standard' => [
            'title' => 'Pack Standard TikTok',
            'description' => '20k vues en 48h.',
            'price' => 8000,
        ],
        'premium' => [
            'title' => 'Pack Premium TikTok',
            'description' => '10k likes commentaires.',
            'price' => 5000,
        ],
    ]
];

$pack_key = $_GET['pack'] ?? '';
$platform = $_GET['platform'] ?? '';

if (!isset($packs[$platform][$pack_key])) {
    header("Location: index.php");
    exit;
}

$pack = $packs[$platform][$pack_key];
$wave_link = "https://pay.wave.com/m/M_sn_25yMwYe8XWBx/c/sn/?amount=" . $pack['price'];
$whatsapp_number = '221784066315';

$username = '';
$number = '';
$whatsapp_url = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $number = trim($_POST['number'] ?? '');

    if (!$username) $errors[] = "Veuillez entrer votre nom d'utilisateur.";
    if (!$number) $errors[] = "Veuillez entrer votre numéro.";

    if (!$errors) {
        $msg = "Bonjour 👋,\nJe viens de passer commande :\n📦 Pack : {$pack['title']}\n💸 Montant : {$pack['price']} F CFA\n👤 Nom d'utilisateur : $username\n📱 Numéro : $number";
        $whatsapp_url = "https://wa.me/$whatsapp_number?text=" . urlencode($msg);
        header("Location: $whatsapp_url");
        exit;
    }
}

include 'header.php';
include 'navbar.php';
?>

<style>
  body {
    background: #121212;
    color: #fff;
  }

  .form-wrapper {
    max-width: 500px;
    margin: auto;
    background: #1e1e1e;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 0 12px rgba(220, 53, 69, 0.4);
  }

  .form-wrapper h2 {
    text-align: center;
    color: #dc3545;
    margin-bottom: 1rem;
  }

  .form-control {
    background: #2a2a2a;
    border: 1px solid #444;
    color: white;
  }

  .form-control:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  }

  .btn-danger {
    width: 100%;
    font-size: 1.1rem;
    padding: 0.75rem;
    border-radius: 8px;
  }

  .btn-success {
    margin-top: 1rem;
    width: 100%;
    font-size: 1rem;
    padding: 0.6rem;
    border-radius: 8px;
    background-color: #28a745;
    border: none;
  }

  .btn-success:hover {
    background-color: #218838;
  }

  .pack-summary {
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .pack-summary h3 {
    margin-bottom: 0.5rem;
    color: #fff;
  }

  .pack-summary p {
    color: #bbb;
    margin-bottom: 0.5rem;
  }

  .error {
    background-color: #dc3545;
    color: white;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 1rem;
  }
</style>

<main class="container py-5">
  <div class="form-wrapper">

    <h2>Confirmation de commande</h2>

    <div class="pack-summary">
      <h3><?= htmlspecialchars($pack['title']) ?></h3>
      <p><?= htmlspecialchars($pack['description']) ?></p>
      <p><strong><?= number_format($pack['price'], 0, ',', ' ') ?> F CFA</strong></p>
    </div>

    <?php if ($errors): ?>
      <div class="error">
        <?php foreach ($errors as $e): ?>
          <div><?= htmlspecialchars($e) ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" class="form-control" value="<?= htmlspecialchars($username) ?>" required>
      </div>

      <div class="mb-4">
        <label for="number" class="form-label">Votre numéro WhatsApp</label>
        <input type="text" name="number" id="number" class="form-control" value="<?= htmlspecialchars($number) ?>" required>
      </div>

      <?php if ($platform === 'instagram'): ?>
        <div style="text-align:center; margin-bottom: 1.5rem;">
          <img src="verifier.jpeg.jpg" alt="Instructions Instagram" style="max-width:100%; height:auto; border-radius: 8px; box-shadow: 0 0 10px rgba(220, 53, 69, 0.7);" />
          <p style="color: #f1c40f; margin-top: 0.8rem; font-size: 0.9rem;">
            Allez dans <strong>Paramètres</strong> &gt; tout en bas <strong>Suivis et invitations</strong> et désactivez la coche "Vérifier"
          </p>
        </div>
      <?php elseif ($platform === 'tiktok'): ?>
        <div class="alert alert-warning" style="background: #2b2b2b; color: #f1c40f; border-left: 5px solid #dc3545; padding: 1rem; margin-bottom: 1.5rem;">
          <strong>⚠️ À savoir avant de commander (TikTok) :</strong>
          <ul>
            <li>✅ Mettez votre <strong>compte TikTok en public</strong>.</li>
            <li>🎥 Pour les <strong>likes, commentaires ou vues</strong>, la <strong>vidéo concernée</strong> doit être <strong>publique</strong>.</li>
            <li>🚫 Ne supprimez pas la vidéo avant la fin du traitement (jusqu’à 72h).</li>
            <li>💬 Les services sont automatisés, et parfois certains likes ou vues peuvent prendre un peu plus de temps.</li>
            <li>🔔 Il arrive que TikTok retire certaines interactions après livraison (phénomène normal).</li>
          </ul>
        </div>
      <?php endif; ?>

      <a href="<?= $wave_link ?>" class="btn btn-danger mb-3" target="_blank">
        💳 Payer avec Wave (<?= number_format($pack['price'], 0, ',', ' ') ?> F CFA)
      </a>

      <button type="submit" class="btn btn-success">✅ Valider la commande</button>

      <a href="index.php" class="btn btn-secondary mt-3" style="width: 100%; font-size: 1rem; padding: 0.6rem; border-radius: 8px; background-color: #6c757d; border: none;">
        ⬅️ Retour à l'accueil
      </a>

    </form>

  </div>
</main>

<?php include 'footer.php'; ?>
