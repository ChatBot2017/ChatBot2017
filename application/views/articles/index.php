<!-- <h1>文章</h1>
<a href="<?php echo site_url('articles/create'); ?>">建立新文章</a>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>標題</th>
      <th>作者</th>
      <th>建立時間</th>
      <th>上傳時間</th>
      <th>瀏覽次數</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($articles as $article): ?>
    <tr>
      <td><?php echo $article['id'] ?></td>
      <td><?php echo $article['title'] ?></td>
      <td><?php echo $article['user_id'] ?></td>
      <td><?php echo $article['created_at'] ?></td>
      <td><?php echo $article['updated_at'] ?></td>
      <td><?php echo $article['views'] ?></td>
      <td>
        <a href="<?php echo site_url('articles/'.$article['id']) ?>">閱讀</a>
        <a href="<?php echo site_url('articles/'.$article['id'].'/edit') ?>">修改</a>
        <a href="<?php echo site_url('articles/'.$article['id'].'/destroy') ?>">刪除</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table> -->

<div class="article-wrap">
	<?php foreach ($articles as $article): ?>
	<div class="article-brief clear">

    <?php if (!empty($article['pic_url'])): ?>
      <a href="<?php echo site_url('articles/'.$article['id']) ?>"><img src="<?php echo $article['pic_url'] ?>" alt=""></a>
    <?php else: ?>
      <a href="<?php echo site_url('articles/'.$article['id']) ?>"><img src="<?php echo base_url('public/images/test.jpg'); ?>" alt=""></a>
    <?php endif; ?>
		<section class="article-brief-content">
			<div class="article-title">
				<a href="<?php echo site_url('articles/'.$article['id']) ?>"><?php echo $article['title'] ?></a>
			</div>
			<div class="article-intro">
				<?php echo $article['content'] ?>
			</div>
			<div class="article-footer">
				<?php echo $article['created_at'] ?>
			</div>
		</section>
	</div>
  <?php endforeach; ?>
</div>

<!--page-->
<div class="page">
	<ul>
		<li><a href="/"><</a></li>
		<li><a href="/">1</a></li>
		<li><a href="">2</a></li>
		<li><a href="">3</a></li>
		<li><a href="">4</a></li>
		<li><a href="">5</a></li>
		<li><a href="">6</a></li>
		<li><a href="">7</a></li>
		<li><a href="">></a></li>
	</ul>
</div>
