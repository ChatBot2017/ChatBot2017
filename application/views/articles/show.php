<h1>文章<?php echo $article['id']; ?></h1>
<h2>標題: <?php echo $article['title']; ?></h2>

<div>
  <span>作者: <?php echo $article['user_id']; ?></span>
  <span>建立時間: <?php echo $article['created_at']; ?></span>
  <span>更新時間: <?php echo $article['updated_at']; ?></span>
  <span>瀏覽次數: <?php echo $article['views']; ?></span>
</div>

<p><?php echo $article['content']; ?></p>
