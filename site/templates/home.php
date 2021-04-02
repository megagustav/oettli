<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This home template renders content from others pages, the children of
  the `projects` page to display a nice gallery grid.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>
  <?php if ($projectsPage = page('projects')): ?>
  <ul class="home-grid">
    <?php foreach ($projectsPage->children()->listed() as $album): ?>
    <!-- <li class="grid-item" style="margin-top: <?= $album->spacey() ?>em; margin-left: <?= $album->spacex() ?>em;"> -->
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
    <li class="grid-item <?= $album->width() ?>">
      <a href="<?= $album->url() ?>">
        <figure class="content">
          <?php if ($album->downloads()->toFile()): ?>
            <video width="100%" height="auto" autoplay loop muted playsinline>
              <source src="<?= $album->downloads()->toFile() ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <!-- <img src="<?= $album->downloads()->toFile() ?>" /> -->
          <?php elseif ($cover = $album->cover()): ?>
          <?= $cover->resize(1024, 1024) ?>
          <?php endif ?>
          <figcaption>
            <span>
              <span class="example-name"><?= $album->title()->html() ?></span>
            </span>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>
<?php snippet('footer') ?>