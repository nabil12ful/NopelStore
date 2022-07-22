<?php

ob_start();
session_start();
$title = "NopelStore | Signup";
include('init.php');

// session_destroy();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $hashPass = sha1($pass);

    // validation
    $errors = [];
    $len = strlen($email);
    $min = 3;
    $max = 60;
    if (!$len == 0) {
        if ($len <= $min) {
            $msg = "Email most be More than $min chars.";
            $_SESSION["email"] = $msg;
            $errors[] = $msg;
        }
        if ($len >= $max) {
            $msg = "Email most be Less than $max chars.";
            $_SESSION["email"] = $msg;
            $errors[] = $msg;
        }
    } else {
        $_SESSION["email"] = "Email most be required.";
        $errors[] = "Email most be required.";
    }
    $check = checkItem($email, 'Email', 'customers');
    if ($check == 0) {
        $msg = "This Email is not exist";
        $_SESSION['email'] = $msg;
        $errs[] = $msg;
    }
    $_SESSION['emailValue'] = $email;
    $errors = validate($pass, 'pass', "Password", 8, 24, $errors, false);
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
    // print_r($_SESSION);

    if (empty($errors)) {
        $stmt = $con->prepare("SELECT * FROM customers WHERE Email = ?");
        $stmt->execute(array($email));
        $cust = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count > 0) {
            if($hashPass == $cust['Password']){
                if($cust['RegStatus'] == 1){
                    if($cust['Blocked'] == 0){
                        $_SESSION['customer_id'] = $cust['ID'];
                        header("Location: index.php");
                        exit();
                    }else{
                        $_SESSION['message'] = "This account is blocked.";
                    }
                }else{
                    $_SESSION['message'] = "This account is not activated.";
                }
            }
            else{
                $_SESSION['message'] = "The password is incorrect.";
            }
        } else {
            $_SESSION['message'] = "This Email is not found is our Database.";
        }
    }
}

?>


<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <h2 class="text-center">Welcome Back</h2>
                    <?php if(isset($_SESSION['message'])){?>
                            <div class="alert alert-danger">
                                <h3><?= $_SESSION['message'] ?></h3>
                            </div>
                        <?php
                                unset($_SESSION['message']);
                            } ?>
                    <form class="text-left clearfix" method="POST">
                        <div class="form-group">
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control <?= isset($_SESSION['email']) ? 'is-invalid' : '' ?>" 
                                placeholder="Email" 
                                value="<?php if (isset($_SESSION['emailValue'])) {
                                                echo $_SESSION['emailValue'];
                                                unset($_SESSION['emailValue']); } ?>" 
                                required>
                            <span class="text-danger email text-center">
                                <?php
                                if (isset($_SESSION['email'])) {
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
                                if (isset($_SESSION['pass'])) {
                                    echo $_SESSION['pass'];
                                    unset($_SESSION['pass']);
                                    unset($_SESSION['passValue']);
                                }
                                ?>
                            </span>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-main text-center">Login</button>
                        </div>
                    </form>
                    <p class="mt-20">New in this site ?<a href="signup.php"> Create New Account</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include(_TEMPS_ . "footer.php");
ob_end_flush();
