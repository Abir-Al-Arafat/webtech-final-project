<?php
//$connect = mysqli_connect("localhost", "root", "", "testing");
include "../model/db_connection.php";
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($link, $_POST["query"]);
	$query = "
	SELECT * FROM admin 
	WHERE fullname LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	OR username LIKE '%".$search."%'  	
	";
}
else
{
	$query = "
	SELECT * FROM admin ORDER BY id";
}
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Fullname</th>
							<th>E-mail</th>
							<th>Phone</th>
							<th>Date of birth</th>
							<th>Registration Date</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["fullname"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["phone"].'</td>
				<td>'.$row["dateOfBirth"].'</td>
				<td>'.$row["regdate"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>