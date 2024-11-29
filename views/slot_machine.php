<?php
$headTitle = "Machine à sous";

ob_start();
?>

<section class="main-sections">
  <article class="slot-machine-container">
    <h1 class="main-articles-title">
      🎰 Machine à sous 🎰
    </h1>
    <div class="container">
      
      <div class="slot-machine">
        <div class="reel" id="reel1">🍒</div>
        <div class="reel" id="reel2">🍒</div>
        <div class="reel" id="reel3">🍒</div>
      </div>
     
      <button id="spinButton">🎲 Spin!</button>
     
      <div id="result" class="slot-result">
        Cliquez sur "Spin" pour jouer !
      </div>
    </div>
  </article>
</section>

<?php

$mainContent = ob_get_clean();
