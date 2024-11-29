<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($headTitle) ? htmlspecialchars($headTitle) : "Mon application PHP" ?></title>
  <link rel="stylesheet" href="/sources/css/style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/slot-machine">Jouer</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <?= $mainContent ?? "Contenu introuvable" ?>
  </main>

  <footer>
    <p>© 2024 Mon application PHP</p>
  </footer>

  <script src="/sources/js/slot.js"></script>
</body>
</html>
