<?php session_start() ; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
		$cn = @mysql_connect("localhost","root","adminadmin");
		mysql_select_db("gps",$cn);
		$authen = $_SESSION["authen"];
		$sql = "UPDATE gps.trip SET finish_time=now() where trip_id =".$authen;
		$result = mysql_query($sql,$cn);
		if($result) {
			echo "Recieve Success";
		}
		?>
		
</body>
</html>
