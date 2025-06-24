<!-- archive.php -->
<?php include 'posts-data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Archive - My Blog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="banner">
    <img src="images/banner.jpeg" alt="Blog Banner">
  </header>

  <main class="archive">
    <h1>Archived Posts</h1>
    <ul>
      <?php foreach ($posts as $post): ?>
        <li>
          <a href="post.php?slug=<?= $post['slug'] ?>"><?= $post['title'] ?></a>
          <span>– <?= $post['date'] ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
  </main>

</body>
</html>

