<?
include "mysql_connect.php";
$sql="SELECT ADMIN_LAST_NAME FROM ADMINS ORDER BY id ASC";
$result = mysql_query($sql);
$stack=array();
    while($row = mysql_fetch_array($result))
          {
            array_push($stack,array($row['ADMIN_LAST_NAME'],$row['ADMIN_LAST_NAME']));
          }
           
echo json_encode($stack);
?>