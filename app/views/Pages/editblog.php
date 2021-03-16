<?php
  include_once 'parts/header.php';
?>
<?php

foreach ($data['users'] as $user);
{?>
    <form method="get" enctype="multipart/form-data" action="<?php echo BASE_PATH . '/updateblog' ?>">
        <div class="container  con mt-5">
            <img src="../img/vv.jpg" class="img-fluid">
        </div>

        <div class="container mt-0 p-5 back">
            <div class="row">
                <div class="col-lg-9">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Movie Name</label>
                        <div class="col-sm-10">
                            <input type="hidden" value="<?php echo $user->m_id ?>" name="m_id">
                            <input type="text" class="form-control" value="<?php echo $user->m_name ?>" name="m_name"
                                   placeholder="Movie Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Add Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $user->m_title ?>" name="m_title"
                                   placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Your Contain</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="m_contain"
                                      placeholder="Contain"><?php echo $user->m_contain ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Upload Thumbnail</label>
                        <div class="col-sm-10 ">
                            <input type="file" class="form-control" name="m_img">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10"><br>
                                <button type="submit" name="update" class="btn btn" style="background-color: #ff9800;color: white" >Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img src="<?php echo "/Aman/ast/lifeblog/image/" . $user->m_img ?>" width="100%" height="350px">
                </div>
            </div>
        </div>
    </form>
<?php }
    include_once 'parts/footer.php';
?>

