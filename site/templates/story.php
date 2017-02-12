<?php snippet('header') ?>

  <main class="main" role="main">

      
    <div style="margin-bottom:1rem; padding-top:1rem;">
   <div class="pure-g">
      <div class="pure-u-1">
         <div style="background-color:orange;padding: 6px;color: white !important;margin-bottom: 6px;">
         
         <h2 style="color:white; margin-bottom: 0;margin-top:0;border-bottom: 1px solid orange;padding-bottom: 0;"><?= $page->title() ?></h2><span style="display: block;margin-bottom: 6px;color: white;"><?= $page->subtitle() ?></span><h4 style="font-weight:bold;color: white;margin-top:0;margin-bottom: 0;font-size:1rem;border-top: 1px solid white;padding-top: 6px;"><?= $page->raised(); ?></h4></div>
         <!---
         <span style="font-weight:100; font-style:italic; color:grey;">xxx</span>
         <h3 style="margin-bottom:6px; margin-top:0; border-bottom:1px solid orange; padding-bottom:6px;">xxx</h3>
         <h4 style="font-weight:bold; color:grey; margin-top:0; margin-bottom:6px; font-size:1rem">xxx</h4>-->
      </div>
      <?php if($page->image()): ?>
      <div class="pure-u-1 pure-u-md-1-4" style="padding:1rem">
          <?= $page->image() ?>
      </div>
      <div class="pure-u-1 pure-u-md-3-4">
      <?php else: ?>
      <div class="pure-u-1">
      <?php endif; ?>
          <?= $page->text()->kirbytext() ?>
      </div>
   </div>
</div>
   
   

  </main>

<?php snippet('footer') ?>