  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">All Clients</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">admin</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <div class="card-body">
                
            </div>
              
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
              
             <div class="card">

                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                               <th>#</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>E-mail</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
											$db = new db;
											$data = $db->get('clients','*',"WHERE 1 ORDER BY `id` DESC");
											$i=1;
											foreach($data['result'] as $key=>$rw):
											?>
                                            <tr>
                                               <td><?php echo $i; $i++; ?></td>
                                                <td><?php echo $rw['client_type']; ?></td>
                                                <td><?php echo $rw['client_name']; ?></td>
                                                <td><?php echo $rw['client_address']; ?> </td>
                                                 <td><?php echo $rw['client_phone']; ?></td>
                                                <td><?php echo $rw['client_email']; ?></td>
                                               
                                               
                                             
                                            </tr>
                                            <?php
											endforeach;
											?>
                                            
                                        
                                            
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
</div>