





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

$val = "guncelle";

$fileContent=$val."\n";




$fileStatus=file_put_contents("guncelleVeritabani.txt",$fileContent,FILE_APPEND);

$val2 = "bootmode";

$fileContent2=$val2."\n";




$fileStatus2=file_put_contents("modVeritabani.txt",$fileContent2,FILE_APPEND);





if($fileStatus != false)

{
                echo  "Güncelleme İşlemi Başarıyla Tamamlandı!!";
}
else
{
                echo  "Hata Dosya okunamadı";
}
sleep(15);



$fp = fopen("guncelleVeritabani.txt", "r+");
ftruncate($fp, 0);
fclose($fp);


$fp2 = fopen("modVeritabani.txt", "r+");
ftruncate($fp2, 0);
fclose($fp2);




?>

</font></strong></span></center>



				
			</div>
		</div>
	</div>
	

	<script src="js/main.js"></script>

</body>
</html>
  
  
  






