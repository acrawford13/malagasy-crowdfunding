<?php if($data->showtitle()=="true"):?>
<h<?= $level ?>><?= $data->title(); ?></h<?= $level ?>>
<?php endif ?>
<p><?= $data->text()->kirbytext() ?></p>