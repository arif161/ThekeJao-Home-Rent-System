<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HTML Page Header</title>
  <link rel="stylesheet" href="css/semantic.min.css">
  <?php require_once('db_config.php'); ?>
</head>

<body>

	 <div


	  style="text-align: center ;background-color:#B0E0E6; padding: 7%;">
	 <h1>Welcome To Home Rent System </h1>
	 <p> It offers arrangement forlodging,primary homestays, or tourism</p>

         <br>
	    <div class="ui three column grid">

	    	<div class ="column">
	    <a href="add_forms.html"> <button class ="ui blue huge button ">Add Host </button> </a>
	 </div>



	 <div class ="column">
	 	<button class ="ui blue huge button ">
	 	Renter </button>
	 </div>



	 	
        <div class ="column">
	 	<button class ="ui blue huge button ">
	 	Review </button>
	 </div>



	 	</div>
	 </div>






	<?php
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_errno) {
    			printf("Connect failed: %s\n", $conn->connect_error);
    		exit();
		}

		$query = "SELECT *FROM host";
		      
		if ($result = $conn->query($query)) {
			
			printf('<table class="ui unstackable table">');
			printf("<thead> <tr> <th>Index</th> <th></th> <th>Location</th> <th>Room_Type</th> <th>Guest</th></tr> </thead>");


            $index= 1 ;
		    /* fetch associative array */
		   

		    while ($row = $result->fetch_assoc()) {
		        printf ('<tr> 
		        	<td>%s</td>
		        	<td><a href="db/delete.php?id=%s">Delete </a></td> 

		        	  <td>%s</td>  <td>%s</td> <td>%s</td> </tr>', $index, $row["ID"], $row["Location"],$row["Room_Type"],$row["Guest"]);
		        $index++;
		    }


            printf(" <br> Host");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}





		$query = "SELECT *FROM renter";
		
		if ($result = $conn->query($query)) {
			
			printf('<table class="ui unstackable table">');
			printf("<thead> <tr> <th>Location</th> <th>Check_In</th> <th>Check_Out</th> <th>Adult</th><th>Children</th><th>Infants</th></tr> </thead>");


		    /* fetch associative array */
		    while ($row = $result->fetch_assoc()) {
		        printf ("<tr> <td>%s</td> <td>%s</td>  <td>%s</td> <td>%s</td>  <td>%s</td> <td>%s</td> </tr>", $row["Location"], $row["Check_In"],$row["Check_Out"],$row["Adult"],$row["Children"],$row["Infants"]);
		    }
		    
            printf(" <br> Renter");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}




		$query = "SELECT *FROM review";
		
		if ($result = $conn->query($query)) {
			
			printf('<table class="ui unstackable table">');
			printf("<thead> <tr> <th>Serial_Number</th> <th>Host_Id</th> <th>Renter_Id</th> <th>Star</th> <th>Comment</th></tr> </thead>");


		    /* fetch associative array */
		    while ($row = $result->fetch_assoc()) {
		        printf ("<tr> <td>%s</td> <td>%s</td>  <td>%s</td>  <td>%s</td> <td>%s</td> </tr>", $row["Serial_Number"],$row["Host_Id"], $row["Renter_Id"],$row["Star"],$row["Comment"]);
		    }


            printf("<br> Review");
		    printf("</table>");

		    printf("<br>%d record(s) found!<br>", $result->num_rows); /* how many table thats shows */
			printf('<div class="ui text container">');
			printf('</div>');
			 $result->free(); //free result set
		}







		else
		{
			printf("No record found!");
		}
		
		$conn->close();
	?>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>

</body>

</html>
