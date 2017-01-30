<?php snippet('header') ?>

    <h1 class="page-title"><?= $page->title()->html() ?></h1>

    <?php foreach($page->children()->visible() as $section): ?>
    <h2><?= $section->title()->html() ?></h2>

        <?php if($section->hasChildren()):
            foreach($section->children()->visible() as $section):
                if($section->hasChildren()):
                    foreach($section->children()->visible() as $section):
                        snippet($section->template(), array('data' => $section, 'level' => 3));
                    endforeach;
                else:
                    snippet($section->template(), array('data' => $section, 'level' => 2));
                endif;
            endforeach;
        else:
            snippet($section->template(), array('data' => $section, 'level' => 1));
        endif;
    endforeach;?>

<?php snippet('footer') ?>