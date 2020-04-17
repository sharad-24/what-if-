<?php
include_once('includes/contact.php');
$query="select * from regii";
$link = mysqli_connect($query);
?>

<!DOCTYPE html>
<html>
<title>
	<head>
		fetch data from database
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
</title>

<body>
	<table class="table table-striped" align="center" border="1px" style="width: 700px; line-height: 50px;">
		<thead>
			<th colspan="5">
				<h2>User Record</h2>
	</thead>
	<tr>
			</th>
			<th>Message</th>
			<th>Name</th>
			<th>Email</th>
			<th>phone number</th>
			<th>Location</th>
	</tr>
	<?php
	
	while($result= mysqli_fetch_array($query)) 
	{
		?>
		<tr>
			<td><?php echo $rows['message']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['phone number']; ?></td>
			<td><?php echo $rows['coordinates']; ?></td>
		</tr>
		<?php
	}

	?>
	</table>

</body>
</html>