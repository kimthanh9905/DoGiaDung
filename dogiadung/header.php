	

	<header class="container">
		<div class="row">
			<div class="col-md-4" style="margin-bottom:25px">
			<img src="images/logo.jpg" alt="Logo" class="logo">

				<div id="logo"><h5 style="color:red">ĐIỆN TỬ GIA DỤNG MIN MIN</h5></div>
			</div>
			<div class="col-md-4">
				<form class="form-search" method="GET" action="timkiem.php">  
					<input type="text"  class="input-medium search-query" name="txttimkiem" required>  
					<button type="submit" name="tk" class="btn"><span class="glyphicon glyphicon-search"></span></button>  
				</form>
				
			</div>
			
			<div class="col-md-4">
				<div id="cart"><a class="btn btn-1" href="cart.php"><span class="glyphicon glyphicon-shopping-cart" style="color:red;"></span> (<?php
			$ok=1;
			 if(isset($_SESSION['cart']))
			 {
				 foreach($_SESSION['cart'] as $key => $value)
				 {
					 if(isset($key))
					 {
						$ok=2;
					 }
				 }
			 }
			
			 if($ok == 2)
			 {
				echo count($_SESSION['cart']);
			 }
			else
			{
				echo   "0";
			}
			
			
			?>)</a></div>
			</div>
		</div>
	</header>
	




