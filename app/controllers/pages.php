<?php
session_start();

class pages extends controller
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');

    }

    public function index()
    {
        if (isset($_SESSION['em'])) {
            $users = $this->userModel->getUser();
            $data = [
                'name' => 'Aman Tailor',
                'users' => $users
            ];
            $this->view('/Pages/index', $data);
        } else {
            $this->view('/Pages/loginadmin');
        }
    }

    public function about()
    {
        $this->view('/Pages/about');
    }

    public function insert()
    {

        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $users = $this->userModel->insertdata($name, $email, $password);


    }

    public function update()
    {
        if (isset($_GET['url'])) {

            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $id = $uriSegments[5];
            //var_dump($uriSegments[5]);
            $users = $this->userModel->getUpdateuser($id);

            $data = [
                'name' => 'Aman Tailor',
                'users' => $users
            ];

            $this->view('/Pages/update', $data);
            //var_dump($uriSegments[4]);


        }

//        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
//        $id=$uriSegments[5];
        //$id=$_REQUEST[$url];

    }

    public function updaterecord()
    {
        echo $id = $_REQUEST["id"];
        echo $name = $_REQUEST["name"];
        echo $email = $_REQUEST["email"];
        echo $password = $_REQUEST["password"];
        $users = $this->userModel->updatedata($name, $email, $password, $id);
        $this->view('/index');
    }
    public function updateblog()
    {
        echo $id = $_REQUEST["m_id"];
        echo $name = $_REQUEST["m_name"];
        echo $title = $_REQUEST["m_title"];
        echo $contain = $_REQUEST["m_contain"];
        echo $img = $_FILES['m_img']['name'];
        $users = $this->userModel->updateblogdata($name, $title, $contain,$img,$id);
        $this->view('index');
    }

    public function delete()
    {
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $id = $uriSegments[5];
        $users = $this->userModel->deleteuser($id);

    }
    public function deleteblog()
    {
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $id = $uriSegments[5];
        $users = $this->userModel->deleteblog($id);
    }

    public function login()
    {
        if (isset($_SESSION['em'])) {
            header("Location:'index");
        }
        $this->view('/Pages/loginadmin');
    }
    public function logout()
    {
        $this->view('/Pages/logout');
    }

    public function loginadmin()
    {

        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $users = $this->userModel->loginadmin($email, $password);

    }

    public function blogs()
    {
        if (isset($_SESSION['em'])) {
            $blog = $this->userModel->getblogs();
            $data = [
                'name' => 'Aman Tailor',
                'users' => $blog
            ];
            $this->view('/Pages/Blogs', $data);
        } else {
            header('Location:login');
        }
    }

    public function editblog()
    {
        if (isset($_GET['url']))
        {
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $id = $uriSegments[5];
            $users = $this->userModel->getUpdateblog($id);

           $data = [
                'name' => 'Aman Tailor',
               'users' => $users
            ];

            $this->view('/Pages/editblog',$data);

        }
    }

}

