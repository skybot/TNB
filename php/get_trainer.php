<?
include "mysql_connect.php";
$sql="SELECT TRAINER_LAST_NAME FROM TRAINER ORDER BY id ASC";
$result = mysql_query($sql);
$stack=array();
    while($row = mysql_fetch_array($result))
          {
            array_push($stack,array($row['TRAINER_LAST_NAME'],$row['TRAINER_LAST_NAME']));
          }
           
echo json_encode($stack);
?>