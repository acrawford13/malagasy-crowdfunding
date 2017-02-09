<?php snippet('header') ?>


<form action="<?php echo $page->url() ?>" method="POST">
    <label>Email</label>
    <input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>">
<?php echo $page->contact(); ?>
    <label>Name</label>
    <input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>">

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

<?php snippet('footer') ?>