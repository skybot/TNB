<!DOCTYPE html>

<html>
	<script type="text/javascript" src="../js/libs/jquery-2.0.2.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap/bootstrap.min.js"></script>
 	<head>
	  	<meta name="viewport" content="text/html; charset=utf-8">
	    <title><?php echo $DISPLAY ?></title>
	    <!-- Bootstrap -->
	    <link href="./css/bootstrap.css" rel="stylesheet">
	    <link href="../css/font-awesome.min.css" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet" type="text/css">
	</head>
  <meta http-equiv="content-type" content="text/html, charset=utf-8" />

<body>
<div id="wrap">
  <div class="row"  style="">
    <div class="col col-xs-12">
      <div id ="date_time1" class="col col-xs-6">
        <span id="datum" style="font-size: 50px"</span>
      </div>
      <div id ="date_time2" class="col col-xs-6">
        <span id="zeit" style="font-size: 50px" class="text-right"></span>
      </div>
    </div>
  </div>
  <div class="carousel slide" id="carousel-791361" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
	      <div class="container">
	      	<h1 class="text-center" style="font-size: 150px;">Welcome</h1>
	      	<!-- <h1 class="text-center" style="font-size: 100px;">TAC Erlangen</h1> -->
	      	<div class="row text-center">
	      		<img class="center" src="img/TAC_1_4.png" alt="TAC" width="800px" height="" />
	      	</div>
	      </div>
      </div>
      <div class="item">
	      <div class="container">
	      	<h1 class="text-center" style="font-size: 90px;">Roomplan</h1>
	      	<div class="row text-center">
	      		<div class="well well-lg">
	      			<img class="center" src="img/Lageplan_TAC.svg" width="1000px" alt="TAC" />
	      		</div>
	      	</div>
	      </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>


<script src="../js/plugin/jquery-tmpl/jquery.tmpl.js"></script>

<script id="events" type="text/x-jquery-tmpl">
  <hr>
  <div class="row"  style="">
    <div id="event_block" class="col col-xs-12" style="background-color: #153C57">
      <div class="col col-xs-12">
        <div class="col col-xs-8">
          <span id="NEXT_EVENT_TITLE_01" style="font-size: 45px;">${titel}</span>
        </div>
        <div class="col col-xs-1">
          <span style="font-size: 35px;">Raum</span>
        </div>
        <div class="col col-xs-3">
          <span id="NEXT_EVENT_TITLE_01" style="font-size: 35px;"><b>${room}</b></span>
        </div>
        <div class="col col-xs-8">
          <span id="NEXT_EVENT_SUBTITLE_01" style="font-size: 25px;font-weight: bold;">${subtitle}</span>
        </div>
        <div class="col col-xs-1">
          <span style="font-size: 25px;"><i class="fa fa-building-o"></i>Nr.</span>
        </div>
        <div class="col col-xs-3">
          <span id="NEXT_EVENT_SUBTITLE_01" style="font-size: 25px;font-weight: bold;">${room_nr}</span>
        </div>
        <div class="col col-xs-1">
          <span style="font-size: 25px;">Beginn</span>
        </div>
        <div class="col col-xs-7">
          <span id="NEXT_EVENT_START_01" style="font-size: 25px;"> ${start}</span>
        </div>
        <div class="col col-xs-1">
          <span style="font-size: 25px;">Trainer</span>
        </div>
        <div class="col col-xs-3">
          <span id="NEXT_EVENT_TRAINER_0" style="font-size: 25px;"><b>${trainer_gender}  ${trainer_first_name} ${trainer_last_name}</b></span>
        </div>
        <div class="col col-xs-1">
          <span style="font-size: 25px;">Ende</span>
        </div>
        <div class="col col-xs-7">
          <span id="NEXT_EVENT_END_01" style="font-size: 25px;"> ${ende}</span>
        </div>
        <div class="col col-xs-1">
          <span style="font-size: 25px;"><i class="fa fa-phone"></i> Tel</span>
        </div>
        <div class="col col-xs-3">
          <span id="NEXT_EVENT_TRAINER_TEL" style="font-size: 25px;"><b></b>+049 9131 98 3423</span> <!---${trainer_tel} -->
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>


      </div>
    </div>
  </div>
</script>

<script type="text/javascript">




$('#carousel-791361').carousel({

    interval: 10000
});

function check()
{

  $.ajax({
    type : 'GET',
    dataType : 'json',
    url : '../php/big_screen.php',
    success : function(events) {
      var event_blocks = [];

      if (events.length == 0) {
        return;
      }



      event_list = [];

      $.each(events, function(index, obj) {
        event_list.push({
             titel  				: obj.EVENT_TITLE,
             subtitle 				: obj.EVENT_SUBTITLE,
             start  				: obj.EVENT_START,
             ende   				: obj.EVENT_END,
             room   				: obj.EVENT_ROOM,
             room_nr   				: obj.ROOM_NR,
             trainer_last_name  	: obj.TRAINER_LAST_NAME,
             trainer_first_name  	: obj.TRAINER_FIRST_NAME,
             trainer_gender		  	: obj.TRAINER_GENDER,
             trainer_tel		  	: obj.TRAINER_TEL

        });
      });

      while (event_list.length != 0) {
        next_five_events 	= event_list.splice(0, 4);
        item_span			= $('<span></span>')
        item_active_div 	= $("<div class='item active'></div>")
        item_div 			= $("<div class='item'></div>")
		//item_welcome.appendTo(item_div)
        $('#events').tmpl(next_five_events).appendTo(item_div)
        //item_active_div.appendTo('.carousel-inner');
        item_div.appendTo('.carousel-inner');
      }
    }
  });
};

 delete $.template["carousel-inner"];

function skin(){

var status;
        $.getJSON('../php/skin.php',
        	function(data){

        	$('body').css('background-color',data.SKIN_BIG_MASTER_BG);

        	$('#date_time1').css('background-color',data.SKIN_BIG_DATE_TIME_BG);
        	$('#date_time2').css('background-color',data.SKIN_BIG_DATE_TIME_BG);
			$('#datum').css		('color',data.SKIN_BIG_DATE_TIME_FT);
			$('#zeit').css		('color',data.SKIN_BIG_DATE_TIME_FT);

            });
};




$(document).ready(function(){
  check();
  //var auto_refresh = setInterval(check,100000);
  skin();
  //var auto_refresh = setInterval(skin,1000);

});


  window.setInterval("zeitanzeige()",1000);

  function zeitanzeige() {
    d = new Date ();

    h = (d.getHours () < 10 ? '0' + d.getHours () : d.getHours ());
    m = (d.getMinutes () < 10 ? '0' + d.getMinutes () : d.getMinutes ());
    s = (d.getSeconds () < 10 ? '0' + d.getSeconds () : d.getSeconds ());

    var wochentage = new Array ("Sonntag", "Montag", "Dienstag",
      "Mittwoch", "Donnerstag", "Freitag", "Samstag");

    var monate = new Array ("Januar", "Februar", "März", "April",
      "Mai", "Juni", "Juli", "August", "September",
      "Oktober", "November", "Dezember");

    document.getElementById("datum").innerHTML = '<i class="fa fa-calendar-o"></i> ' + d.getDate () + '. '
      + monate[d.getMonth ()] + ' '+ d.getFullYear ();

    document.getElementById("zeit").innerHTML = ' <div class="text-right"><i class="fa fa-clock-o"></i>' + h + ':' + m + ':' + s + '</div>';
  }
</script>




