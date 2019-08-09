<?php
include 'server.php';



?>



<!DOCTYPE html>
<html>
<head>
<title> Image/Files Upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg" style="color: red">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>

	<form method="post" action="server.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
			
		</div>
		<div class="input-group">
			<label>Imade/Files</label>
			<input type="file" name="image" value="">
			
		</div>
		
		<div class="input-group">
			
				
			
				<button class="btn" type="submit" name="save" >Save</button>
			
		</div>
	</form>
</body>

<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Image/file</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_assoc($show)) { ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td>
				
				<img src="<?php echo 'imagess/'.$row['image'];?>" width="80px" height="80px" alt="afzall"/>

				
			</td>
			
		</tr>
	<?php } ?>
	
</table>

</html>