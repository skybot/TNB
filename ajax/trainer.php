<?php
  		include 		"../php/mysql_connect.php";
  		include			"../php/language.php";
  		//include 		"../php/auth.php";
  		$domTable = 	"#trainer_table";
  		$ajaxUrl = 		"./php/datatables/table.TRAINER.php";
  		$table_name = 	"trainer_table";
?>


<!-- widget grid -->
<section id="widget-grid" class="">
	<!-- Widget ID (each widget will need unique ID)-->
	<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false" data-widget-deletebutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2><?php echo _('Trainer Information');?></h2>

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
						<table id="trainer_table" class="table table-striped table-hover">
							<thead>
									<tr>
										<th><?php echo _("First name")?></th>
										<th><?php echo _("Last name")?></th>
										<th><?php echo _("Telephone")?></th>
										<th><?php echo _("Gender")?></th>
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
<!-- end widget grid -->
		</article>
		<!-- END COL -->

	</div>

	<!-- END ROW -->

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

    			var url = './php/controller.php?what=add_event&EVENT_TITLE='+EVENT_TITLE+'&EVENT_SUBTITLE='+EVENT_SUBTITLE+'&EVENT_START='+EVENT_START+'&EVENT_END='+EVENT_END+'&EVENT_TRAINER='+EVENT_TRAINER+'&EVENT_ROOM='+EVENT_ROOM;

    			var tmp1 = $.ajax	({
    				url:url,
    				async:false
									});
							};

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
				"label":'<?php echo _("First name");?>',
				"name": "TRAINER_FIRST_NAME",
				"type": "text"
			},
			{
				"label":'<?php echo _("Last name");?>',
				"name": "TRAINER_LAST_NAME",
				"type": "text"
			},
			{
				"label":'<?php echo _("Telephone");?>',
				"name": "TRAINER_TEL",
				"type": "text"

			},
			{
				"label":'<?php echo _("Gender");?>',
				"name": "TRAINER_GENDER",
				"type": "select",
				"ipOpts": [	{ "label": '<?php echo _("Man");?>', "value": "Hr." },
                   			{ "label": '<?php echo _("Women");?>', "value": "Fr."}]

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
				"mData": "TRAINER_FIRST_NAME"
			},
			{
				"mData": "TRAINER_LAST_NAME"
			},
			{
				"mData": "TRAINER_TEL",
				"mRender": function ( data, type, full ) {
						return '<span><i class="fa fa-phone-square"></i>'+data+'</span>';							
			},

			},
			{
				"mData": "TRAINER_GENDER",
				"mRender": function ( data, type, full ) {
			        if (data=="Hr.")	{
						return '<i class="fa fa-male"></i>';
								}
						return '<i class="fa fa-female"></i>';
				},

			},

		],
        "oTableTools" : {
        			"sRowSelect": "single",
       				"aButtons" : [
       				{"sExtends": "editor_create"	,"sButtonClass": "btn btn-success", "editor": editor },
					{"sExtends": "editor_edit"		,"sButtonClass": "btn btn-warning", "editor": editor},
					{ "sExtends": "editor_remove"	,"sButtonClass": "btn btn-danger", "editor": editor },
					"copy", "print",
					{
					"sExtends" : "collection",
					"sButtonText" : 'Save <span class="caret" />',
					"aButtons" : ["csv", "xls", "pdf"]
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

