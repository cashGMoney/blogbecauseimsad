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
    <?php
      $posts = [
        ["title" => "Post Three", "excerpt" => "Excerpt Three", "img" => "images/post3.png", "link" => "posts/post3.html"],
        ["title" => "Post Two", "excerpt" => "Excerpt Two", "img" => "images/post2.png", "link" => "posts/post2.html"],
        ["title" => "A blog for the friend who abandoned me", "excerpt" => "Today the sting of loneliness sets in...", "img" => "images/post1.png", "link" => "posts/post1.html"],
      ];

      foreach ($posts as $index => $post) {
        $reverse = $index % 2 !== 0 ? "reverse" : "";
        echo "
          <section class='blog-entry $reverse'>
            <img src='{$post['img']}' alt='{$post['title']}'>
            <div class='text'>
              <h2><a href='{$post['link']}'>{$post['title']}</a></h2>
              <p>{$post['excerpt']}</p>
            </div>
          </section>
        ";
      }
    ?>
    <div class="older-posts">
      <a href="archive.html">See Older Posts</a>
    </div>
  </main>

</body>
</html>
