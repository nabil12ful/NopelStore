<?php

ob_start();
session_start();
$title = "NopelStore | Signup";
include('init.php'); 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $hashPass = sha1($pass);

    // validation
    $errors = [];

    $errors = validate($fname, 'fname',"First Name", 4, 10, $errors);
    $errors = validate($lname, 'lname',"Last Name", 4, 10, $errors);
    $errors = validate($uname, 'uname',"Username", 5, 18, $errors,'Username');
    $errors = validate($email, 'email',"Email", 3, 60, $errors, 'Email');
    $errors = validate($pass, 'pass',"Password", 8, 24, $errors, false);
    // echo "<pre>";
    // print_r($errors);
    // echo "</pre>";
    if(empty($errors)){
        echo ":no errors";
        echo $fullName = $fname . " " . $lname;
        $stmt = $con->prepare("INSERT INTO customers(Full_Name, Username, Email, Password, DateOfCreate)
                                VALUES(:fname, :uname, :email, :pass, now())");
        $stmt->execute([
            "fname" => $fullName,
            "uname" => $uname,
            "email" => $email,
            "pass"  => $hashPass
        ]);
        $_SESSION['message'] = "Signup your account is Successfully.";
    }
}

?>

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="<?= echoPath(_IMGS_, 'logo.png') ?>" alt="">
                        </a>
                        <h2 class="text-center">Create Your Account</h2>
                        <?php if(isset($_SESSION['message'])){?>
                            <div class="alert alert-success">
                                <h3><?= $_SESSION['message'] ?></h2>
                            </div>
                        <?php
                                unset($_SESSION['message']);
                            } ?>
                        <form class="text-left clearfix needs-validation" method="POST" >
                            <div class="form-group">
                                <input 
                                    type="text" 
                                    name="fname" 
                                    class="form-control <?= isset($_SESSION['fname']) ? 'is-invalid' : '' ?>" 
                                    placeholder="First Name" 
                                    value="<?php if(isset($_SESSION['fnameValue'])){echo $_SESSION['fnameValue']; unset($_SESSION['fnameValue']);} ?>"
                                    required>
                                <span class="text-danger text-center">
                                    <?php
                                        if(isset($_SESSION['fname'])){
                                            echo $_SESSION['fname'];
                                            unset($_SESSION['fname']);
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <input 
                                    type="text" 
                                    name="lname" 
                                    class="form-control <?= isset($_SESSION['lname']) ? 'is-invalid' : '' ?>" 
                                    placeholder="Last Name"
                                    value="<?php if(isset($_SESSION['lnameValue'])){echo $_SESSION['lnameValue']; unset($_SESSION['lnameValue']);} ?>"
                                    required>
                                <span class="text-danger text-center">
                                    <?php
                                        if(isset($_SESSION['lname'])){
                                            echo $_SESSION['lname'];
                                            unset($_SESSION['lname']);
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <input 
                                    id="username"
                                    type="text" 
                                    name="username" 
                                    class="form-control <?= isset($_SESSION['uname']) ? 'is-invalid' : '' ?>" 
                                    placeholder="Username"
                                    value="<?php if(isset($_SESSION['unameValue'])){echo $_SESSION['unameValue']; unset($_SESSION['unameValue']);} ?>"
                                    required>
                                <span class="text-danger username text-center">
                                    <?php
                                        if(isset($_SESSION['uname'])){
                                            echo $_SESSION['uname'];
                                            unset($_SESSION['uname']);
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    class="form-control <?= isset($_SESSION['email']) ? 'is-invalid' : '' ?>" 
                                    placeholder="Email"
                                    value="<?php if(isset($_SESSION['emailValue'])){echo $_SESSION['emailValue']; unset($_SESSION['emailValue']);} ?>"
                                    required>
                                <span class="text-danger email text-center">
                                    <?php
                                        if(isset($_SESSION['email'])){
                                            echo $_SESSION['email'];
                                            unset($_SESSION['email']);
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control <?= isset($_SESSION['pass']) ? 'is-invalid' : '' ?>" placeholder="Password">
                                <span class="text-danger text-center">
                                    <?php
                                        if(isset($_SESSION['pass'])){
                                            echo $_SESSION['pass'];
                                            unset($_SESSION['pass']);
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-main text-center">Sign Up</button>
                            </div>
                        </form>
                        <p class="mt-20">Already hava an account ?<a href="login.php"> Login</a></p>
                        <p><a href="forget-password.html"> Forgot your password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include(_TEMPS_ . "footer.php");
    ob_end_flush();