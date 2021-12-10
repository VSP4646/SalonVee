<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Salon V Boutique</title>
       <link rel="stylesheet" href=" style.css" />
       <link rel="stylesheet" href="bootstrap.css" />
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      </head>
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
            >HOME</a
          >
          <!-- <button class="navbar-toggler" data-target="#navbarMenu">
              <span class="navbar-toggler-icon"></span>
            </button> -->
          <li class="nav-item">
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
              ><mark>APPOINTMENTS</mark></a
            >
          </li>
          <li class="nav-item">
            <a href="BLOG.html" class="navbar-brand" style="color: aliceblue"
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

        </head>
        <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript" language="javascript" ></script>
        <script src="js/appParse.js" type="text/javascript" language="javascript" ></script>
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="css/style.css" type="text/css" rel="stylesheet" />
        <!-- Submit Message Function -->
        <script>
            function onPressSubmit(){ 
              console.log("Submit Button Clicked");
          var x1=document.getElementById('Fname').value;
          var x2=document.getElementById('Lname').value;
          var x3=document.getElementById('PN').value;
          var x4=document.getElementById('Email').value;
          var x5=document.getElementById('Date').value;
          var x6=document.getElementById('Time').value;
          var x7=document.getElementById('APPtype').value;
          
          alert( "First Name : "+x1+"\nLast Name : "+x2+"\nPN : "+x3+"\nEmail : "+x4+"\nDate : "+x5+"\nTime :"+x6+"\nAppointment Type : "+x7);}
        </script>
        <!-- Clear text function -->
        <script type="text/javascript">

          function onPressClear(){ 

          var x1=document.getElementById('Fname').value = "";
          var x2=document.getElementById('Lname').value = "";
          var x3=document.getElementById('PN').value = "";
          var x4=document.getElementById('Email').value = "";
          var x5=document.getElementById('Date').value = "";
          var x6=document.getElementById('Time').value = "";
          var x7=document.getElementById('APPtype').value = "";

         alert("Your Appointment was canceled!");}
        </script>

    
      <body>
          </div>
        <!-- Apponitment form -->
        <div class="container-fixed" >
          <div class="row" >
              <div class="col-md-6">
                  <div class="well-block">
                      <div class="well-title">
                          <h2>Submit Appointment Request Here:</h2>
                      </div>
                      <form action="/action_page.php" style="display: inline; font-size: 300%;">
                        
                        <label for="Fname"> *First Name: </label><input class="form-control form-control-lg" type="text" placeholder="i.e John/Jane" id="Fname" style="height: 50px; font-size: 35px;" ><br>
                        <label for="Lname">*Last Name: </label><input class="form-control form-control-lg" type="text" placeholder="i.e Doe" id="Lname" style="height: 50px; font-size: 35px;"><br>
                        <label for="PN">*Phone Number: </label><input class="form-control form-control-lg" type= "text" placeholder="XXX-XXX-XXXX" id="PN" style="height: 50px; font-size: 35px;"><br>
                        <label for="Email">*Email: </label><input class="form-control form-control-lg" type="text" placeholder="XX-XX-XXXX" id="Email" style="height: 50px; font-size: 35px;"><br>
                        <label for="Date">*Date: </label><input class="form-control form-control-lg" type="text" placeholder="XX-XX-XXXX" id="Date" style="height: 50px; font-size: 35px;"><br>
                        <label for="Time">*Time: </label><input class="form-control form-control-lg" type="text" placeholder="XX:XX (AM or PM)" id="Time" style="height: 50px; font-size: 35px;"><br>
                        <label for="APPtype">*Appointment Type: </label><input  class="form-control form-control-lg" type="text" placeholder="i.e: Haircut, Braids, Wash & Set, Wash & Blow Dray, etc..." id="APPtype" style="height: 50px; font-size: 35px;"><br>
                        <input type="button" value="Submit" onclick="onPressSubmit()">
                        <input type="button" value="Clear" onclick="onPressClear()">
                      </form>
                      <!-- form end -->
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="well-block">
                      <div class="well-title">
                          <h2>Appointment Guidelines</h2>
                      </div>
                      <div class="feature-block">
                          <div class="feature feature-blurb-text">
                              <h4 class="feature-title">Cancellation Policy</h4>
                              <div class="feature-content">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente labore vero, veritatis provident quos explicabo laborum architecto temporibus, voluptate, necessitatibus perferendis ullam rerum totam dolor aut! Beatae distinctio inventore itaque! Optio consequuntur labore saepe inventore iste temporibus corporis sint animi, alias obcaecati. Vero, aspernatur aut. Adipisci, illum voluptate. Corporis, ullam.</p>
                              </div>
                          </div>
                          <div class="feature feature-blurb-text">
                              <h4 class="feature-title">Late Arrival Policy</h4>
                              <div class="feature-content">
                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid sed a ab est atque necessitatibus expedita totam recusandae accusamus. Eaque obcaecati culpa quia totam laudantium omnis sed consequatur consequuntur numquam voluptatibus. Laborum rerum asperiores provident reiciendis impedit rem dolores est aspernatur tempora quasi vero distinctio cumque, quo sapiente veniam nemo adipisci maxime quia sint facilis sed libero dolore! Distinctio unde culpa aliquid officia. Iure obcaecati sapiente voluptate asperiores, accusantium suscipit.. </p>
                              </div>
                          </div>
                          <div class="feature feature-blurb-text">
                              <h4 class="feature-title">Fees</h4>
                              <div class="feature-content">
                                  <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </body>
    </html>