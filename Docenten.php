<html lang="en">
<body>
	<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "acus";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$Docent = "SELECT D.Naam FROM docent";
	$Result = $conn->query($Docent);
	if ($Result->num_rows > 0) {
    // output data of each row
    while($row = $Result->fetch_assoc()) {
        echo "Docent naam: " . $row["D.Naam"];
		}
	}


		
	?>
			<div class="modal fade" id="Docent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static" >
				<div class="modal-dialog">
					<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<div class="modal-header">
						
							<h2 class="modal-title" id="myModalLabel">Docenten</h2>
						</div>
						<div class="modal-body">
						
							<h3>
								
							</h3>
						
							</div>
						</div>
					</div>
				</div>
</body>

</html>