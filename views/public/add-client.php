<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Add Clients</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Clients</li>
                        <li class="breadcrumb-item active">Add Clients</li>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <div class="card card-body">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="/functions/insert/client/">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type</label>
                                           <select class="custom-select col-12" id="inlineFormCustomSelect" name="client_type" required>
                                        <option selected="" disabled>Choose...
                                        </option><option value="B2B">B2B                                        </option><option value="B2C">B2C
                                        </option></select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" required name="client_name">
                                        </div>
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" required name="client_address">
                                        </div>
                                                                                   <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="phone" required name="client_phone">
                                        </div>
                                       
                                       <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="e-mail" class="form-control" id="exampleInputEmail1" placeholder="e-mail" required name="client_email">
                                        </div>
                                       

                                       
                                        
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>