<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo form_open_multipart("#",'id="login-form" role="form" style="display: block;"'); ?>
                                    <h2>Login to your <span class="symbol" >Ω</span>MEGA account</h2>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="fa fa-user"></span></div>
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="fa fa-lock"></span></div>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-6 form-group pull-left checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>   
                                </div>
                                <div class="col-xs-6 form-group pull-right">     
                                    <input type="button" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                </div>
                            </form>
                            <?php echo form_open_multipart("#",'id="register-form" role="form" style="display: none;"'); ?>                            
                                <h2>Create a new account</h2>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="fa fa-user"></span></div>
                                        <input type="text" name="register-user" id="register-user" tabindex="1" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon" id="email-addon"><span class="fa fa-envelope"></span></div>
                                        <input type="email" name="register-email" id="register-email" tabindex="1" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="fa fa-lock"></span></div>
                                        <input type="password" name="register-pass" id="register-pass" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="fa fa-unlock-alt"></span></div>
                                        <input type="password" name="confirm-pass" id="confirm-pass" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="button" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 tabs">
                            <a href="#" class="active" id="login-form-link">
                                <div class="login">
                                    <span class="fa fa-sign-in"></span> LOGIN
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 tabs">
                            <a href="#" class="" id="register-form-link">
                                <div class="register">
                                    <span class="fa fa-user-plus"></span> REGISTER
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>