
<?php if(isset($records)):foreach($records as $row):?>

	<h1><?php echo $row->name; ?></h1>
	<h4><?php echo $row->content1; ?></h4>
	<h5><?php echo $row->content2; ?></h5>
	<h5><?php echo $row->content3; ?></h5>

<?php endforeach; ?>
<?php else: ?>

	<p>No records</p>
	
<?php endif; ?>
