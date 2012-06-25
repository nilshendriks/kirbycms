<?php snippet('header') ?>

<?php

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false;

?>
<?php if($items && $items->count()): ?>
	<section class="content subpage">
<?php else: ?>
	<section class="content">
<?php endif ?>

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php snippet('submenu') ?>
<?php snippet('menu') ?>

<?php snippet('footer') ?>