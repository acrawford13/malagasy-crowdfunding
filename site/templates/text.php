<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1 class="page-title"><?= $page->title()->html() ?></h1>
      
      
    </header>
      
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>