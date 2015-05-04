
<div class="container-fluid main-container">
    <div class="name" style="margin-left: 15px; padding-top: 20px">
        <p style="font-size: medium"> Welcome <?php echo $username; ?> </p> <br>
    </div>
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="<?php echo base_url().'index.php/inventory/availableItems' ?>">Available Inventory</a></li>
            <li class="active"><a href="<?php echo base_url().'index.php/inventory/orderInventory' ?>">Order Inventory</a></li>
            <li><a href="<?php echo base_url().'index.php/inventory/myOrders'?>">My Orders</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Window
            </div>
            <div class="panel-body">
                <?php echo form_open(base_url().'index.php/inventory/placeOrder'); ?>
                    <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-10 column">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead>
                                <tr >
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th class="text-center">
                                        Username
                                    </th>
                                    <th class="text-center">
                                        Item Name
                                    </th>
                                    <th class="text-center">
                                        Item Quantity
                                    </th>
                                    <th class="text-center">
                                        Item Remarks
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id='addr0'>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <input type="text" name='username[]'  placeholder='Username' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name='item_name[]' placeholder='Item Name' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name='quantity[]' placeholder='Quantity' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name='remarks[]' placeholder='Remarks' class="form-control"/>
                                    </td>
                                </tr>
                                <tr id='addr1'></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a id="add_row" class="btn btn-success pull-left">Add Item</a>
                    <a style="margin-left: 67%" id='delete_row' class="btn btn-danger">Delete Item</a>
                        <br>
                        <button style="margin-left: 32%" value="Send" type="submit" id="submit" class="btn btn-primary" role="button">

                            PLACE ORDER</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>





