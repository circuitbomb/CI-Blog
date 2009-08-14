<div id="content">

<?php foreach($rows as $r): ?>
	<h1><strong><?php echo $r->title; ?></strong></h1>
    <p><small>Posted by <?php echo $r->author; ?> on <?php echo $r->date; ?></small></p>
    <p><i><?php echo $r->short; ?></i></p>
    <p><?php echo $r->body; ?></p>
<?php endforeach; ?>

<?=anchor('welcome', 'Back Home');?>

<h2><strong>Comments</strong></h2>
<?php foreach ($query->result() as $rows): ?>
	<p><?=$rows->body?></p>
    <p><small><?=$rows->author?></small></p>
    
    <hr />
    
    <?php endforeach; ?>
    
	

<?=form_open('comment_insert');?>

<?=form_hidden('entry_id', $this->uri->segment(2));?>

<p><textarea rows="10" name="body"></textarea></p>
<p><input type="text" name="author" /></p>
<p><input type="submit" value="Submit Comment" /></p>

</form>

</div>