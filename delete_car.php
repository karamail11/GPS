<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="2;URL=mail.php">
<title>Untitled Document</title>
</head>

<body>

<?

	$id = $_GET["id"];
		
$cn = @mysql_connect("localhost","root","adminadmin");
		if(!$cn){
			echo "fail<br>";
			exit;
		}
		mysql_select_db("gps",$cn);
		$sql = "DELETE FROM gps.car WHERE car_id=".$id;
		$result = mysql_query($sql,$cn);
		if($result){
		echo " <h1> Delete Successfull Car ID : ".$id . " </h1>";
		echo "<img src='loading.gif'/>";
		}
		?>
        
</body>
</html>
