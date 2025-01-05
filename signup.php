<?php
session_start();
require_once('includes/config.php');

// Code for Registration
if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $sql = mysqli_query($con,"select id from users where email='$email'");
    $row = mysqli_num_rows($sql);
    
    if($row > 0) {
        echo "<script>alert('Email id already exists with another account. Please try with another email id');</script>";
    } else {
        $msg = mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')");
        
        if($msg) {
            echo "<script>alert('Registered successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sign up</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function checkpass() {
            // Password mismatch check
            if (document.signup.password.value !== document.signup.confirmpassword.value) {
                alert('Password and Confirm Password fields do not match');
                document.signup.confirmpassword.focus();
                return false;
            }
            
            // Other validations
            if (!validateForm()) {
                return false;
            }
            
            return true;
        }

        function validateForm() {
            let isValid = true;
            const fname = document.signup.fname.value;
            const lname = document.signup.lname.value;
            const email = document.signup.email.value;
            const contact = document.signup.contact.value;
            const password = document.signup.password.value;
            const confirmpassword = document.signup.confirmpassword.value;

            // Validate first name
            if(!/^[a-zA-Z]+$/.test(fname))
        {
            document.getElementById("fname-error").textContent = "First name must alpphabet.";
                isValid = false;
        }
             else if (fname.length < 3 || fname.length > 25) {
                document.getElementById("fname-error").textContent = "First name must be between 3 and 25 characters.";
                isValid = false;
            } else {
                document.getElementById("fname-error").textContent = "";
            }

            // Validate last name
            if(!/^[a-zA-Z]+$/.test(lname))
        {
            document.getElementById("lname-error").textContent = "last name must alpphabet.";
                isValid = false;
        }
            else if (lname.length < 3 || lname.length > 25) {
                document.getElementById("lname-error").textContent = "Last name must be between 3 and 25 characters.";
                isValid = false;
            } else {
                document.getElementById("lname-error").textContent = "";
            }

            // Validate email
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                document.getElementById("email-error").textContent = "Please enter a valid email address.";
                isValid = false;
            } else {
                document.getElementById("email-error").textContent = "";
            }

            // Validate contact
            const contactPattern = /^[0-9]{10}$/;
            if (!contactPattern.test(contact)) {
                document.getElementById("contact-error").textContent = "Please enter a valid 10-digit contact number.";
                isValid = false;
            } else {
                document.getElementById("contact-error").textContent = "";
            }

            // Validate password
            const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
            if (!passwordPattern.test(password)) {
                document.getElementById("password-error").textContent = "Password must contain at least one number, one lowercase, one uppercase letter, and at least 6 characters.";
                isValid = false;
            } else {
                document.getElementById("password-error").textContent = "";
            }

            // Validate confirm password
            if (password !== confirmpassword) {
                document.getElementById("confirmpassword-error").textContent = "Passwords do not match.";
                isValid = false;
            } else {
                document.getElementById("confirmpassword-error").textContent = "";
            }

            return isValid;
        }

        // Toggle password visibility function
        function togglePassword(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header" style="background-color:#00B5E2;">
                                    <h2 align="center">SIGN UP</h2>
                                </div>
                                <div class="card-body">
                                    <form method="post" name="signup" onsubmit="return checkpass();">

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="fname" name="fname" type="text" placeholder="Enter your first name" required minlength="3" maxlength="25" />
                                                    <label for="inputFirstName">First name</label>
                                                    <span id="fname-error" style="color:red;"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="lname" name="lname" type="text" placeholder="Enter your last name" required minlength="3" maxlength="25" />
                                                    <label for="inputLastName">Last name</label>
                                                    <span id="lname-error" style="color:red;"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email" placeholder="abc12@gmail.com" required />
                                            <label for="inputEmail">Email address</label>
                                            <span id="email-error" style="color:red;"></span>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="contact" name="contact" type="text" placeholder="1234567890" required pattern="[0-9]{10}" title="10 numeric characters only" maxlength="10" />
                                            <label for="inputContact">Contact Number</label>
                                            <span id="contact-error" style="color:red;"></span>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password" name="password" type="password" placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="At least one number, one uppercase, one lowercase letter, and 6 or more characters" required />
                                                    <label for="inputPassword">Password</label>
                                                    <span id="password-error" style="color:red;"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="At least one number, one uppercase, one lowercase letter, and 6 or more characters" required />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                    <span id="confirmpassword-error" style="color:red;"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="submit">SIGN UP</button></div>
                                        </div>

                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    <div class="small"><a href="index.php">Back to Home</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
