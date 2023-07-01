<?php echo $this->include ('leftnavbar') ?>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
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
                                    <a href="<?php echo base_url('show_lectures')?>">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-edit font-large-2 success"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Task</h5>
                                            <h3 class="text-bold-600"><?php 
                                            echo $assigned['assign_count'];?></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-lg">
                    <thead class="bg-success white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Instructor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tasks as $index => $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $index + 1; ?></th>
                                <td><?php echo $row['batch_date']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php echo $this->include ('js') ?>
    
</body>
</html>
