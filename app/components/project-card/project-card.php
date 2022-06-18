<?php
  $title = $title ?? 'Default title';
  $href = $href ?? null;
  $target = $target ?? null;

  $hrefAttr = $href ? "href='$href'" : null;
  $targetAttr = $target ? "target='$target'" : "target='_blank'";
?>

<div 
  class="project-card"
>
  <header class="project-card__header">
    <div class="project-card__arrow"><?=icon('arrow')?></div>
    <div class="project-card__title"><?=$title?></div>
    <div class="project-card__arrow">
      <a
        <?=$hrefAttr?>
        <?=$targetAttr?>
        class="project-card__link"
      >
        <?=icon('arrow-long')?>
      </a>
    </div>
  </header>
</div>