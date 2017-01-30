<?php if($data->template()=="text"){if($data->showtitle()){?><h<?= $level ?>><?= $data->title(); ?></h<?= $level ?>><?php }}else{?><h<?= $level ?>><?= $data->title(); ?></h<?= $level ?>><?php } ?>

<?php foreach($data->children()->visible()->filterBy('langhide','!=','1') as $section):
        snippet($section->template(), array('data' => $section, 'level' => 2));
    endforeach;?>