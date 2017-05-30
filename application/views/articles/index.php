<h1>文章</h1>
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
</table>
