<?php   
   include_once('db.php');
   session_start();
   $logged_in = true;


  /*
   $error = "";
   $db = Database::getConnection();
   if($_SERVER["REQUEST_METHOD"] == "POST") {      
	  // username and password sent from form       
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: Home.php");
      }else {
         $error = "User Name or Password is invalid";		 
      }
   } else if(isset($_SESSION['login_user'])){
      $logged_in = true;
   }
   */
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
                    >HOME</a
                  >
                  <!-- <button class="navbar-toggler" data-target="#navbarMenu">
                      <span class="navbar-toggler-icon"></span>
                    </button> -->
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
          </div>
          
	<div class="box">
		<!-- A location page that has a map and the address to the store location -->
		<?php
    // You are logged in already
		if ($logged_in) {
			echo "<h3 style='font-size: 70px;'>Coming Soon!</h3>";
		} else {
				echo "<h3 style='font-size: 70px;'>Login</h3>
		<!-- Store Contact Info -->
			<form action='' method='post'>  
				<label>Username: <input type='text' name='username'></label><br>
				<label>Password: <input type='password' name='password'></label><br>
				<br><button>Login</button>
			  </form>			  
				<button><a href='register.php'>Register</a></button>";
		}		
		/*?>
		<?php
		if ($error != "") {
			echo "<h4>$error</h4>";
		}*/
		?>
		
	  </div>
      </div>
		
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
			 
           </div>
        </body>
      
      </html>
      