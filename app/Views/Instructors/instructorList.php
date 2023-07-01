<?php echo $this->include('leftnavbar'); ?>

<div class="app-content content">
   <div class="content-wrapper">
      <div class="container">
         <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
               <h3 class="content-header-title">Instructor List</h3>
               <div class="row breadcrumbs-top">
                  <div class="breadcrumb-wrapper col-12">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Home</a></li>
                        <li class="breadcrumb-item">Instructor List</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h4>Instructor List</h4>
                     <div class="heading-elements">
                        <ul class="list-inline mb-0">
                           <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                           <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                           <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                           <thead class="bg-success white">
                              <tr>
                                 <th scope="col">Sr.</th>
                                 <th scope="col">Instructor Name</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($instructors as $index => $row) { ?>
                                 <tr>
                                    <th scope="row"><?php echo $index + 1; ?></th>
                                    <td><?php echo $row['username']; ?></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?php echo $this->include('js'); ?>

</body>
</html>
