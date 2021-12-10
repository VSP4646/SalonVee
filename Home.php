<?php
  //  include('session.php');
?>
<!--ITN-264-2W1
    Victor Phillips
    Project 1: Client Website Build
    10/05/2020
      -->

      <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Salon V Boutique</title>
          <link rel="stylesheet" href="style.css" />
          <link rel="stylesheet" href="bootstrap.css" />
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        </head>
        <body>
          <br>
          <div class="container-fluid">
            <!-- Navigation Bar-->
            <nav
              class="navbar-expand-lg navbar-light"
              style="background-color: #3b81b3"
            >
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <a
                    href="Home.php"
                    class="navbar-brand"
                    style="color: aliceblue"
                    ><mark>HOME</mark></a
                  >
                  <button class="navbar-toggler" data-target="#navbarMenu">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  <li class="nav-tab">
                    <a href="About.html" class="navbar-brand" style="color: aliceblue"
                      >ABOUT</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href="Services.html"
                      class="navbar-brand"
                      style="color: aliceblue"
                      >SERVICES</a
                    >
                  </li>
                  <li class="nav-item">
                    <a 
                      href="Appointments.php"
                      class="navbar-brand"
                      style="color: aliceblue"
                      >APPOINTMENTS</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="BLOG.html" class="navbar-brand" style="color: #f4f7fa"
                      >BEFORE & AFTER</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href="Location.html"
                      class="navbar-brand"
                      style="color: aliceblue"
                      >LOCATION</a
                    >
                  </li>
				  <li class="nav-item">
                    <a
                      href="index.php"
                      class="navbar-brand"
                      style="color: aliceblue"
                      ><i class="fa fa-sign-in" aria-hidden="true"></i></a
                    >					
                  </li>
				  <li class="nav-item">
				  <a
                      href="user.php"
                      class="navbar-brand"
                      style="color: aliceblue"
                      ><i class="fa fa-user" aria-hidden="true"></i></a
                    >
				  </li>
				  <li class="nav-item">
				  <a
                      href="logout.php"
                      class="navbar-brand"
                      style="color: aliceblue"
                      ><i class="fa fa-sign-out" aria-hidden="true"></i></a
                    >
				  </li>
                </ul>
              </div>
            </nav>
          </div>
          
          <!-- Top Container -->
          <div class="container-fluid">
            <div class="row">
              <div class="col wf">
                      <!-- Top Container -->
            <section class="container-fludio">
              <header class="showcase">
                <!-- A header that names the business and gives a one liner about the business -->
                <h1 class="btn">
                  SALON V <span style="font-size: 55%">& BOUTIQUE</span>
                </h1>
                <h1 class="btn" style="font-size: 250%">
                <span class='hi'>We can</span><span class="text" style="color: #80171D"></span><span class="cursor">_</span>
                </h1>
                 
              </header>
            </section>
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col wf">
                <!-- Boxes Scetion -->
                <section class="box ">
                  <div class="main-nav">
                <h1 style="text-align: center; background-color:  #1411ad;; color: white;">CONTACT INFO</h1>
                <p style="font-size: 30px">756 N Main St Brockton, MA 02301
                  <p style="font-size: 35px;">Phone#: 508-580-5001
                  <p style="font-size: 35px;">Email:SalonV@Outlook.com</p>
                <p>
                  <!-- Google Map for Store location -->
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5920.416552452449!2d-71.02328799999995!3d42.103010000000026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e484be7cf30067%3A0xbbc43c5b2cce2361!2s756%20N%20Main%20St%2C%20Brockton%2C%20MA%2002301!5e0!3m2!1sen!2sus!4v1600618130207!5m2!1sen!2sus"
                    width="500"
                    height="500"
                    frameborder="0"
                    style="border: 0"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"
                  ></iframe>
                </p>
              </div>
              </div>
              <div class="col wf">
                <div class="box">
                  <em class="fa-chart-globe fa-4x no-bullets"></em>
                  <h1 style="text-align: center; background-color:  #1411ad; color: white;">HAIR CARE PRODUCTS</h1>
                  <ul style="text-align:left; font-size: 35px;">
                    <li>Shea Moisture Strengthen</li>
                    <li>Oribe Cleansing Crème</li>
                    <li>
                      Ouidad Curl Immersion Low-<br />Lather Coconut Cleansing Conditioner
                    </li>
                    <li>Mizani 25 Miracle Milk Leave In Conditioner</li>
                    <li>Jane Carter Condition And Sculpt Smoothing Curl Prep Gel</li>
                    <li>Shea Moisture Strengthen</li>
                    <li>Shea Moisture Strengthen</li>
                    <li>Shea Moisture Strengthen</li>
                    <li>Shea Moisture Strengthen</li>
                  </ul>
                </div>
              </div>
              <div class="col wf">
                <div class="box">
                  <em class="fas fa-chart-pie fa-4x"></em>
                  <h1 style="text-align: center; background-color:  #1411ad;; color: white;">STORE HOURS</h1>
                  <ul class="no-bullets " style="font-size: 35px">
                    <li>MON: 10 AM to 7 PM</li>
                    <li>TUE: 10 AM to 7 PM</li>
                    <li>WED: 10 AM to 7 PM</li>
                    <li>THU: 10 AM to 7 PM</li>
                    <li>FRI: 10 AM to 7 PM</li>
                    <li style="background:  #1411ad; display: inline; color: white;">SAT: 10 AM to 8 PM</li>
                    <br>
                    <li style="background:  #1411ad; display: inline; color: white;">SUN: By Appointment Only</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- devider -->
      <div>
      
        <div class="center">
          <p style="background: #3b81b3" class="center">SALON V BOUTIQUE &COPY; 2020</p>
        </div>
        
        <title>Bootstrap Carousel</title>
                                                              
        <div id="#itsMagic"  class="carousel slide mb-5" data-ride="carousel" >
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block w-10" src="img/pic2.png" width="250" height="250" alt="female braided hairstyles" > 
              <div class="carousel-caption">
                <!-- I might use later -->
                <!-- <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis at ullam pariatur.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-10 " src="img/pic7.jpg" width="250" height="250"alt="female braided hairstyles" > 
              <div class="carousel-caption">
                <!-- I might use later -->
                <!-- <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis at ullam pariatur.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-10 " src="img/pic12.jpg" width="250" height="250" alt="female braided hairstyles" > 
              <div class="carousel-caption">
                <!-- I might use later -->
                <!-- <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis at ullam pariatur.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-15 H-10" src="img/pic11.jpg" width="250" height="250" alt="female braided hairstyles" > 
              <div class="carousel-caption">
                <!-- I might use later -->
                <!-- <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis at ullam pariatur.</p> -->
              </div>
            </div>
            <a class="carousel-control-prev" href="#itsMagic" role="button" data-slide="prev">
              <span class="carousal-control-prev-icon"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#itsMagic" role="button" data-slide="next">
              <span class="carousal-control-next-icon"></span>
              <span class="sr-only">Next</span>
            </a>
            
          </div>
        </div>
      
      </div>
             <div class=>
              <!-- <p style="background: #3b81b3" >SALON V BOUTIQUE</p> -->
             </div>
          <!-- Portfolio -->
          <!-- <section class="container-fluid">
            <img src="img/pic2.png" alt="female braided hairstyles" />
            <img
              src="https://images.unsplash.com/photo-1563721573206-bd9a9fb33a37?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=600"
              alt="female braided hairstyles"
            />
            <img
              src="https://images.unsplash.com/photo-1507592457003-ae93c692ccef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
              alt="male dreadlocks hairstyles"
            />
            <img
              src="https://images.unsplash.com/photo-1597179761147-08a63e7622ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="female dreadlocks hairstyles"
            />
            <img
              src="https://scontent.fphl2-3.fna.fbcdn.net/v/t1.0-9/54206316_2347425025291883_3561555875921395712_n.jpg?_nc_cat=100&_nc_sid=8bfeb9&_nc_ohc=uiZwkJxh15AAX94ezsz&_nc_ht=scontent.fphl2-3.fna&oh=14072f712c38b700cf560be554ce6cc5&oe=5F8CB957"
              alt="braided hairstyles"
            />
            <img
              src="https://scontent.fphl2-4.fna.fbcdn.net/v/t1.0-9/54214959_2340360492665003_4712005996216582144_n.jpg?_nc_cat=111&_nc_sid=8bfeb9&_nc_ohc=rEMMqSMDqUEAX9IRTHe&_nc_ht=scontent.fphl2-4.fna&oh=343118fdfa1f3130008b40cc163c12c6&oe=5F8C8FD7"
              alt="braided hairstyles"
            />
            <img
              src="https://scontent.fphl2-3.fna.fbcdn.net/v/t1.0-9/53879175_2340360479331671_907642154329833472_n.jpg?_nc_cat=109&_nc_sid=8bfeb9&_nc_ohc=ff2-FK-p7osAX81A8k_&_nc_ht=scontent.fphl2-3.fna&oh=fc37a7e1b763ab004e72a51f02536a2b&oe=5F8B67DF"
              alt="braided hairstyles"
            />
          </section> -->
          <!-- Footer -->
           <footer class=>
             <p style="background: #3b81b3" class="center">SALON V BOUTIQUE &COPY; 2020</p>
           </footer>
        
           <!-- Bootstrap Scripts-->
           <div container>
               <script
               src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
               integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
               crossorigin="anonymous"
             ></script>
             <script
               src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
               integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
               crossorigin="anonymous"
             ></script>
             <script
               src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
               integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
               crossorigin="anonymous"
             ></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/TextPlugin.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/EasePack.min.js"></script>
              <script src="../app.js"></script>
           </div>
        </body>
      
      </html>
      