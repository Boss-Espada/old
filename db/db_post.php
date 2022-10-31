<?php

session_start();
require_once '../config/db.php';

if (isset($_POST['postjob'])) {
    $user_id = $_SESSION['login'];
    $stmt = $conn->query("SELECT * FROM tab_user WHERE id_card = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $employer_id = $user_id;
    $employer_name = $row['name'];

    $check_data = $conn->prepare("SELECT * FROM tab_announce");
    $check_data->execute();
    $countrow = $check_data->rowCount();
    $countrow = $countrow + 1;
    $num = 100000;

    $title = $_POST['title'];
    $details = $_POST['details'];
    $work_id = $num + $countrow;
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $user_id = $row['id_card'];
    $price = $_POST['price'];
    $type_name = $_POST['type_name'];
    $category_name = $_POST['category_name'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $announce_id = $countrow;
    $status = "หาผู้รับจ้าง";
    $name = $title;
    $fee = (5 / 100) * $price;
    $check_repeat = $conn->prepare("SELECT * FROM tab_announce WHERE work_id = $countrow + $num - 1");
    $check_repeat->execute();
    $row2 = $check_repeat->fetch(PDO::FETCH_ASSOC);
    
    if ($user_id == $row2['user_id'] && $title == $row2['title'] && $details == $row2['details']) {
        $_SESSION['error'] = "คุณได้โพสต์มากกว่า 1 ครั้ง กรุณาตรวจสอบว่ามีโพสต์ของคุณที่โพสต์ไว้หรือไม่ ในหน้า สถานะงานที่รับจ้าง";
        header('location: ../form.php');
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO tab_announce (title, details, work_id, start_date, end_date, start_time, end_time, user_id, price)
                                    VALUES ('$title','$details','$work_id','$start_date','$end_date','$start_time','$end_time','$user_id','$price')");
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":details", $details);
            $stmt->bindParam(":work_id", $work_id);
            $stmt->bindParam(":start_date", $start_date);
            $stmt->bindParam(":end_date", $end_date);
            $stmt->bindParam(":start_time", $start_time);
            $stmt->bindParam(":end_time", $end_time);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":price", $price);
            $stmt->execute();
            $stmt = $conn->prepare("INSERT INTO tab_job_type (type_name)
                                    VALUES ('$type_name')");
            $stmt->bindParam(":type_name", $type_name);
            $stmt->execute();
            $stmt = $conn->prepare("INSERT INTO tab_category (category_name)
                                    VALUES ('$category_name')");
            $stmt->bindParam(":category_name", $category_name);
            $stmt->execute();
            $stmt = $conn->prepare("INSERT INTO tab_jobstatus (announce_id, status)
                                            VALUES ('$announce_id','$status')");
            $stmt->bindParam(":announce_id", $announce_id);
            $stmt->bindParam(":status", $status);
            $stmt->execute();
            $stmt = $conn->prepare("INSERT INTO tab_job (work_id, name, fee)
                                            VALUES ('$work_id','$name','$fee')");
            $stmt->bindParam(":work_id", $work_id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":fee", $fee);
            $stmt->execute();
            $stmt = $conn->prepare("INSERT INTO tab_jobmatch (employer_id, employer_name, announce_id)
                                    VALUES ('$employer_id','$employer_name','$announce_id')");
            $stmt->bindParam(":employer_id", $employer_id);
            $stmt->bindParam(":employer_name", $employer_name);
            $stmt->bindParam(":announce_id", $announce_id);
            $stmt->execute();
            $_SESSION['postjob'] = "คุณได้โพสต์งานสำเร็จ";
            header("location: ../form.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
