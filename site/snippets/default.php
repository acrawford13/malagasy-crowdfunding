<?php if($data->showtitle()):?>
<h<?= $level ?>><?= $data->title(); ?></h<?= $level ?>>
<?php endif ?>
<p><?= $data->text()->kirbytext() ?></p>