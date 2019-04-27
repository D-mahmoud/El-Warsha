<?Php
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="warsha";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

$arr=array();

if(!$conn){

	echo 'Not connected to server';
}

$sql =  "SELECT daytime.id, day.dayname,Time.time FROM `daytime` INNER JOIN day ON dayname.id =daytime.dayid INNER JOIN time on time.id=daytime.timeid";


if ($result=mysqli_query($conn,$sql))
{

 while($row=mysqli_fetch_array($result)) {

      array_push($arr,$row);

   }
   foreach($arr as $rows){

       echo '<option value="'.$rows[0].'">'.$rows[1]."=>".$rows[2].'</option>';

   }
    print_r($arr);
  }
	else
	{

		echo 'cannot retrieve data';
		
	}


	?>