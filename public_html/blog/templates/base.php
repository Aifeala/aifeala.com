<?php
// templates/base.php
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($page_title ?? 'Aifeala') ?></title>

    <link rel="stylesheet" href="/blog/templates/css/carousel.css">

    <link rel="stylesheet" href="/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body data-page="blog">
  <header data-theme="dark">
    <div class="top-bar">
      <div class="logo">
        <img src="/images/rolypoly_icon.svg" alt="" class="logo-icon" />
        <div style="display: inline-block;">
          <h1 class="brand">Aifeala</h1>
          <p class="tagline">My long thoughts.</p>
        </div>
      </div>
      <nav class="site-nav">
        <ul>
          <li><a href="/" data-nav="home">Home</a></li>
          <li><a href="/minecraft/" data-nav="minecraft">Minecraft</a></li>
          <li><a href="/blog/" data-nav="blog">Blog</a></li>
          <li><a href="https://map.aifeala.com" target="_blank" rel="noreferrer">World Map</a></li>
          <li><a href="https://twitter.com/Aifeala" target="_blank" rel="noreferrer">Twitter</a></li>
          <li><a href="https://youtube.com/@aifeala" target="_blank" rel="noreferrer">YouTube</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="content">
    <?= $page_content ?>
  </main>

  <footer data-theme="dark">
    <div class="footer-content">
      <p>&copy; 2026 <span class="brand">Aifeala</span> - All Rights Reserved.</p>
    </div>
  </footer>

  <script src="/js/scripts.js" defer></script>
  <script src="/blog/templates/js/carousel.js"></script>
</body>
</html>