<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="refresh" content="2;URL=mail.php">-->
<title>Status Create Trip</title>
<style type = "text/css">
body{background-image:url(Img/bg2.jpg);color:#FFFFFF}
</style>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT"> 
var StayAlive = 3; // เวลาเป็นวินาทีที่ต้องการให้ WIndows เปิดออก 
function KillMe(){ 
setTimeout("self.close()",StayAlive * 1000); 
} 
window.parent.opener.document.location.href='mail.php';
</SCRIPT> 
</head>

<body> 

<?php
	$trip_name = $_GET["trip_name"];
	$start_long = $_GET["start_long"];
	$start_lat = $_GET["start_lat"];
	$end_long = $_GET["end_long"];
	$end_lat = $_GET["end_lat"];
	$car_id = $_GET["car_id"];
	$user_id = $_GET["user_id"];
	$location1 = $_GET["location1"];
	$location2 = $_GET["location2"];
	
	$date = "22";
	$start_time= "22";
	
	
	//ดึงค่า user_id ที่แท้จริงจาก database เพิื่อนำมา Add ลง Table Trip
	$cn = @mysql_connect("localhost:3307","root","adminadmin");
		if(!$cn){
			echo "fail<br>";
			exit;
		}
		mysql_select_db("gps",$cn);
		$sql = "SELECT * FROM gps.driver where pic ='".$user_id."'";
		$result = mysql_query($sql,$cn);

		while($row = mysql_fetch_array($result)){
			$i=1;
			if($i=1){
				$user_id = $row["user_id"];
                                echo $user_id;
			}
			$i = $i+1;
		}
		
		//ดึงค่า car_id ที่แท้จริงจาก database เพิื่อนำมา Add ลง Table Trip
		$cn = @mysql_connect("localhost:3307","root","adminadmin");
		if(!$cn){
			echo "fail<br>";
			exit;
		}
		mysql_select_db("gps",$cn);
		$sql = "SELECT * FROM gps.car where pic ='".$car_id."'";
		$result = mysql_query($sql,$cn);

		while($row = mysql_fetch_array($result)){
			$i=1;
			if($i=1){
				$car_id = $row["car_id"] ;
                                echo "car_id :" . $car_id;
			}
			$i = $i+1;
		}
		
		
		//Add Table Trip
		$cn = @mysql_connect("localhost:3307","root","adminadmin");
		if(!$cn){
			echo "fail<br>";
			exit;
		}
		mysql_select_db("gps",$cn);
		
		/*INSERT INTO gps.trip (start_long, start_lat, end_long,end_lat,user_id,car_id,trip_name,start_time,finish_time,date) VALUES ('13.5','100.5','13.6','100.6',1,'123','sriracha',"","","");*/
		
	
		$sql = "INSERT INTO gps.trip (start_long, start_lat, end_long,end_lat,user_id,car_id,trip_name,start_time,finish_time,date,start_location,end_location) VALUES ('$start_long','$start_lat','$end_long','$end_lat','$user_id','$car_id','$trip_name','$start_time',' ','$date','$location1','$location2')";
		$result = mysql_query($sql,$cn);
		if($result){
			echo "Create SuccessFull";
			echo "<img src='loading2.gif'/>";
		}
		else{
                        
			echo "Input fail";
			
		}
	
	

?>
</body>
</html>