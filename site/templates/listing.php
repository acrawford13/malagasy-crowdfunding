<?php snippet('header') ?>

    <h1 class="page-title"><?= $page->title()->html() ?></h1>
    <?php $count=1; ?>
    <?php foreach($page->children()->visible()->filterBy('langhide','!=','1') as $section):
            snippet($section->template(), array('data' => $section, 'level' => 1));
            if($count!=count($page->children()->visible()->filterBy('langhide','!=','1'))){echo "<hr>";}
            $count++;
    endforeach;?>

<?php snippet('footer') ?>