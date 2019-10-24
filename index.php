<?php
include("auth.php"); //include auth.php file on all secure pages ?>
<!doctype html>
<html lang="en">

<head>
<link href="//db.onlinewebfonts.com/c/465b1cbe35b5ca0de556720c955abece?family=AbolitionW00-Regular" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Foodilite</title>
</head>



<body data-aos-easing="ease-out-back" data-aos-duration="1500" data-aos-delay="0">

    <nav class="navbar navbar-expand-md navbar-dark position-sticky-top fixed-top">
        <div class="canvas-area">
            <div class="head1">
                <a class="navbar-logo" href="#"><img src="img/logo.png" style="height:35px; width: 240px;padding-top:5px"> </a></div>
            <div class="flot">
                <button class="navbar-toggler" type="button " style="float: right" data-toggle="collapse"
                    data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>

            <div class="collapse navbar-collapse text-right" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menus">menus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reservations">reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><p> <?php echo $_SESSION['email']; ?></p></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="landing">
        <div class="opac">

            <div class="container-fluid">
                <div class="row" id="pop1">
                    <div class="col-sm-12" id="par1" data-aos=>
                        <h3 class="stylish" style="color:chartreuse" data-aos=fade-right>First we eat</h3>
                        <h2 style="color: aliceblue; font-size: 28px " data-aos=fade-up-right>
                        </h2>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="second">
            <div class="second-head" data-aos=zoom-out>
                <h1>Welcome to our site</h>
            </div>
            <div class="second-para" data-aos=zoom-in>
                <p class="space">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                    of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                    Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                    their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate
                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                injected humour, or non-characteristic words etc.<br>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" id="row1">

            <div class="col-md-6 col-sm-6 col-xs-12" id="pad1">
                <div class="food-img1">
                    <div class="food-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    delicious food
                                </div>
                                <div class="food1-content">
                                    Amazing food prepared well
                                </div>
                                <div class="view">
                                    <button type="button" class="btn btn-outline-light btn-sm">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12" id="pad2">
                <div class="food-img2">
                    <div class="food-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    Excellent quality
                                </div>
                                <div class="food1-content">
                                    Made by the best
                                </div>
                                <div class="view">
                                    <button type="button" class="btn btn-outline-light btn-sm">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------- Start Cuisines---------->

    <div class="container-fluid">


        <div class="second-head" data-aos=zoom-out>
            <h1>Wide range of cuisines to choose from</h>
        </div>
        <div class="row" id="row2">



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-1">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    Turkish
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-2">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    italian
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-3">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    chinese
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-4">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    korean
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid">
        <div class="row" id="row2">



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-5">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    french
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-6">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    mexican
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-7">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    american
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-8">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    indian
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>




    <!----------End Cuisines---------->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scrollbar.js"></script>


    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: '1200'
        });
    </script>

    <div class="scroll-bar">
        <div class="scroll-status"></div>
    </div>


</body>

</html>
