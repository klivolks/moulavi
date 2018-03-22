<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">All Visa</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">visa</li>
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
                                <th>Sl No.</th>
                                <th>Client </th>
                                <th>Type of visa </th>
                                <th>Passport name</th>
                                <th>Passport no</th>
                                <th>DOB</th>
                                <th>Passport expiry</th>
                                <th>VISA no</th>
                                <th>Date</th>
                                <th>Id no</th>
                                <th>Profession </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $db = new db;
                            $data = $db->get('visa','*',"WHERE 1 ORDER BY `id` DESC");
                            $i=1;
                            foreach($data['result'] as $key=>$visa):
                            $clientname = $db->get('clients','`id`,`client_name`',"WHERE `id` = '".$visa['client']."'");
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $clientname['result'][0][1]; ?></td>
                                <td><?php echo $visa['visa_type']; ?></td>
                                <td><?php echo $visa['sales_amount']; ?> </td>
                                <td><?php echo $visa['service_charge']; ?></td>
                                <td><?php echo $visa['passport_name']; ?></td>
                                <td><?php echo $visa['passport_no']; ?></td>
                                <td><?php echo $visa['dob']; ?></td>
                                <td><?php echo $visa['passport_expiry']; ?></td>
                                <td><?php echo $visa['visa_no']; ?></td>
                                <td><?php echo $visa['visa_date']; ?></td>
                                <td><?php echo $visa['id_no']; ?></td>
                                <td><?php echo $visa['profession']; ?></td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                    <!-- <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>