<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Add Visa</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item">Visa</li>
        <li class="breadcrumb-item active">Add Visa</li>
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
                  <form method="post" action="/functions/insert/visa/">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Select client</label>
                      <select class="custom-select col-12" id="inlineFormCustomSelect" name="client">
                        <option selected="" disabled>Choose...</option>
                        <?php
                        $db = new db;
                        $data = $db->get('clients','`id`,`client_name`',"WHERE 1");
                        foreach($data['result'] as $key=>$rw){
                        echo '<option value="'.$rw[0].'">'.$rw[1].'</option>';
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Type of visa</label>
                      <input type="text" class="form-control" id="visa_type" placeholder="Type of Visa" name="visa_type" required>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6 m-t-20">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sales amount</label>
                          <input type="text" class="form-control" id="sales_amount" placeholder="sales amount" name="sales_amount" required>
                        </div>
                      </div>
                      <div class="form-group col-md-6 m-t-20">
                        <div class="form-group">
                          <label for="exampleInputEmail1">service charge</label>
                          <input type="text" class="form-control" id="service_charge" placeholder="service charge" name="service_charge" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">VISA DOC</label>
                      <div class="row">
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Passport name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="passport name" name="passport_name" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Passport no</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="passport no" name="passport_no" required>
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
                            <label for="exampleInputEmail1">Passport expiry (min 6 month  warning)</label>
                            <input type="date" class="form-control" id="passport_expiry" placeholder="service charge" name="passport_expiry" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">VISA no</label>
                            <input type="text" class="form-control" id="visa_no" placeholder="VISA no" name="visa_no" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Visa Date</label>
                            <input type="date" class="form-control" id="visa_date" placeholder="date" name="visa_date" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Id no</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="id no" name="id_no" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6 m-t-20" style="margin:0px">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Profession </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="profession " name="profession" required>
                          </div>
                        </div>
                      </div>
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