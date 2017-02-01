<div class="pure-g">
    <div class="pure-u-1">
        <h<?= $level ?> style="margin-bottom:0"><?= $data->title(); ?></h<?= $level ?>>
    </div>
    <div class="pure-u-1-1 pure-u-md-<?php if($data->col1width()){echo $data->col1width();}else{echo "1-2";}?> <?php if($data->hidecol1() == '1'){echo "hide-on-mobile";} ?>">
        <?= $data->col1()->kirbytext(); ?>
    </div>
    <div class="pure-u-1-1 pure-u-md-<?php if($data->col1width()){echo $data->col2width();}else{echo "1-2";}?> <?php if($data->hidecol2() == '1'){echo "hide-on-mobile";} ?>">
        <?= $data->col2()->kirbytext(); ?>
    </div>
</div>