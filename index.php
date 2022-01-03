<?php
if(isset($_POST['username'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = new mysqli($server, $username, $password);
    if(!$con){
        die("Connect Error ) " .mysqli_connect_error());
    }
    //echo"Successfuly connected";
     
     $username = $_POST['username'];
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     $cfpass = $_POST['cfpass'];

     
     
    $sql = "INSERT INTO  `test`.`registration` (`username`, `email`, `pass`, `cfpass`) VALUES ('$username', '$email', '$pass', '$cfpass')";
    
     echo $sql;

     if($con->query($sql) == true){
         echo"Successfully inserted";
     }else{
        echo"Error : $sql <br> $con->error";
     }

     $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1>Real Estate</h1>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#properties">Properties</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#" class="active">Register / Login</a></li>
                <li class="menu">Close</li>
            </ul>
            <div class="menu">Menu</div>
        </header>
        <section>
            <div class="banner">
                <div class="thumb">
                    <img src="bn1.jpg" alt="">
                    <img src="/bn2.jpg" alt="">
                    <img src="bn3.jpg" alt="">
                    <img src="bn4.jpg" alt="">
                </div>
                <div class="text">
                    <h2>Find your dream home today</h2>
                    <p>Welcome to our channel Dev AT</p>
                    <form>
                        <input type="text" name="srch" id="srch"
                        required placeholder="Find your dream home">
                        <button type="submit">Find</button>
                    </form>
                </div>
                <div class="prev"> &lt; </div>
                <div class="next"> &gt; </div>
                <div class="slide-nav">
                    <div class="nav-dot dot-active">1</div>
                    <div class="nav-dot">2</div>
                    <div class="nav-dot">3</div>
                    <div class="nav-dot">4</div>
                </div>
            </div>
            <div id="about">
                <h2>About Us</h2>
                <div class="content">
                    <div class="text">
                        <h3>Rent Pay</h3>
                        <p>Welcome to our website online properties management system.
                        </p>
                        <p>online management system
                        </p>
                    </div>
                    <div class="thumb">
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="company1.jpg" alt="">
                            <h3>Company01</h3>
                        </div>
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="company2.jpg" alt="">
                            <h3>Company02</h3>
                        </div>
                    </div>
                </div>
                <div class="Group Members">
                    <h3> Group Members</h3>
                    <div class="thumb">
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="partner1.jpg" alt="">
                            <h3>Member#1</h3>
                            <p>Name: Qammar Abbas
                            </p>
                            <p>Reg# 3792-FBAS/BSSE/F18(C)</p>
                            <div class="social">
                                <a href="https://www.facebook.com/Qammar.Abbas.906638"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/iradqammar"><i class="fa fa-instagram"></i></a>
                                <a href="https://twitter.com/QammarA54988493?t=tXOyCWy5U43noBBNd6cjAw&s=08"><i class="fa fa-twitter"></i></a>
                            </div>
                            
                        </div>
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="partner2.jpg" alt="">
                            <h3>Member#2</h3>
                            <p>Yawar Abbas
                            </p>
                            <p>Reg# 3836-FBAS/BSSE/F18(B)</p>
                            <div class="social">
                                <a href="https://www.facebook.com/athar.abbas.18041"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/yawar7205"><i class="fa fa-instagram"></i></a>
                                <a href="https://twitter.com/Yawar_72?t=TWUDeso9BWQYGpVh6pul9g&s=08"><i class="fa fa-twitter"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
<!-- ---------------------Properties--------------------------------------------- -->
            <div id="properties">
                <h2>Good Properties</h2>
                <div class="content">
                    <div class="box">
                        <img class="lazy" src="" data-src="properties1.jpg" alt="">
                        <div class="text">
                            <h3>Properties01</h3>
                            <span>$1990</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1300 sq ft</span>
                                <span>3 bedrooms</span>
                                <span>1 bathrooms</span>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="properties2.jpg" alt="">
                        <div class="text">
                            <h3>Properties02</h3>
                            <span>$1900</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1200 sq ft</span>
                                <span>2 bedrooms</span>
                                <span>1 bathrooms</span>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="properties3.jpg" alt="">
                        <div class="text">
                            <h3>Properties03</h3>
                            <span>$2500</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1250 sq ft</span>
                                <span>3 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="properties4.jpg" alt="">
                        <div class="text">
                            <h3>Properties04</h3>
                            <span>$2100</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1150 sq ft</span>
                                <span>3 bedrooms</span>
                                <span>1 bathrooms</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="properties5.jpg" alt="">
                        <div class="text">
                            <h3>Properties05</h3>
                            <span>$1700</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>900 sq ft</span>
                                <span>1 bedrooms</span>
                                <span>1 bathrooms</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="properties6.jpg" alt="">
                        <div class="text">
                            <h3>Properties06</h3>
                            <span>$2000</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1200 sq ft</span>
                                <span>3 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="box">
                        <img class="lazy" src="" data-src="properties1.jpg" alt="">
                        <div class="text">
                            <h3>Properties07</h3>
                            <span>$2300</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1500 sq ft</span>
                                <span>4 bedrooms</span>
                                <span>3 bathrooms</span>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="properties2.jpg" alt="">
                        <div class="text">
                            <h3>Properties08</h3>
                            <span>$2700</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1450 sq ft</span>
                                <span>5 bedrooms</span>
                                <span>3 bathrooms</span>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="properties3.jpg" alt="">
                        <div class="text">
                            <h3>Properties09</h3>
                            <span>$2400</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1400 sq ft</span>
                                <span>4 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="properties4.jpg" alt="">
                        <div class="text">
                            <h3>Properties10</h3>
                            <span>$2200</span>
                            <p>Easy and comfortable </p>
                            <div class="details">
                                <span>1000 sq ft</span>
                                <span>3 bedrooms</span>
                                <span>1 bathrooms</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="properties5.jpg" alt="">
                        <div class="text">
                            <h3>Properties11</h3>
                            <span>$2450</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1300 sq ft</span>
                                <span>5 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="properties6.jpg" alt="">
                        <div class="text">
                            <h3>Properties12</h3>
                            <span>$2350</span>
                            <p>Easy and comfortable</p>
                            <div class="details">
                                <span>1100 sq ft</span>
                                <span>4 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="services">
                <h2>Our Services</h2>
                <p>Welcome to our website online properties management system.
                </p>
                <div class="content">
                    <div class="card">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h3>Find Places Any Where In The World</h3>
                    </div>
                    <div class="card">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>We Have Agents With Experience</h3>
                    </div>
                    <div class="card">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <h3>Buy Or Rent Sales Properties</h3>
                    </div>
                    <div class="card">
                        <i class="fa fa-mixcloud" aria-hidden="true"></i>
                        <h3>Find Your New Place With Estate</h3>
                    </div>
                </div>
                <div class="content">
                    <div class="card">
                        <img class="lazy" src="" data-src="services1.jpg" alt="">
                        <h3>Save The Money</h3>
                        <p>Welcome to our Rent Pay website online management system
                        </p>
                    </div>
                    <div class="card">
                        <img class="lazy" src="" data-src="services2.jpg" alt="">
                        <h3>Cash Deposits</h3>
                        <p>Welcome to our Rent Pay website online management system
                        </p>
                    </div>
                    <div class="card">
                        <img class="lazy" src="" data-src="services3.jpg" alt="">
                        <h3>Take Your Key</h3>
                        <p>Welcome to our Rent Pay website online management system
                        </p>
                    </div>
                </div>
                <h2>Client Reviews</h2>
                <div class="content">
                    <div class="card circle">
                        <img class="lazy" src="" data-src="review1.jpg" alt="">
                        <div class="text">
                            <h3>Fancis Wrong</h3>
                            <h4>BTV Company</h4>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>"Welcome to our Rent Pay website online management system"
                            </p>
                        </div>
                    </div>
                    <div class="card circle">
                        <img class="lazy" src="" data-src="review2.jpg" alt="">

                        <div class="text">
                            <h3>Alexandra Miley</h3>
                            <h4>BTV Company</h4>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>"Welcome to our Rent Pay website online management system"
                            </p>
                        </div>
                    </div>
                    <div class="card circle">
                        <img class="lazy" src="" data-src="review3.jpg" alt="">

                        <div class="text">
                            <h3>Shara Miley</h3>
                            <h4>BTV Company</h4>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>"Welcome to our Rent Pay website online management system"
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact">
                <h2>Contact Us</h2>
                <div class="content">
                    <form action="index.php" method = "post">
                        <input type="text" name="name" id="name"
                        required placeholder="Your Name" require>
                        <input type="email" name="mail" id="mail"
                        required placeholder="Your Email" require>
                        <input type="tel" name="tel" id="tel"
                        required placeholder="Phone Number" require>
                        <textarea name="mess" id="mess" rows="7"
                        placeholder="Your Message Here..."></textarea>
                        <button type="submit">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14145757.205192171!2d60.33282340422357!3d30.04965054990201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1639765504210!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <h3><i class="fa fa-comments"></i> COMMUNICATION</h3>
                        <p>For General Queries, Including Property Sales And Constructions, Please Email Us At <span>abbasqammar019@gmail.Com</span></p>
                    </div>
                    <div class="text">
                        <h3><i class="fa fa-life-ring"></i> TECHNICAL SUPPORT</h3>
                        <p>We Are Ready To Help! If You Have Any Queries Or Issues, Contact Us For Support <span>+92 3039343930</span></p>
                    </div>
                    <div class="text">
                        <h3><i class="fa fa-map"></i> OTHERS</h3>
                        <p>For General Queries, Including Property Sales And Constructions, Please Email Us At <span>abbasqammar019@gmail.Com</span></p>
                    </div>
                </div>
            </div>

        </section>

    </div>

    <footer>
        <div class="content">
            <div class="box">
                <h2>WHO WE ARE</h2>
                <p>Welcome to our Rent Pay Website online management system
                </p>
                <h3>Trusted by more than 1000+ people</h3>
            </div>
            <div class="box">
                <h2>CONTACT US</h2>
                <h3><i class="fa fa-map-marker"></i> Location</h3>
                <p>PD_469 Nazim Abad, Pandora, Rawalpindi</p>
                <h3><i class="fa fa-phone"></i> Phone</h3>
                <p>+92 3039343930</p>
                <h3><i class="fa fa-envelope-o"></i> Email</h3>
                <p>abbasqammar019@gmail.com</p>
            </div>
            <div class="box">
                <h2>LATEST NEWS</h2>
                <h3><i class="fa fa-twitter"></i> twitter</h3>
                <p>online management system
                </p>
                <h3><i class="fa fa-twitter"></i> twitter</h3>
                <p>online management system
                </p>
            </div>

        </div>
        <div class="row">
            <p>&copy; 2021 Rent Pay . All Rights Reserved | Design by <span>Qammar</span></p>
            <div class="social">
                <a href="#"><i class="fa fa-facebook"></i> facebook</a>
                <a href="#"><i class="fa fa-twitter"></i> twitter</a>
                <a href="#"><i class="fa fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa fa-linkedin"></i> linkedin</a>
            </div>
        </div>
    </footer>

    <div class="login-container">
        <i class="fa fa-times" id="btn-close"></i>
        <div class="login-box">
            <form>
                <h2>Login</h2>
                <label for="logmail">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="email" name="logmail" id="logmail"
                    required placeholder="Your Email" require>
                </label>
                <label for="logpass">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="logpass" id="logpass"
                    required placeholder="Your Password" require>
                </label>

                <label for="chk" class="check">
                    <input type="checkbox" name="chk" id="chk">
                    Remember me
                </label>
                <button type="submit">Login</button>
                <p>Or login with</p>
                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                <a href="#" class="btn btn-gg"><i class="fa fa-google"></i> Google</a>
                <p>Not a member? <a href="#" class="next-log">Register now</a></p>
            </form>
        </div>
        <div class="login-box show" id="res">
            <form action="index.php" method="post">
                <h2>Register</h2>
                <div>
                    <label for="username">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="username" id="username"
                        required placeholder="User Name" require>
                    </label>
                </div>
                <div>
                    <label for="email">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" id="email"
                        required placeholder="Your Email" require>
                    </label>
                </div>
                <div>
                    <label for="pass">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="pass" id="pass"
                        required placeholder="Your Password" require>
                    </label>
                </div>
                <div>
                    <label for="cfpass">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="cfpass" id="cfpass"
                        required placeholder="Confirm Password" require>
                    </label>
                </div>
                <div>
                    <label for="chk1" class="check">
                        <input type="checkbox" name="chk1" id="chk1">
                       I accept <span>Terms of User</span> & <span>Privacy Pollicy</span>
                    </label>
                </div>

                <button type="submit">Register</button>
                <p>Already have an account? <a href="#" class="next-log">Login now</a></p>
            </form>
        </div>
    </div>
    <div class="top">
        <a href="#"> &#11165; </a>
    </div>
    <script>
        // ------------Menu Toggle------------------
        const menuToggle = document.querySelectorAll('header .menu');
        const menu = document.querySelector('header ul');
        menuToggle.forEach(item=>{
            item.addEventListener('click', ()=>{
                menu.classList.toggle('menu-toggle');
            })
        })


        // --------------Login / Register---------------
        const loginMenu = document.querySelector('header .active')
        const loginShow = document.querySelector('.login-container');
        const btnClose = document.querySelector('#btn-close');
        loginMenu.addEventListener('click', ()=>{
            loginShow.style.clipPath = `circle(70.7% at 50% 50%)`;
        })
        btnClose.addEventListener('click', ()=>{
            loginShow.style.clipPath = `circle(0 at 50% 50%)`;
        })

        const btnToggle = document.querySelectorAll('.next-log');
        const resForm = document.querySelector('#res');
        btnToggle.forEach(item =>{
            item.addEventListener('click', ()=>{
                resForm.classList.toggle('show');
            })
        })

        // -------slideshow--------------
        let images, dots, prev, next, banner;
        banner = document.querySelector('.banner');
        images = document.querySelectorAll('.banner img');
        dots = document.querySelectorAll('.banner .nav-dot');
        prev = document.querySelector('.banner .prev');
        next = document.querySelector('.banner .next');

        let slideIndex = 0;
        showSlide(slideIndex);
        function showSlide(n){
            if(slideIndex > images.length-1){
                slideIndex = 0;
            }
            if(slideIndex < 0){
                slideIndex = images.length-1;
            }
            let i;
            for(i=0; i<images.length; i++){
                images[i].style.display = "none";
            }
            for(i=0; i<dots.length; i++){
                dots[i].className = dots[i].className.replace(" dot-active","");
            }
            images[slideIndex].style.display = "block";
            dots[slideIndex].className += " dot-active";
        }
        dots.forEach((item, index)=>{
            item.addEventListener('click', ()=>{
                showSlide(slideIndex = index);
            })
        });
        prev.addEventListener('click',()=>{
            showSlide(slideIndex -= 1);
        });
        next.addEventListener('click',()=>{
            showSlide(slideIndex += 1);
        });
        let run;
        function autoSlide(){
            run = setInterval(()=>{
                showSlide(slideIndex += 1);
            },2000)
        }
        autoSlide();
        banner.addEventListener('mouseover', ()=>{
            clearInterval(run);
            run = null;
        });
        banner.addEventListener('mouseout', ()=>{
            autoSlide();
        });

    //    lazy load------------------------

        document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages = document.querySelectorAll("img.lazy");
        var lazyloadThrottleTimeout;

        function lazyload () {
            if(lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if(img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        img.style.transform = `scale(1)`;
                        img.style.transition = `2s`;

                    }
                });
                if(lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        });
    </script>

</body>
</html>
