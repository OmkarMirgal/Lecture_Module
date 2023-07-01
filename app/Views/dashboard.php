    <?php echo $this->include ('leftnavbar') ?>

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                    <a href="<?php echo base_url('listing')?>">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-edit font-large-2 success"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Courses</h5>
                                            <h3 class="text-bold-600"><?php 
                                            echo $courses['course_count'];?></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="<?php echo base_url('applicants_listing')?>">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-users font-large-2 warning"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Instructors</h5>
                                            <h3 class="text-bold-600"><?php  echo $instructor['inst_count'];?></h3>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                    <a href="<?php echo base_url('hiring_listing')?>">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-check-circle-o font-large-2 danger"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Assigned</h5>
                                            <h3 class="text-bold-600"><?php echo $assigned['assign_count'];?></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php echo $this->include ('js') ?>
    
</body>
</html>
