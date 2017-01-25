<?php
	function get_random_img($img_number,$dbo){
		$query="SELECT * FROM  `pictures` order by RAND() LIMIT 1 ";
		$res = $dbo->query($query);
		$row  =$res->fetch()
		?><center>
				<table class="HotOrNot">
					<tr>
						<td>
							<img src="<?php echo $row['path'] ?>"><br>
							<!-- Rating : <?php echo $row['rate'] ?>-->
						</td>
					</tr>
					<tr>
						<td><br><br><center>
							<form action="img_rating.php" method="POST" id="rateForm">
								<input type="hidden" name="img_id" value="<?php echo $row['id'] ?>">
								<button class="Hot" onClick="submitForm('rateForm');">NAZI</button> OR 
								
							</form>
							<button class="Not" onClick="reload();">NOT</button>
						</td>
					</tr>
				</table></center>
				<?php
			
		
	}
?>
