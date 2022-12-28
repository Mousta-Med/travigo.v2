<?php
require_once "models/admin.class.php";
require_once "models/db.class.php";

class tourscontroller

{
    private $admin;

    public function showtours()
    {
        $this->admin = new admin;
        $sql = $this->admin->showtours();
        require "views/dashboard.view.php";
    }
    public function addform()
    {
        session_start();
        if (!isset($_SESSION['name']) && !isset($_SESSION['password'])) {
            header("location: ../views/login.view.php?login=you must login");
        } else {
            require "views/add.view.php";
        }
    }
    public function updateform($id)
    {
        session_start();
        if (!isset($_SESSION['name']) && !isset($_SESSION['password'])) {
            header("location: ../../views/login.view.php?login=you must login");
        } else {
            $this->admin = new admin;
            $sql =  $this->admin->showtoursid($id);
            require "./views/edite.view.php";
        }
    }
    public function addtours()
    {
        $tourplace = $_POST['name'];
        $tourdesc = $_POST['description'];
        $tourimage = $_FILES['image']['name'];
        $oldpath = $_FILES['image']['tmp_name'];
        $newpath = "public/img/" . $tourimage;
        move_uploaded_file($oldpath, $newpath);

        $this->admin = new admin;
        $requet = $this->admin->addstour($tourplace, $tourdesc, $tourimage);

        if ($requet == true) {
            header("location: ../dashboard");
        } else {
            echo "error";
        }
    }
    public function editetour($id)
    {
        $tourplace = $_POST['name'];
        $tourdesc = $_POST['description'];
        $tourimage = $_FILES['image']['name'];
        $oldpath = $_FILES['image']['tmp_name'];
        $newpath = "public/img/" . $tourimage;
        move_uploaded_file($oldpath, $newpath);
        $admin = new admin;
        $requet = $admin->updatetour($tourplace, $tourdesc, $tourimage, $id);
        if ($requet == true) {
            header("location: ../../dashboard");
        } else {
            echo "error";
        }
    }
    public function delete($id)
    {
        session_start();
        if (isset($_SESSION['name']) && isset($_SESSION['password'])) {
            $admin = new admin;
            $requet = $admin->deletetour($id);
            if ($requet == true) {
                header("location: ../../dashboard");
            } else {
                echo "error";
            }
        } else {
            header("location: ../../home");
        }
    }
    public function checklogin()
    {
        $connect = new Db;
        $conn = $connect->connection();
        session_start();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = htmlspecialchars(trim(strtolower($_POST['username'])));
            $password = sha1($_POST['password']);
            $sql = "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['name'] = $username;
                $_SESSION['password'] = $password;
                header("Location: dashboard");
            } else {
                header("location: views/login.view.php?error=username or password incorrect");
            }
        }
    }
}
