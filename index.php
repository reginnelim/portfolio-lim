<!doctype html>
<?php
    session_start();
    $_SESSION['loggedin'] = false;
    
    require_once('db.php');
    $query = "select * from about";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    $querywork = "select * from work";
    $resultwork = mysqli_query($conn,$querywork);
    $rowwork = mysqli_fetch_assoc($resultwork);

    $queryeduc = "select * from educ";
    $resulteduc = mysqli_query($conn,$queryeduc);
    $roweduc = mysqli_fetch_assoc($resulteduc);

    $queryeduc2 = "select * from educ where educnum=2";
    $resulteduc2 = mysqli_query($conn,$queryeduc2);
    $roweduc2 = mysqli_fetch_assoc($resulteduc2);

    $querycont = "select * from contacts";
    $resultcont = mysqli_query($conn,$querycont);
    $rowcont = mysqli_fetch_assoc($resultcont);

    $querygallery = "select * from gallerydb";
    $resultgallery = mysqli_query($conn,$querygallery);
    $rowgallery = mysqli_fetch_assoc($resultgallery);
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--FONT link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Allan:wght@400;700&family=Cookie&display=swap"
        rel="stylesheet">

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /*SECTION*/
        section {
            height: 100dvh;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        /*FONTS*/

        /*title*/
        .eras-bold-itc {
            font-family: "Arial Black", sans-serif;
            font-weight: 500;
            font-style: bold;
        }

        .bookman-old-style {
            font-family: "Bookman Old Style", cursive;
            font-weight: 500;
            font-style: italic;
        }
        .acme-regular {
            font-family: "Acme", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        /*subtitle*/
        .cookie-regular {
            font-family: "Cookie", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .navbar-brand-custom:hover {
            cursor: default;
        }

        .centered-div {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 10px;
        }

        /*COLOR PALETTE*/
        .bg-pinkish-white {
            background-color: #fff7f8;
        }

        .bg-light-green {
            background-color: #c0eee5;
        }

        .bg-purple {
            background-color: #e8dff5;
        }

        .text-color-purple {
            color: #e8dff5;
        }

        .bg-pink {
            background-color: #fce1e4;
        }

        .text-color-pink {
            color: #fce1e4;
        }

        .bg-yellow {
            background-color: #ecb920;
        }

        .text-color-yellow {
            color: #ecb920;
        }

        .bg-green {
            background-color: #25b399;
        }

        .text-color-green {
            color: #25b399;
        }

        .bg-blue {
            background-color: #daeaf6;
        }

        .text-color-blue {
            color: #daeaf6;
        }

        /*GALLERY STYLING*/
        img {
            max-width: 100%;
        }

        .gallery {
            background-color: #dbddf1;
            padding: 80px 0;
        }

        .gallery img {
            background-color: #ffffff;
            padding: 15px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        #gallery-modal .modal-img {
            width: 100%;
        }

        /*BUTTON HOVER*/
        .btn:hover {
            background-color: #ffd65d !important;
        }

        section {
            min-height: 100vh; /* minus the height of the footer */
        }
  
}

    </style>

</head>

<body>

    <!--hERO SECTION-->
    <section id="home" class="bg-pinkish-white" style="padding-top: 0;">
        <!--NAVIGATION MENU-->
        <nav class="navbar navbar-expand-lg bg-green py-3">
            <div class="container">
                <a class="navbar-brand navbar-brand-custom text-white fw-bold">Welcome!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#education-work">Education & Work Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#graphic-works">Graphic Works</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex justify-content-center custom-div align-items-center"
            style="padding-top: 10%; margin-bottom: 50%;">
            <div class="text-center">
                <img class="rounded-circle mb-4" src="admin_area/assets/<?php echo $row["profpic"] ?>" alt="user profile"
                    style="height: 230px; width: 230px; border-style: solid;">
                <h1 class="text-color-yellow eras-bold-itc display-5">PORTFOLIO</h1>
                <h1 class="text-color-green bookman-old-style"><?php echo $row["name"] ?></h1>
                <h4 class="text-color-green">Email: <?php echo $row["email"] ?></h4>
                <h4 class="text-color-green">Contact Number: <?php echo $row["contactnum"] ?></h4>
                <h4 class="text-color-green">Address: <?php echo $row["address"] ?></h4>
            </div>
        </div>

    </section>

    <!--ABOUT SECTION-->
    <section style="height: auto;" id="about" class="bg-blue">
        <div class="container">
            <h1 data-aos="fade-left" class="acme-regular display-6 text-color-green text-center">About Me</h1>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">

                <!--ABOUT TEXT-->
                <div class="col">
                    <div data-aos="fade-right">
                        <div class="text-center">
                            <h2 class="cookie-regular text-color-yellow">hey there!</h2>
                            <h1 class="acme-regular text-color-green">I'm <?php echo $row["name"] ?></h1>
                        </div>
                        <hr>
                        <div>
                            <p><?php echo $row["intro"] ?></p>
                        </div>
                    </div>
                </div>

                <!--ABOUT IMAGE-->
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/<?php echo $row["aboutpic"] ?>" style="height: 630px;"
                        alt="about image">
                </div>

            </div>
            <a href="#education-work" class="text-color-yellow"><i class="bi bi-caret-down-fill fs-1"></i></a>
        </div>
    </section>

    <!--EDUCATION & WORK EXPERIENCE SECTION-->
    <section id="education-work" class="bg-purple" style="height: auto;">
        <div class="container mb-5">
            <div data-aos="fade-right" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">
                <div class="col">
                    <div>
                        <div class="text-center">
                            <h1 class="acme-regular display-6 text-color-green">Education</h1>
                        </div>
                        <hr>
                        <h2 class="acme-regular text-color-yellow">Tertiary Education</h2>
                        <div>
                            <p><?php echo $roweduc["descrip"] ?></p>
                            <p><?php echo $roweduc["school"] ?></p>
                            <p><?php echo $roweduc["address"] ?></p>
                            <p>Year Graduated <span><?php echo $roweduc["year"] ?></span></p>
                        </div>

                        <!--SECONDAR EDUCATION-->
                        <h2 class="acme-regular text-color-yellow mt-4">Secondary Education</h2>
                        <div class="mb-5">
                            <p><?php echo $roweduc2["school"] ?></p>
                            <p><?php echo $roweduc2["address"] ?></p>
                            <p>Year Graduated <span><?php echo $roweduc2["year"] ?></span></p>
                        </div>

                    </div>
                </div>

                <!--WORK EXPERIENCES-->
                <div class="col">
                    <div>
                        <div class="text-center">
                            <div>
                                <h1 class="acme-regular display-6 text-color-green">Work Experiences</h1>
                            </div>
                        </div>
                        <hr>      
                        <?php     
                             while ($row = mysqli_fetch_assoc($resultwork)) { 
                                 // code...
                                echo "<div>";
                                    $row['worknum'];
                                    echo "<p class='fw-bold fs-4 text-color-yellow'>".($row['jobtitle'])."</p>";
                                    echo "<p>".($row['title'])."</p>";
                                    echo "<p>".($row['address'])."</p>";
                                    echo "<p>".($row['year'])."</p>";
                                echo "</div>";
                                echo "<hr>";
                             }       
                        ?>
                        
                         <!--
                        <div>
                            <p class="fw-bold fs-4 text-color-yellow">Graphic Designer</p>
                            <p>Gateway Mall</p>
                            <p>Zamboanga City, Philippines 7000.</p>
                            <p>Febuary 2020-August 2022</p>
                        </div>
                        <hr>
                        <div>
                            <p class="fw-bold fs-4 text-color-yellow">Graphic Designer</p>
                            <p>Southway Mall</p>
                            <p>Zamboanga City, Philippines 7000.</p>
                            <p>November 2022-September 2023</p>
                        </div>
                        -->
                        
                    </div>
                </div>

            </div>
            <a href="#graphic-works" class="text-color-yellow"><i class="bi bi-caret-down-fill fs-1"></i></a>
        </div>
    </section>

    <!--GRAPHIC WORKS SECTION-->
    <section id="graphic-works" class="bg-pink" style="height: auto;">
        <div class="container mb-5">
            <div data-aos="fade-up" class="text-center mb-3">
                <h2 class="cookie-regular text-color-yellow">Here are some of My Works</h2>
                <h1 class="acme-regular text-color-green">Graphic Works</h1>
            </div>
            <div data-aos="fade-right" class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/img/<?php echo $rowgallery["pic1"] ?>" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/img/<?php echo $rowgallery["pic2"] ?>" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/img/<?php echo $rowgallery["pic3"] ?>" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/img/<?php echo $rowgallery["pic4"] ?>" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/img/<?php echo $rowgallery["pic5"] ?>" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/img/<?php echo $rowgallery["pic6"] ?>" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
            </div>
            <a href="#contact" class="text-color-yellow"><i class="bi bi-caret-down-fill fs-1"></i></a>
        </div>
    </section>

    <!--CARD IMAGE Modal -->
    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/1.jpg" class="modal-img" alt="modal img">
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <footer class="bg-green text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                        $query = "select * from about";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <h5>My Portfolio Website</h5>
                    <p>&copy; 2024. <?php echo $row["name"] ?> All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p>Contact us: <?php echo $row["email"] ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!--CARD IMAGE WHEN CLICKED-->
    <script>
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("gallery-item")) {
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
                myModal.show();
            }
        })
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>