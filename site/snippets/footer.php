<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
  </main>

  <footer class="footer">
    <?php if($page->isHomePage()): ?>
      <div class="grid">
        <div class="column" style="--columns: 8">
          <?= $page->description()->kt() ?>
        </div>
        <div class="column" style="--columns: 4">
          <ul>
            <li>
              <a href="https://goo.gl/maps/LYawQzW2kGHyjXdT9">
                <?= $page->address() ?>
              </a>
            </li>

            <li class="email"><?= html::email($page->email()) ?></li>

            <li class="phone"><?= $page->phone() ?></li>

            <li><?= $page->cell() ?></li>

            <li class="social">
              <a href="https://www.facebook.com/oliveroettliphotography">
                <i class="fab fa-lg fa-facebook-square"></i>
              </a>
              <a href="https://www.instagram.com/oliveroettli">
                <i class="fab fa-lg fa-instagram-square"></i>
              </a>
              <a href="https://vimeo.com/oliveroettli">
                <i class="fab fa-lg fa-vimeo-square"></i>
              </a>
              <a href="https://www.linkedin.com/in/oliveroettli/">
                <i class="fab fa-lg fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <?php else: ?>
      <div class="grid">
          <ul>
            <li><?= $site->author() ?></li>
            <li class="social minimal">
              <a href="https://www.facebook.com/oliveroettliphotography">
                <i class="fab fa-lg fa-facebook-square"></i>
              </a>
              <a href="https://www.instagram.com/oliveroettli">
                <i class="fab fa-lg fa-instagram-square"></i>
              </a>
              <a href="https://vimeo.com/oliveroettli">
                <i class="fab fa-lg fa-vimeo-square"></i>
              </a>
              <a href="https://www.linkedin.com/in/oliveroettli/">
                <i class="fab fa-lg fa-linkedin"></i>
              </a>
            </li>
          </ul>
      </div>
    <?php endif ?>
  </footer>

  <?= js([
    'assets/js/prism.js',
    'assets/js/lightbox.js',
    'assets/js/index.js',
    '@auto'
  ]) ?>

</body>
</html>
