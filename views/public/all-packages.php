<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">All Packages</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">All Packages</li>
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
                    <p style="color:blue;font-weight:600">Entry</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tour name</th>
                                <th>No of seats</th>
                                <th>Date of travel</th>
                                <th>Flight details</th>
                                <th>Packages selling price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $db = new db;
                            $data = $db->get('packages','`tour_name`,`no_of_seats`,`date_of_travel`,`package_selling_price`,`flight_details`',"WHERE 1 ORDER BY `id` DESC");
                            $i=1;
                            foreach($data['result'] as $key=>$entry):
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $entry['tour_name']; ?></td>
                                <td><?php echo $entry['no_of_seats']; ?> </td>
                                <td><?php echo $entry['date_of_travel']; ?></td>
                                <td><?php echo $entry['flight_details']; ?></td>
                                <td><?php echo $entry['package_selling_price']; ?></td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                    <p style="color:blue;font-weight:600">Booking</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Passport no</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Passport of expiry</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = $db->get('packages','`name`,`passport_no`,`gender`,`dob`,`passport_expiry`',"WHERE 1 ORDER BY `id` DESC");
                            $i=1;
                            foreach($data['result'] as $key=>$booking):
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $booking['name']; ?></td>
                                <td><?php echo $booking['passport_no']; ?> </td>
                                <td><?php echo ($booking['gender']=='m') ? "Male": "Female"; ?></td>
                                <td><?php echo $booking['dob']; ?></td>
                                <td><?php echo $booking['passport_expiry']; ?></td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                    <p style="color:blue;font-weight:600">Tour purchase</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tour code</th>
                                <th>Purchase visa /cost</th>
                                <th>Ticket</th>
                                <th>Stay </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = $db->get('packages','`tour_code`,`purchase_cost`,`ticket`,`stay`',"WHERE 1 ORDER BY `id` DESC");
                            $i=1;
                            foreach($data['result'] as $key=>$entry):
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $entry['tour_code']; ?></td>
                                <td><?php echo $entry['purchase_cost']; ?> </td>
                                <td><?php echo $entry['ticket']; ?></td>
                                <td><?php echo $entry['stay']; ?></td>
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