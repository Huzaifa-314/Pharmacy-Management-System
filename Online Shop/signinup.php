<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Shop</title>
    <!-- style sheel -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome 4 link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- SignIn  & signUp Section  start-->
    <!-- ------------------------- -->

    <section class="Sign-in-up">
        <div class="container-md container-tab">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 tab-side">
                    <div class="tab-button d-flex">
                        <div class="sign-in-b">
                            <span class="in-btn">Sign In</span>
                        </div>
                        <div class="sign-up-b">
                            <span class="up-btn">Sign Up</span>
                        </div>
                    </div>
                    <!-- signin -->
                    <div class="logintab">
                        <h2>Sign In</h2>
                        <div class="login-form">
                            <form>
                                <div class="form-group ">
                                    <label for="login_email">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="login_email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="login_pwd">Password</label>
                                    <input type="password" name="password" class="form-control" id="login_pwd" placeholder="Password" required="">
                                </div>
                                <button type="submit" class="btn btn-default btn-block">LOGIN</button>
                                <div style="margin-bottom:20px;" class="forgot-area text-right">
                                    <a href="">Forgot your Password?</a>
                                </div>
                            </form>

                        </div>
                    </div>


                    <!-- signup -->

                    <div class="signuptab">
                        <h2>Sign Up</h2>
                        <div class="signup-form">
                            <form>
                                <div class="form-group ">
                                    <label for="reg_email">Email Address <span>*</span></label>
                                    <input class="form-control" placeholder="Email Address" type="email" name="email" id="reg_email" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="reg_name">Full Name <span>*</span></label>
                                    <input class="form-control" placeholder="Full Name" type="text" name="full_name" id="reg_name" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="reg_Pnumber">Phone Number <span>*</span></label>
                                    <input class="form-control" placeholder="Phone Number" type="text" name="phone" id="reg_Pnumber" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="reg_Padd">Address <span>*</span></label>
                                    <input class="form-control" placeholder="Address" type="text" name="address" id="reg_Padd" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="reg_password">Password <span>*</span></label>
                                    <input class="form-control" placeholder="Password" type="password" name="password" id="reg_password" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="confirm_password">Confirm Password <span>*</span></label>
                                    <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" id="confirm_password" required="">
                                </div>
                                <button type="submit" class="btn btn-default btn-block">Sign Up</button>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>









    <?php include 'include/footer.php'; ?>

    <!-- jquerry -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- javascript -->
    <script src="main.js"></script>
</body>

</html>