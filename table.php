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
                                echo "???????????????????????????";
                            } ?>
                        </h6>
                        <span>
                            <?php if (isset($row['user_type_id'])) {
                                if ($row['user_type_id'] == 1) {
                                    echo "??????????????????";
                                }
                                if ($row['user_type_id'] == 2) {
                                    echo "????????????????????????";
                                }
                                if ($row['user_type_id'] == 3) {
                                    echo "????????????????????????????????????";
                                }
                            } else {
                                echo "????????????????????????????????????????????????";
                            } ?></h6>
                        </span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>HomePage</a>
                    <a href="form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>????????????????????????</a>
                    <a href="table.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>??????????????????</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>?????????????????????????????????????????????</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="statuspost.php" class="dropdown-item">????????????????????????</a>
                            <a href="hispost.php" class="dropdown-item">??????????????????????????????</a>
                        </div>
                    </div>
                    <?php if (!isset($_SESSION['login'])) { ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>???????????????????????????????????????</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="statusjob.php" class="dropdown-item">????????????????????????</a>
                                <a href="hisjob.php" class="dropdown-item">??????????????????????????????</a>
                            </div>
                        </div>
                    <?php } elseif ($row['user_type_id'] == 3) {
                    } else { ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>???????????????????????????????????????</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="statusjob.php" class="dropdown-item">????????????????????????</a>
                                <a href="hisjob.php" class="dropdown-item">??????????????????????????????</a>
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
                                                                        echo "???????????????????????????";
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

            <div class="row">
                <div class="col-9"></div>
                <div class="col-3 mt-3 text-center bg-secondary rounded p-3">
                    <form action="" method="post"><label for="form-check-label" class="form-check-label" style="margin-right:1% ;">???????????????????????????</label>
                        <select class="rounded" name="category" aria-label="Default select example" style="padding: 1%; padding-right:15%; background: rgba(0, 0, 0, 0.6); color:white;">
                            <option selected value="reset">?????????????????????</option>
                            <option value="???????????????????????????">???????????????????????????</option>
                            <option value="?????????????????????">?????????????????????</option>
                            <option value="?????????????????????????????????">?????????????????????????????????</option>
                            <option value="???????????????">???????????????</option>
                        </select>
                        <button class="btn btn-primary display:inline;" name="filter">???????????????</button>
                    </form>
                </div>
            </div>

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <?php if (!isset($_POST['filter'])) {
                        $dbname = 'unijob';
                        $dsn = "mysql:host=$servername;dbname=$dbname";
                        $sql = "SELECT tab_announce.announce_id,title,details,work_id,start_date,end_date,start_time,end_time,user_id,price,tab_announce.time_stamp,jobstatus_id,status,tab_jobstatus.time_stamp,tab_category.category_name
                    FROM tab_announce 
                    JOIN tab_jobstatus
                    ON tab_announce.announce_id = tab_jobstatus.announce_id
                    AND tab_jobstatus.status = '????????????????????????????????????'
                    JOIN tab_category
                    ON tab_category.id_category = tab_announce.announce_id";
                        try {
                            $pdo = new PDO($dsn, $username, $password);
                            $stmt = $pdo->query($sql);

                            if ($stmt === false) {
                                die("Error");
                            }
                        } catch (PDOException $e) {
                            echo $e->getMessage();
                        }
                    ?>
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <div class="col-sm-12 col-md-6 pt-3">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">????????????????????? : <?php echo $row['work_id'] ?></h6>
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <h6>?????????????????????</h6>
                                                </th>
                                                <td><?php echo $row['title'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <h6>???????????????????????????</h6>
                                                </th>
                                                <td colspan="2"><?php echo $row['category_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <h6>?????????????????????</h6>
                                                </th>
                                                <td colspan="3"><?php echo $row['price'] . " ?????????" ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" name="announce_id" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo htmlspecialchars($row['announce_id']); ?>">
                                        ????????????????????????????????????
                                    </button>
                                </div>
                                <div class="modal fade" id="exampleModal<?php echo htmlspecialchars($row['announce_id']) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: rgba(0, 0, 0, .6)">
                                            <div class="rounded p-3">
                                                <div class="card-header">
                                                    <h6>????????????????????? : <?php echo htmlspecialchars($row['work_id']) ?></h6>
                                                </div>
                                                <div class="card-body text-center">
                                                    <br>
                                                    <h5 class="card-title"> ????????????????????? : <?php echo htmlspecialchars($row['title']) ?></h5>
                                                    <br>
                                                </div>
                                                <div class="rounded p-3 border border-primary" style="background: rgba(0, 0, 0, .6)">
                                                    <table class="table table-hover border-primary">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">?????????????????????</th>
                                                                <td><?php echo htmlspecialchars($row['price']) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">??????????????????</th>
                                                                <td><?php echo htmlspecialchars($row['start_date']) ?> ????????? <?php echo htmlspecialchars($row['end_date']) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">????????????</th>
                                                                <td><?php echo htmlspecialchars($row['start_time']) ?> ???. ????????? <?php echo htmlspecialchars($row['end_time']) ?> ???.</td>
                                                            </tr>
                                                            <tr>
                                                                <th>??????????????????????????????</th>
                                                                <td><?php echo htmlspecialchars($row['details']) ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="card-footer" style="padding-bottom: 6%;">
                                                    <form action="db\db_get.php" method="post">
                                                        <p style="display:inline;">???????????????????????????????????? : <?php echo htmlspecialchars($row['time_stamp']) ?></p>
                                                        <input type="hidden" name="getjob" value=<?php echo $row['announce_id'] ?>>
                                                        <?php if (isset($_SESSION['student'])) { ?>
                                                            <?php if ($user_id == $row['user_id']) {
                                                            } else { ?><button type="submit" class="btn btn-primary submitBtn mx-1" style="float:right;" name="submitget" value="????????????????????????????????????">????????????????????????????????????</button><?php } ?>
                                                        <?php } else {
                                                        } ?>
                                                        <button type="button" class="btn btn-light mx-1" style="float:right;" data-bs-dismiss="modal">?????????</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    } ?>
                    <?php if (isset($_POST['filter'])) {
                        $category = $_POST['category'];
                        if ($category == 'reset') {
                            $dbname = 'unijob';
                            $dsn = "mysql:host=$servername;dbname=$dbname";
                            $sql = "SELECT tab_announce.announce_id,title,details,start_date,end_date,start_time,end_time,user_id,price,tab_announce.time_stamp,status,category_name,work_id
                FROM tab_announce 
                JOIN tab_jobstatus 
                ON tab_jobstatus.status = '????????????????????????????????????' 
                JOIN tab_category
                ON tab_announce.announce_id = tab_jobstatus.announce_id = tab_category.id_category";
                            try {
                                $pdo = new PDO($dsn, $username, $password);
                                $stmt = $pdo->query($sql);

                                if ($stmt === false) {
                                    die("Error");
                                }
                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            }
                        } else {
                            $dbname = 'unijob';
                            $dsn = "mysql:host=$servername;dbname=$dbname";
                            $sql = "SELECT tab_announce.announce_id,title,details,start_date,end_date,start_time,end_time,user_id,price,tab_announce.time_stamp,status,category_name,work_id,tab_category.id_category,tab_jobstatus.announce_id
                    FROM tab_announce 
                    JOIN tab_jobstatus 
                    ON tab_jobstatus.status = '????????????????????????????????????'
                    JOIN tab_category
                    ON tab_announce.announce_id = tab_jobstatus.announce_id
                    AND tab_jobstatus.announce_id = tab_category.id_category
                    AND tab_category.category_name = '$category'";
                            try {
                                $pdo = new PDO($dsn, $username, $password);
                                $stmt = $pdo->query($sql);

                                if ($stmt === false) {
                                    die("Error");
                                }
                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            }
                        }
                    ?>
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <div class="col-sm-12 col-md-6 pt-3">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">????????????????????? : <?php echo $row['work_id'] ?></h6>
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <h6>?????????????????????</h6>
                                                </th>
                                                <td><?php echo $row['title'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <h6>???????????????????????????</h6>
                                                </th>
                                                <td colspan="2"><?php echo $row['category_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <h6>?????????????????????</h6>
                                                </th>
                                                <td colspan="3"><?php echo $row['price'] . " ?????????" ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" name="announce_id" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo htmlspecialchars($row['announce_id']); ?>">
                                        ????????????????????????????????????
                                    </button>
                                </div>
                                <div class="modal fade" id="exampleModal<?php echo htmlspecialchars($row['announce_id']) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: rgba(0, 0, 0, .6)">
                                            <div class="rounded p-3">
                                                <div class="card-header">
                                                    <h6>????????????????????? : <?php echo htmlspecialchars($row['work_id']) ?></h6>
                                                </div>
                                                <div class="card-body text-center">
                                                    <br>
                                                    <h5 class="card-title"> ????????????????????? : <?php echo htmlspecialchars($row['title']) ?></h5>
                                                    <br>
                                                </div>
                                                <div class="rounded p-3 border border-primary" style="background: rgba(0, 0, 0, .6)">
                                                    <table class="table table-hover border-primary">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">?????????????????????</th>
                                                                <td><?php echo htmlspecialchars($row['price']) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">??????????????????</th>
                                                                <td><?php echo htmlspecialchars($row['start_date']) ?> ????????? <?php echo htmlspecialchars($row['end_date']) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">????????????</th>
                                                                <td><?php echo htmlspecialchars($row['start_time']) ?> ???. ????????? <?php echo htmlspecialchars($row['end_time']) ?> ???.</td>
                                                            </tr>
                                                            <tr>
                                                                <th>??????????????????????????????</th>
                                                                <td><?php echo htmlspecialchars($row['details']) ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="card-footer" style="padding-bottom: 6%;">
                                                    <form action="db\db_get.php" method="post">
                                                        <p style="display:inline;">???????????????????????????????????? : <?php echo htmlspecialchars($row['time_stamp']) ?></p>
                                                        <input type="hidden" name="getjob" value=<?php echo $row['announce_id'] ?>>
                                                        <?php if (isset($_SESSION['student'])) { ?>
                                                            <?php if ($user_id == $row['user_id']) {
                                                            } else { ?><button type="submit" class="btn btn-primary submitBtn mx-1" style="float:right;" name="submitget" value="????????????????????????????????????">????????????????????????????????????</button><?php } ?>
                                                        <?php } else {
                                                        } ?>
                                                        <button type="button" class="btn btn-light mx-1" style="float:right;" data-bs-dismiss="modal">?????????</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    } ?>
                </div>
            </div>
            <!-- Table End -->

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
</body>

</html>