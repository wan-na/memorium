<?php
    include_once 'administrator/class/Connection.php';
    include_once 'administrator/class/Logo.php';
    include_once 'administrator/class/Brand.php';
    include_once 'administrator/class/LandingPage.php';
    include_once 'administrator/class/User.php';
    $connection = new Connection();
    $Logo = new Logo();
    $Brand = new Brand();
    $LandingPage = new LandingPage();
    $User = new User();
    $connection->con();
    $GetLogo = $Logo->GetLogo();
    $GetBrand = $Brand->GetBrand();
    $GetEstablishement = $User->GetEstablishement();
    $GetFooter = $LandingPage->GetFooter();
    $GetWebDescription = $LandingPage->GetWebDescription();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/landing.css?v=14">
        <link rel="stylesheet" href="/../style/style.css?v=7">
    <title>Memorial Alliance</title>
   
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="loading-icon-landing">
        <div class="center">
             <div class="span1load"></div>
             <div class="span2load"></div>
        </div>
    </div> 
    <div class="load-body">
        <header class="headerssss" id="body-headersss">
                <nav class="navbarssss">
                <div class="titles">
                        <a href="../" class="nav-logos"><img id="logosss" src="administrator/images/logo/<?php echo $GetLogo->logo; ?>" alt=""> </a>
                        <a href="../" class="nav-logos" id="title-texts"><?php echo $GetBrand->title; ?></a>
                </div>
                    <ul class="nav-menussss">
                        <li class="nav-itemss">
                            <a href="#home" class="nav-linkss">home</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="#about" class="nav-linkss">about</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="#funerals" class="nav-linkss">funerals</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="#contact" class="nav-linkss">contact</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="users/sign-up" class="nav-linkss">register</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="users/login" class="nav-linkss">login</a>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <i class="fa fa-bars"></i>
                    </div>
                </nav>
        </header>
        <main>
            <section class="container-body hre body-cont1" id="home">
                    <div class="container-div container-body1">
                    <div class="center-content">
                        <h1><?php echo $GetBrand->title; ?></h1>
                        <span><i><?php echo $GetBrand->description; ?></i></span><br>
                        <a href="#funerals"><button id="btn-head">Find Funerals</button></a>
                    </div>
                </div>
            </section>
            <section class="container-body hre body-cont2" id="about">
                <div class="container-div container-body2">
                    <div class="center-content2">
                        <h1><?php echo $GetWebDescription->title; ?></h1>
                        <div class="cont2-cont">
                            <p><i><?php echo $GetWebDescription->description; ?></i></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-body body-cont3 list_funeral" id="funerals">
                <div class="container-body3">
                    <div class="center-content3">
                        <h1>funerals</h1>
                        <div class="cont3-cont">
                            <?php if($GetEstablishement): ?>
                                <?php foreach($GetEstablishement as  $display): ?>
                                    <div class="funerals-conts" id="view" data-id="<?php echo $display['id']; ?>">
                                        <img src="../administrator/images/users/<?php echo $display['img']; ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="contact">
                <div class="footer-header">
                    <ul>
                        <li class="nav-itemss2">
                            <a href="#funerals" >funerals</a>
                        </li>
                        <li class="nav-itemss2">
                            <a href="users/sign-up" >register</a>
                        </li>
                        <li class="nav-itemss2">
                            <a href="users/login" >login</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-body" id="contact">
                    <h1>contact</h1>
                    <div class="contact-cont">
                        <a href="tel:<?php echo $GetFooter->contact; ?>" style="text-decoration:underline;"><?php echo $GetFooter->contact; ?></a>
                    </div>
                    <div class="contact-cont">
                        <a href="<?php echo $GetFooter->facebook; ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $GetFooter->instagram; ?>"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $GetFooter->twitter; ?>"><i class="fa fa-twitter"></i></a>
                    </div>
                    <br>
                    <div class="policy">
                        <p>&copy; Copyright 2022 <?php echo $GetBrand->title; ?></p>
                        <a href="view/data-privacy" target='_blank'>PRIVACY POLICY</a>
                    </div>
                </div>
            </footer>
        </main>
    </div>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menussss");

        hamburger.addEventListener("click", mobileMenu);
        
        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }
        $(document).on('click','.container-body',function(){
            $(".nav-menussss").removeClass('active');
        });
         window.addEventListener("load", function(){
            $(".loading-icon-landing").fadeOut();
            
            setTimeout(function(){
            $(".load-body").show();
            }, 1000);

        }); 

        var scrollnum = 0;
        window.addEventListener("scroll",function(){
            var scrolltop = window.pageYOffset || document.documentElement.scrollTop;

            if(scrolltop > scrollnum){
                $(".nav-menu").removeClass('active');
            }else{
                $(".nav-menu").removeClass('active');
            }
            scrollnum = scrolltop;
        });
        //smoth
        $(".nav-menu a").on('click',function(e){
            if(this.hash !==''){
                e.preventDefault();

                const hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                },200
                );
            }
        });
        $(document).on('click','#view',function(){
            var view = $(this).attr("data-id");
            window.location.href="view/funerals?id="+view
        });
    </script>
</body>
</html>