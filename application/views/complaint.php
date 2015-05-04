
<div class="container-fluid main-container">
    <div class="name" style="margin-left: 15px; padding-top: 20px">
        <p style="font-size: medium"> Welcome <?php echo $username; ?> </p> <br>
    </div>
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="<?php echo base_url().'index.php/inventory/availableItems' ?>">Available Inventory</a></li>
            <li><a href="<?php echo base_url().'index.php/inventory/orderInventory' ?>">Order Inventory</a></li>
            <li><a href="<?php echo base_url().'index.php/inventory/myOrders' ?>">My Orders</a></li>
            <li class="active"><a href="#">Make Complaint</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Window
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover table-responsive">
                    <th>Username</th>
                    <th>Item Name</th>
                    <th>Item Quantity</th>
                    <th>Item Remarks</th>
                    <tbody>
                    <?php foreach($items as $key => $value): ?>
                        <tr>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->itemDescription; ?></td>
                            <td><?php echo $value->itemQuantity; ?></td>
                            <td><?php echo $value->itemRemarks; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





