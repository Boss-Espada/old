<?php

session_start();
require_once '../config/db.php';

// สร้างบัญชี
if (isset($_POST['register'])) {
    $id_card = $_POST['id_card'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $phone_number = $_POST['phone_number'];
    $user_type_id = $_POST['user_type_id'];

    if (empty($id_card)) {
        $_SESSION['error-sign'] = 'กรุณากรอกเลขบัตรประชาชน';
        header("location: ../signup.php");
    } else if (strlen($_POST['id_card']) != 13) {
        $_SESSION['error-sign'] = 'เลขบัตรประชาชนไม่ถูกต้อง';
        header("location: ../signup.php");
    } else if (empty($name)) {
        $_SESSION['error-sign'] = 'กรุณากรอกชื่อ-สกุล';
        header("location: ../signup.php");
    } else if (empty($email)) {
        $_SESSION['error-sign'] = 'กรุณากรอกอีเมล';
        header("location: ../signup.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error-sign'] = 'รูปแบบอีเมลไม่ถูกต้อง';
        header("location: ../signup.php");
    } else if (empty($password)) {
        $_SESSION['error-sign'] = 'กรุณากรอกรหัสผ่าน';
        header("location: ../signup.php");
    } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $_SESSION['error-sign'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
        header("location: ../signup.php");
    } else if (empty($c_password)) {
        $_SESSION['error'] = 'กรุณากรอกยืนยันรหัสผ่าน';
        header("location: ../signup.php");
    } else if ($password != $c_password) {
        $_SESSION['error-sign'] = 'รหัสผ่านไม่ตรงกัน';
        header("location: ../signup.php");
    } else if (empty($phone_number)) {
        $_SESSION['error-sign'] = 'กรุณากรอกเบอร์โทร';
        header("location: ../signup.php");
    } else if (strlen($_POST['phone_number']) != 10) {
        $_SESSION['error-sign'] = 'รูปแบบตัวเลขไม่ถูกต้อง';
        header("location: ../signup.php");
    } else {
        $check_email = $conn->prepare("SELECT email FROM tab_user WHERE email = :email");
        $check_email->bindParam(":email", $email);
        $check_email->execute();
        $row = $check_email->fetch(PDO::FETCH_ASSOC);
        if ($row['email'] == $email) {
            $_SESSION['error-sign'] = "มีอีเมลนี้อยู่ในระบบแล้ว";
            header("location: ../signup.php");
        } else if (!isset($_SESSION['error-sign'])) {
            $check_idcard = $conn->prepare("SELECT id_card FROM tab_user WHERE id_card = :id_card");
            $check_idcard->bindParam(":id_card", $id_card);
            $check_idcard->execute();
            $row = $check_idcard->fetch(PDO::FETCH_ASSOC);
            if ($row['id_card'] == $id_card) {
                $_SESSION['error-sign'] = "มีหมายเลขบัตรนี้อยู่ในระบบแล้ว";
                header("location: ../signup.php");
            } else if (!isset($_SESSION['error-sign'])) {
                try {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO tab_user(id_card, name, email, password, phone_number, user_type_id) 
                                            VALUES('$id_card', '$name', '$email', '$passwordHash', '$phone_number', '$user_type_id')");
                    $stmt->bindParam(":id_card", $id_card);
                    $stmt->bindParam(":name", $name);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(":phone_number", $phone_number);
                    $stmt->bindParam(":user_type_id", $user_type_id);
                    $stmt->execute();
                    $_SESSION['success-sign'] = "สมัครสมาชิกเรียบร้อยแล้ว!";
                    header("location: ../index.php");
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
        }
    }
}
