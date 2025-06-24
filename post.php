<!-- post1.html -->
<?php
include 'posts-data.php';
$slug = $_GET['slug'] ?? '';

foreach ($posts as $post) {
  if ($post['slug'] === $slug) {
    $title = $post['title'];
    $date = $post['date'];
    $img = $post['img'];
    $content = $post['content'];
    break;
  }
}

if (!isset($title)) {
  $title = "Post Not Found";
  $content = "<p>Sorry, the post you're looking for doesn’t exist.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= htmlspecialchars($title) ?></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <header class="banner">
    <img src="images/banner.jpeg" alt="Blog Banner">
  </header>

  <main class="blog-post">
    <div class="back-link">
      <a href="index.php">← Back to Home</a>
    </div>
    <article>
      <h1><?= $title ?></h1>
      <?php if (isset($date)): ?>
        <p><em>Published on <?= $date ?></em></p>
        <img src="<?= $img ?>" alt="<?= $title ?>" style="width:100%; max-width:800px; margin:1rem 0; border-radius:8px;">
      <?php endif; ?>
      <?= $content ?>
    </article>
  </main>

</body>
</html>


