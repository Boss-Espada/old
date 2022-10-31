<?php
session_start();
require_once 'config/db.php';

if (isset($_SESSION['login'])) {
    $user_id = $_SESSION['login'];
    $stmt = $conn->query("SELECT * FROM tab_user WHERE id_card = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Unijob</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                            <?php if (isset($row['name'])) {
                                echo $row['name'];
                            } else {
                                echo "ผู้เข้าชม";
                            } ?>
                        </h6>
                        <span>
                            <?php if (isset($row['user_type_id'])) {
                                if ($row['user_type_id'] == 1) {
                                    echo "แอดมิน";
                                }
                                if ($row['user_type_id'] == 2) {
                                    echo "นักศึกษา";
                                }
                                if ($row['user_type_id'] == 3) {
                                    echo "ผู้ใช้ทั่วไป";
                                }
                            } else {
                                echo "กรุณาเข้าสู่ระบบ";
                            } ?></h6>
                        </span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>HomePage</a>
                    <a href="form.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>โพสต์งาน</a>
                    <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>รับงาน</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>งานที่โพสต์จ้าง</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="statuspost.php" class="dropdown-item">สถานะงาน</a>
                            <a href="hispost.php" class="dropdown-item">ประวัติงาน</a>
                        </div>
                    </div>
                    <?php if (!isset($_SESSION['login'])) { ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>งานที่รับจ้าง</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="statusjob.php" class="dropdown-item">สถานะงาน</a>
                                <a href="hisjob.php" class="dropdown-item">ประวัติงาน</a>
                            </div>
                        </div>
                    <?php } elseif ($row['user_type_id'] == 3) {
                    } else { ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>งานที่รับจ้าง</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="statusjob.php" class="dropdown-item">สถานะงาน</a>
                                <a href="hisjob.php" class="dropdown-item">ประวัติงาน</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php if (isset($row['name'])) {
                                                                        echo $row['name'];
                                                                    } else {
                                                                        echo "ผู้เข้าชม";
                                                                    } ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <?php if (isset($_SESSION['login'])) {
                            ?><a href="db/db_logout.php" class="dropdown-item">Log Out</a><?php } else {
                                                                                            ?>
                                <a href="signup.php" class="dropdown-item">register</a>
                                <a href="signin.php" class="dropdown-item">Log In</a><?php
                                                                                        } ?>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Form Start -->
            <div class="container-fluid pt-4" style="padding: 0 50% 0 3%; background-image: url('img/bg.png');">
                <div class="row g-4">
                    <form action="db/db_post.php" method="post">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">ชื่อ-รายละเอียด</h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ชื่องาน</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">รายละเอียด</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;" name="details" required></textarea>
                                            <label for="floatingTextarea">กรอกรายละเอียดให้ผู้รับจ้างสามารถเข้าใจรายละเอียดงานได้อย่างชัดเจน</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">ประเภท-รูปแบบงาน</h6>
                                <div class="mb-4">
                                    <label class="form-check-label" for="exampleCheck1">รูปแบบงาน</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type_name" id="inlineRadio1" value="งานตอนนี้" checked>
                                        <label class="form-check-label" for="inlineRadio1">ตอนนี้</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type_name" id="inlineRadio2" value="งานระยะยาว">
                                        <label class="form-check-label" for="inlineRadio2">ระยะยาว</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type_name" id="inlineRadio3" value="งานล่วงหน้า">
                                        <label class="form-check-label" for="inlineRadio3">ล่วงหน้า</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-check-label" for="exampleCheck1">ประเภทงาน</label><br>
                                    <select class="form-select mb-3" aria-label="Default select example" name="category_name">
                                        <option selected value="งานทั่วไป">งานทั่วไป</option>
                                        <option value="งานไอที">งานไอที</option>
                                        <option value="งานพิมพ์เอกสาร">งานพิมพ์เอกสาร</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="exampleInputEmail1" class="form-label">ค่าจ้าง</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">วัน-เวลา</h6>
                                <div class="row col-12 mb-3">
                                    <div class="col-6">
                                        <label for="nameWork" class="form-label">เวลาเริ่ม</label>
                                        <input type="time" class="form-control" name="start_time" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="nameWork" class="form-label">เวลาจบ</label>
                                        <input type="time" class="form-control" name="end_time" required>
                                    </div>
                                </div>
                                <div class="row col-12 mb-3">
                                    <div class="col-6 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">วันเริ่มงาน</label>
                                        <input type="date" placeholder="วันเริ่มงาน" aria-label="First name" class="form-control start-date" name="start_date" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">วันจบงาน</label>
                                        <input type="date" placeholder="วันจบงาน" aria-label="Last name" class="form-control end-date" name="end_date" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">สถานที่ทำงาน</h6>
                                <div class="mb-3 mx-auto">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30963.74074493184!2d100.70719176848243!3d14.049543364016815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d78a4a8713c3f%3A0xf019238243532a0!2sRajamangala%20University%20of%20Technology%20Thanyaburi!5e0!3m2!1sen!2sth!4v1662273386510!5m2!1sen!2sth" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <div class="mb-3 mx-auto">
                                        <button type="submit" class="btn btn-primary" name="postjob">ยืนยันข้อมูล</button>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Form End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        $(function() {
            var $startDate = $('.start-date');
            var $endDate = $('.end-date');

            $startDate.datepicker({
                autoHide: true,
            });
            $endDate.datepicker({
                autoHide: true,
                startDate: $startDate.datepicker('getDate'),
            });

            $startDate.on('change', function() {
                $endDate.datepicker('setStartDate', $startDate.datepicker('getDate'));
            });
        });
    </script>

</body>

</html>