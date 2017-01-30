<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/pure-min.css') ?>
  <?= css('assets/css/grids-responsive-min.css') ?>
  <?= css('assets/css/main.css') ?>

</head>
<body id="top">
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<div id="offcanvas">
    <div id="oc-header">
        <label for="nav-trigger">
            <span style="font-size:2.5rem; line-height:0.9em; text-align:right">&times;</span>
        </label>
        <ul id="oc-languages">
            
        <?php foreach($site->languages as $language):?>
        <li>
        <a<?php e($site->language() == $language, ' class="selected"') ?> href="<?php echo $page->url($language->code()) ?>">
            <?php echo html($language->name()); ?>
        </a>
        <?php endforeach ?>
        </ul>
    </div>
          <?php
                    $items = $pages->visible()->filterBy('langhide','!=','1');
                if($items->count()):
                ?>
    <ul id="oc-menu">
                    <?php foreach($items as $item): ?>
                    <li><span><?php if(strlen($item->text())>0&&$item->langhide()!='1'){echo "<a href='".$item->url()."'>";} echo $item->title();
                        if(strlen($item->text())>0){echo "</a>";};
                        echo "</span>";
                        $subitems = $item->children()->visible()->filterBy('langhide','!=','1');
                        if($subitems->count()):?>
                        <ul class="sub">
                            <?php foreach($subitems as $subitem):
                            ?>
                                <li><a href="<?= $subitem->url(); ?>"><?= $subitem->title(); ?></a></li>
                            <?php endforeach ?>
                        </ul>
                        <?php endif ?>
                        </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
    </ul>
</div>
<div id="wrapper">

    <div id="header">
        <div class="limit clearfix">
            <h1><a href="<?= $site->url(); ?>"><?= $site->title()->html(); ?></a></h1>
            <ul id="languages" class="hide-on-mobile">
            
        <?php foreach($site->languages as $language):?>
        <li>
        <a<?php e($site->language() == $language, ' class="selected"') ?> href="<?php echo $page->url($language->code()) ?>">
            <?php echo html($language->name()); ?>
        </a>
        <?php endforeach ?>
            </ul>

            
            <label for="nav-trigger" id="menu-icon" class="show-on-mobile-span">
        <?= (new Asset("assets/images/menu.png")) ?></label>
        </div>
    </div>
    <div id="menu">
        <div class="menu-limit">
                <!---navigation--->
                <?php
                    $items = $pages->visible()->filterBy('langhide','!=','1');
                if($items->count()):
                ?>
                <ul>
                    <?php foreach($items as $item): ?>
                        <li><?php if(strlen($item->text())>0&&$item->langhide()!='1'){echo "<a href='".$item->url()."'>";} echo preg_replace("/\*\*(.*?)\*\*/","<span>$1</span><br/>",($item->display()!="")?$item->display():$item->title());
                        if(strlen($item->text())>0){echo "</a>";}
                        $subitems = $item->children()->visible()->filterBy('langhide','!=','1');
                        if($subitems->count()):?>
                        <ul class="sub">
                            <?php foreach($subitems as $subitem):
                            ?>
                                <li><a href="<?= $subitem->url(); ?>"><?= $subitem->title(); ?></a></li>
                            <?php endforeach ?>
                        </ul>
                        <?php endif ?>
                        </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
                <br style="clear:both; display:none">
            
        </div>
    </div>
    <div id="body">
        <div class="limit">
