<html>
<body>
<?php require_once 'parts/header.php'; ?>
<?php
foreach ($data['users'] as $user) //echo "User Id :". $id=$_REQUEST['id'];
{
    ?>
    <div class="container" style="padding-bottom: 450px;">
        <h3 class="pt-3">Update User Info</h3>
        <form action="<?php echo BASE_PATH . '/updaterecord' ?>" method="post">
            <input type="hidden" value="<?php echo $user->id ?>" name="id"><br>
            <div class="form-group">
                <label>Enter Name</label>
                <input type="text" class="form-control" value="<?php echo $user->name ?>" name="name">
            </div>
            <div class="form-group">
                <label>Enter Email</label>
                <input type="email" class="form-control" value="<?php echo $user->email ?>" name="email">
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" class="form-control" value="<?php echo $user->password ?>" name="password">
            </div>
            <div class="form-group">
                <input type="submit" name="Update" class="btn btn-info" value="Update">
            </div>

        </form>
    </div>
<?php } ?>
</body>
</html>
<?php require_once 'parts/footer.php'; ?>
