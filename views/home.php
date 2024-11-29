<?php
$headTitle = "Accueil";
ob_start();
?>

  <section class="main-sections">
    <article class="main-articles">
      <h1 class="main-articles-title">
      🎰 Bienvenue sur la Machine à Sous Virtuelle !
      </h1>
      <p>
          Plongez dans l'univers excitant des machines à sous et tentez votre chance pour remporter des gains incroyables !
        Alignez les symboles chanceux 🍒💎⭐ et découvrez si la fortune est de votre côté. Cliquez sur le bouton Spin pour 
        démarrer le jeu et laissez le hasard décider de votre sort. 🎲✨ Bonne chance 
      </p>
    </article>
  </section>

<?php
$mainContent = ob_get_clean();