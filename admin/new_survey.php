<?php
include "db_connect.php";
?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_survey">
				<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
					<div class="col-md-6 border-right">
						<div class="form-group">	
							<label for="" class="control-label">Title</label>
							<input type="text" name="title" class="form-control form-control-sm" required value="<?php echo isset($stitle) ? $stitle : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Start</label>
							<input type="date" name="start_date" class="form-control form-control-sm" required value="<?php echo isset($start_date) ? $start_date : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">End</label>
							<input type="date" name="end_date" class="form-control form-control-sm" required value="<?php echo isset($end_date) ? $end_date : '' ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Description</label>
							<textarea name="description" id="" cols="30" rows="4" class="form-control" required><?php echo isset($description) ? $description : '' ?></textarea>
						</div>
						<div class="form-group">	
							<?php
							//select last survey to
					          $selectlast="SELECT id FROM survey_set ORDER BY id DESC LIMIT 1";
							  $result = $conn->query($selectlast);
							  if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									$lastid=$row['id'];
									$thisid=$lastid + 1;
								}
							} else {
								echo "0 results";
							}
							 ?>
							<label for="" class="control-label">Link</label>
							<input type="text" name="surveylink" class="form-control form-control-sm" required value="<?php echo isset($surveylink) ? $surveylink : 'ERI/SURVEY00'.$thisid; ?>">
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=survey_list'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$('#manage_survey').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_survey',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=survey_list')
					},1500)
				}
			}
		})
	})
</script>