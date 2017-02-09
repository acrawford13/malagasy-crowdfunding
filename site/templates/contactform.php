<?php snippet('header') ?>
  <main class="main" role="main">

    <header class="wrap">
      <h1 class="page-title"><?= $page->title()->html() ?></h1>
    </header>
    <style>
    input, textarea {
        width:100%;
    }
    
    label {
        color:#ff9800;
        font-weight:bold;
        display:inline-block;
        margin-bottom:0.5rem;
        margin-top:0.5rem;
    }
    
</style>    
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
<form action="<?php echo $page->url() ?>" method="POST">
      <div class="pure-g">
      <div class="pure-u-1-1 pure-u-md-1-2">
          <label>Name</label>
    <input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>" placeholder="Name">
    </div>
      <div class="pure-u-1-1 pure-u-md-1-2">    <label>Email Address</label>
    <input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>" placeholder="your@email.com">

    </div>
    </div>
    <label>Message</label>
    <textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message"><?php echo $form->old('message') ?></textarea>

    <?php echo csrf_field() ?>
    <?php echo honeypot_field() ?>
    <input type="submit" value="Submit">
</form>
<?php if ($form->success()): ?>
    Thank you for your message. We will get back to you soon!
<?php else: ?>
    <?php snippet('uniform/errors', ['form' => $form]) ?>
<?php endif; ?>

    </div>

  </main>
<?php snippet('footer') ?>