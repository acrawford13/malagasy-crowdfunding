<?php snippet('header') ?>
      <h1 class="page-title"><?= $page->title()->html() ?></h1>
<div class="pure-g">
  <div class="pure-u-1 pure-u-md-2-3">
      <?= $page->text()->kirbytext() ?>
  </div>
  <div class="pure-u-1 pure-u-md-1-3">
      <?php snippet('menu') ?>
  </div>
</div>
<?php snippet('footer') ?>