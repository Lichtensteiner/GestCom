<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GestCom - Application de Facturation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="/img/Image1.png">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .hero {
      background: linear-gradient(120deg, #007bff, #00c6ff);
      color: white;
      padding: 80px 20px;
      text-align: center;
    }
    .features i {
      font-size: 2.5rem;
      color: #007bff;
    }
    .cta {
      background-color: #007bff;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }
    .footer {
      background-color: #343a40;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .screenshot {
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    .navbar-brand span {
      color: #ffd700;
    }
   
    .android-logo {
      height: 40px;
      margin-left: 10px;
    }


    #android-banner {
  overflow: hidden;
  white-space: nowrap;
  font-size: 1rem;
  color: #333;
  margin-top: 1.5rem;
  font-weight: 500;
}


.scrolling-text {
  display: inline-block;
  padding-left: 100%;
  animation: scroll-left 40s linear infinite;
}

.scrolling-text span {
  display: inline-block;
  margin-right: 4rem; /* espace entre les messages */
}
@keyframes scroll-left {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}


  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="./index.php">
        <i class="fas fa-file-invoice-dollar text-primary"></i> <span>GestCom</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-outline-primary" href="./index2.php">
              <i class="fas fa-sign-in-alt"></i> Se connecter
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Section Hero -->
<section class="hero py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">Bienvenue sur <span style="color: #ffd700;">GestCom</span></h1>
    <p class="lead">Votre outil intelligent pour la gestion commerciale et la facturation simplifiée.</p>
    <a href="./Admin/decouvrir.php" class="btn btn-light btn-lg mt-3" id="btn-decouvrir">
      <i class="fa fa-chevron-down"></i> Découvrir
    </a>

    <!-- Bandeau défilant juste sous le bouton -->
    <div id="android-banner" class="mt-4">
      <div class="scrolling-text">
        <span>📢 Bonne nouvelle ! ⚡ La version Android de <strong>GestCom</strong> arrive bientôt sur votre mobile ! 📱</span>
        <span> <strong> Application fluide</strong>   et rapide pour vos factures 📱.</span>
          <span> <strong>🔒 Sécurité</strong>  renforcée de vos données commerciales.</span>
          <span> <strong>📊 Statistiques</strong> en temps réel sur mobile !</span>
          <span><strong>🧾 Générez</strong> vos devis même hors-ligne !</span>
      </div>
    </div>
  </div>
</section>




  <!-- Section Fonctionnalités -->
  <section id="features" class="features py-5">
    <div class="container">
      <h2 class="text-center mb-5">Fonctionnalités Clés</h2>
      <div class="row text-center g-4">
        <div class="col-md-4">
          <i class="fas fa-file-invoice-dollar"></i>
          <h5 class="mt-3">Factures & Devis</h5>
          <p>Créez, envoyez et téléchargez facilement vos factures et devis professionnels.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-users"></i>
          <h5 class="mt-3">Gestion des Clients</h5>
          <p>Suivez vos clients, leur historique et leurs documents en un seul clic.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-chart-line"></i>
          <h5 class="mt-3">Statistiques</h5>
          <p>Analysez vos performances avec des graphiques clairs et dynamiques.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Image -->
  <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="mb-4">Une interface simple, rapide et moderne</h2>
      <img src="/img/img.jpg" alt="Capture écran" class="screenshot">
    </div>
  </section>

  <!-- Section Appel à l’action -->
  <section class="cta">
    <h2>Prêt à simplifier votre gestion ?</h2>
    <p class="mb-4">Connectez-vous dès maintenant à votre tableau de bord GestCom.</p>
    <div class="d-flex justify-content-center flex-wrap align-items-center gap-3">
      <a href="./index2.php" class="btn btn-warning btn-lg">
        <i class="fas fa-lock"></i> Se Connecter
      </a>
      <a href="apk/GestCom.apk" class="btn btn-success btn-lg d-flex align-items-center" download>
        <i class="fab fa-android me-2"></i> Version Android
        <img src="/img/play-store-logo-png-google-play-store-png-google-play-store-png-transparent-free-for-1024x500.png" alt="Android" class="android-logo">
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 GestCom - Tous droits réservés.</p>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  setTimeout(() => {
    document.getElementById('android-banner').style.display = 'block';
  }, 7000);
</script>

</body>
</html>
