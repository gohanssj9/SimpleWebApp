<html>
  <head>
      <title>Riktam Demo</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!--<link rel="stylesheet" href="simplePagination.css">
      <script src="jquery.simplePagination.js"></script>-->
      <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
      <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>

      <script type="text/javascript" src="js/script.js"></script>
  </head>

  <body>
  	<!--Add-->
  	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2> Hack Student ! </h2>
				<div class="pull-right">
					<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
				</div>
			</div>
		</div>
	
	<div class="row">
		<div class="col-md-12">
			<h4>Records:</h4>
			<div class="records_content"></div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel">Add New Record</h4>
		</div>

	<div class="modal-body">

	<div class="form-group">
		<label for="student_id">ID</label>
		<input type="number" id="student_id" placeholder="ID" class="form-control" required/>
	</div>

	<div class="form-group">
		<label for="student_name">Name</label>
		<input type="text" id="student_name" placeholder="Name" class="form-control" required/>
	</div>

	<div class="form-group">
		<label for="student_age">Age</label>
		<input type="number" id="student_age" placeholder="Age" class="form-control" required/>
	</div>

	<div class="form-group">
		<label for="student_college">College</label>
		<input type="text" id="student_college" placeholder="College" class="form-control" required/>
	</div>
	
	<div class="form-group">
		<label for="student_dept">Department</label>
		<input type="text" id="student_dept" placeholder="Department" class="form-control" required/>
	</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		<button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
	</div>
	</div>
	</div>
	</div>


	<!--Update-->
	<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Details</h4>
            </div>
            <div class="modal-body">
 
                <div class="form-group">
                    <label for="update_student_id">ID</label>
                    <input type="number" id="update_student_id" placeholder="ID" class="form-control" readonly/>
                </div>
 
                <div class="form-group">
                    <label for="update_student_name">Name</label>
                    <input type="text" id="update_student_name" placeholder="Name" class="form-control"/>
                </div>
 
                <div class="form-group">
                    <label for="update_student_age">Age</label>
                    <input type="number" id="update_student_age" placeholder="Age" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_student_college">College</label>
                    <input type="text" id="update_student_college" placeholder="College" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_student_dept">Department</label>
                    <input type="text" id="update_student_dept" placeholder="Department" class="form-control"/>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <!--<input type="hidden" id="hidden_user_id">-->
            </div>
        	</div>
    	</div>
	</div>
  </body>
</html>