<?php
require_once "./../models/authModel.php";

class authController
{


    private $authModel;

    public function __construct()
    {
        $this->authModel = new authModel();
    }

    public function login()
    {
        $errorLogin = "";
        include_once "./../views/auth/login.php";
    }
    public function auth_login()
    {
        $errorLogin = "";   
        // echo "<br>" . __METHOD__;
        if (isset($_POST['btn_login'])) {
            $email = $_POST['email'];
            $passLogin = $_POST['password'];
            if ($email== "admin123" && $passLogin == "123") {
                header('location:index.php?controller=admin&action=index');
            }
            $user = $this->authModel->authUsersLogin($email, $passLogin);
            // var_dump($user);
            if ($user) {
                
                header('location:index.php?controller=user&action=index');
                exit();
            } else {
                $errorLogin = "Thông tin tài khoản mật khẩu không chính xác";
                include_once "./../views/auth/login.php";
            }
            // header('location:index.php?controller=user&action=index');

        }
    }
    
    //Xử lí chức năng đăng ký
    public function register()
    {
        $vlName = $vlEmail = $vlPass = $vlCfPass = $vlSdt = "";
        $error = $errorPass = $errorName = $errorEmail = $errorCfPass = $errorsdt = "";
        require_once "./../views/auth/register.php";
    }
    
    public function auth_register()
    {
        // Giá trị giữ lại nếu có lỗi
        $vlName = $vlEmail = $vlPass = $vlCfPass = $vlSdt = "";
        // Biến lỗi cho từng trường
        $errorName = $errorEmail = $errorPass = $errorCfPass = $errorsdt = "";

        if (isset($_POST['btn_register'])) {
            $userNameRegister = $_POST['username'];
            $emailRegister = $_POST['email'];
            $passRegister = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $sdtRegister = $_POST['phone'];

            // Validate từng trường
            if (empty($userNameRegister)) {
                $errorName = "Vui lòng không để trống";
            } elseif ($this->authModel->authUserName($userNameRegister)) {
                $errorName = "Tài khoản đã tồn tại";
            } else {
                $vlName = $userNameRegister;
            }

            if (empty($emailRegister)) {
                $errorEmail = "Vui lòng không để trống";
            } elseif ($this->authModel->authEmail($emailRegister)) {
                $errorEmail = "Email đã tồn tại";
            } else {
                $vlEmail = $emailRegister;
            }

            if (empty($passRegister)) {
                $errorPass = "Vui lòng không để trống";
            } else {
                $vlPass = $passRegister;
            }

            if ($confirm_password !== $passRegister) {
                $errorCfPass = "Mật khẩu không chính xác";
            } else {
                $vlCfPass = $confirm_password;
            }

            if (empty($sdtRegister)) {
                $errorsdt = "Vui lòng không để trống";
            } else {
                $vlSdt = $sdtRegister;
            }

            // Nếu không có lỗi thì đăng ký và chuyển trang
            if (
                empty($errorName) && empty($errorEmail) && empty($errorPass)
                && empty($errorCfPass) && empty($errorsdt)
            ) {
                $this->authModel->authUsers($userNameRegister, $emailRegister, $passRegister, $sdtRegister);

                // ✅ Chuyển hướng đến trang login và dừng lại
                $this->login();
                exit;
            }
        }

        // ✅ Chỉ include form nếu chưa đăng ký hoặc có lỗi
        include_once "./../views/auth/register.php";
    }


    //Xử lý chức năng đăng nhập
    public function logout()
    {
        // session_start();
        // session_unset();
        // session_destroy();
        header("Location: index.php?controller=auth&action=login");
        exit();
    }
}
