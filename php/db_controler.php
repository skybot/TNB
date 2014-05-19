<?php
$disp = array();
include "mysql_connect.php";
$DISPLAY 					= $_GET["DISP_NAME"];
//============================== Abfrage welches Display und der dazugehörigen Räume
$abfrage_display_data       = mysql_query("SELECT * FROM DISPLAYS WHERE DISP_NAME = '".$DISPLAY."'");
while($row                  = mysql_fetch_array($abfrage_display_data)) {
$disp[DISP_ROOM_COUNT]		= $row['DISP_ROOM_COUNT'];
$disp[DISP_ROOM_1] 			= $row['DISP_ROOM_1'];
$disp[DISP_ROOM_2] 			= $row['DISP_ROOM_2'];
$disp[DISP_ROOM_1_SIDE] 	= $row['DISP_ROOM_1_SIDE'];
$disp[DISP_ROOM_2_SIDE] 	= $row['DISP_ROOM_2_SIDE'];
}
//============================== Abfrage RAUM_1 DATEN
$abfrage_room_data_1        = mysql_query("SELECT * FROM ROOMS WHERE ROOM_NAME = '".$disp[DISP_ROOM_1]."'");
while($row                  = mysql_fetch_array($abfrage_room_data_1)) {
$disp[ROOM_NR_1]            = "". $row["ROOM_NR"] ."" ;
$disp[ROOM_ADMIN_1]         = "". $row["ROOM_ADMIN"] ."" ;
$disp[DISP_ROOM_1_PHOTO]    = "". $row["ROOM_PHOTO"] ."" ;
}
//============================== Abfrage RAUM_2 DATEN
$abfrage_room_data_2        = mysql_query("SELECT * FROM ROOMS WHERE ROOM_NAME = '".$disp[DISP_ROOM_2]."'");
while($row                  = mysql_fetch_array($abfrage_room_data_2)) {
$disp[ROOM_NR_2]            = "". $row["ROOM_NR"] ."" ;
$disp[ROOM_ADMIN_2]         = "". $row["ROOM_ADMIN"] ."" ;
}
//============================== Abfrage RAUM_1_ADMIN_DATEN
$abfrage_room_admin_data_1  = mysql_query("SELECT * FROM ADMINS WHERE ADMIN_LAST_NAME = '".$disp[ROOM_ADMIN_1]."'");
while($row                  = mysql_fetch_array($abfrage_room_admin_data_1)) {
$disp[ADMIN_GENDER_1]         = "". $row["ADMIN_GENDER"] ."" ;
$disp[ADMIN_FIRST_NAME_1]     = "". $row["ADMIN_FIRST_NAME"] ."" ;
$disp[ADMIN_LAST_NAME_1]      = "". $row["ADMIN_LAST_NAME"] ."" ;
$disp[ADMIN_TEL_1]            = "". $row["ADMIN_TEL"] ."" ;
}
//============================== Abfrage RAUM_2_ADMIN_DATEN
$abfrage_room_admin_data_2  = mysql_query("SELECT * FROM ADMINS WHERE admin_last_name = '".$disp[ROOM_ADMIN_2]."'");
while($row                  = mysql_fetch_array($abfrage_room_admin_data_2)) {
$disp[ADMIN_GENDER_2]         = "". $row["ADMIN_GENDER"] ."" ;
$disp[ADMIN_FIRST_NAME_2]     = "". $row["ADMIN_FIRST_NAME"] ."" ;
$disp[ADMIN_LAST_NAME_2]      = "". $row["ADMIN_LAST_NAME"] ."" ;
$disp[ADMIN_TEL_2]            = "". $row["ADMIN_TEL"] ."" ;
}


//============================== Abfrage EVENTS RAUM 01
$disp[EVENT_ON_1]			= "1";
$abfrage_1		= mysql_query(

"SELECT EVENT_TITLE,EVENT_SUBTITLE,TRAINER_FIRST_NAME,TRAINER_LAST_NAME,TRAINER_GENDER,TRAINER_TEL,date_format
(EVENT_START, '%d.%m.%Y - %H:%i')
AS EVENT_START, date_format
(EVENT_END, '%d.%m.%Y - %H:%i')
as EVENT_END
FROM EVENTS INNER JOIN TRAINER  ON EVENT_TRAINER = TRAINER_LAST_NAME
WHERE
EVENT_ROOM = '$disp[DISP_ROOM_1]'
AND
UNIX_TIMESTAMP( EVENT_START) <= UNIX_TIMESTAMP()
AND
UNIX_TIMESTAMP( EVENT_END) >= UNIX_TIMESTAMP()");


while($row                  		= mysql_fetch_array($abfrage_1)) {
$disp[EVENT_TITLE_1]				= "". $row["EVENT_TITLE"] ."" ;
$test1								= "". $row["EVENT_TITLE"] ."" ;
$disp[EVENT_SUBTITLE_1]				= "". $row["EVENT_SUBTITLE"] ."" ;
$disp[EVENT_START_1]				= "". $row["EVENT_START"] ."" ;
$disp[EVENT_END_1]					= "". $row["EVENT_END"] ."" ;
$disp[TRAINER_GENDER_1]				= "". $row["TRAINER_GENDER"] ."" ;
$disp[EVENT_TRAINER_LAST_NAME_1]	= "". $row["TRAINER_LAST_NAME"] ."" ;
$disp[EVENT_TRAINER_TEL_1]			= "". $row["TRAINER_TEL"] ."" ;
}
if (empty($test1)) {
$disp[EVENT_ON_1]			= "0";
}


//============================== Abfrage EVENTS RAUM 02
$disp[EVENT_ON_2]			= "1";
$abfrage_2		= mysql_query(
"SELECT EVENT_TITLE,EVENT_SUBTITLE,TRAINER_FIRST_NAME,TRAINER_LAST_NAME,TRAINER_GENDER,TRAINER_TEL,date_format
(EVENT_START, '%d.%m.%Y - %H:%i')
AS EVENT_START, date_format
(EVENT_END, '%d.%m.%Y - %H:%i')
as EVENT_END
FROM EVENTS INNER JOIN TRAINER  ON EVENT_TRAINER = TRAINER_LAST_NAME
WHERE
EVENT_ROOM = '$disp[DISP_ROOM_2]'
AND
UNIX_TIMESTAMP( EVENT_START) <= UNIX_TIMESTAMP()
AND
UNIX_TIMESTAMP( EVENT_END) >= UNIX_TIMESTAMP()");


while($row                  		= mysql_fetch_array($abfrage_2)) {
$disp[EVENT_TITLE_2]				= "". $row["EVENT_TITLE"] ."" ;
$test2								= "". $row["EVENT_TITLE"] ."" ;
$disp[EVENT_SUBTITLE_2]				= "". $row["EVENT_SUBTITLE"] ."" ;
$disp[EVENT_START_2]				= "". $row["EVENT_START"] ."" ;
$disp[EVENT_END_2]					= "". $row["EVENT_END"] ."" ;
$disp[TRAINER_GENDER_2]				= "". $row["TRAINER_GENDER"] ."" ;
$disp[EVENT_TRAINER_LAST_NAME_2]	= "". $row["TRAINER_LAST_NAME"] ."" ;
$disp[EVENT_TRAINER_TEL_2]			= "". $row["TRAINER_TEL"] ."" ;
}
if (empty($test2)) {
$disp[EVENT_ON_2]			= "0";
}

//===================================================================================



//============================== Abfrage NEXT 3 EVENTS RAUM 01
$next_1		= mysql_query(

"SELECT meinetabelle.*,date_format
( meinetabelle.EVENT_START, '%d.%m.%Y <b>Beginn:</b> %H:%i')
AS EVENT_START, date_format
( meinetabelle.EVENT_END, '%d.%m.%Y <b>Ende:</b> %H:%i' )
as EVENT_END
FROM EVENTS AS meinetabelle
WHERE
EVENT_ROOM = '$disp[DISP_ROOM_1]'
AND
UNIX_TIMESTAMP( EVENT_START) >= UNIX_TIMESTAMP()
ORDER BY EVENT_START asc LIMIT 0, 1 ");

 while($row                  		= mysql_fetch_array($next_1)) {
$disp[NEXT_EVENT_TITLE_1]		 	= "". $row["EVENT_TITLE"] ."" ;
$disp[NEXT_EVENT_SUBTITLE_1]		= "". $row["EVENT_SUBTITLE"] ."" ;
$disp[NEXT_EVENT_START_1]			= "". $row["EVENT_START"] ."" ;
$disp[NEXT_EVENT_END_1]				= "". $row["EVENT_END"] ."" ;
$disp[NEXT_EVENT_TRAINER_1]			= "". $row["EVENT_TRAINER"] ."" ;
}

$next_2		= mysql_query(
 "SELECT meinetabelle.*,date_format
( meinetabelle.EVENT_START, '%d.%m.%Y <b>Beginn:</b> %H:%i')
AS EVENT_START, date_format
( meinetabelle.EVENT_END, '%d.%m.%Y <b>Ende:</b> %H:%i' )
as EVENT_END
FROM EVENTS AS meinetabelle
WHERE
EVENT_ROOM = '$disp[DISP_ROOM_1]'
AND
UNIX_TIMESTAMP( EVENT_START) >= UNIX_TIMESTAMP()
ORDER BY EVENT_START asc LIMIT 1, 1 ");

 while($row                  		= mysql_fetch_array($next_2)) {
$disp[NEXT_EVENT_TITLE_2]		 	= "". $row["EVENT_TITLE"] ."" ;
$disp[NEXT_EVENT_SUBTITLE_2]		= "". $row["EVENT_SUBTITLE"] ."" ;
$disp[NEXT_EVENT_START_2]			= "". $row["EVENT_START"] ."" ;
$disp[NEXT_EVENT_END_2]				= "". $row["EVENT_END"] ."" ;
$disp[NEXT_EVENT_TRAINER_2]			= "". $row["EVENT_TRAINER"] ."" ;
}
$next_3		= mysql_query(
 "SELECT meinetabelle.*,date_format
( meinetabelle.EVENT_START, '%d.%m.%Y <b>Beginn:</b> %H:%i')
AS EVENT_START, date_format
( meinetabelle.EVENT_END, '%d.%m.%Y <b>Ende:</b> %H:%i' )
as EVENT_END
FROM EVENTS AS meinetabelle
WHERE
EVENT_ROOM = '$disp[DISP_ROOM_1]'
AND
UNIX_TIMESTAMP( EVENT_START) >= UNIX_TIMESTAMP()
ORDER BY EVENT_START asc LIMIT 2, 1 ");

 while($row                  		= mysql_fetch_array($next_3)) {
$disp[NEXT_EVENT_TITLE_3]		 	= "". $row["EVENT_TITLE"] ."" ;
$disp[NEXT_EVENT_SUBTITLE_3]		= "". $row["EVENT_SUBTITLE"] ."" ;
$disp[NEXT_EVENT_START_3]			= "". $row["EVENT_START"] ."" ;
$disp[NEXT_EVENT_END_3]				= "". $row["EVENT_END"] ."" ;
$disp[NEXT_EVENT_TRAINER_3]			= "". $row["EVENT_TRAINER"] ."" ;
}

// Zugriff:
echo json_encode($disp);

?>


