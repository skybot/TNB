<?php
$disp = array();
include "mysql_connect.php";

$return_arr = array();
$i=1;

$abfrage_room_data_1        = mysql_query("
SELECT EVENT_TITLE,EVENT_SUBTITLE,EVENT_ROOM,TRAINER_LAST_NAME,TRAINER_FIRST_NAME,TRAINER_GENDER,ROOM_NR,ADMIN_TEL,TRAINER_TEL,date_format

( EVENT_START, '%d.%m.%Y - %H:%i Uhr')
AS EVENT_START, date_format

( EVENT_END, '%d.%m.%Y - %H:%i Uhr' )
as EVENT_END

FROM EVENTS INNER JOIN TRAINER  ON EVENT_TRAINER = TRAINER_LAST_NAME INNER JOIN ROOMS  ON EVENT_ROOM = ROOM_NAME INNER JOIN ADMINS  ON CREATE_USER  = ADMIN_LAST_NAME
WHERE
UNIX_TIMESTAMP( EVENT_END) >= UNIX_TIMESTAMP() and UNIX_TIMESTAMP( EVENT_END)<= ( UNIX_TIMESTAMP()+30*24*60*60) and EVENT_TYPE_1 ='extern'
ORDER BY EVENT_START asc");
while($row                  = mysql_fetch_array($abfrage_room_data_1)) {
$disp[$i] = $row;
$i++;
}

echo json_encode($disp);

?>

