<!-- <h1>文章<?php echo $article['id']; ?></h1>
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
<div>
  <?php if (empty($comment['user_id'])): ?>
    <span>匿名留言</span>
  <?php else: ?>
    <span>留言者:<?php echo $users[$comment['user_id']]['email']; ?></span>
  <?php endif; ?>
  <p><?php echo $comment['message']; ?></p>
</div>
<?php endforeach; ?> -->

<!--article-->
<div class="article-page-wrap">
	<div class="article-page-content">
		<a href="#"><img src="<?php echo $article['pic_url']; ?>" alt=""></a>
		<div class="article-page-title"><?php echo $article['title']; ?></div>
		<?php if (!empty($article['url'])): ?>
			<a href="<?php echo $article['url']; ?>">連結原文</a>
		<?php endif; ?>
		<div class="article-page-intro">
			<div><p><?php echo $article['created_at']; ?></p></div>
			<div><p><?php echo $author['name']; ?></p></div>
		</div>
		<div class="article-page-word">
			<?php echo $article['content']; ?>
		</div>
	</div>
  <!--Like or Dislike-->
  <div class="comment-button">
    <div class="like-buttom">
			<?php if ($liked): ?>
				<a href="<?php echo site_url('articles/'.$article['id'].'/dislike'); ?>">
					收回讚
				</a>
				<img src="<?php echo base_url('public/images/like.png'); ?>" alt="like">
			<?php else: ?>
				<a href="<?php echo site_url('articles/'.$article['id'].'/like'); ?>">
					<img src="<?php echo base_url('public/images/like.png'); ?>" alt="like">
				</a>
			<?php endif; ?>

			<!-- likes number -->
			<?php echo count($likes); ?>
		</div>
  </div>

	<!--related-article-->
	<div class="related-article-wrap">
		<div class="related-article">相關文章</div>
		<!-- <div class="related-article-content">
			<a href=""><img src="http://localhost:8888/chatbot/img/test.jpg" alt=""></a>
			<div class="related-article-title"><a href="">瑞豐夜市-州記魚行＆劍旗魚酥塊</a></div>
			<div class="related-article-intro">2016/06/14</div>
		</div>
		<div class="related-article-content">
			<a href=""><img src="http://localhost:8888/chatbot/img/test.jpg" alt=""></a>
			<div class="related-article-title"><a href="">瑞豐夜市-州記魚行＆劍旗魚酥塊</a></div>
			<div class="related-article-intro">2016/06/14</div>
		</div> -->
	</div>

	<!--comment-->
	<div class="comment-wrap">
		<div class="comment-title">留言</div>
		<!--leave comment-->
		<div class="leave-comment-wrap">
      <?php echo validation_errors(); ?>
      <?php echo form_open('articles/'.$article['id'].'/comment') ?>
        <textarea class="leave-comment" name="message"></textarea>
        <input class="submit-button" type="submit" name="submit" value="送出" />
      </form>
		</div>
    <!--comments-->
    <?php if (isset($comments)): ?>
      <?php foreach ($comments as $comment): ?>
        <div class="comment">
    			<div class="comment-body">
    				<!--Name & Date-->
    				<div class="comment-header">
              <?php if (empty($comment['user_id'])): ?>
                <div class="comment-author-name">匿名留言</div>
              <?php else: ?>
                <div class="comment-author-name"><?php echo $users[$comment['user_id']]['name']; ?></div>
              <?php endif; ?>
    					<div class="comment-date"><?php echo $comment['created_at']; ?></div>
    				</div>
    				<div class="comment-content"><?php echo $comment['message']; ?></div>
    			</div>
    		</div>
      <?php endforeach; ?>
    <?php endif; ?>
	</div>

</div>
