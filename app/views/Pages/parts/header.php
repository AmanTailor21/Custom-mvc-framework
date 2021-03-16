
<head>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/Public/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        textarea {
            width: 100%;
            height: 100%;
        }
        .custom {
            background-color: #abe9cd;
            background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);
        }
        textarea {
            width: 100%;
            height: 100%;
        }

        .custom {
            background-color: #abe9cd;
            background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);
        }
        textarea {
            width: 100%;
            height: 100%;
        }

        .custom {
            background-color: #abe9cd;
            background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);
        }

        .back {
            background-color: #abe9cd;
            background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px ;
            color: white;
            margin-bottom: 30px;
        }

        .con {
            padding: 0;
        }
    </style>
</head>


<nav class="navbar navbar-expand-lg navbar-light custom">
    <a class="navbar-brand text-white" href="http://localhost/Aman/ast/lifeblog/adminindex.php">Movie Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        if (isset($_SESSION['em'])){?>
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo BASE_PATH ?>/blogs">Blogs</a>
                   </li>
                  <li class="nav-item">
                       <a class="nav-link text-white" href="<?php echo BASE_PATH ?>/index">Manage User</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link text-white" href=""> </a>
                   </li>
                </ul>
        <form class="form-inline my-2 my-lg-0" action="">

                    <label style="color: black"><?php echo $_SESSION['em'];?></label>&nbsp;<?php
                    echo '<a href="logout" class="btn btn-primary my-2 my-sm-0" style="background-color: #ff9800;color: white" >LogOut</a>';
                }
            ?>
        </form>
    </div>
</nav>

