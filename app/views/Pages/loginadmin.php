<?php

require_once 'parts/header.php';
?>

<body>
<div class="container pt-5">

    <form action="loginadmin">
        <div>
            <div class="h3">
                <h3>Sign In</h3>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" value="" name="email" aria-describedby="emailHelp"
                       placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" value="" name="password" aria-describedby="emailHelp"
                       placeholder="Enter Password">
            </div>

            <div style="margin-left: 20px"><input class="form-check-input" type="checkbox" name="rememberme" id="agree"

                <label for="agree">Remember me</label>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-info">
                <label> Don't have an account?<a href="register.php"> Sign Up</a></label>
                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <a href="forgot_password.php">Forgot password ?</a>
            </div>

        </div>
    </form>

</div>
</body>

