<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1 class="page-title"><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
      <?php
      $stories = $page->children()->visible();
      foreach($stories as $story):?>
        <h1><?= $story->title()->html() ?></h1>
        
      <?php
      $stories = $stories->children()->visible();
      foreach($stories as $story):?>
      <?php snippet($story->template()) ?>
        <h2><?= $story->title()->html() ?></h2>
        <?php
      $stories = $stories->children()->visible();
      foreach($stories as $story):?>
        <h3><?= $story->title()->html() ?></h3>
      <?php 
      endforeach
      ?>
      <?php 
      endforeach
      ?>
      <?php 
      endforeach
      ?>

  </main>

<?php snippet('footer') ?>