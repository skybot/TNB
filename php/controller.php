<?php

/* Event hinzufügen */

IF ($_GET['what']=='add_event') {
include "mysql_connect.php";
//Daten vom Formular empfangfen

$EVENT_TITLE		= htmlspecialchars($_GET["EVENT_TITLE"]);
$EVENT_SUBTITLE		= htmlspecialchars($_GET["EVENT_SUBTITLE"]);
$EVENT_START 		= htmlspecialchars($_GET["EVENT_START"]);
$EVENT_END 			= htmlspecialchars($_GET["EVENT_END"]);
$EVENT_START1 		= date("Y-m-d H:i", strtotime($EVENT_START));
$EVENT_END1 		= date("Y-m-d H:i", strtotime($EVENT_END ));
$EVENT_TRAINER 		= htmlspecialchars($_GET["EVENT_TRAINER"]);
$EVENT_ROOM			= htmlspecialchars($_GET["EVENT_ROOM"]);
$EVENT_ADD_DATE 	= date("Y-m-d H:i:s");
$EVENT_TYPE_1		= htmlspecialchars($_GET["EVENT_TYPE_1"]);
$EVENT_TYPE_2		= htmlspecialchars($_GET["EVENT_TYPE_2"]);
$CREATE_USER		= $_GET["CREATE_USER"];
//Daten in Datenbank schreiben
$eintrag 					= "INSERT INTO EVENTS (EVENT_TITLE, EVENT_SUBTITLE, EVENT_START, EVENT_END, EVENT_TRAINER, EVENT_ROOM, EVENT_ADD_DATE, EVENT_TYPE_1, EVENT_TYPE_2, CREATE_USER) VALUES ('$EVENT_TITLE', '$EVENT_SUBTITLE', '$EVENT_START1', '$EVENT_END1', '$EVENT_TRAINER', '$EVENT_ROOM', '$EVENT_ADD_DATE', '$EVENT_TYPE_1','$EVENT_TYPE_2','$CREATE_USER')";
$eintragen 					= mysql_query($eintrag);
if (!$eintragen) {
die('Ungültige Anfrage: ' . mysql_error());
}
echo "1";
mysql_close();
}


/* Raum hinzufügen */

IF ($_GET['what']=='add_room') {
include "mysql_connect.php";
//Daten vom Formular empfangfen

$ROOM_NR			= htmlspecialchars($_GET["ROOM_NR"]);
$ROOM_NAME			= htmlspecialchars($_GET["ROOM_NAME"]);
$ROOM_ADMIN 		= htmlspecialchars($_GET["ROOM_ADMIN"]);
$ROOM_SPACE 		= htmlspecialchars($_GET["ROOM_SPACE"]);
$ROOM_ADD_DATE 		= date("Y-m-d H:i:s");

//Daten in Datenbank schreiben
$eintrag 					= "INSERT INTO ROOMS (ROOM_NR, ROOM_NAME, ROOM_ADMIN, ROOM_SPACE, ROOM_ADD_DATE) VALUES ('$ROOM_NR', '$ROOM_NAME', '$ROOM_ADMIN', '$ROOM_SPACE', '$ROOM_ADD_DATE')";
$eintragen 					= mysql_query($eintrag);
if (!$eintragen) {
die('Ungültige Anfrage: ' . mysql_error());
}
echo "1";
mysql_close();
}

/* Admin hinzufügen */

IF ($_GET['what']=='add_admin') {
include "mysql_connect.php";
//Daten vom Formular empfangfen

$ADMIN_FIRST_NAME			= htmlspecialchars($_GET["ADMIN_FIRST_NAME"]);
$ADMIN_LAST_NAME			= htmlspecialchars($_GET["ADMIN_LAST_NAME"]);
$ADMIN_TEL 					= htmlspecialchars($_GET["ADMIN_TEL"]);
$ADMIN_GENDER 				= htmlspecialchars($_GET["ADMIN_GENDER"]);
$ADMIN_ADD_DATE 			= date("Y-m-d H:i:s");

//Daten in Datenbank schreiben
$eintrag 					= "INSERT INTO ADMINS (ADMIN_FIRST_NAME, ADMIN_LAST_NAME, ADMIN_TEL, ADMIN_GENDER, ADMIN_ADD_DATE) VALUES ('$ADMIN_FIRST_NAME', '$ADMIN_LAST_NAME', '$ADMIN_TEL', '$ADMIN_GENDER', '$ADMIN_ADD_DATE')";
$eintragen 					= mysql_query($eintrag);
if (!$eintragen) {
die('Ungültige Anfrage: ' . mysql_error());
}
echo "1";
mysql_close();
}

/* DISPLAY hinzufügen */

IF ($_GET['what']=='add_disp') {
include "mysql_connect.php";
//Daten vom Formular empfangfen


$DISP_NAME					= htmlspecialchars($_GET["DISP_NAME"]);
$DISP_ROOM_COUNT			= htmlspecialchars($_GET["DISP_ROOM_COUNT"]);
$DISP_ROOM_1 				= htmlspecialchars($_GET["DISP_ROOM_1"]);
$DISP_ROOM_2 				= htmlspecialchars($_GET["DISP_ROOM_2"]);
$DISP_ROOM_1_SIDE 			= htmlspecialchars($_GET["DISP_ROOM_1_SIDE"]);
$DISP_ROOM_2_SIDE 			= htmlspecialchars($_GET["DISP_ROOM_2_SIDE"]);
$DISP_ADD_DATE				= date("Y-m-d H:i:s");

//Daten in Datenbank schreiben
$eintrag 					= "INSERT INTO DISPLAYS (DISP_NAME, DISP_ROOM_COUNT, DISP_ROOM_1, DISP_ROOM_2, DISP_ROOM_1_SIDE, DISP_ROOM_2_SIDE, DISP_ADD_DATE) VALUES ('$DISP_NAME', '$DISP_ROOM_COUNT', '$DISP_ROOM_1', '$DISP_ROOM_2', '$DISP_ROOM_1_SIDE', '$DISP_ROOM_2_SIDE', '$DISP_ADD_DATE')";
$eintragen 					= mysql_query($eintrag);
if (!$eintragen) {
die('Ungültige Anfrage: ' . mysql_error());
}
echo "1";
mysql_close();
}


/* DISPLAY hinzufügen */

IF ($_GET['what']=='add_trainer') {
include "mysql_connect.php";
//Daten vom Formular empfangfen


$TRAINER_FIRST_NAME			= htmlspecialchars($_GET["TRAINER_FIRST_NAME"]);
$TRAINER_LAST_NAME			= htmlspecialchars($_GET["TRAINER_LAST_NAME"]);
$TRAINER_TEL 				= htmlspecialchars($_GET["TRAINER_TEL"]);
$TRAINER_GENDER 			= htmlspecialchars($_GET["TRAINER_GENDER"]);


//Daten in Datenbank schreiben
$eintrag 					= "INSERT INTO TRAINER (TRAINER_FIRST_NAME, TRAINER_LAST_NAME, TRAINER_TEL, TRAINER_GENDER) VALUES ('$TRAINER_FIRST_NAME', '$TRAINER_LAST_NAME', '$TRAINER_TEL', '$TRAINER_GENDER')";
$eintragen 					= mysql_query($eintrag);
if (!$eintragen) {
die('Ungültige Anfrage: ' . mysql_error());
}
echo "1";
mysql_close();
}





?>
