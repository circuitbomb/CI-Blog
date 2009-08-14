<div id="content">

<?php
	//set counter to zero
	$counter = 0;
	
	//grab each blog entry
	foreach ($query->result() as $row):
	
	//increment counter
	$counter++;
?>
	<div id="post">
    
    <h2><img src="<?php echo base_url(); ?>assets/images/devblogava.png" alt="" style="padding-top:10px;" width="40" height="40" /><span style="padding-left:10px; vertical-align:top; line-height:60px; "><span class="entrytitle"><?=anchor('blog/entry/'.$row->id, $row->title);?></span></span></h2>
    
    <div id="authorship">
    	<div class="postedby">
        	posted by: <?=$row->author?> on <?=$row->date?>
        </div>
    </div>
    
    <p class="blogabstract"><?=$row->short?></p>
    
    <div id="readmoreblock">
    	<div class="readmorebutton">
        	<?=anchor('blog/entry/'.$row->id, 'Read More');?>
        </div>
    </div>
    
    </div>

<?php endforeach; ?>

</div>