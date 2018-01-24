           
		   <?php include('connect.php');
					$result = $mysqli->query("SELECT Tytuł,dzień,godzina,sala,cena FROM repertuar, film WHERE repertuar.id_filmu=film.id_filmu ");
					
					echo "<p>";
  echo "<table class=\"table table-inverse\"><tr>";
							 echo "<td class=\"bg-dark text-white\"><strong>Film</strong></td>";
							 echo "<td class=\"bg-dark text-white\"><strong>Dzień</strong></td>";
							 echo "<td class=\"bg-dark text-white\"><strong>Godzina</strong></td>";
							 echo "<td class=\"bg-dark text-white\"><strong>Sala</strong></td>";
							 echo "<td class=\"bg-dark text-white\"><strong>Cena</strong></td>";
							 echo "</tr>";
 
					while ( $reper = mysqli_fetch_array($result) )
					{  
					     echo "<tr>";
					echo "<td><span class=\"badge badge-info\">". $reper[0] . "</span></td>";
						 echo "<td><span class=\"badge badge-light\">" . $reper[1] . "</span></td>";
					     echo "<td><span class=\"badge badge-danger\">" . $reper[2] . "</span></td>";
					     echo "<td><span class=\"badge badge-light\">" . $reper[3] . "</span></td>";
				    	 echo "<td><span class=\"badge badge-light\">" . $reper[4] . "</span></td>";

							
				echo "</tr>";
				
					}
					
					
				 ?> 
				 <div class="col lg-12">
              
             
			  <table 
</table>
			

       

              
            </div>