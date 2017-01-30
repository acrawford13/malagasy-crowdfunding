
<nav class="navigation column" role="navigation">
  <ul class="inpage-menu">
    <?php foreach($page->children()->visible() as $item): ?>
    <li class="inpage-menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>