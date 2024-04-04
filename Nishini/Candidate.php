<?php
include("header.php");
?>
<div id="maindiv">
	<p>Please search for job oppotunities here!</p>
	<form method="post" action="Candidate.php" class="search_form">
		<table width="50%">
			<tr>
				<td>Field</td><td><input type="text" id="search_field" name="search_field" /></td>
				<td>Position</td><td><input type="text" id="search_position" name="search_position" /></td>
				<td>Client</td><td><input type="text" id="search_client" name="search_client" /></td>
				<td><input type="submit" value="Search" /></td>
			</tr>
		</table>
	</form>
	<br>
	<table width="70%" border="1">
	<tr>
		<th>Job Field</th><th>Job Description</th><th>Position</th><th>Client</th><th>Closing Date</th><th>Posted Date</th><th>&nbsp;</th>
	</tr>
	<?php
	if(!empty($_POST)){
		include("connection.php");
		$where_job_field = $_POST['search_field'];
		$where_job_field = "%$where_job_field%";
		
		$where_position = $_POST['search_position'];
		$where_position = "%$where_position%";
		
		$where_client = $_POST['search_client'];
		$where_client = "%$where_client%";
		
		
		$stmt = $conn->prepare("SELECT * FROM job_posts WHERE job_field like ? AND position like ? AND client like ?");
		
		$stmt->bind_param("sss", $where_job_field,$where_position,$where_client);
		
		if ($stmt->execute() === TRUE) {
			
			$results = $stmt->get_result();
			while($row = $results->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$row['job_field']."</td>";
				echo "<td>".$row['job_description']."</td>";
				echo "<td>".$row['position']."</td>";
				echo "<td>".$row['client']."</td>";
				echo "<td>".$row['closing_date']."</td>";
				echo "<td>".$row['posted_date']."</td>";
				echo "<td><input type=\"button\" value=\"Apply Now\" /></td>";
				echo '<td><input type="button" value="Document Upload" onclick="location.href=\'../Madushi/document_upload.html\'" /></td>';
				
				echo "</tr>";
			}
		  
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	?>
	
		
	</table>
	
	
	
	<br/>
	<br/>
</div>
<?php
include("footer.php");
?>
   
