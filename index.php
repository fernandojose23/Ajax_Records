<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Ajax</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

	

	<div class="forms">
	<div>
	<form id="addForm" class="adform">
		<h3>Add</h3>
		<div>
		<input type="number" name="id" placeholder="ID"><br>
		</div>
		<input type="text" name="name" placeholder="Name"><br>
		<input type="number" name="age" placeholder="Age"><br>
		<input type="text" name="course" placeholder="Course"><br>
		<button>Create</button>
	</form>
	</div>

	<div>
	<form id="editForm" class="edform">
		<h3>Edit</h3>
		<input type="number" name="id" placeholder="ID"><br>
		<input type="text" name="name" placeholder="Name"><br>
		<input type="number" name="age" placeholder="Age"><br>
		<input type="text" name="course" placeholder="Course"><br>
		<button>Update</button>
	</form>
	</div>

	</div>


	<h1>Records</h1>
	<div id="viewRecords" class="container">
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Age</td>
					<td>Course</td>
					<td>Actions</td>
				</tr>
			</thead>

			<tbody class="tbody">

			</tbody>
		</table>
		
	</div>

</body>
</html>