<?php
include("includes/header.php");
?>

<body>

    <section class="vh-800 gradient-custom">
        <div class="container py-5 h-800">
            <div class="row justify-content-center align-items-center h-500">
                <div class=" body col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">

                        <div class="card-body p-4 p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 reg_title">Sign In</h3>
                            <form method="post" action="#">



                                <div class="row">
                                    <div class="col-md-12 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Email: </h6>
                                            <input type="email" id="emailAddress" name="emailAddress"
                                                placeholder="Enter Your Email" class="form-control form-control-lg" />
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="mb-2 pb-1">Password: </h6>
                                            <input type="password" id="password" name="password"
                                                placeholder="Enter Your Password"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <input class="btn btn-danger btn-lg btn_cancle" value="CANCLE" />

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <input class="btn btn-primary btn-lg btn_log" type="submit" value="SIGN UP" />

                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="mt-4 pt-5">

                    </div>
                    <div class="mt-4 pt-5">

                    </div>
                    <div class="mt-4 pt-2">

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
$emailAddress = $_REQUEST['emailAddress'];
$password = $_REQUEST['password'];


?>