<!-- index.php -->
<?php include 'posts-data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Blog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="banner">
    <img src="images/banner.png" alt="Blog Banner">
  </header>

  <main class="blog-list">
    <?php foreach (array_slice($posts, 0, 3) as $index => $post): ?>
      <section class="blog-entry <?= $index % 2 !== 0 ? 'reverse' : '' ?>">
        <img src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
        <div class="text">
          <h2><a href="post.php?slug=<?= $post['slug'] ?>"><?= $post['title'] ?></a></h2>
          <p><?= strip_tags(substr($post['content'], 0, 100)) ?>...</p>
        </div>
      </section>
    <?php endforeach; ?>

    <div class="older-posts">
      <a href="archive.php">See Older Posts</a>
    </div>
  </main>

</body>
</html>
