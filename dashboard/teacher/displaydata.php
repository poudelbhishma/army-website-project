<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Information about teacher</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>

<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="container my-5">
			<h2 style="text-align:center;">Teacher information</h2>
			<a class="btn btn-primary" href="create.php" role="button">Add Teacher</a>
			<table border="1" cellpadding="7px" cellspacing="7px" style=" border-collapse: collapse" ;>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Salary</th>
						<th>Course ID</th>
						<th>Photo</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
				$conn = mysqli_connect("localhost", "root", "");
				$db = mysqli_select_db($conn, 'army_project');

				// $query = "SELECT * FROM teacher ";
				// $query_run = mysqli_query($conn,$query);
				// while ($row = mysqli_fetch_array($query_run)) {
				// Check if the connection was successful
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}


				$sql = "SELECT * FROM teacher";

				// Execute the query
				$result = mysqli_query($conn, $sql);

				// Check if there are any rows returned
				if (mysqli_num_rows($result) > 0) {
					// Loop through each row and display the elements
					while ($row = mysqli_fetch_assoc($result)) {

						echo "<tr>";
						echo "<td>" . $row['tid'] . "</td>";
						echo "<td>" . $row['tname'] . "</td>";
						echo "<td>" . $row['taddress'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['phone'] . "</td>";
						echo "<td>" . $row['salary'] . "</td>";
						echo "<td>" . $row['cid'] . "</td>";


						if ($row["photo"]) {
							echo '<td><img width="100px" src="data:image/jpeg;base64,' . base64_encode($row["photo"]) . '" alt="Image"></td>';
						}
						// echo '<td><img width="100px" src="data:image/jpeg;base64,'.base64_encode($row["photo"]).'" alt="Image"><br></td>';
				

						// <td> '<img src="../images/" <?php echo $row['photo'];"   style="width:100px; height:100px; alt="image"></td>
				

						echo "<td>";
						// <!-- <a class="btn btn-primary" href="">hello</a> -->
						echo '<a class="btn btn-primary" href="edit.php" id="' . $row["tid"] . '">Edit</a>';
						echo '&nbsp;  ';
						echo '<a class="btn btn-danger" href="delete.php" id="' . $row["tid"] . '">Delete</a>';

						echo '</td>';
						echo '</tr>';

					}
				} else {
					echo "No elements found in the table.";
				}


				?>
			</table>
		</div>
	</form>
</body>

</html>