<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Add Packages</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item">Tour-packages</li>
        <li class="breadcrumb-item active">Add packages</li>
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
                  <form method="post" action="/functions/insert/packages/">
                    <div class="form-group">
                      <label for="exampleInputEmail1" style="color:blue">Entry</label>
                      <div class="row">
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tour name</label>
                            <input type="text" class="form-control" id="tour_name" placeholder="tour name" name="tour_name" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">No of seats</label>
                            <input type="text" class="form-control" id="no_of_seats" placeholder="No of seats" name="no_of_seats" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Date of travel</label>
                            <input type="date" class="form-control" id="date_of_travel" placeholder="Date of travel" name="date_of_travel" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Packages selling price</label>
                            <input type="text" class="form-control" id="package_selling_price" placeholder="Package Selling Price" name="package_selling_price" required>
                            <!--<select class="custom-select col-12" id="inlineFormCustomSelect">
                              <option selected="">Choose...
                              </option><option value="1">adult
                            </option>
                            <option value="1"> child
                            </option>
                            <option value="1"> infant
                            </option></select>-->
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Flight details</label>
                            <textarea rows="4" cols="50" name="flight_details" required>
                            </textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="color:blue">Booking</label>
                            <div class="row">
                              <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" id="name" placeholder="Booking name" name="name" required>
                                </div>
                              </div>
                              <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Passport no</label>
                                  <input type="text" class="form-control" id="passport_no" placeholder="Passport no" name="passport_no" required>
                                </div>
                              </div>
                              <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Gender</label>
                                  <select class="custom-select col-12" id="gender" name="gender" required>
                                    <option selected="">Choose...
                                    </option><option value="m">Male
                                  </option>
                                  <option value="f">Fe-Male
                                  </option></select>
                                </div>
                              </div>
                              <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">DOB</label>
                                  <input type="date" class="form-control" id="dob" placeholder="DOB" name="dob" required>
                                </div>
                              </div>
                              <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Passport expiry  </label>
                                  <input type="date" class="form-control" id="passport_expiry" placeholder="passport of expiry" name="passport_expiry" required>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1" style="color:blue">Tour-purchase</label>
                              <div class="row">
                                <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Tour code</label>
                                    <input type="text" class="form-control" id="tour_code" placeholder="tour code" name="tour_code" required>
                                  </div>
                                </div>
                                <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Purchase visa/cost</label>
                                    <input type="text" class="form-control" id="purchase_cost" placeholder="purchase visa /cost" name="purchase_cost" required>
                                  </div>
                                </div>
                                <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Ticket</label>
                                    <input type="date" class="form-control" id="ticket" placeholder="ticket" name="ticket" required>
                                  </div>
                                </div>
                                <div class="form-group col-md-6 m-t-20" style="margin:0px">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Stay </label>
                                    <input type="text" class="form-control" id="stay" placeholder="stay" name="stay" required>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                              </form>
                            </div>
                          </div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
                        </div>