<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

<!--swiper css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!--font link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!--css file link-->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- header section starts-->

<section class="header">
    <a href="home.php" class="logo">Sky-Rider</a>
    <nav class="navbar">
          <a href="home.php">Home</a>
          <a href="about-us.php">About Us</a>
          <a href="contact-us.php">Contact Us</a>
          <a href="register.php"> Register</a>
        <a href="login.php">User Login</a>
        <a href="admin/admin-login.php">Admin Login</a>
      </nav>
</section>

<!-- header section ends-->

<section class="home">
    <div class="home-slide">
        <div class="w">
            <div class="slide" style="background:url(img/10.jpg)" no-repeat>
                <div class="content">
                    <span>explore, travel, discover</span>
                    <h3>Travel around the world</h3>
                    <a href="register.php" class="btn">discover the world</a>
                </div>
            </div>
            <div class="slide" style="background:url(img/88.jpg)" no-repeat>
                <div class="content">
                    <span>explore, travel, discover</span>
                    <h3>Discover new places</h3>
                    <a href="register.php" class="btn">discover the world</a>
                </div>
            </div>
            <div class="slide" style="background:url(img/55.jpg)" no-repeat>
                <div class="content">
                    <span>explore, travel, discover</span>
                    <h3>Make your tour worthwhile</h3>
                    <a href="register.php" class="btn">discover the world</a>
                </div>
            </div>flight-booking
        </div>
        
         
    </div>
</section>




<section class="home2">
      <h2 class="heading-title">Find the Perfect Flight for You</h2>
    <form method="post" action="register.php" class="search-form">
        <div class="flex">
            <div class="inputBox">
                <span for="departure">Departure</span>
                <input type="text" id="departure" placeholder="City or airport">
            </div>
            <div class="inputBox">
                <span for="destination">Destination</span>
                <input type="text" id="destination" placeholder="City or airport">
            </div>
            <div class="inputBox">
                <span for="departure-date">Departure Date</span>
                <input type="date" id="departure-date">
            </div>
        <a href="register.php" class="btn">Search Flight</a>
        </div> 
        
    </form>
</section>

 <!--home package starts-->

<section class="home-packages">

<h1 class="heading-title">Our packages</h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="img/1233.jpg" alt="" width="300">
        </div>

        <div class="content">
            <h3>advature & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perferendis iure nihil incidunt unde animi repellat dicta ipsum architecto facere consequuntur provident ut est at, <br>
                 ratione quidem corrupti, aperiam quisquam voluptate!</p>
            <a href="register.php" class="btn">Book now</a>
        </div> <!--content-->
    </div>  <!--box-->       



    <div class="box">
        <div class="image">
            <img src="img/1233.jpg" alt="" width="300">
        </div>

        <div class="content">
            <h3>advature & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perferendis iure nihil incidunt unde animi repellat dicta ipsum architecto facere consequuntur provident ut est at, <br>
                 ratione quidem corrupti, aperiam quisquam voluptate!</p>
            <a href="register.php" class="btn">Book now</a>
        </div> <!--content-->
    </div>  <!--box-->       


    <div class="box">
        <div class="image">
            <img src="img/1233.jpg" alt="" width="300">
        </div>

        <div class="content">
            <h3>advature & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perferendis iure nihil incidunt unde animi repellat dicta ipsum architecto facere consequuntur provident ut est at, <br>
                 ratione quidem corrupti, aperiam quisquam voluptate!</p>
            <a href="register.php" class="btn">Book now</a>
        </div> <!--content-->
    </div>  <!--box--> 

    </section>


   <!-- footer starts-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="register.php"> <i class="fas fa-angle-right"></i>Register</a>
            <a href="contact-us.php"> <i class="fas fa-angle-right"></i>contact Us</a>
        </div>

        <div class="box">   
            <h3>Extra Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i>FAQS</a>
            <a href="about-us"> <i class="fas fa-angle-right"></i>about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i>privacy pilocy</a>
            <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">   
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+2-011-2532-7442</a>
            <a href="#"> <i class="fas fa-email"></i>fly@gmail.com</a>
        </div>

        <div class="box">   
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
        </div>
    </div>

    <div class="credit"> Created by <span>our professional group</span>  <br>
	  &copy;2023 Airline Reservation System
	</div>
    
</section>

<!-- footer ends--> 




		

		

	<footer>
		
	</footer>

<!-- swiper js link--> 
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!--js file link--> 
<script scr="js.js"></script>
    
</body>
</html>