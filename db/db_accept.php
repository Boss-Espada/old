<?php

session_start();
require_once '../config/db.php';

$user_id = $_SESSION['login'];
$stmt = $conn->query("SELECT * FROM tab_user WHERE id_card = $user_id");
$stmt->execute();
$row1 = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submitaccept'])) {
    $announce_id = $_POST['accept'];
    $employee_id = $row1['id_card'];
    $employee_name = $row1['name'];
    $stmt = $conn->query("SELECT * FROM tab_announce WHERE announce_id = $announce_id");
    $stmt->execute();
    $row2 = $stmt->fetch(PDO::FETCH_ASSOC);
    $employer_id = $row2['user_id'];
    $stmt = $conn->query("SELECT name FROM tab_user WHERE id_card = $employer_id");
    $stmt->execute();
    $row3 = $stmt->fetch(PDO::FETCH_ASSOC);
    $employer_name = $row3['name'];
    try {
        $stmt = $conn->prepare("INSERT `tab_job_accept`(`employee_id`, `announce_id`) VALUES ('$user_id','$announce_id')");
        $stmt->execute();
        $stmt = $conn->prepare("UPDATE `tab_jobstatus` SET `status`='งานสำเร็จแล้ว' WHERE announce_id = $announce_id");
        $stmt->execute();
        $_SESSION['success-job'] = "คุณได้กดยืนยันสำเร็จ";
        header("location: ../statusjob.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}