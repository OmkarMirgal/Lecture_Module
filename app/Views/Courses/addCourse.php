<?=$this->include ('leftnavbar') ?>   

	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-6 col-12 mb-2">
					<h3 class="content-header-title">Add Courses</h3>
					<div class="row breadcrumbs-top">
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Home</a>
								</li>
								<li class="breadcrumb-item">Add Courses
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="content-header-right col-md-6 col-12">
					<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
					</div>
				</div>
			</div>
			<div class="content-body">
				<section id="hidden-label-form-layouts">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="horz-layout-colored-controls">Add Course</h4>
									<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
									<div class="heading-elements">
										<ul class="list-inline mb-0">
											<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
											<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
											<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
											<li><a data-action="close"><i class="ft-x"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card-content collpase show">
									<div class="card-body">
                                        <form id="courseForm" class="form form-horizontal">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-mail"></i> Course Details</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-2" for="userinput1">Name</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" id="userinput1" class="form-control rounded " required placeholder="Name" name="cname">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3" for="userinput2">Level</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <select id="userinput2" name="level" class="form-control rounded" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Course Level">
                                                                    <option value="Beginner">Beginner</option>
                                                                    <option value="Intermediate">Intermediate</option>
                                                                    <option value="Advance">Advance</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-2" for="userinput3">Image</label>
                                                            <div class="col-md-9 mx-auto">
                                                            <input type="file" id="userinput3" class="form-control rounded"  placeholder="Image" name="Image" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3" for="userinput4">Description</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <textarea id="userinput4" rows="6" class="form-control rounded" name="desc" placeholder="Description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row "> 
                                                    <div class="col-md-4 text-center mt-2">
                                                        <div class="form-group row">
                                                            <label class="col-md-4 text-center" for="userinput5">Instructor</label>
                                                            <div class="col-md-8 mx-auto">
                                                                <select id="userinput5" name="inst" class="form-control rounded" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Instructor">
                                                                    <option value="">---- Select ----</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4 text-center mt-2">
                                                        <div class="form-group row">
                                                            <label class="col-md-4 text-center" for="userinput7">Lecture</label>                                  
                                                            <div class="col-sm-8 mx-auto">
                                                                <input type="text" id="userinput7" class="form-control rounded" name="batch" placeholder="Batch/Lecture">
                                                            </div>                                  
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 text-center mt-2">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 text-center" for="userinput6">Date</label>                                  
                                                            <div class="col-sm-9 mx-auto">
                                                                <input type="date" id="userinput6" class="form-control date-picker" name="batchDate">
                                                            </div>                                  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right" style="display: flex; justify-content: center; align-items: center;">
                                                    <button type="button" id="saveButton" class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</section>
			</div>
		</div>
	</div>
	<!-- END: Content-->

    <?php echo $this->include ('js') ?>

    <script>
       $(document).ready(function() {
            function populateInstructorOptions() {
                $.ajax({
                    url: "<?php echo base_url('Home/get_Instructors');?>",
                    type: "POST",
                    success: function(response) {
                        var instructors = JSON.parse(response);
                        var instSelect = $('#userinput5');
                        // Append
                        instructors.forEach(function(instructor) {
                            instSelect.append('<option value="' + instructor.loginid + '">' + instructor.username + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            populateInstructorOptions();
        });

    </script>



    <script>

  var jqueryCdnUrl = "https://code.jquery.com/jquery-3.6.0.min.js";
  var jqueryValidationCdnUrl = "https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js";

  $.getScript(jqueryCdnUrl, function() {
    $.getScript(jqueryValidationCdnUrl, function() {

      $('#courseForm').validate({
        rules: {
            cname: {
                required: true,
            },
            level: {
                required: true,
            },
            Image: {
                required: true,
            },
            desc: {
                required: true,
            },
            inst: {
                required: true,
            },
            batchDate: {
                required: true,
            },
            batch: {
                required: true,
            }
        },
        messages: {
            cname: {
                required: "Please enter a name",
            },
            level: {
                required: "Please select a level",
            },
            Image: {
                required : "Please Upload a image",
            },
            desc: {
                required: "Please enter a description",
            },
            inst: {
                required: "Please enter an instructor",
            },
            batchDate: {
                required: "Please enter a batch date",
            },
            batch: {
                required: "Please enter a batch",
            }
        },
        submitHandler: function(form) {
          $.ajax({
            url: "<?php echo base_url('/saveCourse');?>",
            type: "POST",
            data: new FormData(form),
            processData: false,
            contentType: false,
            success: function(response) {
              var res = JSON.parse(response);
              if (res.status === "success") {
                alertify.success(res.message);
                form.reset();
              } else {
                alertify.error(res.message);
              }
            },
            error: function(xhr, status, error) {
              alertify.error('Something went wrong.');
            }
          });
        }
      });

      // Attach click event handler to the Save button
      $('#saveButton').click(function() {
        var inputFile = $('#userinput3')[0];
        var file = inputFile.files[0];

        if (file && file.type.indexOf('image/') !== 0) {
          // Invalid file type
          alertify.error('Only image files are allowed.');
          return;
        }

        $('#courseForm').submit();
      });
    });
  });

    </script>

</body>
</html>