
<div class="container-fluid main-container">
    <div class="name" style="margin-left: 15px; padding-top: 20px">
        <p style="font-size: medium"> Welcome <?php echo $username; ?> </p> <br>
    </div>
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="<?php echo base_url().'index.php/inventory/availableItems' ?>">Assigned Inventory</a></li>
            <!--<li><a href="<?php /*echo base_url().'index.php/inventory/orderInventory' */?>">Order Inventory</a></li>-->
            <li class="active"><a href="<?php echo base_url().'index.php/inventory/myOrders' ?>">Orders By Username</a></li>
            <li><a href="<?php echo base_url().'index.php/inventory/getAllComplaints' ?>">View Complaints</a></li>
        </ul>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Window
            </div>
            <div class="panel-body">
                <?php echo form_open(base_url().'index.php/inventory/getAllOrdersByUsername'); ?>
                    <!--<form method="post" action="<?php /*echo base_url();*/?>index.php/inventory/getAllOrdersByUsername">-->
                        <div class="col-md-4">
                            <div class="form-login">
                                <input type="text" id="username" name="username" class="form-control input-sm chat-input" placeholder="Enter your Username" />
                                </br>
                                <div class="wrapper">
                                <span class="group-btn">
                                    <button type="submit" role="button" class="btn btn-success">Get My Orders</button>
                                </span>
                                </div>
                            </div>
                        </div>
                    <!--</form>-->
                <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>






