  <html>
  <head>
  <div class="article-title"> 
  熱門文章
  </head>
  <body>
    
   
   <div class="article-wrap">
  <?php foreach ($hots as $hot): ?>
  <div class="article-brief clear">
   
    <section class="article-brief-content">
      <div class="article-title">
        <a href="<?php echo site_url('articles/'.$hot['id']) ?>"><?php echo $hot['title'] ?></a>
      </div>
      <div class="article-intro">
        <?php echo $hot['content'] ?>
      </div>
      <div class="article-footer">
        <?php echo $hot['created_at'] ?>
      </div>
    </section>
  </div>
  <?php endforeach; ?>
</div> 
    
  </body>
  

</html>