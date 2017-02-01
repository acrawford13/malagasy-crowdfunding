<?php if($data->template()=="text"){if($data->showtitle()){?><h<?= $level ?> style="margin-bottom:0"><?= $data->title(); ?></h<?= $level ?>><?php }}else{?><h<?= $level ?> style="margin-bottom:0"><?= $data->title(); ?></h<?= $level ?>><?php } ?>

<?php foreach($data->children()->visible()->filterBy('langhide','!=','1') as $section):
        snippet($section->template(), array('data' => $section, 'level' => 2));
    endforeach;?>