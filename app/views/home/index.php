Hello <?=$data['name']?>




<!-- Hello <?=$data['name']?> -->

<html>
<head>
	</head>
	<body>
		<form action="movies_controller/search" method="post">
	<input name="search" type="text" placeholder="Search for a movie" />
	<input type="submit" value="Search" />
</form>

	</body>
</html>




<!-- DISPLAY MOVIE TITLES -->

<?php foreach($data['movies'] as $row) { ?>
	<p>
		<?php echo $row['title']; ?> <a href="movies_controller/details/<?php= $row['Id']?>"> Info </a> <br/>
	</p>
<?php }?>

