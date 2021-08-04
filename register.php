<?php
include("includes/header.php");
?>

<body>

    <section class="vh-200 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class=" body col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">

                        <div class="card-body p-4 p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 reg_title">Sign Up</h3>

                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">First Name: </h6>
                                            <input type="text" id="firstName" name="firstName"
                                                placeholder="Enter your First name" required
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Last Name: </h6>
                                            <input type="text" id="lastName" name="lastName"
                                                placeholder="Enter Your Last Name" required
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <h6 class="mb-2 pb-1">Birthday: </h6>
                                            <input type="text" name="birthday" placeholder="Enter Your Birthday"
                                                class="form-control form-control-lg" id="birthdayDate" />

                                        </div>


                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="gender" type="radio"
                                                name="inlineRadioOptions" id="femaleGender" value="option1" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="gender" type="radio"
                                                name="inlineRadioOptions" id="maleGender" value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                name="inlineRadioOptions" id="otherGender" value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline pb-3">
                                            <h6 class="mb-2 pb-1">Address: </h6>
                                            <input type="text" id="address" name="address" required
                                                placeholder="Enter Your Address" class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Phone Number: </h6>
                                            <input type="tel" id="phoneNumber" required
                                                placeholder="Enter Your Contact Number" name="phoneNumber"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Email: </h6>
                                            <input type="email" id="emailAddress" required
                                                placeholder="Enter Your Email" name="emailAddress" placeholder=""
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Phone Number: </h6>
                                            <input type="tel" id="phoneNumber" required
                                                placeholder="Enter Your Contact Number" name="phoneNumber"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Password: </h6>
                                            <input type="password" id="password" name="password"
                                                placeholder="Enter Your Password"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Confirm Password: </h6>
                                            <input type="password" placeholder="Enter Your Passowrd Again"
                                                id="confirm_password" name="confirm_password" name="confirm_password"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <input class="btn btn-danger btn-lg btn_cancle" value="CANCLE" />

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <input class="btn btn-primary btn-lg btn_reg" name="submit" type="submit"
                                            value="SIGN UP" />

                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $fname = $_REQUEST['firstName'];
    $lname = $_REQUEST['lastName'];
    $birthday = $_REQUEST['birthday'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $emailAddress = $_REQUEST['emailAddress'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
}


?>