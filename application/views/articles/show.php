<h1>文章<?php echo $article['id']; ?></h1>
<h2>標題: <?php echo $article['title']; ?></h2>
<a href="<?php echo site_url('articles'); ?>">回到文章列表</a>
<a href="<?php echo site_url('articles/'.$article['id'].'/edit'); ?>">編輯文章</a>
<div>
  <span>作者: <?php echo $article['user_id']; ?></span>
  <span>建立時間: <?php echo $article['created_at']; ?></span>
  <span>更新時間: <?php echo $article['updated_at']; ?></span>
  <span>瀏覽次數: <?php echo $article['views']; ?></span>
</div>
<img src="<?php echo $article['pic_url']; ?>" alt="">
<p><?php echo $article['content']; ?></p>

<h2>留言</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('articles/'.$article['id'].'/comment') ?>
  <textarea name="message" rows="4"></textarea>
  <input type="submit" name="submit" value="送出" />
</form>
<?php foreach ($comments as $comment): ?>
<p><?php echo $comment['message']; ?></p>
<?php endforeach; ?>
