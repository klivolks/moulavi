  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">All Admin</h3>
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
                                                <th>SL No:</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
											$db = new db;
											$data = $db->get('users','*',"WHERE 1 ORDER BY id DESC");
											$i=1;
											foreach($data['result'] as $key => $rw):
											?>
                                            <tr>
                                                <td><a href="javascript:void(0)"><?php echo $i; $i++; ?></a></td>
                                                <td><?php echo $rw['username']; ?></td>
                                                <td><?php echo $rw['email']; ?> </td>
                                                <td>  <button class="pull-right btn btn-sm btn-rounded btn-success" data-toggle="modal" data-target="#myModal" style="    margin: 0px 10px 0px 0px;background-color: red;
    border-color: red;
    padding: 10px 25px 10px 25px;">Block</button></td>
                                               
                                               
                                             
											</tr>
                                        
                                            <?php endforeach; ?>
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