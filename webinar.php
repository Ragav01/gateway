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
    <section class="webinar">
        <div class="container">
            <div class="row p-lg-0">
                <div class="col-lg-4 p-lg-0">
                    <div class="img">
                        <img src="img/cource_img/t10.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 p-0">
                    <div class="detail">
                        <h4>Olive Video editing Webinar</h4>
                        <p>Olive video editing webinar, you will not just gain proficiency with the editing tools
                            available in this software yet in addition how to edit with the mentality of a professional
                            editor. Learn from someone who is an expert (Udayalingam CEO/Founder Buff Institute) in the
                            industry, who knows the most current editing methods, and who has 13+ long years of
                            experience in the production.</p>

                        <div class="more-details d-none">
                            <p>On the off chance that you are searching for a video editing application that will permit
                                you to edit videos however you need them, attend the webinar you will become a pro in
                                video editing. Make videos the manner you imagine them.</p>
                            <p>Olive is a free non-linear video editor is the best answer. It aims to give a completely
                                highlighted option in contrast to high-end professional video editing software. Olive is
                                used by experts across the world for every type of business & advertising recordings,
                                music recordings to narratives. This full course is the most ideal approach to bounce
                                directly in and begin editing.</p>
                            <h5 class="my-4">What you will get from the course?</h5>
                            <ul>
                                <li>By the finish of the webinar, you will figure out to edit an entire video from start
                                    to finish, using professional and productive methods.</li>
                                <li>Design perfect and professional titles for your recordings. Add movement to your
                                    titles, photographs, and videos, making them all the more visually interesting.</li>
                                <li>Shading right your video to fix issues with white balance and exposure.</li>
                                <li>Alter your videos, and make them more powerful with framework footage and
                                    photographs.</li>
                                <li>It is ideal for teachings, marketing, YouTubers, content creators, personal use or
                                    even inspiring others.</li>
                            </ul>
                        </div>
                        <button class="detail-btn">More Details</button>
                        <!-- <button class="register-btn">Register Now</button> -->
                        <button type="button" class="register-btn" data-toggle="modal"
                            data-target="#exampleModal">Register Now</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Olive Video editing Webinar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="payment" method="POST"  id="registration_form">
                                            <input type="hidden" value="Olive Video editing Webinar" name="coursename">
                                            <input type="hidden" value="99" name="price">
                                            <div class="form-group">
                                                <label for="fullname">Full Name</label><span class="error_form" id="username_error_message"></span>
                                                <input type="text" name="name" id="form_username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label><span class="error_form" id="email_error_message"></span>
                                                <input type="text" name="email" id="form_email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone-number">Phone Number</label><span class="error_form" id="phone_error_message"></span>
                                                <input type="text" name="phone" id="form_phone" class="form-control">
                                            </div>
                                            <div class="form-row justify-content-center">
                                                <button type="submit" id="send-btn" name="submit">Register</button>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php'?>




    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="src/js/index.js"></script>

    <script>
        $(document).ready(function () {
            $(".detail-btn").click(function () {
                $(".more-details").toggleClass("d-none");
            });
            // $(".register-btn").click(function () {
            //     window.location.href='https://www.instamojo.com/@buffinstitute/l19fc413d5b694e469c737e4fca9f1f7a/';
            // });
        });
    </script>
</body>

</html>