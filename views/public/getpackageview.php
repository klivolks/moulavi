<?php
if (isset($_POST['id'])) {
    $input = new input;
$id = $_POST['id'];
$db = new db;
 $data = $db->get('packages','*',"WHERE `id` = '$id' LIMIT 1");
foreach($data['result'] as $key=>$entry):
?>
<style>th{min-width: 115px;}</style>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <tr>
            <th>Tour Name</th>
            <td><?php echo $entry['tour_name']; ?></td>
        </tr>
        <tr>
            <th>No of Seats</th>
            <td><?php echo $entry['no_of_seats']; ?></td>
        </tr>
        <tr>
            <th>Date of travel</th>
            <td><?php echo $entry['date_of_travel']; ?></td>
        </tr>
    </table>
</div>
<?php
endforeach;
}
?>
