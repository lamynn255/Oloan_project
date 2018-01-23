<!DOCTYPE html>
<html>
    <head>
      <?php require_once 'templates/header.php';?>
    </head>
<body>
    <!--Header-->
  <?php require_once 'templates/heading.php';?>
<!--here a registration form starts-->
<div class="container">
        <div class="row" id="relative">
            <div class="col-md-7">
                <form action="register.php" method="post" id="fileForm" role="form">
                <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>

                <div class="form-group">
                <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                        <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/>
                </div>

                <div class="form-group">
                    <label for="firstname"><span class="req">* </span> First name: </label>
                        <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required />
                            <div id="errFirst"></div>
                </div>

                <div class="form-group">
                    <label for="lastname"><span class="req">* </span> Last name: </label>
                        <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />
                            <div id="errLast"></div>
                </div>

                <div class="form-group">
                    <label for="email"><span class="req">* </span> Email Address: </label>
                        <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />
                            <div class="status" id="status"></div>
                </div>
                <div class="form-group">
                        <label class="col-lg-3 control-label"><span class="req"></span>Are You Employed?</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="employment" value="yes" /> <span class="req"></span>yes
                                </label>
                            </div>
                            <div class="radio">
                                    <label>
                                        <input type="radio" name="employment" value="No" /> <span class="req"></span>No
                                    </label>
                                </div>
                <div class="form-group">
                        <label for="lastname"><span class="req">* </span> Street Address: </label>
                            <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />
                                <div id="errLast"></div>
                                <div class="form-group">
                                        <label for="lastname"><span class="req">* </span>Region: </label>
                                            <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />
                                                <div id="errLast"></div>
                                    </div>
                    </div>
                <div class="form-group">
                        <label class="col-lg-3 control-label"><span class="req"></span>Gender</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="male" /> <span class="req"></span>Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="female" /> Female
                                </label>
                            </div>


                <div class="form-group">
                    <label for="password"><span class="req">* </span> Password: </label>
                        <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>

                    <label for="password"><span class="req">* </span> Password Confirm: </label>
                        <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                            <span id="confirmMessage" class="confirmMessage"></span>
                </div>



                <div class="form-group">

                    <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                    <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                    <input type="hidden" value="0" name="activate" />
                    <hr>

                    <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
                </div>

                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
                </div>
                          <h5>You will receive an email to complete the registration and validation process. </h5>
                          <h5>Be sure to check your spam folders. </h5>


                </fieldset>
                </form><!-- ends register form -->

    <script type="text/javascript">
      document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
    </script>
            </div><!-- ends col-6 -->

                <div class="col-md-5">
                    <legend class="text-center">For A Registred Member</legend>
            <!--login form starts here -->

                            <div class="container"></div>
                            <form class="form-horizontal"  b cnrole="form" method="POST" action="/login">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-12">
                                        <h2>Please Login</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <label class="sr-only" for="email">E-Mail Address</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                                <input type="text" name="email" class="form-control" id="email"
                                                       placeholder="you@example.com" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-control-feedback">
                                            <span class="text-danger align-middle">
                                                <i class="fa fa-close"></i> Example error message
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="password">Password</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                                <input type="password" name="password" class="form-control" id="password"
                                                       placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-control-feedback">
                                            <span class="text-danger align-middle">
                                            <!-- Put password error message here -->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-12" style="padding-top: .35rem">
                                        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="remember"
                                                       type="checkbox" >
                                                <span style="padding-bottom: .15rem">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 1rem">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                                        <a class="btn btn-link" href="/password/reset">Forgot Your Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </body>
                    </html>

                </div>

        </div>
    </div>
</section>
<section class="container-fluid">
<hr class="featurette-divider">
<div class="container-fluid" >
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="page-header">How to Apply for a loan.<br>
             <span class="text-muted">It's Easy</span></h2>
          <p class="lead">YEs! you just need a Membership account and then after being full Registred<br>You will fill up the loan application form and wait for approval
        from our loan officers<br> and you would have your loan in no time</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="image/home.jpg" alt="Generic placeholder image">
        </div>
      </div>
     </div>
    </section>

<!--Footer-->
<footer id="footer">
     <!--Container-->
     <div class="continer-fluid" id="footer">

                <!--row-fluids-->
                <div class="container">

                    <!--Contact Form-->
                    <div class="span3" id="span3">
                        <h4>ADDRESS</h4>
                        <ul class="unstyled address">
                                <li>
                                        <i class="icon-home"></i></strong>Institute Of finance Management<br>
                                    </li>
                            <li>
                                <i class="icon-home"></i></strong>Dar Es Salam<br>Tanzania
                            </li>
                            <li>
                                <i class="icon-envelope"></i>
                                <strong>Email: </strong> lvavalai@gmail.com
                            </li>
                            <li>
                                <i class="icon-globe"></i>
                                <strong>Website:</strong> www.ifmso.ac.tz
                            </li>
                            <li>
                                <i class="icon-phone"></i>
                                <strong>Tel:</strong> +255654028211</li>
                                <li>
                                <i class="copyright">&copy <strong>2017</strong> <br>Ifm Student Bcs Project </i>
                            </li>
                        </ul>
                    </div>
                </div>
     </div>
</footer>
<!--/Footer-->

</div>



</body>

<!-- this place under to make the web load faster -->
    <script type="text/javscript" src="js/bootstrap.min.js"></script>
    <script type="text/javscript" src="js/jquery.js"></script>
    <script type="text/javscript" src="js/popper.js"></script>
    <script type="text/javscript" src="js/vendor.js"></script>

</html>
