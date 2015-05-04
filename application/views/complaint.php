
<div class="container-fluid main-container">
    <div class="name" style="margin-left: 15px; padding-top: 20px">
        <p style="font-size: medium"> Welcome <?php echo $username; ?> </p> <br>
    </div>
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="<?php echo base_url().'index.php/inventory/availableItems' ?>">Assigned Inventory</a></li>
            <!--<li><a href="<?php /*echo base_url().'index.php/inventory/orderInventory' */?>">Order Inventory</a></li>-->
            <li><a href="<?php echo base_url().'index.php/inventory/myOrders' ?>">Orders By Username</a></li>
            <li class="active"><a href="<?php echo base_url().'index.php/inventory/getAllComplaints' ?>">View Complaints</a></li>
        </ul>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Window
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover table-responsive">
                    <th>Name of Person</th>
                    <th>Subject</th>
                    <th>Complaint Description</th>
                    <tbody>
                    <?php foreach($complaints as $key => $value): ?>
                        <tr>
                            <td><?php echo $value->nameOfPerson; ?></td>
                            <td><?php echo $value->subject; ?></td>
                            <td><?php echo $value->complaintDescription; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





