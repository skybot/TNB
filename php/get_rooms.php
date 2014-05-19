<?
include "mysql_connect.php";
$sql="SELECT ROOM_NAME FROM ROOMS ORDER BY id ASC";
$result = mysql_query($sql);
$stack=array();
    while($row = mysql_fetch_array($result))
          {
            array_push($stack,array($row['ROOM_NAME'],$row['ROOM_NAME']));
          }
           
echo json_encode($stack);
?>