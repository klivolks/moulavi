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
    <!-- Validation wizard -->
    <div class="row" id="validation">
      <div class="col-12">
        <div class="card wizard-content">
          <div class="card-body">
            <form id="addpackage" class="validation-wizard wizard-circle" method="post" action="/functions/insert/packages/">
              <!-- Step 1 -->
              <h6>Entry</h6>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Tour name"> Tour name : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="tour_name" placeholder="Tour name" name="tour_name" required> </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="No of seats"> No of seats : <span class="danger">*</span> </label>
                    <input type="number" class="form-control required" id="no_of_seats" placeholder="No of seats" name="no_of_seats" required> </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Date of travel"> Date of travel : <span class="danger">*</span> </label>
                      <input type="date" class="form-control" id="date_of_travel" placeholder="Date of travel" name="date_of_travel" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Packages selling price">Packages selling price :</label>
                    <input type="text" class="form-control" id="package_selling_price" placeholder="Package Selling Price" name="package_selling_price" required> </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Flight details"> Flight details : <span class="danger">*</span> </label>
                      <textarea rows="4" cols="50" name="flight_details" required></textarea>
                    </div>
                  </div>
                </div>
              </section>
              <!-- Step 2 -->
              <h6>Booking</h6>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Name">Name :</label>
                      <input type="text" class="form-control" id="name" placeholder="Booking name" name="name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Passport no">Passport no :</label>
                    <input type="text" class="form-control" id="passport_no" placeholder="Passport no" name="passport_no" required> </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Gender">Gender :</label>
                      <select class="custom-select form-control required" id="gender" name="gender">
                        <option value="">Choose...</option>
                        <<option value="m">Male
                        </option>
                        <option value="f">Fe-Male
                        </option></select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="DOB"> DOB :</label>
                        <input type="date" class="form-control required" id="dob" placeholder="DOB" name="dob" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="Passport expiry"> Passport expiry :</label>
                        <input type="date" class="form-control required" id="passport_expiry" placeholder="Passport of expiry" name="passport_expiry" required>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Step 3 -->
                <h6>Tour-purchase</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="Tour code">Tour code :</label>
                        <input type="text" class="form-control required" id="tour_code" placeholder="Tour code" name="tour_code"> </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Purchase visa/cost">Purchase visa / cost :</label>
                          <input type="text" class="form-control" id="purchase_cost" placeholder="Purchase visa / cost" name="purchase_cost" required>
                        </div></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Ticket">Ticket :</label>
                            <input type="date" class="form-control" id="ticket" placeholder="Ticket" name="ticket" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Stay">Stay :</label>
                            <input type="text" class="form-control" id="Stay" placeholder="Stay" name="stay" required>
                          </div>
                        </div>
                      </div>
                    </section>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div></div></div></div></div></div></div></div>
      </div>