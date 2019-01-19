

<!DOCTYPE html>
<html lang="en">
<head>
	
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->



</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				
					
					<br />
<center><span  style="font-size: large; "><strong><font  color="#FFFFFF"> 



<?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
}


if( $imageFileType != "bin" && $imageFileType != "jpg" && $imageFileType != "png" ) {
    echo "SERVERA SADECE BIN,JPG,PNG UZANTILI DOSYALARI YÜKLEYEBİLİRSİNİZ!";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "DOSYA SERVERA YUKLENEMEDİ!";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo basename( $_FILES["fileToUpload"]["name"]). " BAŞARIYLA SERVERA YÜKLENDİ!";
    } else {
        echo "DOSYA YUKLENİRKEN HATA OLUŞTU.";
    }
}
?>



</font></strong></span></center>



				
			</div>
		</div>
	</div>
	

	<script src="js/main.js"></script>

</body>
</html>
  
  
  







  
  
  








