
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />

  </head>
  <body>
    <?php 
        $email =  $body = $name = "";
        if(isset($_POST['submit'])){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $email = $_POST["email"];
              $name = $_POST["name"];
              $body = $_POST["body"];
              
              $nameErr;
              $emailErr;
              $bodyErr;
              $message;
              $success;
              if(empty($name) && !empty($email) && !empty($body)){
                 $nameErr="Please enter a name";
                 $message="please fill all details";
              }else if(!empty($name) && empty($email) && !empty($body)){
                $emailErr="please enter email";
                $message="please fill all details";
              }else if(!empty($name) && !empty($email) && empty($body)){
                $emailErr="please enter message";
                $message="please fill all details";
              }else if(empty($name) && empty($email) && empty($body)){
                 $nameErr="Please enter a name";
                 $emailErr="please enter email";
                 $bodyErr="please enter message";
                 $message="please fill all details";
              }else{
                $success="Thank you for submitting!!";
              }
        }
      }
    ?>
    <nav>
      <div>
        <img src="assets/Logo.png" class="web-logo" />
      </div>
      <div class="mobile-sec">
        <!-- <input type="checkbox" id="burger-menu" /> -->
        <div class="mobile-nav-btn icon" >
        
          <i class="fa-solid fa-bars"  ></i>
       
        </div>
        <div class="mobile-links">
          <div class="middle">
            <a href="#">HOME</a>
            <a href="#">SERVICES</a>
            <a href="#">SELL</a>
            <a href="#">RENT</a>
          </div>
          <div class="end">
            <a href="#">SIGN UP</a>
            <a href="#" class="primary">SIGN IN</a>
          </div>
      </div>
      </div>
      <div class="links">
        <div class="middle">
          <a href="#">HOME</a>
          <a href="#">SERVICES</a>
          <a href="#">SELL</a>
          <a href="#">RENT</a>
        </div>
        <div class="end">
          <a href="#">SIGN UP</a>
          <a href="#" class="primary">SIGN IN</a>
        </div>
      </div>
    </nav>

    <div class="banner">
      <h2>UNLOCK THE DOOR TO</h2>
      <h2>YOUR IDEAL HOME</h2>
      <p class="banner-content">
        Browse, explore, and find the perfect property with our innovative
        website. Seamlessly connect with sellers, agents, and a vibrant
        community of home seekers. Your dream home awaits!
      </p>
      <div class="count">
        <div class="content">
          <div class="header">
            <div class="header-content">
              <h4>Location</h4>
              <img src="assets/bxs_map.png" style="width: 1.1em; height: 1em" />
            </div>
          </div>
          <div class="summary">Select your city</div>
        </div>
        <div class="content">
          <div class="header">
            <div class="header-content">
              <h4>Price</h4>
              <img src="assets/price.png" style="width: 1.1em; height: 1em" />
            </div>
          </div>
          <div class="summary">$10.000- $50.000</div>
        </div>
        <div class="content">
          <div class="header">
            <div class="header-content">
              <h4>Type</h4>
              <img
                src="assets/down-arrow.png"
                style="width: 1.1em; height: 1em"
              />
            </div>
          </div>
          <div class="summary">Select Your property</div>
        </div>
        <div class="house">
          <img src="assets/home-search.png" alt="" />
        </div>
      </div>
      <div class="logo-container">
        <div class="logos">
          <div class="logo">
            <img src="assets/ion_home.png" alt="" />
            <p>+500k</p>
          </div>
          <div class="logo">
            <img src="assets/maki_village.png" alt="" />
            <p>+200k</p>
          </div>
          <div class="logo">
            <img src="assets/material-symbols_apartment.png" alt="" />
            <p>+500k</p>
          </div>
        </div>
      </div>
    </div>
     <section class="services " style="padding: 3em 0em; margin-bottom: 3em;">
      <h3 class="text-header">Our Services</h3>
      <p class="summary-text">
        With us, you can expect a transparent and trustworthy partnership
      </p>
      <div class="cards">
         <div class="card primary-card" style="width: 311px;display: flex; flex-direction: column; align-items: center; padding: 14px; height: 220px;">
            <img src="assets/home.png"/>
            <div class="content-cards" style="margin-top: 4px;padding: 8px;">
            <h4 style="font-size: 24px;">Property Insurance</h4>
            <p style="width:305px; margin-top: 12px;flex: end;">Protect your home and peace of mind with our comprehensive property insurance coverage.</p>
            </div>
         </div>
       
        <div class="card secondary-card" style="width: 305px;display: flex; flex-direction: column; align-items: center; padding: 12px; background-color: white;height: 220px;">
           <img src="assets/payment.png"/>
            <div class="content-cards" style="margin-top: 12px; color: black;">
            <h4 class="text-header">Easy Payment</h4>
            <p style="width:305px; margin-top: 12px;flex:end">Experience hassle-free payments with our easy payment options.. Simplify your life and manage your finances effortlessly.</p>
            </div>
        </div>
           <div class="card secondary-card" style="width: 305px;display: flex; flex-direction: column; align-items: center; padding: 12px; background-color: white;height: 220px;">
           <img src="assets/quickaccess.png"/>
            <div class="content-cards" style="margin-top: 12px; color: black;">
            <h4 class="text-header">Quick Process</h4>
            <p style="width:305px; margin-top: 12px;flex:end;">Experience swift and efficient service with our quick process. Say goodbye to long waits and hello to instant results</p>
            </div>
        </div>
      </div>
       </div>
    </section>

    <section class="services" style="background-color: white; margin-bottom: 3em;">
      <h3 class="text-header">Our Services</h3>
      <p class="summary-text">
        Get your dream property right now and get best seller
      </p>
      <div class="cards">
        <div class="card primary-card">
          <img src="assets/Rectangle1.png" alt="" class="card-image" />
          <div style="margin-left: 10px">
            <p style="color: white">IDR 200.000.000</p>
            <p style="color: white">Jl. Soekarno Hatta, Jakarta</p>
            <p style="color: #ffac33">Sell</p>
          </div>
          <div class="icons-container">
            <div class="utilites">
              <div class="top">
                <i class="fa-solid fa-bed"></i>
                <span>5</span>
              </div>
              <p style="color: white">Bedroom</p>
            </div>
            <div class="utilites">
              <div class="top">
                <i class="fa-solid fa-toilet-paper"></i>
                <span>3</span>
              </div>
              <p style="color: white">Bathroom</p>
            </div>
            <div class="utilites" style="flex: 0.75">
              <div class="top">
                <i class="fa-solid fa-globe"></i>
                <span>360m</span>
              </div>
              <p style="color: white">Home area</p>
            </div>
          </div>
        </div>
        <div class="card secondary-card">
          <img src="assets/Rectangle2.png" alt="" class="card-image" />
          <div style="margin-left: 10px">
            <p>IDR 200.000.000</p>
            <p>Jl. Soekarno Hatta, Jakarta</p>
            <p style="color: #ffac33">Sell</p>
          </div>
          <div class="icons-container">
            <div class="utilites">
              <div class="top secondary">
                <i class="fa-solid fa-bed"></i>
                <span>5</span>
              </div>
              <p>Bedroom</p>
            </div>
            <div class="utilites">
              <div class="top secondary">
                <i class="fa-solid fa-toilet-paper"></i>
                <span>3</span>
              </div>
              <p>Bathroom</p>
            </div>
            <div class="utilites" style="flex: 0.75">
              <div class="top secondary">
                <i class="fa-solid fa-globe"></i>
                <span>360m</span>
              </div>
              <p>Home area</p>
            </div>
          </div>
        </div>
        <div class="card secondary-card">
          <img src="assets/Rectangle3.png" alt="" class="card-image" />
          <div style="margin-left: 10px">
            <p>IDR 200.000.000</p>
            <p>Jl. Soekarno Hatta, Jakarta</p>
            <p style="color: #ffac33">Sell</p>
          </div>
          <div class="icons-container">
            <div class="utilites">
              <div class="top secondary">
                <i class="fa-solid fa-bed"></i>
                <span>5</span>
              </div>
              <p>Bedroom</p>
            </div>
            <div class="utilites">
              <div class="top secondary">
                <i class="fa-solid fa-toilet-paper"></i>
                <span>3</span>
              </div>
              <p>Bathroom</p>
            </div>
            <div class="utilites" style="flex: 0.75">
              <div class="top secondary">
                <i class="fa-solid fa-globe"></i>
                <span>360m</span>
              </div>
              <p>Home area</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="services " style="padding: 3em 0em;">
      <h3 class="text-header">Feature</h3>
      <p class="summary-text">
        Get your dream feature property right now and get best seller
      </p>
      <div class="buttons" style="text-align: center; margin-top: 18px;">
  <a href="#" class="primary" style="text-decoration: none; padding: 9px 16px;">VIEW ALL</a>
      </div>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
         <div class="container">
            <div class="content-cards">
              <h3>Crouch Bed</h3>
              <p style="margin-top: 10px; margin-bottom: 20px;">Minimalist House</p>
              <h4>IDR 200jt</h4>
              <a href="#" class="primary" style="text-decoration: none; padding: 4px 12px; font-size: 14px; margin-top: 6px;">VIEW </a>
            </div>
         </div>
      </div>
      <div class="swiper-slide">
      <div class="container">
            <div class="content-cards">
              <h3>Crouch Bed</h3>
              <p style="margin-top: 10px; margin-bottom: 20px;">Minimalist House</p>
              <h4>IDR 200jt</h4>
              <a href="#" class="primary" style="text-decoration: none; padding: 4px 12px; font-size: 14px; margin-top: 6px;">VIEW </a>
            </div>
         </div>
      </div>
      <div class="swiper-slide">
     <div class="container">
            <div class="content-cards">
              <h3>Crouch Bed</h3>
              <p style="margin-top: 10px; margin-bottom: 20px;">Minimalist House</p>
              <h4>IDR 200jt</h4>
              <a href="#" class="primary" style="text-decoration: none; padding: 4px 12px; font-size: 14px; margin-top: 6px;">VIEW </a>
            </div>
         </div>
      </div>
      <div class="swiper-slide">
       <div class="container">
            <div class="content-cards">
              <h3>Crouch Bed</h3>
              <p style="margin-top: 10px; margin-bottom: 20px;">Minimalist House</p>
              <h4>IDR 200jt</h4>
              <a href="#" class="primary" style="text-decoration: none; padding: 4px 12px; font-size: 14px; margin-top: 6px;">VIEW </a>
            </div>
         </div>
      </div>
      <div class="swiper-slide">
      <div class="container">
            <div class="content-cards">
              <h3>Crouch Bed</h3>
              <p style="margin-top: 10px; margin-bottom: 20px;">Minimalist House</p>
              <h4>IDR 200jt</h4>
              <a href="#" class="primary" style="text-decoration: none; padding: 4px 12px; font-size: 14px; margin-top: 6px;">VIEW </a>
            </div>
         </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
            <div class="content-cards">
              <h3>Crouch Bed</h3>
              <p style="margin-top: 10px; margin-bottom: 20px;">Minimalist House</p>
              <h4>IDR 200jt</h4>
              <a href="#" class="primary" style="text-decoration: none; padding: 4px 12px; font-size: 14px; margin-top: 6px;">VIEW </a>
            </div>
         </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
      
    </section>

    <section class="contact">
      <div class="left">
        <h1>Need Consultation?</h1>
        <h1>Contact us, we are</h1>
        <h1> ready to help</h1>

        <div class="contact-part">
          <h3>Contact</h3>
          <div style="display: flex; align-items: center;gap: 5px;">
            <img src="assets/grommet-icons_map.png" />
            <span>Jl. Jakarta Bandung, Jakarta</span>
          </div>
          <div style="display: flex; align-items: center;gap: 5px;">
            <img src="assets/entypo_old-phone.png" />
            <span>021 - 3943943</span>
          </div>
          <div style="display: flex; align-items: center;gap: 5px;">
            <img src="assets/ic_baseline-email.png" />
            <span>myproperty@gmail.com</span>
          </div>
        </div>
        <div class="social-media">
         <h3>Social Media</h3>
          <div style="display: flex; align-items: center; gap: 5px;">
            <img src="assets/ri_instagram-fill.png" />
            <span>@myproperty</span>
          </div>
          <div style="display: flex; align-items: center; gap: 5px;">
            <img src="assets/mdi_twitter.png" />
            <span>@myproperty</span>
          </div>
          <div style="display: flex; align-items: center; gap: 5px;">
            <img src="assets/uil_facebook.png" />
            <span>My Property</span>
          </div>
        </div>

      </div>
      <div class="right">
        <div class="contact-card">
          <form class="contact-form"  method="post"  action="#form" id="form">
            <div class="text-header">Any Question?</div>
            <input type="text" placeholder="Enter your name" name="name"/>
            <span style="color: red; "><?php if(isset($nameErr)){echo "*".$nameErr;}?></span>
            <input type="email" placeholder="Enter your email" name="email"/>
            <span style="color: red; "><?php if(isset($emailErr)){echo "*".$emailErr;}?></span>
            <textarea placeholder="Message..." cols="30" rows="5" name="body"></textarea>
            <span style="color: red; "> <?php if(isset($bodyErr)){echo "*".$bodyErr;}?></span>
            <input type="submit" value="send" class="sendbtn" name="submit">
             <span style="color: red; text-align:center; margin-top:10px;"><?php if(isset($message)){echo "*".$message;}?></span>
             <span style="color: green; text-align:center; margin-top:10px; "> <?php if(isset($success)){echo $success;}?></span>
          </form>
        </div>
      </div>
    </section>
    <div class="footer" style="padding: 10px 0px;  display: grid; place-items:center;">
      <img src="assets/Logo.png" alt="logo" class="web-logo" style="margin-left: 0px;"/>
      <p style="font-size: small;">Copyright 2023 - Kodkustik All Right Reserved</p>
    </div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

       <script
      src="https://kit.fontawesome.com/ae4b03396b.js"
      crossorigin="anonymous"
    ></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="script.js"></script>
  </body>
</html>
