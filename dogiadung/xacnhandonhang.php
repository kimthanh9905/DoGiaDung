<?php 
	include "login.php"
	?>
<?php 
	include "head.php"
	?>
<?php
$title ="Shop huy";
$name ="Điện thoai";
?>
<?php 
	include "top.php"
    ?>
    <?php 
	include "header.php"
	?>
	<?php 
	include "navigation.php"
	?>
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Contact Page///////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>Xác nhận đơn hàng</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10">
					<div class="heading"><h1 style="color:blue;text-align:center">Thông tin đơn hàng của bạn đã được chúng tôi ghi nhận                   
                    chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất
                    </h1></div>
					<?php
			function getUsernameFromEmail($email) {
				$find = '@';
				$pos = strpos($email, $find);
				$username = substr($email, 0, $pos);
				return $username;
			}
			$filename = getUsernameFromEmail($_SESSION['email']);
			?>
			<div class="qr-field">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'.@$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
                </div>
                <div class="col-lg-10" style="text-align:center">
                <a href="index.php" class="btn btn-1">Quay về trang chủ</a>
				</div>
			</div>
		</div>
	</div>
	<?php 
	include "footer.php"
	?>
</body>
</html>
