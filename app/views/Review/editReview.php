<?php 
	echo 'editing review for: ';
	echo $data['review']->review_Id; 
	
	//$hello = $data['review']->$id; 
	//echo $hello;
?>
	<form method="post"  class="form-horizontal" action="">

<div class="form-group">
	<input type=hidden  value=<?php echo $data['review']->review_Id; ?> name='review_Id' />
	<textarea  rows="4" cols="50" placeholder='Edit your review!' name="review"></textarea>
	<input type="submit" class="btn btn-default" name="action" value="Edit Review"/>
	</div>
</form>

