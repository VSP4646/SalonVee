<?php
include_once('db.php');
$cn = Database::getConnection();
$query = "select * from db.Products";

if (!$rs=$cn->query($query)) 
	die ("Query error: " . $query);
$cn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Salon V Boutique</title>
        <link rel="stylesheet" href="style.css" />
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
          <button class="navbar-toggler" data-target="#navbarMenu">
              <span class="navbar-toggler-icon"></span>
            </button>
          <li class="nav-item">
            <a href="About.html" class="navbar-brand table" style="color: aliceblue"
              >ABOUT</a
            >
          </li>
          <li class="nav-item">
            <a
              href="Services.html"
              class="navbar-brand "
              style="color: aliceblue"
              ><mark>SERVICES</mark></a
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

<br>
<!-- 3 Card Layout -->
<div class="box">  
	<h3 style=font-size:300%>Shampooing Products</h3>	
	<?php
		while ($row = $rs->fetch_array(MYSQLI_ASSOC)) :
	?>
	<p class="products">
	<?php 
		$price = number_format($row['Price'],2);
		echo "{$row['ProductName']}, Price: $$price";
	?>
	</p>
	<?php
	endwhile;
	?>
	<ul>
	</ul>
</div>
</div>
</body>
</html>