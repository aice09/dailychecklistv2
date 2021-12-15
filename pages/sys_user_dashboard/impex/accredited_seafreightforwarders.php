<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Dashboard</li>
  <li>Impex</li>
  <li>Accredited Seafreight Forwarders</li>
</ol>

<h1>Accredited Seafreight Forwarders</h1>

<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="30%">Origin</th>
			<th width="15%">State</th>
			<th width="6%">Foreign Agent</th>
			<th width="6%">Local Freight Forwarding Company</th>			
			<th width="6%">Address</th>		
			<th width="6%">Telphone Number</th>
			<th width="6%">Fax Number</th>
			<th width="6%">Email</th>
			<th width="6%">Contact Person</th>
			<th width="6%">Expiry Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
        <th width="3%">No</th>
			<th width="30%">Origin</th>
			<th width="15%">State</th>
			<th width="6%">Foreign Agent</th>
			<th width="6%">Local Freight Forwarding Company</th>			
			<th width="6%">Address</th>		
			<th width="6%">Telphone Number</th>
			<th width="6%">Fax Number</th>
			<th width="6%">Email</th>
			<th width="6%">Contact Person</th>
			<th width="6%">Expiry Date</th>
			<th>Action</th>
		</tr>
	</tfoot>
</table>
      
<script type="text/javascript">
$(document).ready(function() {
    //Reading
    var dataTable = $('#example').DataTable({        
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_user_dashboard/impex/accredited_seafreightforwarders_exe_dt.php",
            type: "POST",
			/* success: function(response) {
				console.log(response);
			},
			error: function(response) {
				console.log(response);
			} */
        }
    });

    //Update
    $(document).on('click', '#update', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        action = 'read_selected';

        $.ajax({
            type: 'POST',
            url: 'pages_exe/flexocylinder_exe_crud.php',
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                //console.log(data);
                var cruddata = JSON.parse(data);
                $("#machid").val(cruddata.machid);
                $("#machine").val(cruddata.machine);
                $("#color").val(cruddata.color);
                $("#widthinch").val(cruddata.widthinch);
                $("#widthmm").val(cruddata.widthmm);
                $("#cylindertype").val(cruddata.cylindertype);
                $("#spec").val(cruddata.spec);
                $("#qty").val(cruddata.qty);
                $("#plate").val(cruddata.plate);
                $("#dstape").val(cruddata.dstape);
                $("#distortion").val(cruddata.distortion);

                $("#section_btn").attr('name', 'update_btn');
                $("#section_btn").attr('data-id', cruddata.machid);
                $(".modal-title").text('Edit');
                $("#section_btn").text('Save Changes');
                $("#modal-id").modal("show");
            }
        });
    });

    
});
</script>