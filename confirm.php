<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet icon" type="image/png" href="img/logoam.png">
    <title>Buff Institute</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="src/js/validation_webinar.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/main/main.css">
</head>

<body>
    <div class="nav-top">
        <div class="d-flex align-items-center contact">
            <a href="#"><i class="fas fa-phone-alt"></i>+91 81 9000 1717</a>
            <a href="#"><i class="fas fa-envelope"></i>info@buffinstitute.com</a>
        </div>

    </div>

    <div class="nav-sticky">
        <nav>
            <div class="navbar_brand">
                <div class="logo">
                    <a href="index">
                        <img src="img/buff-logo.svg" alt="bufflogo">
                    </a>
                </div>

                <div id="nav-icon4">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="navbar_item">
                <ul id="nav">
                    <li><a href="index">Home</a></li>
                    <li><a href="course">Virtual Courses</a></li>
                    <li><a class="active_item" href="webinar">Webinars</a></li>
                    <li><a href="instructor">Become An Instructor</a></li>
                    <li><a href="about">About</a></li>
                </ul>

            </div>
        </nav>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <div class="banner">
        <div class="container p-0">
            <div class="col">
                <h3>Olive Video Editor</h3>
            </div>
            <div aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="course.php">Webinars</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Olive Video Editor</li>
                </ol>
            </div>
        </div>
    </div>
    <section>
        <?php
        include 'instamojo\Instamojo.php';

        $api = new Instamojo\Instamojo('test_f7be9258ea1c379a8aa42a8bf34', 'test_693239be3a7a18196743d1abef4', 'https://test.instamojo.com/api/1.1/');
        
        $payid = $_GET['payment_request_id'];

        try{
            $response = $api->paymentRequestStatus($payid);
        
        ?>
            <table class="table table-border">
                <tr>
                    <th>PAYMENT ID</th>
                    <td><?= $response['payments'][0]['payment_id']; ?></td>
                </tr>
                <tr>
                    <th>BUYER NAME</th>
                    <td><?= $response['payments'][0]['buyer_name']; ?></td>
                </tr>
                <tr>
                    <th>BUYER Email</th>
                    <td><?= $response['payments'][0]['buyer_email']; ?></td>
                </tr>
                <tr>
                    <th>BUYER PHONE</th>
                    <td><?= $response['payments'][0]['buyer_phone']; ?></td>
                </tr>
                <tr>
                    <th>PURPOSE</th>
                    <td><?= $response['purpose']; ?></td>
                </tr>
                <tr>
                    <th>AMOUNT</th>
                    <td><?= $response['payments'][0]['amount']; ?></td>
                </tr>
            </table>
        <?php
        }
            catch (Exception $e) {
                print('Error: ' . $e->getMessage());
            }
        ?>
    </section>
    <?php include 'include/footer.php'?>




    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="src/js/index.js"></script>
</body>

</html>