<?php require_once 'logic.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test SQL</title>
	<style type="text/css">
		img {
			width:200px; height:200px;
		}
	</style>
	</script>
</head>
<body>
	<form action="" method="get">
		<h3>Search guard</h3>
		<p>Name</p>
		<input type="text" name="full_name" value="<?php if(isset($_GET['full_name'])) {echo $_GET['full_name'];}  ?>">
		<p>Description</p>
		<textarea name="bio"><?php if(isset($_GET['bio'])) {echo $_GET['bio'];} ?></textarea>
		<p>Year of birth</p>
		<input type="number" name="year_of_birth" value="<?php if(isset($_GET['year_of_birth'])) {echo $_GET['year_of_birth'];}  ?>">
		<p>Building</p>
		<p>
			<select name="building" >
				<option value="Корпус А">Корпус А</option>
				<option value="Корпус Б">Корпус Б</option>
				<option value="Столовая">Столовая</option>
				<option value="Библиотека">Библиотека</option>
				<option value="Корпус К">Корпус К</option>
			</select>
		</p>
		<br>
		<br>
		<button type="submit">Search</button> 
		<br>
		<br>
		<button type="submit" name="clear_filter">Clear</button>
	</form>

	<?php if(count($guards) > 0):?>
		<table>
			<tr>
				<th>Image path</th>
				<th>Full Name</th>
				<th>Bio</th>
				<th>Year of birth</th>
				<th>ID_post</th>
			</tr>
		<?php foreach ($guards as $guard): ?>
			<tr>
				<td><?= "<img src=$guard[1]>";?></td>
				<td><?= $guard[2] ?></td>
				<td><?= $guard[3] ?></td>
				<td><?= $guard[4] ?></td>
				<td><?= $guard[5] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
</body>
</html>