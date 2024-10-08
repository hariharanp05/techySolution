<?php
    session_start();

    include("process.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fullname = $_POST['nameI'];
        $email = $_POST['emailI'];
        $number = $_POST['numberI'];

        if(!empty($fullname) && !empty($email) && !empty($number)){
            $query = "INSERT INTO information(Fullname,Email,MobileNumber) values('$fullname','$email','$number')";

            mysqli_query($connect,$query);

            echo "<script type='text/javascript'> alert('successfully send')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Enter valid information')</script>";
        }
        
    }

    if(isset($_GET['submit'])){
        $fname = $_GET['nameF'];
        $email = $_GET['emailF'];
        $subject = $_GET['subjectF'];
        $thought = $_GET['thoughtsF'];
        
        if(!empty($fname)  && !empty($email)  && !empty($subject) && !empty($thought)){
            $sql = "INSERT INTO feedback(Fullname,Email,Sub,Thoughts) values('$fname','$email','$subject','$thought')";

            mysqli_query($connect,$sql);

            echo "<script type='text/javascript'> alert('successfully send')</script>";

        }else{
            echo "<script type='text/javascript'> alert('Enter valid information')</script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Techy Solutions</title>
<!-- link -->
 <link rel="icon" href="img/favicon.ico">

 <!-- google web fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=heebo:wght@400;500;600;700&display=swap">

<!-- icon font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

<!-- library stylesheet -->

<link rel="stylesheet" href="lib/animate/animate.min.css">
<link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">

<!-- bootstrap stylesheet -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- template stylesheet -->
 <link rel="stylesheet" href="css/main.css">

</head>
<body>
<div class="container-xxl bg-white p-0">


     <!-- navbar start -->

     <div class="container-xxl position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0">Techy Solution</h1>
            </a>
            <button class="navbar-toggler rounded-pill" type="button" data-bs-toogle="collapse" data-bs-target="#navbarCollpse">
                <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#overview" class="nav-item nav-link ">Overview</a>
                    <a href="#features" class="nav-item nav-link">Features</a>
                    <a href="#pricing" class="nav-item nav-link ">Pricing</a>
                    <a href="#information" class="nav-item nav-link">Information</a>
                    <a href="#feedback" class="nav-item nav-link ">Feedback</a>
                    <a href="#contact" class="nav-item nav-link ">Contact</a>
                </div>
                <a href="" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Watch Demo</a>
             </div>
        </nav>
        <div class="container-xxl bg-primary hero-header">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="text-white pb-3 animated slideInDown">Manage Your Bisuness with this Awesome Software.</h1>
                        <p class="text-white pb-3 animated slideInDown">FreeWebsiteCreate software, businesses can easily businesses can easily manage their tasks, prioritize their work, and track their progress. It enables managers to keep a close eye on their team's performance metrics and quickly identify areas for improvement. The software's intuitive interface and user-friendly design make it easy for anyone to use, regardless of their technical expertise.</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" name="" id="" placeholder="Your Email" style="height: 58px;">
                            <button type="button" class="btn btn-dark rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-lg-6 text-content text-lg-start">
                        <img class="img-fluid rounded animated zoomIn" src="img/hero.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
     </div>

     <!-- Features start -->

     <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item bg-light rounded text-center p-5">
                        <i class="fa fa-4x fa-edit text-primary mb-4"></i>
                        <h5 class="mb-3">Fully Customize</h5>
                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quam magni animi earum corporis quisquam repellendus error delectus tempora ducimus, minus veritatis! Voluptates distinctio molestiae quas accusantium quidem sit totam mollitia. Quidem sunt praesentium, recusandae tempora ut quam, deserunt, </p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item bg-light rounded text-center p-5">
                        <i class="fa fa-4x fa-sync text-primary mb-4"></i>
                        <h5 class="mb-3">Api Integrated</h5>
                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quam magni animi earum corporis quisquam repellendus error delectus tempora ducimus, minus veritatis! Voluptates distinctio molestiae quas accusantium quidem sit totam mollitia. Quidem sunt praesentium, recusandae tempora ut quam, deserunt, </p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item bg-light rounded text-center p-5">
                        <i class="fa fa-4x fa-draw-polygon text-primary mb-4"></i>
                        <h5 class="mb-3">Drag and Drop Builder</h5>
                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quam magni animi earum corporis quisquam repellendus error delectus tempora ducimus, minus veritatis! Voluptates distinctio molestiae quas accusantium quidem sit totam mollitia. Quidem sunt praesentium, recusandae tempora ut quam, deserunt, </p>
                    </div>
                </div>
            </div>
        </div>
     </div>

     <!-- About start -->

     <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5 flex-column-reserve flex-lg-row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Manage & Push your Business to the Next Level</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur asperiores excepturi dolore deserunt quia, perferendis voluptatem pariatur a! Qui, porro?</p>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white" >
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="ms-4">
                            <h5>First WOrking Process</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vel asperiores quod cum corrupti temporibus dolorem quas iste repellat, excepturi obcaecati molestiae. Dolorem, asperiores soluta.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white" >
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="ms-4">
                            <h5>24/7 Hours Support</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vel asperiores quod cum corrupti temporibus dolorem quas iste repellat, excepturi obcaecati molestiae. Dolorem, asperiores soluta.</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-dark py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                </div>
                <div class="col-lg-6">
                    <img src="img/about.svg" alt="" class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s">
                </div>
            </div>
        </div>
     </div>
    
<!-- Overview Start -->

<div class="container-xxl bg-light my-6 py-5" id="overview">
    <div class="container">
        <div class="row g-5 py-5 aligh-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img src="img/overview-1.svg" alt="" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">01</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height:2px;"></span>
                    <h5 class="mb-0">App Integration</h5>
                </div>
                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit fugiat blanditiis harum corporis vel sequi accusamus vero, quibusdam odit eligendi.</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interfare</p>
                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poor</p>
            </div>
        </div>
        <div class="row g-5 py-5 aligh-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">02</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height:2px;"></span>
                    <h5 class="mb-0">App customization</h5>
                </div>
                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit fugiat blanditiis harum corporis vel sequi accusamus vero, quibusdam odit eligendi.</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interfare</p>
                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poor</p>
            </div> 
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img src="img/overview-2.svg" alt="" class="img-fluid rounded">
            </div>
        </div>
        <div class="row g-5 py-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img src="img/overview-3.svg" alt="" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">03</h1>
                    <span class="bg-primary mx-2" style="width:30px; height:2px;" ></span>
                    <h5 class="mb-0">App Modification</h5>
                </div>
                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit fugiat blanditiis harum corporis vel sequi accusamus vero, quibusdam odit eligendi.</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interfare</p>
                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poor</p>
            </div>
        </div>
    </div>
</div>

<!-- Advanced Feature Start -->

<div class="container-xxl py-6" id="features">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Advanced Features</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dicta vero dolorem commodi distinctio id magnam molestias obcaecati nesciunt numquam.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Fully Customizable</h5>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id aspernatur doloremque neque iusto autem! Repudiandae maiores repellendus tenetur facilis sapiente!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">App Integration</h5>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id aspernatur doloremque neque iusto autem! Repudiandae maiores repellendus tenetur facilis sapiente!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">High Resolution</h5>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id aspernatur doloremque neque iusto autem! Repudiandae maiores repellendus tenetur facilis sapiente!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Drag and drop</h5>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id aspernatur doloremque neque iusto autem! Repudiandae maiores repellendus tenetur facilis sapiente!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facts start -->

<div class="container-xxl bg-primary my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-cogs fa-3x text-white mb-3"></i>
                <h1 class="text-white mb-2" data-toogle="counter-up">7264</h1>
                <p class="text-white mb-0">Active Install</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h1 class="text-white mb-2" data-toogle="counter-up">6472</h1>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                <h1 class="text-white mb-2" data-toogle="counter-up">718</h1>
                <p class="text-white mb-0">Award Winners</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-quote-left fa-3x text-white mb-3"></i>
                <h1 class="text-white mb-2" data-toogle="counter-up">5264</h1>
                <p class="text-white mb-0">Clients Reviews</p>
            </div>
        </div>
    </div>
</div>

<!-- Process Start -->

<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img src="img/process.svg" alt="" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">Three Simple Steps to Start Working With</h1>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod dolores quae amet mollitia obcaecati tenetur?</p>
                <ul class="process mb-0">
                    <li>
                        <span><i class="fa fa-cogs"></i></span>
                        <div>
                            <h5>Install the Software</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ducimus!</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-address-card"></i></span>
                        <div>
                            <h5>Setup your Profile</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ducimus!</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-check"></i></span>
                        <div>
                            <h5>Enjoy The Features</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ducimus!</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- pricing start -->

<div class="container-xxl py-6" id="pricing">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Pricing Plan</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, atque quos illo nemo quas illum?</p>
        </div> 
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="price-item rounded overflow-hidden">
                    <div class="bg-dark p-4">
                        <h4 class="text-white mt-2">Standard</h4>
                        <div class="text-white">
                            <span class="align-top fs-4 fw-bold">$</span>
                            <h1 class="d-inline display-6 text-primary mb-0">29.99</h1>
                            <span class="align-baseline">/ Month</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>6 Month Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-dark rounded-pill py2 px-4 mt-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item rounded overflow-hidden">
                    <div class="bg-primary p-4">
                        <h4 class="text-white mt-2">Professional</h4>
                        <div class="text-white">
                            <span class="align-top fs-4 fw-bold">$</span>
                            <h1 class="d-inline display-6 text-primary mb-0">49.99</h1>
                            <span class="align-baseline">/ Month</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>6 Month Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-dark rounded-pill py2 px-4 mt-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="price-item rounded overflow-hidden">
                    <div class="bg-dark p-4">
                        <h4 class="text-white mt-2">Ultimate</h4>
                        <div class="text-white">
                            <span class="align-top fs-4 fw-bold">$</span>
                            <h1 class="d-inline display-6 text-primary mb-0">79.99</h1>
                            <span class="align-baseline">/ Month</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>6 Month Free Support</span><i class="fa fa-check text-success pt-1"></i></div>
                        <a href="" class="btn btn-dark rounded-pill py2 px-4 mt-3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Information Section Start -->

<div class="container-xxl py-6" id="information">
    <div class="container">
        <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1>Information Section</h1>
            <p>Register here, Our Support Staff will reach you in 24Hours.</p>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <form id="inf" method="POST">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="nameI" placeholder="Your Name" required>
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="emailI" placeholder="Your Email" required>
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="number" name="numberI" placeholder="Mobile Number" required>
                            <label for="number">Your Number</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-dark rounded-pill py-3 px-5" type="submit" name="send" id="isub">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<!-- Feedback Form -->

<div class="container-xxl py-6" id="feedback">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeINUp" data-wow-delay="0.1s">
                <h1>Feedback Form</h1>
                <p>Please Give Your Experiences for our Work,
                     Pros and Cons for our improvement and correction.</p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form id="fb" method="GET">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_fb" name="nameF" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email_fb" name="emailF" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject_fb" name="subjectF" placeholder="subject" required>
                                <label for="subject_fb">Subject</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <textarea type="text" class="form-control" id="thoughts_fb" name="thoughtsF" placeholder="Your Thoughts..." required></textarea>
                                <label for="thoughts_fb">Your Thoughts</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-dark rounded-pill py-3 px-5" type="submit" name="submit"  id="submited">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Contact Start -->
<div class="container-xxl py-6" id="contact">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s" >
                <h1 class="mb-3">Get In Touch</h1>
                <div class="d-lg-flex justify-content-around">
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-2">Call Us</p>
                        <h5 class="mb-0">+012 345 6789</h5>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-2">Mail Us</p>
                        <h5 class="mb-0">info@example.com</h5>
                    </div>
                </div>
                <div class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-2">Our Office</p>
                        <h5 class="mb-0">123 Street, Anna Nagar,Chennai</h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Subscribe Our Newsletter<span></span></p>
                <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                <a class="btn btn-link" href="">About</a>
                <a class="btn btn-link" href="">Contact</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Conditions</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Community<span></span></p>
                <a class="btn btn-link" href="">Career</a>
                <a class="btn btn-link" href="">Leadership</a>
                <a class="btn btn-link" href="">Strategy</a>
                <a class="btn btn-link" href="">History</a>
                <a class="btn btn-link" href="">Components</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Address<span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Anna Nagar, Chennai</p>
                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>


        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
                    Designed By <a class="border-bottom" href="https://freewebsitecreate.net">free Website Create</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

</div>





    <!-- library script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- template script -->
    <script src="js/main.js"></script>
</body>
</html>