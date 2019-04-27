
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="Final";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(!$conn){
	echo 'Not connected to server';
}
$Name=$_POST['Name'];
$UnivID=$_POST['uniID'];
$Email=$_POST['Email'];
$MajorID=$_POST['MajorID'];
$Mobile=$_POST['Mobile'];
$Workshop=$_POST['Workshop'];
$dayTimeID=$_POST['daytimeid'];


$sql = "INSERT INTO studentinfo (Name,uniID,Email,MajorID,Mobile,Workshop,daytimeid)

VALUES ('$Name', '$UnivID','$Email','$MajorID','$Mobile','$Workshop', '$dayTimeID')";
if (mysqli_query($conn,$sql))
{

  echo 'New record is inserted sucessfully';
	}
	else
	{
		echo 'Not inserted';
	}
?>