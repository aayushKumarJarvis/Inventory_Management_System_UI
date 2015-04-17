

<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>LNMIIT</h1>
                    <h3>Stationary Inventory Management System</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-user"></i> <span class="network-name">SIGN UP</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-sign-in"></i> <span class="network-name">SIGN IN</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-comment"></i> <span class="network-name">COMPLAINT</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- MODAL -->

<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
                <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
            </ul>
        </div>
        <div class="modal-body">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in" id="why">
                    <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
                    <p></p> Please contact <a href="mailto:iaayush.stevejobs@gmail.com">aayush.y12@lnmiit.ac.in</a> for any other inquiries.</p>
                </div>
                <div class="tab-pane fade active in" id="signin">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Sign In Form -->
                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="userid">Username:</label>
                                <div class="controls">
                                    <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="JoeSixpack" class="input-medium" required="">
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="control-group">
                                <label class="control-label" for="passwordinput">Password:</label>
                                <div class="controls">
                                    <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="control-group">
                                <label class="control-label" for="signin"></label>
                                <div class="controls">
                                    <button id="signin" name="signin" class="btn btn-success">Sign In</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="tab-pane fade" id="signup">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Sign Up Form -->
                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="Email">Email:</label>
                                <div class="controls">
                                    <input id="Email" name="Email" class="form-control" type="text" placeholder="JoeSixpack@sixpacksrus.com" class="input-large" required="">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="userid">Alias:</label>
                                <div class="controls">
                                    <input id="userid" name="userid" class="form-control" type="text" placeholder="JoeSixpack" class="input-large" required="">
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="control-group">
                                <label class="control-label" for="password">Password:</label>
                                <div class="controls">
                                    <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                                    <em>1-8 Characters</em>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
                                <div class="controls">
                                    <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
                                </div>
                            </div>

                            <!-- Multiple Radios (inline) -->
                            <br>
                            <div class="control-group">
                                <label class="control-label" for="humancheck">Humanity Check:</label>
                                <div class="controls">
                                    <label class="radio inline" for="humancheck-0">
                                        <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                                    <label class="radio inline" for="humancheck-1">
                                        <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="control-group">
                                <label class="control-label" for="confirmsignup"></label>
                                <div class="controls">
                                    <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <center>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </center>
        </div>
    </div>
</div>
</div>

<!--Modal Content for the ABOUT Tab -->
<div class="modal fade about">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                <h4 class="modal-title">ABOUT</h4>
            </div>
            <div class="modal-body">
                <p>
                    Inventory Management System (IMS) is a scalable Asset Management System which is expected to
                    automate the process of deliver operations of inventory in The LNMIIT. As of now, this model
                    is for Stationary Management, however, this will be scaled to other inventory operations also.
                    <br><br>
                    Following are the Developers of this software : <br>
                    <ul>
                        <li>Aayush Kumar</li>
                        <li>Aayush Sarva</li>
                        <li>Abhilakshya Bhateja</li>
                        <li>Abhishek Banthia</li>
                    </ul>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal Content for the CONTACT Tab -->
<div class="modal fade contact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                <h4 class="modal-title">CONTACT</h4>
            </div>
            <div class="modal-body">
                <p>
                    Feel free to connect with us. Would would be happy to address your problems and issues.
                    <br><br>
                    You can reach us on the following email addresses : <a href="mailto:iaayush.stevejobs@gmail.com">
                        aayush.y12@lnmiit.ac.in</a>
                    </a>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Got It :)</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>