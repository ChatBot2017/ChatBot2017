<?php echo validation_errors(); ?>
<?php echo form_open('articles/'.$article['id'].'/update') ?>
		<label for="title">標題</label>
    <input type="input" name="title" value="<?php echo $article['title']; ?>" />
    <br />
    <label for="content">內文</label>
    <textarea name="content" rows="8" cols="80"><?php echo $article['content']; ?></textarea>
    <br />
    <input type="submit" name="submit" value="送出" />
    <a href="<?php echo site_url('articles'); ?>">取消</a>
</form>
