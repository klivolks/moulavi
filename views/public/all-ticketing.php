<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">All Ticketing</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Ticketing</li>
            </ol>
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
        <!-- Row -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Name</th>
                                <th>Sector</th>
                                <th>Sales amount</th>
                                <th>Flight no</th>
                                <th>Date of travel</th>
                                <th>Purchase amt</th>
                                <th>Purchase agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $db = new db;
                            $data = $db->get('ticketing','*',"WHERE 1 ORDER BY `id` DESC");
                            $i=1;
                            foreach($data['result'] as $key=>$ticketing):
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $ticketing['name']; ?></td>
                                <td><?php echo $ticketing['sector']; ?></td>
                                <td><?php echo $ticketing['sales_amount']; ?> </td>
                                <td><?php echo $ticketing['flight_no']; ?></td>
                                <td><?php echo $ticketing['date_of_travel']; ?></td>
                                <td><?php echo $ticketing['purchase_amt']; ?></td>
                                <td><?php echo $ticketing['purchase_agent']; ?></td>
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