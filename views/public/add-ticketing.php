<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Ticketing</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Ticketing</li>
                <li class="breadcrumb-item active">Add Ticketing</li>
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
                                    <form method="post" action="/functions/insert/ticketing/">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sector</label>
                                            <select class="custom-select col-12" id="sector" name="sector" required>
                                                <option selected="">Choose...
                                                    </option><option value="1">IXE</option>
                                                    <option value="2">BOM</option>
                                                    <option value="3">BOM</option>
                                                    <option value="4">IXE</option></select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Sales Amount </label>
                                                    <input type="text" class="form-control" id="sales_amount" placeholder=" Sales Amount" name="sales_amount" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Flight No</label>
                                                    <input type="text" class="form-control" id="flight_no" placeholder="Flight No" name="flight_no" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date of travel</label>
                                                    <input type="date" class="form-control" id="date_of_travel" placeholder="Date of travel" name="date_of_travel" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Purchase amt</label>
                                                    <input type="text" class="form-control" id="purchase_amt" placeholder="Purchase amt" name="purchase_amt" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Purchase agent (set supply in masters ) markup</label>
                                                    <input type="text" class="form-control" id="purchase_agent" placeholder="purchase agent" name="purchase_agent" required>
                                                </div>
                                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>