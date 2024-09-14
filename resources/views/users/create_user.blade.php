<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <title>Training Studio - Free CSS Template</title>
        <!--

        TemplateMo 548 Training Studio

        https://templatemo.com/tm-548-training-studio

        -->
        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href={{asset("assets/css/bootstrap.min.css")}}>

        <link rel="stylesheet" type="text/css" href={{asset("assets/css/font-awesome.css")}}>

        <link rel="stylesheet" href={{asset("assets/css/templatemo-training-studio.css")}}>
        <style >
            .custom-form{
                margin-top: 100px;
                margin: 100px auto;
                width: 60%;
                background: darkcyan;
                color: white;
            }
            form>div{
                margin-bottom: 5px;
            }
        </style>
    </head>

    <body>

        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->


        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky" style="background: cadetblue; >
            <div class="container">
<<<<<<< HEAD:resources/views/training.blade.php
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="#" class="logo">Training<em> Studio</em></a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="#features">About</a></li>
                                <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                                <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                                <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                                <li class="main-button"><a href="#">Sign Up</a></li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
=======
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">Training<em> Studio</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#features">About</a></li>
                        <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                        <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                        <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                        <li class="main-button"><a href="#">Sign Up</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
>>>>>>> Div:resources/views/users/create_user.blade.php
            </div>
        </div>
        </div>
        </header>
        <!-- ***** Header Area End ***** -->


        <form class="row g-3 custom-form" action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password">
            </div>
            <div class="col-md-6">
                <label for="inputPhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="inputPhone" name="phone">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
            </div>
            <div class="col-md-12">
                <label for="inputSpecialization" class="form-label">Specialization</label>
                <input type="text" class="form-control" id="inputSpecialization" name="specialization">
            </div>
            <div class="col-md-6">
                <label for="inputGender" class="form-label">Gender</label>
                <select id="inputGender" class="form-select" name="gender">
                    <option selected>Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>




        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; 2020 Training Studio

                            - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a><br>

                            Distributed by <a rel="nofollow" href="https://themewagon.com" class="tm-text-link" target="_blank">ThemeWagon</a>

                        </p>

                        <!-- You shall support us a little via PayPal to info@templatemo.com -->

                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src={{asset("assets/js/jquery-2.1.0.min.js")}} ></script>

        <!-- Bootstrap -->
        <script src={{asset("assets/js/popper.js")}} ></script>
        <script src={{asset("assets/js/bootstrap.min.js")}} ></script>

        <!-- Plugins -->
        <script src={{asset("assets/js/scrollreveal.min.js")}} ></script>
        <script src={{asset("assets/js/waypoints.min.js")}} ></script>
        <script src={{asset("assets/js/jquery.counterup.min.js")}} ></script>
        <script src={{asset("assets/js/imgfix.min.js")}} ></script>
        <script src={{asset("assets/js/mixitup.js")}} ></script>
        <script src={{asset("assets/js/accordions.js")}} ></script>

        <!-- Global Init -->
        <script src={{asset("assets/js/custom.js")}} ></script>

    </body>
</html>



