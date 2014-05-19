<?php
  		include('../../php/language.php');
  		$domTable = "#displays_table";
        $ajaxUrl = "./php/datatables/table.DISPLAYS.php";
        $table_name = "displays_table";
?>
<section id="widget-grid" class="">
<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-3" data-widget-editbutton="false">
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
					<h2><?php echo _('Display Information');?></h2>

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
						<table id="displays_table" class="table table-striped table-hover">
							<thead>
									<tr>
										<th><?php echo _("Display name")?></th>
										<th><?php echo _("Count rooms")?></th>
										<th><?php echo _("Room 1")?></th>
										<th><?php echo _("Direction Room 1")?></th>
										<th><?php echo _("Room 2")?></th>
										<th><?php echo _("Direction Room 2")?></th>
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

<script type="text/javascript">

	// DO NOT REMOVE : GLOBAL FUNCTIONS!
	pageSetUp();

	// PAGE RELATED SCRIPTS

	/* remove previous elems */

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
//---------------------------------------------------- GET ROOM ADMINS FROM DB
var test= new Array({"label" : "a", "value" : "a"});
function loader(){
test.splice(0,1);
$.ajax({
  url: './php/get_admins.php',
  async: false,
  dataType: 'json',
  success: function (json) {
      for(var a=0;a<json.length;a++){
        obj= { "label" : json[a][0], "value" : json[a][1]};
        test.push(obj);
      }
    }
});
return test;
}
//---------------------------------------------------- END GET ROOM ADMINS FROM DB
//---------------------------------------------------- DATATABELE EDITOR
	editor = new $.fn.dataTable.Editor( {
        "ajaxUrl": "<?php echo $ajaxUrl; ?>",
        "domTable": "<?php echo $domTable; ?>",
        "fields": [
			{
				"label": '<?php echo _("Display name");?>',
				"name": "DISP_NAME",
				"type": "text"
			},
			{
				"label": '<?php echo _("How Many Rooms on Display?");?>',
				"name": "DISP_ROOM_COUNT",
				"type": "text"
			},
			{
				"label": '<?php echo _("Room 1");?>',
				"name": "DISP_ROOM_1",
				"type": "select",
                "ipOpts":loader()
			},
			{
				"label": '<?php echo _("Direction Room 1");?>',
				"name": "DISP_ROOM_1_SIDE",
				"type": "select",
				"ipOpts": [	{ "label": '<?php echo _("left");?>', "value": "left" },
                   			{ "label": '<?php echo _("Right");?>', "value": "right"}]
			},
			{
				"label": '<?php echo _("Room 2");?>',
				"name": "DISP_ROOM_2",
				"type": "select",
                "ipOpts":loader()
			},
			{
				"label": '<?php echo _("Direction Room 1");?>',
				"name": "DISP_ROOM_2_SIDE",
				"type": "select",
				"ipOpts": [	{ "label": '<?php echo _("left");?>', "value": "left" },
                   			{ "label": '<?php echo _("Right");?>', "value": "right"}]
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
				"mData": "DISP_NAME"
			},
			{
				"mData": "DISP_ROOM_COUNT"
			},
			{
				"mData": "DISP_ROOM_1"
			},
			{
				"mData": "DISP_ROOM_1_SIDE"
			},
			{
				"mData": "DISP_ROOM_2"
			},
			{
				"mData": "DISP_ROOM_2_SIDE"
			}
		],
        "oTableTools" : {
        			"sRowSelect": "single",
       				"aButtons" : [
       				{"sExtends": "editor_create"	,"sButtonClass": "btn btn-success", "editor": editor},
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
</body>
</html>
