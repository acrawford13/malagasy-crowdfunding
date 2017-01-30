<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1 class="page-title"><?= $page->title()->html() ?></h1>      
    </header>
    <div class="pure-g">
      <div class="pure-u-1-1 pure-u-md-<?php if($page->col1width()){echo $page->col1width();}else{echo "1-2";}?> <?php if($page->hidecol1() == '1'){echo "hide-on-mobile";} ?>">
        <?= $page->col1()->kirbytext(); ?>
      </div>
      <div class="pure-u-1-1 pure-u-md-<?php if($page->col2width()){echo $page->col2width();}else{echo "1-2";}?> <?php if($page->hidecol2() == '1'){echo "hide-on-mobile";} ?>">
        <?= $page->col2()->kirbytext(); ?>
      </div>
    </div>
    
  </main>

<?php snippet('footer') ?>