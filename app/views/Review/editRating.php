<?php 
	echo 'editing rating for: ';
	echo $data['rating']->review_Id; 
?>

<form method="post"  class="form-horizontal" action="">

<div class="form-group">
	<input type=hidden  value=<?php echo $data['rating']->review_Id; ?> name='review_Id' />
	<select name="choice" value=<?php echo $data['rating']->rating;?> />
		<option value="5"> 5</option>
		<option value="4"> 4</option>
		<option value="3"> 3</option>
		<option value="2"> 2</option>
		<option value="1"> 1</option>
	</select>
	<input type="submit" class="btn btn-default" name="action" value="Edit rating"/>
	</div>
</form>
