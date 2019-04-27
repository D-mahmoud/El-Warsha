<?Php
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="Final";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

$arr=array();

if(!$conn){

	echo 'Not connected to server';
}
echo "test";
$sql = "SELECT `ID`, `majorname` FROM `faculty`  ";

if ($result=mysqli_query($conn,$sql))
{

 while($row=mysqli_fetch_array($result)) {

      array_push($arr,$row);

   }
   foreach($arr as $rows){   		

   		echo '<option value="'.$rows[0].'">'.$rows[1].'</option>';

   }

  }
	else
	{

		echo 'cannot retrieve data';

	}


	?>