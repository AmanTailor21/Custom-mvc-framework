<?php

require_once 'parts/header.php';

?>
<body>
<div class="container" id='myList' style="padding-bottom: 10px;">
    <div class='row' id='myList'>
        <?php

        foreach ($data['users'] as $user) {
            ?>

            <div class="col-lg-3 mt-4">
                <div class="card">
                    <a href="details.php?id=<?php //echo $rs['m_id']; ?>"">
                    <img class="card-img-top" height="350px" src="<?php echo "/Aman/ast/lifeblog/image/" . $user->m_img ?> ?>">  </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $user->m_name ?></h5>
                        <p class="card-text"><?php //echo $rs[2]; ?></p>
                        <p class="card-text"><small class="text-muted">
                                <a>User : <?php echo $user->user_name?></a><br>
                                <a>Date : <?php echo $user->created_time?></a><br><br>
                                <a href="editblog/<?php echo $user->m_id ?>"><i class="fa fa-pencil-square-o" style="font-size:25px; color: orange";></i></a>&nbsp;&nbsp;
                                <a href="deleteblog/<?php echo $user->m_id?>"><i class="fa fa-trash" style="font-size:25px; color: red";></i></a>
                            </small>
                        </p>
                    </div>
                </div>

            </div>
            <?php
        } ?>
    </div>
</div>
</body>