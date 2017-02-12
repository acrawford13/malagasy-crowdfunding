<?php snippet('header') ?>
  <main class="main" role="main">

    <header class="wrap">
      <h1 class="page-title"><?= $page->title()->html() ?></h1>
    </header>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
<form action="<?php echo $page->url() ?>" method="POST">
<?php if ($form->success()): ?>
    <?php echo $page->thankyou(); ?>
<?php else: ?>
    <?php snippet('uniform/errors', ['form' => $form]) ?>

      <div class="pure-g">
      <div class="pure-u-1-1 pure-u-md-1-2">
          <label><?= l::get('Name') ?></label>
    <input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>" placeholder="<?= l::get('Name') ?>">
    </div>
      <div class="pure-u-1-1 pure-u-md-1-2">    <label><?= l::get('Email Address') ?></label>
    <input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>" placeholder="<?= l::get('Example Email') ?>">

    </div>
    </div>
    <label><?= l::get('Message') ?></label>
    <textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message"><?php echo $form->old('message') ?></textarea>

    <?php echo csrf_field() ?>
    <?php echo honeypot_field() ?>
    <input type="submit" value="<?= l::get('Submit') ?>">
    <?php endif; ?>
</form>

    </div>

  </main>
<?php snippet('footer') ?>