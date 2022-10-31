<?php

session_start();
require_once '../config/db.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $_SESSION['error-sign'] = 'กรุณากรอกอีเมล';
        header("location: index.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error-sign'] = 'รูปแบบอีเมลไม่ถูกต้อง';
        header("location: index.php");
    } else if (empty($password)) {
        $_SESSION['error-sign'] = 'กรุณากรอกรหัสผ่าน';
        header("location: index.php");
    } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $_SESSION['error-sign'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
        header("location: index.php");
    } else {
        try {
            $check_data = $conn->prepare("SELECT * FROM tab_user WHERE email = :email");
            $check_data->bindParam(":email", $email);
            $check_data->execute();
            $row = $check_data->fetch(PDO::FETCH_ASSOC);

            if ($check_data->rowCount() > 0) {

                if ($email == $row['email']) {
                    if (password_verify($password, $row['password'])) {
                        // เพิ่ม
                        $_SESSION['success-login'] = "เข้าสู่ระบบสำเร็จ";
                        if ($row['user_type_id'] == '1') {
                            $_SESSION['login'] = $row['id_card'];
                            $_SESSION['who'] = "admin";
                            header("location: ../index.php");
                        } else if ($row['user_type_id'] == '2') {
                            $_SESSION['login'] = $row['id_card'];
                            $_SESSION['who'] = "student";
                            $_SESSION['student'] = "student";
                            header("location: ../index.php");
                        } else if ($row['user_type_id'] == '3') {
                            $_SESSION['login'] = $row['id_card'];
                            $_SESSION['who'] = "user";
                            header("location: ../index.php");
                        } else {
                            $_SESSION['error-sign'] = 'ไม่มีข้อมูลในระบบ';
                            header("location: ../signin.php");
                        }
                    } else {
                        $_SESSION['error-sign'] = 'รหัสผ่านผิด';
                        header("location: ../signin.php");
                    }
                } else {
                    $_SESSION['error-sign'] = 'อีเมลผิด';
                    header("location: ../signin.php");
                }
            } else {
                $_SESSION['error-sign'] = "ไม่มีข้อมูลในระบบ";
                header("location: ../signin.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
