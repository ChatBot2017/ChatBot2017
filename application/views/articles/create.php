<?php echo validation_errors(); ?>
<?php echo form_open('articles/creating') ?>
		<label for="title">標題</label>
    <input type="input" name="title" />
    <br />
    <label for="content">內文</label>
    <textarea name="content" rows="8" cols="80"></textarea>
    <br />
    <input type="submit" name="submit" value="送出" />
    <a href="<?php echo site_url('articles'); ?>">取消</a>
</form>
