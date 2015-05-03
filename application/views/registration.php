<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        SIGN UP</h5>
                    <form class="form form-signup" role="form" method="post" action="<?php echo base_url();?>index.php/user/add_user">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input id="username" name="username" type="text" class="form-control" placeholder="Username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <button value=" Send" type="submit" id="submit" class="btn btn-sm btn-primary btn-block" role="button">

                            SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 