<?php
   include('session.php');
   $update_successful = false;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $db = Database::getConnection();
	  // username and password sent from form       
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
	  $myname = mysqli_real_escape_string($db,$_POST['name']);
	  $myaddress = mysqli_real_escape_string($db,$_POST['address']);	  
      $current_user_name = $_SESSION['login_user'];
	  
	  $sql = "UPDATE users SET username ='$myusername', password ='$mypassword', address='$myaddress', name='$myname' WHERE username='$current_user_name';";
      if (!$result=$db->query($sql)) {
			die ("Query error: " . $sql);
			$db->close();
	  }
	  else {
		  $update_successful = true;
		  $_SESSION['login_user'] = $myusername;
	  }
   }
?>

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
		<!-- A location page that has a map and the address to the store locatio -->
		<h3 style="font-size: 70px;">Update Your Profile</h3>
		<!-- Store Contact Info -->
			<form action="" method="post">  				
				<label>Full Name: <input type='text' name='name'></label><br>
				<label>Address: <textarea name="address" rows="4" cols="50"></textarea></label><br>
				<label>Username: <input type='text' name='username'></label><br>
				<label>Password: <input type='password' name='password'></label><br>				
				<br><button>Update</button>
				<h4>
				<?php 
				if ($update_successful) {
					echo "Updated Successfully!";
				}
				?>
				</h4>
			  </form>
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
      