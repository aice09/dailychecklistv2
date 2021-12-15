<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
  <li>Dashboard</li>
  <li>My Account</li>
  <li>Medical Record</li>
  <li>Daily Symptoms Checklist</li>
</ol>

<h1>My Daily Symptoms Checklist</h1>

<button type="button" class="btn btn-success create-new">Add New Data</button><br><br>
<table class="table table-bordered responsive nowrap" id="example" width="100%">
	<thead> 
		<tr>
			<th width="3%">No</th>
			<th width="30%">Date</th>
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
			<th width="6%">status</th>
			<th></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
		<th width="3%">No</th>
			<th width="30%">Date</th>
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
			<th width="6%">status</th>
			<th></th>
		</tr>
	</tfoot>
</table>

<div class="modal fade" id="modal-id">
  	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-section" method="POST" id="section-form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Full Name</label>
								<input type="text" class="form-control" placeholder="Full Name" name="empinfo_name" id="empinfo_name" readonly="true" value="<?php echo $_SESSION['system_userfirstname']." ".$_SESSION['system_usermiddlename'].". ".$_SESSION['system_userlastname'] ?>" />
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="empinfo_empid" id="empinfo_empid" readonly="true" value="<?php echo $_SESSION['system_username'] ?>" />
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">Department</label>
								<input type="text" class="form-control" placeholder="Department" name="empinfo_department" id="empinfo_department" readonly="true" value="<?php echo $_SESSION['system_department'] ?>" />
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">Position</label>
								<input type="text" class="form-control" placeholder="Position" name="empinfo_position" id="empinfo_position" readonly="true" value="<?php echo $_SESSION['system_title'] ?>" />
								<span id="check-e" class="check-e-schednumber"></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">Date</label>
								<div class="input-group date" id="datetimepicker4" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" placeholder="Date" id="empinfo_date" name="empinfo_date" readonly="readonly" />
									<span class="input-group-addon" data-target="#datetimepicker4" data-toggle="datetimepicker">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">Temperature</label>
								<input type="text" class="form-control" placeholder="Temperature" name="empinfo_temperature" id="empinfo_temperature"/>
							</div>
						</div>    
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<hr>
							<p>Please put a check appropriate to the following questions:</p>
							<p><label for="">1. Do you presently have any of the following symptoms?</label></p>
						</div>  
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">a. Cough</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No" id="empinfo_cough" name="empinfo_cough" >
							</div>
						</div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">b. Fever</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_fever" name="empinfo_fever" >
							</div>
						</div>   
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">c. Difficulty Breathing</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_df" name="empinfo_df" >
							</div>
						</div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">d. Diarrhea</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_diarrhea" name="empinfo_diarrhea" >
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">e. Chills</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_chills" name="empinfo_chills" >
							</div>
						</div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">f. Chills with shaking</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_cas" name="empinfo_cas" >
							</div>
						</div>   
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">g. Headache</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_headache" name="empinfo_headache" >
							</div>
						</div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">h. Sore Throat</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_sorethroat" name="empinfo_sorethroat" >
							</div>
						</div>  
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">i. Body/Joint paint</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_bjp" name="empinfo_bjp" >
							</div>
						</div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">j. Loss of taste/smell</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_lots" name="empinfo_lots" >
							</div>
						</div>   
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">k. Runny/watery nose</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_rwn" name="empinfo_rwn" >
							</div>
						</div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">l. Dizzines/vomiting</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_dv" name="empinfo_dv" >
							</div>
						</div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label for="">m. Easy fatigability</label><br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_ef" name="empinfo_ef" >
							</div>
						</div>   
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<hr>
						</div>    
						<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="">Did you go to any place before going home or going to work?</label>
								<br>
								<input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"  id="empinfo_anywhere" name="empinfo_anywhere" >
								<br><br>								
								<textarea name="empinfo_where" id="empinfo_where" class="form-control" rows="3" placeholder="If yes please specify. (Example: Puregold GMA, Waltermart - BDO ATM, etc"></textarea>
								
							</div>
						</div>	
						
						<!--ID-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;">
							<div class="form-group">
								<label for="">ID</label>
								<input type="text" class="form-control" placeholder="ID" name="empinfo_id" id="empinfo_id" value="" />
								<span id="check-e"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" name="section_btn" id="section_btn">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
      
<script type="text/javascript">
$(document).ready(function() {
	/* $('#datetimepicker4').datetimepicker({
		format: 'L'
	}); */

    //Reading
    var dataTable = $('#example').DataTable({        
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_user_dashboard/checklist_symptoms_exe_dt.php",
            type: "POST",
			/* success: function(response) {
				console.log(response);
			},
			error: function(response) {
				console.log(response);
			} */
        }
    });

    //Adding
    $('.create-new').click(function() {
        var action = $(this).attr("id");
        var theform = $("#section-form").validate();

        $(".modal-title").text('Create');
        $("#section_btn").text('Submit');
        $("#section_btn").attr('name', 'submit_btn');
        $("#section_btn").attr('data-id', '');

		var today = new Date();
		var dd = String(today.getDate()).padStart(2, '0');
		var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
		var yyyy = today.getFullYear();

		today = mm + '/' + dd + '/' + yyyy;
		//document.write(today);

		$("#empinfo_date").val(today);
        /* 
        $("#color").val('');
        $("#widthinch").val('');
        $("#widthmm").val('');
        $("#cylindertype").val($("#cylindertype option:first").val());
        $("#spec").val('');
        $("#qty").val('');
        $("#plate").val('');
        $("#dstape").val('');
        $("#distortion").val('');
        $("#machid").val(''); */

        theform.resetForm();

        $("#modal-id").modal("show");
    });

    //Adding Validation
    $("#section-form").validate({
        rules: {
            empinfo_empid: {
                required: true
            },
            empinfo_name: {
                required: true
            },
            empinfo_department: {
                required: true
            },
            empinfo_position: {
                required: true
            },
            empinfo_date: {
                required: true
            },
            empinfo_temperature: {
                required: true
            }
        },
        messages: {
            empinfo_empid: {
                required: "Please enter your employee id"
            },
            empinfo_name: {
                required: "Please enter your full name"
            },
            empinfo_department: {
                required: "Please enter your department"
            },
        },
        submitHandler: submitForm
    });

    function submitForm() {

		//get the value of input box		
		var empinfo_empid =$('#empinfo_empid').val();
		var empinfo_name =$('#empinfo_name').val();
		var empinfo_department =$('#empinfo_department').val();
		var empinfo_position =$('#empinfo_position').val();
		var empinfo_date =$('#empinfo_date').val();
		var empinfo_temperature =$('#empinfo_temperature').val();
		var empinfo_where =$('#empinfo_where').val();
		var empinfo_id =$('#empinfo_id').val();
		
		//serialize checkbox
		var checkbox_empinfo_cough = $('#empinfo_cough').prop('checked');
		if(checkbox_empinfo_cough == true){
			var new_empinfo_cough = 'Yes';
		}else{
			var new_empinfo_cough = 'No';
		}

		var checkbox_empinfo_fever = $('#empinfo_fever').prop('checked');
		if(checkbox_empinfo_fever == true){
			var new_empinfo_fever = 'Yes';
		}else{
			var new_empinfo_fever = 'No';
		}

		var checkbox_empinfo_df = $('#empinfo_df').prop('checked');
		if(checkbox_empinfo_df == true){
			var new_empinfo_df = 'Yes';
		}else{
			var new_empinfo_df = 'No';
		}

		var checkbox_empinfo_diarrhea = $('#empinfo_diarrhea').prop('checked');
		if(checkbox_empinfo_diarrhea == true){
			var new_empinfo_diarrhea = 'Yes';
		}else{
			var new_empinfo_diarrhea = 'No';
		}
		var checkbox_empinfo_chills = $('#empinfo_chills').prop('checked');
		if(checkbox_empinfo_chills == true){
			var new_empinfo_chills = 'Yes';
		}else{
			var new_empinfo_chills = 'No';
		}

		var checkbox_empinfo_cas = $('#empinfo_cas').prop('checked');
		if(checkbox_empinfo_cas == true){
			var new_empinfo_cas = 'Yes';
		}else{
			var new_empinfo_cas = 'No';
		}

		var checkbox_empinfo_headache = $('#empinfo_headache').prop('checked');
		if(checkbox_empinfo_headache == true){
			var new_empinfo_headache = 'Yes';
		}else{
			var new_empinfo_headache = 'No';
		}

		var checkbox_empinfo_sorethroat = $('#empinfo_sorethroat').prop('checked');
		if(checkbox_empinfo_sorethroat == true){
			var new_empinfo_sorethroat = 'Yes';
		}else{
			var new_empinfo_sorethroat = 'No';
		}

		var checkbox_empinfo_bjp = $('#empinfo_bjp').prop('checked');
		if(checkbox_empinfo_bjp == true){
			var new_empinfo_bjp = 'Yes';
		}else{
			var new_empinfo_bjp = 'No';
		}

		var checkbox_empinfo_lots = $('#empinfo_lots').prop('checked');
		if(checkbox_empinfo_lots == true){
			var new_empinfo_lots = 'Yes';
		}else{
			var new_empinfo_lots = 'No';
		}

		var checkbox_empinfo_rwn = $('#empinfo_rwn').prop('checked');
		if(checkbox_empinfo_rwn == true){
			var new_empinfo_rwn = 'Yes';
		}else{
			var new_empinfo_rwn = 'No';
		}

		var checkbox_empinfo_dv = $('#empinfo_dv').prop('checked');
		if(checkbox_empinfo_dv == true){
			var new_empinfo_dv = 'Yes';
		}else{
			var new_empinfo_dv = 'No';
		}

		var checkbox_empinfo_ef = $('#empinfo_ef').prop('checked');
		if(checkbox_empinfo_ef == true){
			var new_empinfo_ef = 'Yes';
		}else{
			var new_empinfo_ef = 'No';
		}

		var checkbox_empinfo_anywhere = $('#empinfo_anywhere').prop('checked');
		if(checkbox_empinfo_anywhere == true){
			var new_empinfo_anywhere = 'Yes';
		}else{
			var new_empinfo_anywhere = 'No';
		}

		/* $('.empinfo_anywhere').change(function() {
			var gosomewhere = $(this).prop('checked');
			console.log(gosomewhere);
			if(gosomewhere == true){
				$('#empinfo_where').prop('readonly', false);
			}else{
				$('#empinfo_where').prop('readonly', true);
			}
		}) */

		//Option AJAX 1		
		var data = $("#section-form").serialize() + '&new_empinfo_cough=' + new_empinfo_cough + '&new_empinfo_fever=' + new_empinfo_fever + '&new_empinfo_df=' + new_empinfo_df + '&new_empinfo_diarrhea=' + new_empinfo_diarrhea + '&new_empinfo_chills=' + new_empinfo_chills + '&new_empinfo_cas=' + new_empinfo_cas + '&new_empinfo_headache=' + new_empinfo_headache + '&new_empinfo_sorethroat=' + new_empinfo_sorethroat + '&new_empinfo_bjp=' + new_empinfo_bjp + '&new_empinfo_lots=' + new_empinfo_lots + '&new_empinfo_rwn=' + new_empinfo_rwn + '&new_empinfo_dv=' + new_empinfo_dv + '&new_empinfo_ef=' + new_empinfo_ef + '&new_empinfo_anywhere=' + new_empinfo_anywhere;
		console.log(data);

		$.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/checklist_symptoms_exe_crud.php ',
            data: data,
            success: function(data, status) {
                console.log(data);
                if (data != 999) {
                    $("#modal-id").modal("hide");
                    //reload server-side datatable
                    setTimeout(function() {
                        $('#example').DataTable().ajax.reload();
                    }, 1000);
                } else {
                    alert('error');
                }
            }
        });
        return false; 

		//Option 2 Not Working
        /* $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/checklist_symptoms_exe_crud.php ',
            data: {
				empinfo_empid: empinfo_empid,
				empinfo_name: empinfo_name,
				empinfo_department: empinfo_department,
				empinfo_position: empinfo_position,
				empinfo_date: empinfo_date,
				empinfo_temperature: empinfo_temperature,
				empinfo_cough: empinfo_cough,
				empinfo_fever: empinfo_fever,
				empinfo_df: empinfo_df,
				empinfo_diarrhea: empinfo_diarrhea,
				empinfo_chills: empinfo_chills,
				empinfo_cas: empinfo_cas,
				empinfo_headache: empinfo_headache,
				empinfo_sorethroat: empinfo_sorethroat,
				empinfo_bjp: empinfo_bjp,
				empinfo_lots: empinfo_lots,
				empinfo_rwn: empinfo_rwn,
				empinfo_dv: empinfo_dv,
				empinfo_ef: empinfo_ef,
				empinfo_anywhere: empinfo_anywhere,
				empinfo_where: empinfo_where				
			},
            success: function(data, status) {
                console.log(data);
                if (data != 999) {
                    $("#modal-id").modal("hide");
                    //reload server-side datatable
                    setTimeout(function() {
                        $('#example').DataTable().ajax.reload();
                    }, 1000);
                } else {
                    alert('error');
                }
            }
        });
        return false; */
    }

    //Update
    $(document).on('click', '#update', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        action = 'read_selected';

        $.ajax({
            type: 'POST',
            url: 'pages_exe/sys_user_dashboard/checklist_symptoms_exe_crud.php',
            data: {
                read_selected: action,
                crud_id: id
            },
            success: function(data, status) {
                //console.log(data);
                var cruddata = JSON.parse(data);
                //add the values from the database into the textboxes
				$('#update_id').val(cruddata.id);
				$('#update_empid').val(cruddata.empid);
				$('#update_name').val(cruddata.name);
				$('#update_department').val(cruddata.department);
				$('#update_position').val(cruddata.position);
				$('#update_date').val(cruddata.date);
				$('#update_temperature').val(cruddata.temperature);
				$('#update_cough').val(cruddata.cough);
				$('#update_fever').val(cruddata.fever);
				$('#update_df').val(cruddata.df);
				$('#update_diarrhea').val(cruddata.diarrhea);
				$('#update_chills').val(cruddata.chills);
				$('#update_cas').val(cruddata.cas);
				$('#update_headache').val(cruddata.headache);
				$('#update_sorethroat').val(cruddata.sorethroat);
				$('#update_bjp').val(cruddata.bjp);
				$('#update_lots').val(cruddata.lots);
				$('#update_rwn').val(cruddata.rwn);
				$('#update_dv').val(cruddata.dv);
				$('#update_ef').val(cruddata.ef);
				$('#update_anywhere').val(cruddata.anywhere);
				$('#update_where').val(cruddata.where);



                $("#section_btn").attr('name', 'update_btn');
                $("#section_btn").attr('data-id', cruddata.machid);
                $(".modal-title").text('Edit');
                $("#section_btn").text('Save Changes');
                $("#modal-id").modal("show");
            }
        });
    });

    //Delete
    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var conf = confirm("Are you sure, do you really want to delete these?");
        if (conf == true) {
            var action = "delete";
            $.ajax({
                type: 'POST',
                url: 'pages_exe/sys_user_dashboard/checklist_symptoms_exe_crud.php',
                data: {
                    delete_selected: action,
                    crud_id: id,
                },
                success: function(data, status) {
                    //reload server-side datatable
                    setTimeout(function() {
                        $('#example').DataTable().ajax.reload();
                    }, 1000);
                }
            });
        }
    });
});
</script>


<!-- <script type="text/javascript">
$(document).ready(function() {
    //Reading
    ace_readall();

    function ace_readall() {
		var action = "readall";
		$.ajax({				
			type : 'POST',
			url  : 'pages_exe/sys_user_dashboard/checklist_symptoms_exe_dt.php',
			data : {
					ace_readall:action
				},
			success : function(data,status){						
				$(".content_handler").html(data);
			}
		});
	}

    /* var dataTable = $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "pages_exe/sys_user_dashboard/checklist_symptoms_exe_dt.php",
            type: "POST"
        }
    }); */
});

</script> -->