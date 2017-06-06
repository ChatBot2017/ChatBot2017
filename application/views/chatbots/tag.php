  <html>
  <head>
    <div class="article-title"> 
   熱門標籤
  </head>
  <body>
    <div class="article-wrap">
  <?php foreach ($tag as $tag): ?>
  <div class="article-brief clear">

    

    <section class="article-brief-content">
      <div class="article-title">
        <a href="<?php echo site_url('articles/'.$tag['id']) ?>"><?php echo $tag['title'] ?></a>
      </div>
    </section>
  </div>
  <?php endforeach; ?>
</div>
    
  </body>
  

</html>