<?php
  		include 		"../php/mysql_connect.php";
  		include			"../php/language.php";
  		//include 		"../php/auth.php";
  		$domTable = 	"#events_table";
  		$ajaxUrl = 		"./php/datatables/table.EVENTS.php";
  		$table_name = 	"events_table";
?>

<!-- widget grid -->
<section id="widget-grid" class="">

	<!-- START ROW -->
	<div class="row">

		<!-- NEW COL START -->
		<article class="col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
					<h2><?php echo _("Manage Events");?></h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body no-padding">

						<form action="" class="smart-form">
							<fieldset>
								<div class="row">
									<section class="col col-4">
										<label class="label"><?php echo _("Event title");?></label>
										<label class="input">
											<input type="text" id="EVENT_TITLE">
										</label>
									</section>
									<section class="col col-4">
										<label class="label"><?php echo _("Event start");?></label>
										<label class="input">
										<i class="icon-append fa fa-calendar"></i>
											<input type="text" id="EVENT_START">
										</label>
									</section>
									<section class="col col-2">
										<label class="label"><?php echo _("Trainer");?></label>
										<label class="select">
											<select id="EVENT_TRAINER">
												<?php
													$sql = "SELECT * FROM TRAINER;";
	                                                $result = mysql_query($sql) or die(mysql_error());
	                                                while($row = mysql_fetch_assoc($result))
	                                                echo "<option value='".$row["TRAINER_LAST_NAME"]."'>".$row["TRAINER_LAST_NAME"], "&nbsp;", $row["TRAINER_FIRST_NAME"]."</option>\r\n";
                                                ?>
											</select> <i></i>
										</label>
									</section>
									<section class="col col-2">
										<label class="label"><?php echo _("Meeting / Training");?></label>
										<label class="select">
											<select id="EVENT_TYPE_2">
												<option value="Meeting"><?php echo _("Meeting")?></option>
												<option value="Training"><?php echo _("Training")?> </option>
											</select> <i></i>
										</label>
									</section>
									<section class="col col-4">
										<label class="label"><?php echo _("Event description");?></label>
										<label class="input">
											<input type="text" id="EVENT_SUBTITLE">
										</label>
									</section>
									<section class="col col-4">
										<label class="label"><?php echo _("Event end");?></label>
										<label class="input">
											<i class="icon-append fa fa-calendar"></i>
											<input type="text" id="EVENT_END">
										</label>
										</section>
									<section class="col col-2">
										<label class="label"><?php echo _("Room");?></label>
										<label class="select">
											<select id="EVENT_ROOM">
												<?php
													$sql = "SELECT ROOM_NAME FROM ROOMS;";
	                                                $result = mysql_query($sql) or die(mysql_error());
	                                                while($row = mysql_fetch_assoc($result))
	                                                echo "<option value='".$row["ROOM_NAME"]."'>".$row["ROOM_NAME"]."</option>\r\n";
                                                ?>
											</select> <i></i>
										</label>
									</section>
									<section class="col col-2">
										<label class="label"><?php echo _("Internal / External");?></label>
										<label class="select">
											<select id="EVENT_TYPE_1">
												<option value="intern"><?php echo _("Internal")?></option>
												<option value="extern"><?php echo _("Externel")?> </option>
											</select> <i></i>
										</label>
									</section>

									<select class="hidden" id="CREATE_USER">
												<?php
													$sql = "SELECT USER_LAST_NAME FROM USERS WHERE USER_NAME = '".$_SESSION['user']."'";
	                                                $result = mysql_query($sql) or die(mysql_error());
	                                                while($row = mysql_fetch_assoc($result))
	                                                echo "<option value='".$row["USER_LAST_NAME"]."'></option>\r\n";
                                                ?>
											</select>




								</div>






							</fieldset>

							<footer>
								<button id='submit1' type="submit" class="btn btn-primary" onclick="add_event()">
									<?php echo _("Save")?>
								</button>
							</footer>
						</form>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-2" data-widget-editbutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2><?php echo _('Event Information');?></h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body no-padding">
						<div class="widget-body-toolbar">

						</div>
						<table id="events_table" class="table table-striped table-hover">
							<thead>
									<tr>
										<th><?php echo _("Event title")?></th>
										<th><?php echo _("Event description")?></th>
										<th><?php echo _("Event start")?></th>
										<th><?php echo _("Event end")?></th>
										<th><?php echo _("Trainer")?></th>
										<th><?php echo _("Room")?></th>
										<th><?php echo _("Internal / External")?></th>
										<th><?php echo _("Meeting / Training")?></th>
										<th><?php echo _("Create by")?></th>
									</tr>
								</thead>
							<tbody></tbody>
						</table>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->

	<!-- end row -->

</section>


<script type="text/javascript">

	// DO NOT REMOVE : GLOBAL FUNCTIONS!
	pageSetUp();

	// PAGE RELATED SCRIPTS
    $('#EVENT_START').datetimepicker('setDaysOfWeekDisabled', [0,6],{format: 'dd-mm-yyyy hh:ii'});
    $('#EVENT_END').datetimepicker('setDaysOfWeekDisabled', [0,6],{format: 'dd-mm-yyyy hh:ii'});

    function add_event()	{

    			var EVENT_TITLE 	= $("#EVENT_TITLE").val();
    			var EVENT_SUBTITLE 	= $("#EVENT_SUBTITLE").val();
    			var EVENT_START 	= $("#EVENT_START").val();
    			var EVENT_END 		= $("#EVENT_END").val();
    			var EVENT_TRAINER 	= $("#EVENT_TRAINER").val();
    			var EVENT_ROOM 		= $("#EVENT_ROOM").val();
    			var EVENT_TYPE_1 	= $("#EVENT_TYPE_1").val();
    			var EVENT_TYPE_2 	= $("#EVENT_TYPE_2").val();
    			var CREATE_USER 	= $("#CREATE_USER").val();

    			var url = './php/controller.php?what=add_event&EVENT_TITLE='+EVENT_TITLE+'&EVENT_SUBTITLE='+EVENT_SUBTITLE+'&EVENT_START='+EVENT_START+'&EVENT_END='+EVENT_END+'&EVENT_TRAINER='+EVENT_TRAINER+'&EVENT_ROOM='+EVENT_ROOM+'&EVENT_TYPE_1='+EVENT_TYPE_1+'&EVENT_TYPE_2='+EVENT_TYPE_2+'&CREATE_USER='+CREATE_USER;

    			var tmp1 = $.ajax	({
    				url:url,
    				async:false
									});
							};
	$('#submit1').click(function() {
    location.reload();
});

if($('.DTTT_dropdown.dropdown-menu').length){
		$('.DTTT_dropdown.dropdown-menu').remove();
	}

	loadDataTableScripts();
	function loadDataTableScripts() {

		loadScript		("js/plugin/datatables/jquery.dataTables.min.js", dt_2);


		function dt_2() {
			loadScript("js/plugin/datatables/ColReorder.min.js", dt_3);
		}

		function dt_3() {
			loadScript("js/plugin/datatables/FixedColumns.min.js", dt_4);
		}

		function dt_4() {
			loadScript("js/plugin/datatables/ColVis.min.js", dt_5);
		}

		function dt_5() {
			loadScript("js/plugin/datatables/ZeroClipboard.js", dt_6);
		}

		function dt_6() {
			loadScript("js/plugin/datatables/media/js/TableTools.js", dt_7);
		}

		function dt_7() {
			loadScript("js/plugin/datatables/DT_bootstrap.js", dt_8);
		}

		function dt_8() {
			loadScript("js/plugin/datatables/dataTables.editor.min.js", dt_10);
		}

		function dt_10() {
			loadScript("js/plugin/datatables/dataTables.editor.bootstrap.js", runDataTables);
		}

	}
	function runDataTables() {

		/*
		 * BASIC
		 */
		$('#dt_basic').dataTable({
			"sPaginationType" : "bootstrap_full"
		});

		/* END BASIC */
jQuery(function($) {

$(document).ready(function() {
//---------------------------------------------------- GET ROOMS FOR EDITOR EDITOR
var test1= new Array({"label" : "a", "value" : "a"});
function loader1(){
test1.splice(0,1);
$.ajax({
  url: "./php/get_rooms.php",
  async: false,
  dataType: 'json',
  success: function (json) {
      for(var a=0;a<json.length;a++){
        obj= { "label" : json[a][0], "value" : json[a][1]};
        test1.push(obj);
      }
    }
});
return test1;
}
//---------------------------------------------------- END GET ROOMS FOR EDITOR EDITOR
//---------------------------------------------------- GET TRAINER FOR EDITOR EDITOR
var test2= new Array({"label" : "a", "value" : "a"});
function loader2(){
test2.splice(0,1);
$.ajax({
  url: './php/get_trainer.php',
  async: false,
  dataType: 'json',
  success: function (json) {
      for(var a=0;a<json.length;a++){
        obj= { "label" : json[a][0], "value" : json[a][1]};
        test2.push(obj);
      }
    }
});
return test2;
}
//---------------------------------------------------- END GET TRAINER FOR EDITOR EDITOR
//---------------------------------------------------- DATATABELE EDITOR
	editor = new $.fn.dataTable.Editor( {
        "ajaxUrl": "<?php echo $ajaxUrl; ?>",
        "domTable": "<?php echo $domTable; ?>",
        "fields": [
			{
				"label": '<?php echo _("Event title");?>',
				"name": "EVENT_TITLE",
				"type": "text"
			},
			{
				"label": '<?php echo _("Event description");?>',
				"name": "EVENT_SUBTITLE",
				"type": "text"
			},
			{
				"label": '<?php echo _("Event start");?>',
				"name": "EVENT_START",
				"type": "text"
			},
			{
				"label": '<?php echo _("Event end");?>',
				"name": "EVENT_END",
				"type": "text"

			},
			{
				"label": '<?php echo _("Trainer");?>',
				"name": "EVENT_TRAINER",
				"type": "select",
                "ipOpts":loader2()
			},
			{
				"label": '<?php echo _("Room");?>',
				"name": "EVENT_ROOM",
				"type": "select",
                "ipOpts":loader1()

			},
			{
				"label": '<?php echo _("Internal / External");?>',
				"name": "EVENT_TYPE_1",
				"type": "select",
				"ipOpts": 	[
                    	{ "label": '<?php echo _("Internal")?>', "value": "intern" },
						{ "label": '<?php echo _("Externel")?>', "value": "extern" }
							],
			},
			{
				"label": '<?php echo _("Meeting / Training");?>',
				"name": "EVENT_TYPE_2",
				"type": "select",
				"ipOpts": 	[
                    	{ "label": '<?php echo _("Meeting")?>', "value": "Meeting" },
						{ "label": '<?php echo _("Training")?>', "value": "Training" }
							],
			},
			{
				"name": "CREATE_USER",
				"type": "hidden"
			}
		]
    } );
//---------------------------------------------------- END DATATABELE EDITOR
//---------------------------------------------------- DATATABLE START
    var <?php echo $table_name; ?> = $('<?php echo $domTable; ?>');
    <?php echo $table_name; ?>.dataTable({
        "sDom": "<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>",
        "sPaginationType": "bootstrap",
        "iDisplayLength": 5,
        "aLengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
        "oLanguage": {
                "sUrl": "./locale/datatable_"+lang+".txt"
                },
        "aoColumns": [
			{
				"mData": "EVENT_TITLE"
			},
			{
				"mData": "EVENT_SUBTITLE"
			},
			{
				"mData": "EVENT_START"
			},
			{
				"mData": "EVENT_END"
			},
			{
				"mData": "EVENT_TRAINER"
			},
			{
				"mData": "EVENT_ROOM"
			},
			{
				"mData": "EVENT_TYPE_1"
			},
			{
				"mData": "EVENT_TYPE_2"
			},
			{
				"mData": "CREATE_USER"
			}
		],
        "oTableTools" : {
        			"sRowSelect": "single",
       				"aButtons" : [
					{"sExtends": "editor_edit"		,"sButtonClass": "btn btn-warning", "editor": editor},
					{"sExtends": "editor_remove"	,"sButtonClass": "btn btn-danger", "editor": editor },
					"copy", "print",
					{
					"sExtends" : "collection",
					"sButtonText" : 'Save <span class="caret" />',
					"aButtons" : ["csv", "xls", {
					"sExtends": "pdf",
					"sPdfOrientation": "landscape",
					"sPdfMessage": "Next events in TAC Erlangen",
					"mColumns": [ 0, 1, 2, 3, 4 ]
												}]
					},
					],
				"sSwfPath" : "js/plugin/datatables/media/swf/copy_csv_xls_pdf.swf"
			},
        bProcessing    : true,
        bAutoWidth     : false,
        "sAjaxSource": "<?php echo $ajaxUrl; ?>",

    });
//---------------------------------------------------- END DATATABELE DEVICE

});
});
}


</script>

