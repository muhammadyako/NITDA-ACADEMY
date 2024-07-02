<div class="col-lg-4 col-md-6 search-course-right section-gap">
						<?php
						$sqls = " SELECT * FROM category";	
						$results = mysqli_query($link, $sqls);
						//$rows = mysqli_fetch_array($result);
						$totalcats=mysqli_num_rows($results);
							echo"<form class='form-wrap' method='get' action='search.php'>
								<h4 class='text-white pb-20 text-center mb-30'>Search for Available Course</h4>		
								<input type='text' class='form-control' name='name' placeholder='Your Name' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Your Name'' >
								<input type='phone' class='form-control' name='phone' placeholder='Your Phone Number' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Your Phone Number'' >
								<input type='email' class='form-control' name='email' placeholder='Your Email Address' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Your Email Address'' >
								<div class='form-select' id='service-select'>
									<select name='search'>
										<option datd-display=''>Choose Course</option>
										";
										while($rows = mysqli_fetch_array($results)){
										echo"<option value='$rows[CategoryName]'>$rows[CategoryName]</option>";
										}
										
									echo"</select>
								</div>									
								<button class='primary-btn text-uppercase'>Submit</button>
							</form>";
							?>
						</div>