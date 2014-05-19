<!DOCTYPE html>
<?php
$DISPLAY_NAME ="IPAD_07";
?>
<script type="text/javascript" src="../js/libs/jquery-2.0.2.min.js"></script>
<html>
<head>
  	<meta name="viewport" content="text/html; charset=utf-8">
    <title><?php echo $DISPLAY_NAME ?></title>
    <!-- Bootstrap -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet" type="text/css">
</head>
<body>

<!-- ============================== Raum 1 ANFANG ======================================================================= -->
<!-- ============================== Raum 1 NAME NUMMER RICHTUNG ANFANG ================================================== -->
<span id="AREA_01_ROOM_INFO">
        <div class="row">
        	<div class="col col-xs-3">
    			<span id="ROOM_NR_01"style="font-size: 50px;font-weight: bold;"></span>
    		</div>

    		<div class="col col-xs-9 text-right">
    			<span id="ROOM_01" style="font-size: 65px;font-weight: bold;font-family: 'Ubuntu', sans-serif;"></span>
    		</div>
    		<div class="col col-xs-12">
    			<span id="ROOM_01_SIDE"></span>
    		</div>
    		<div class="row">&nbsp;</div>
        </div>
</span>
<!-- ============================== Raum 1 NAME NUMMER RICHTUNG ENDE ==================================================== -->
<!-- ============================== Raum 1 EVENT ANFANG ================================================================= -->
    <span id="AREA_01_1">
    	<div class="row"  style="background-color: #153C57;">

    			<div class="col col-xs-12">
    				<span id="EVENT_TITLE_01" style="font-size: 50px;font-weight: bold;color: #f79263;"></span>
    			</div>
				<div class="col col-xs-12">
					<span id="EVENT_SUBTITLE_01" style="font-size: 35px;font-weight: bold;"></span>
				</div>
				<div class="col col-xs-2">
					<span style="font-size: 32px;">Beginn</span>
				</div>
				<div class="col col-xs-10">
					<span id="EVENT_START_01" style="font-size: 32px;"></span>
				</div>
				<div class="col col-xs-2">
					<span style="font-size: 32px;"></i>Ende</span>
				</div>
				<div class="col col-xs-10">
					<span id="EVENT_END_01" style="font-size: 32px;"></span>
				</div>
				<div class="col col-xs-2">
					<span id="EVENT_TRAINER_GENDER_01"style="font-size: 32px;"></span>
				</div>
				<div class="col col-xs-4">
					<span id="EVENT_TRAINER_LAST_NAME_01" style="font-size: 32px;"></span>
				</div>
				<div class="col col-xs-1">
					<span style="font-size: 32px;"><i class="fa fa-phone"></i></span>
				</div>
				<div class="col col-xs-5">
					<span id="EVENT_TRAINER_TEL_01" style="font-size: 32px;"></span>
				</div>
		</div>
    </span>
<!-- ============================== Raum 1 EVENT ENDE ==================================================================== -->
<!-- ============================== Raum 1 RAUM LEER ANFANG ============================================================== -->
    <span id="AREA_01_0">
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="onoffswitch">
    		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch_01" checked>
    			<label class="onoffswitch-label" for="myonoffswitch_01">
    				<div class="onoffswitch-inner"></div>
    				<div class="onoffswitch-switch"></div>
    			</label>
    	</div>
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>


	</span>
<!-- ============================== Raum 1 RAUM LEER ENDE ================================================================= -->
<!-- ============================== Raum 1 RAUM ADMIN ANFANG ============================================================== -->
<span id="AREA_01_ROOM_ADMIN">
        <div class="row">
        	<div class="col col-xs-5">
        		<span style="font-size: 35px;font-weight: bold;">Ansprechpartner:</span>
    		</div>
        	<div class="col col-xs-4">
        		<span id="ROOM_01_ADMIN"style="font-size: 35px;"></span>
    		</div>
        	<div class="col col-xs-3">
        		<span id="ROOM_01_ADMIN_TEL" style="font-size: 40px;"></i></span>
    		</div>
        </div>
</span>
<!-- ============================== Raum 1 RAUM ADMIN ENDE ================================================================= -->
<!-- ============================== Raum 1 ENDE ======================================================================= -->
<hr>
<!-- ============================== Raum 2 ANFANG ======================================================================= -->
<!-- ============================== Raum 2 NAME NUMMER RICHTUNG ANFANG ================================================== -->
<span id = "event_2">
	<span id="AREA_02_ROOM_INFO">
        <div class="row">
        	<div class="col col-xs-3">
    			<span id="ROOM_NR_02"style="font-size: 50px;font-weight: bold;"></span>
    		</div>

    		<div class="col col-xs-9 text-right">
    			<span id="ROOM_02" style="font-size: 65px;font-weight: bold;font-family: 'Ubuntu', sans-serif;"></span>
    		</div>
        </div>
        <div id="ROOM_02_SIDE"class="row"></div>
        <div class="row">&nbsp;</div>
	</span>
<!-- ============================== Raum 2 NAME NUMMER RICHTUNG ENDE ==================================================== -->
<!-- ============================== Raum 2 EVENT ANFANG ================================================================= -->
	<span id="AREA_02_1">
		<div class="row"  style="background-color: #153C57;">
			<div class="col col-xs-12">
				<span id="EVENT_TITLE_02" style="font-size: 50px;font-weight: bold;color: #f79263;"></span>
			</div>
			<div class="col col-xs-12">
				<span id="EVENT_SUBTITLE_02" style="font-size: 35px;font-weight: bold;"></span>
			</div>
			<div class="col col-xs-2">
				<span style="font-size: 32px;">Beginn</span>
			</div>
			<div class="col col-xs-10">
				<span id="EVENT_START_02" style="font-size: 32px;"></span>
			</div>
			<div class="col col-xs-2">
				<span style="font-size: 32px;"></i>Ende</span>
			</div>
			<div class="col col-xs-10">
				<span id="EVENT_END_02" style="font-size: 32px;"></span>
			</div>
			<div class="col col-xs-2">
				<span id="EVENT_TRAINER_GENDER_02"style="font-size: 32px;"></span>
			</div>
			<div class="col col-xs-4">
				<span id="EVENT_TRAINER_LAST_NAME_02" style="font-size: 32px;"></span>
			</div>
			<div class="col col-xs-1">
				<span style="font-size: 32px;"><i class="fa fa-phone"></i></span>
			</div>
			<div class="col col-xs-5">
				<span id="EVENT_TRAINER_TEL_02" style="font-size: 32px;"></span>
			</div>
		</div>
    </span>
<!-- ============================== Raum 2 EVENT ENDE ==================================================================== -->
<!-- ============================== Raum 2 RAUM LEER ANFANG ============================================================== -->
    <span id="AREA_02_0">
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="onoffswitch">
    		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch_02" checked>
    			<label class="onoffswitch-label" for="myonoffswitch_02">
    				<div class="onoffswitch-inner"></div>
    				<div class="onoffswitch-switch"></div>
    			</label>
    	</div>
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
	</span>
<!-- ============================== Raum 2 RAUM LEER ENDE ================================================================= -->
<!-- ============================== Raum 2 RAUM ADMIN ANFANG ============================================================== -->
	<span id="AREA_02_ROOM_ADMIN">
        <div class="row">
        	<div class="col col-xs-5">
        		<span style="font-size: 35px;font-weight: bold;">Ansprechpartner:</span>
    		</div>
        	<div class="col col-xs-4">
        		<span id="ROOM_02_ADMIN"style="font-size: 35px;"></span>
    		</div>
        	<div class="col col-xs-3">
        		<span id="ROOM_02_ADMIN_TEL" style="font-size: 40px;"></i></span>
    		</div>
        </div>
	</span>
</span>
<!-- ============================== Raum 2 RAUM ADMIN ENDE ================================================================= -->
<!-- ============================== Raum 2 ENDE ======================================================================= -->

	</body>
</html>


<script type="text/javascript">


$(document).ready(function(){
check();

var auto_refresh = setInterval(check,10000);

});
function check()
{

var status;
        $.getJSON('../php/db_controler.php?DISP_NAME=<?php echo $DISPLAY_NAME ?>',
        	function(data){

			if(data.DISP_ROOM_COUNT === "1"){
        	$("#event_2").hide();

          								}


			if(data.DISP_ROOM_COUNT === "2"){
        	$("#event_2").show();

          								}


        	if(data.EVENT_ON_1 === "1"){
        	$("#AREA_01_0").hide();
        	$("#AREA_01_1").show();
          								}

			if(data.EVENT_ON_1 === "0"){
            $("#AREA_01_0").show();
        	$("#AREA_01_1").hide();
          								}

			if(data.EVENT_ON_2 === "1"){
        	$("#AREA_02_0").hide();
        	$("#AREA_02_1").show();
          								}

   			if(data.EVENT_ON_2 === "0"){
			$("#AREA_02_0").show();
        	$("#AREA_02_1").hide();
          								}









        	$("#ROOM_01").empty();
        	$("#ROOM_01").append(data.DISP_ROOM_1);
        	$("#ROOM_02").empty();
        	$("#ROOM_02").append(data.DISP_ROOM_2);
        	$("#ROOM_01_SIDE").empty();
        	$("#ROOM_02_SIDE").empty();
        	$("#ROOM_NR_01").empty();
        	$("#ROOM_NR_02").empty();
        	$("#ROOM_NR_01").append(data.ROOM_NR_1);
        	$("#ROOM_NR_02").append(data.ROOM_NR_2);
        	$("#ROOM_01_ADMIN").empty();
        	$("#ROOM_01_ADMIN").append(data.ADMIN_GENDER_1 + " " +data.ADMIN_LAST_NAME_1);
        	$("#ROOM_02_ADMIN").empty();
        	$("#ROOM_02_ADMIN").append(data.ADMIN_GENDER_2 + " " +data.ADMIN_LAST_NAME_2);
        	$("#ROOM_01_ADMIN_TEL").empty();
        	$("#ROOM_01_ADMIN_TEL").append('<i class="fa fa-phone-square fa-1x"> '+data.ADMIN_TEL_1);
        	$("#ROOM_02_ADMIN_TEL").empty();
        	$("#ROOM_02_ADMIN_TEL").append('<i class="fa fa-phone-square fa-1x"> '+data.ADMIN_TEL_2);


        	$("#EVENT_TITLE_01").empty();
        	$("#EVENT_TITLE_01").append(data.EVENT_TITLE_1);
        	$("#EVENT_SUBTITLE_01").empty();
        	$("#EVENT_SUBTITLE_01").append(data.EVENT_SUBTITLE_1);
        	$("#EVENT_START_01").empty();
        	$("#EVENT_START_01").append(data.EVENT_START_1);
        	$("#EVENT_END_01").empty();
        	$("#EVENT_END_01").append(data.EVENT_END_1);
        	$("#EVENT_TRAINER_GENDER_01").empty();
        	$("#EVENT_TRAINER_GENDER_01").append('<i class="fa fa-user"></i> '+data.TRAINER_GENDER_1);
        	$("#EVENT_TRAINER_LAST_NAME_01").empty()
        	$("#EVENT_TRAINER_LAST_NAME_01").append(data.EVENT_TRAINER_LAST_NAME_1);
        	$("#EVENT_TRAINER_TEL_01").empty()
        	$("#EVENT_TRAINER_TEL_01").append(data.EVENT_TRAINER_TEL_1);


        	$("#EVENT_TITLE_02").empty();
        	$("#EVENT_TITLE_02").append(data.EVENT_TITLE_2);
        	$("#EVENT_SUBTITLE_02").empty();
        	$("#EVENT_SUBTITLE_02").append(data.EVENT_SUBTITLE_2);
        	$("#EVENT_START_02").empty();
        	$("#EVENT_START_02").append(data.EVENT_START_2);
        	$("#EVENT_END_02").empty();
        	$("#EVENT_END_02").append(data.EVENT_END_2);
        	$("#EVENT_TRAINER_GENDER_02").empty();
        	$("#EVENT_TRAINER_GENDER_02").append('<i class="fa fa-user"></i> '+data.TRAINER_GENDER_2);
        	$("#EVENT_TRAINER_LAST_NAME_02").empty()
        	$("#EVENT_TRAINER_LAST_NAME_02").append(data.EVENT_TRAINER_LAST_NAME_2);
        	$("#EVENT_TRAINER_TEL_02").empty()
        	$("#EVENT_TRAINER_TEL_02").append(data.EVENT_TRAINER_TEL_2);












        	if(data.DISP_ROOM_1_SIDE === "right"){
            $("#ROOM_01_SIDE").append('<div class="col col-xs-12 text-right"><i style="font-size: 72px;" class="fa fa-arrow-right fa-5x text-right"></i></div>');
			}
			if(data.DISP_ROOM_1_SIDE === "left"){
            $("#ROOM_01_SIDE").append('<div class="col col-xs-12 text-left"><i style="font-size: 72px;" class="fa fa-arrow-left fa-5x text-left"></i></div>');
			}

			if(data.DISP_ROOM_2_SIDE === "right"){
            $("#ROOM_02_SIDE").append('<div class="col col-xs-12 text-right"><i style="font-size: 72px;" class="fa fa-arrow-right fa-5x text-right"></i></div>');
			}
			if(data.DISP_ROOM_2_SIDE === "left"){
            $("#ROOM_02_SIDE").append('<div class="col col-xs-12 text-left"><i style="font-size: 72px;" class="fa fa-arrow-left fa-5x text-left"></i></div>');
			}





            });






};


</script>

