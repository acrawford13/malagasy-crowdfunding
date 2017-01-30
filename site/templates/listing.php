<?php snippet('header') ?>

    <h1 class="page-title"><?= $page->title()->html() ?></h1>

    <?php foreach($page->children()->visible()->filterBy('langhide','!=','1') as $section):
            snippet($section->template(), array('data' => $section, 'level' => 1));
    endforeach;?>

<?php snippet('footer') ?>