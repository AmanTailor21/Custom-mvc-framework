<html>
<head>

</head>
<?php

require_once 'parts/header.php';

?>
<body>


<div class="container">
    <h3 class="pt-3">Add New User</h3>
    <form action="insert">
        <div class="form-group">
            <label>Enter Name</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label>Enter Email</label>
            <input class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <input class="btn btn-info" type="submit" name="submit">
        </div>

    </form>

</div>
<div class="container pt-5 pb-5">
    <h3>Users</h3>
    <table class="table">
        <tr>
            <th>User Name</th>
            <th>User Email</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($data['users'] as $user) {
            ?>
            <tr>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->email ?></td>
                <?php echo '<td>';
                echo '<a href=update/' . $user->id . '><i class="fa fa-pencil-square-o" style="font-size:30px; color: orange";></i></a>';
                echo '</td>'; ?>
                <?php echo '<td>' ?>
                <a href=<?php echo BASE_PATH . "/delete/" . $user->id ?>><i class="fa fa-trash" style="font-size:30px; color: red";></i></a>
                <?php echo '</td>' ?>
            </tr>

            <?php
        }
        ?>
    </table>
    <div class="pb-5 pt-5"></div>
    <div class="pb-5 pt-4"></div>
</div>
</body>
</html>
<?php require_once 'parts/footer.php'; ?>