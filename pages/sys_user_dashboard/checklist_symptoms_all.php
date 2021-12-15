<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js" ></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css"> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js" ></script>


<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Dashboard</li>
  <li>Daily Symptoms Checklist</li>
  <li>All Daily Records</li>
</ol>

<h1>All Daily Symptoms Checklist</h1>
<br>

<table id="filtertb" border="0" cellspacing="5" cellpadding="5" >
        <tbody><tr>
            <td><label for="">Date Start:</label></td>
            <td><div class="input-group date" id="datetimepickerstart_date" data-target-input="nearest">
					<input type="text" class="form-control datetimepicker-input" data-target="#datetimepickerstart_date" placeholder="Date Start" id="start_date" name="start_date" />
					<span class="input-group-addon" data-target="#datetimepickerstart_date" data-toggle="datetimepicker">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div></td><td><label for="">Date Start:</label></td>
            <td><div class="input-group date" id="datetimepickerend_date" data-target-input="nearest">
					<input type="text" class="form-control datetimepicker-input" data-target="#datetimepickerend_date" placeholder="Date Start" id="end_date" name="end_date" />
					<span class="input-group-addon" data-target="#datetimepickerend_date" data-toggle="datetimepicker">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div></td>
				<td>
				<button type="button" class="btn btn-primary create-new" id="search" >Filter <i class="fa fa-filter"></i> </button>
				</td>
				<td>
				<button type="button" class="btn btn-default create-new" id="resetfilter" >Reset <i class="fa fa-refresh"></i> </button>
				</td>
        </tr>
    </tbody></table><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="30%">Date</th>
			<th width="10%">Employee ID</th>
			<th width="10%">Employee Name</th>
			<th width="15%">Temperature</th>
			<th width="6%">Cough</th>
			<th width="6%">Fever</th>			
			<th width="6%">DF</th>		
			<th width="6%">Diarrhea</th>
			<th width="6%">Chills</th>
			<th width="6%">CAS</th>
			<th width="6%">Headache</th>
			<th width="6%">Sore Throat</th>
			<th width="6%">BJP</th>
			<th width="6%">Lots</th>
			<th width="6%">RWN</th>
			<th width="6%">DV</th>
			<th width="6%">EF</th>
			<th width="6%">Anywhere</th>
			<th width="6%">where?</th>
			<th width="6%">dtcreated</th>
			<th width="6%">createdby</th>
			<th width="6%">dtupdated</th>
			<th width="6%">updatedby</th>
			<th width="6%">status</th><!-- 
			<th></th> -->
		</tr>
	</thead>
	<tfoot>
		<tr>
		<th width="3%">No</th>
			<th width="30%">Date</th>
			<th width="10%">Employee ID</th>
			<th width="10%">Employee Name</th>
			<th width="15%">Temperature</th>
			<th width="6%">Cough</th>
			<th width="6%">Fever</th>			
			<th width="6%">DF</th>		
			<th width="6%">Diarrhea</th>
			<th width="6%">Chills</th>
			<th width="6%">CAS</th>
			<th width="6%">Headache</th>
			<th width="6%">Sore Throat</th>
			<th width="6%">BJP</th>
			<th width="6%">Lots</th>
			<th width="6%">RWN</th>
			<th width="6%">DV</th>
			<th width="6%">EF</th>
			<th width="6%">Anywhere</th>
			<th width="6%">where?</th>
			<th width="6%">dtcreated</th>
			<th width="6%">createdby</th>
			<th width="6%">dtupdated</th>
			<th width="6%">updatedby</th>
			<th width="6%">status</th><!-- 
			<th></th> -->
		</tr>
	</tfoot>
</table>

<script type="text/javascript">

$(document).ready(function() {
	$('#datetimepickerstart_date').datetimepicker({
		format: 'L'
	});
    $('#datetimepickerend_date').datetimepicker({
		format: 'L',
		useCurrent: false
	});
    $("#datetimepickerstart_date").on("change.datetimepicker", function (e) {
        $('#datetimepickerend_date').datetimepicker('minDate', e.date);
    });
    $("#datetimepickerend_date").on("change.datetimepicker", function (e) {
        $('#datetimepickerstart_date').datetimepicker('maxDate', e.date);
    });

	fetch_data('no');

    //Reading
	function fetch_data(is_date_search, start_date='', end_date='')
 	{
		var dataTable = $('#example').DataTable({ 
			"dom": 'Bfrtip',
			"lengthChange": false,
			"buttons": [
				{
					'extend':'print',
					'text':'Print all',
					'exportOptions': {
						'modifier': {
							'selected': null
						}
					
					}
					
				},{
					extend: 'print',
					text: 'Print selected'
				},{
					'extend':'excel',
					'split': ['pdf','csv', 'colvis']
				}
			],
			"select": true,       
			"processing": true,
			"serverSide": true,
			"ajax": {
				url: "pages_exe/sys_user_dashboard/checklist_symptomsall_exe_dt.php",
				type: "POST",
				data:{
					is_date_search:is_date_search, 
					start_date:start_date, 
					end_date:end_date
				}/* ,
				success: function(response) {
					console.log(response);
				},
				error: function(response) {
					console.log(response);
				} */
			}
		});

		dataTable.buttons().container()
			.appendTo( '#example_wrapper .col-sm-6:eq(0)' );

			
	}

	

	$('#search').click(function(){
		var start_date = $('#start_date').val();
		var end_date = $('#end_date').val();
		if(start_date != '' && end_date !='')
		{
			$('#example').DataTable().clear().destroy();
			fetch_data('yes', start_date, end_date);
		}
		else
		{
			alert("Both Date is Required");
		}
	}); 

	$('#resetfilter').click(function(){
		$('#example').DataTable().clear().destroy();
		fetch_data('no');
	}); 

	

	/* dataTable.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' ); */
	/* // Refilter the table
    $('#min, #max').on('change', function () {
        dataTable.draw();
    }); */
});
</script>

<style>
	#filtertb tr td {
		padding: 5px;
	}
</style>