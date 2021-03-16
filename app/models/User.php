<?php

class User {
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    public function getUser()
    {
        $this->db->query("SELECT * FROM register");
        $result=$this->db->resulSet();
        return $result;
    }
    public function getblogs()
    {
        $this->db->query("SELECT * from addblog");
        $result=$this->db->resulSet();
        return $result;
    }
    public function getUpdateuser($id)
    {
        $this->db->query("SELECT * FROM register where id=$id");
        $result=$this->db->resulSet();
        return $result;
    }

    public function insertdata($name,$email,$password){
       $insert=$this->db->query("insert into register(name,email,password) values (:V1,:V2,:V3)");
        $insert->bindParam(":V1", $name);
        $insert->bindParam(":V2", $email);
        $insert->bindParam(":V3", $password);
        $result2=$this->db->execute();
        header("Location:index");

    }
    public function updatedata($name,$email,$password,$id)
    {
        $update=$this->db->query("update register set name=:V1,password=:V3,email=:V2 where id=:V4 ");
        $update->bindParam(":V1", $name);
        $update->bindParam(":V2", $email);
        $update->bindParam(":V3", $password);
        $update->bindParam(":V4", $id);
        $result2=$this->db->execute();
        header("Location:index");
    }

    public function updateblogdata($name,$title,$contain,$img,$id)
    {
        $update=$this->db->query("update addblog set m_name=:V1,m_title=:V2,m_contain=:V3,m_img=:V4 where m_id=:V5 ");
        $update->bindParam(":V1", $name);
        $update->bindParam(":V2", $title);
        $update->bindParam(":V3", $contain);
        $update->bindParam(":V4", $img);
        $update->bindParam(":V5", $id);
        $result2=$this->db->execute();
        $temp=$_FILES['m_img']['tmp_name'];
        move_uploaded_file($temp,"/Aman/ast/lifeblog/image/".$img);
        header("Location:blogs");

    }
    public function deleteuser($id)
    {
        $this->db->query("delete from register where id=$id");
        $this->db->execute();
        header("Location:/Aman/Task/mvcframework/index");

    }
    public function deleteblog($id)
    {
        $this->db->query("delete from addblog where m_id=$id");
        $this->db->execute();
        header("Location:/Aman/Task/mvcframework/index");
    }
    public function loginadmin($email,$password)
    {
        session_start();
        if ($email=='admin@gmail.com' && $password=='admin')
        {
            $_SESSION['em'] = 'admin@gmail.com';
            $_SESSION[ 'password'] = $password;
            header("Location:/Aman/Task/mvcframework/index");
        }
        else{
            header("Location:/Aman/Task/mvcframework/login");
        }
    }

    public function getUpdateblog($id)
    {
        $this->db->query("SELECT * FROM addblog where m_id=$id");
        $result=$this->db->resulSet();
        return $result;
    }
}