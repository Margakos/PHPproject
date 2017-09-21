<?php
	include 'header.php';
	include 'dbh.php';
?>


  <div id="container">
  

    <div id="header">
      <h1>Super eShop</h1>
    </div>

	
    <div id="leftsidebar">
      <ul class="menu">
        <li><a href="index.php">Home Page</a></li>
        <li><a href="page_public.php">PHONES</a></li>
        <li><a href="page_user.php">User Page</a></li>
      </ul>
    </div>


    <div id="main">
     
	  
	  <?php
	     if (isset($_SESSION['name'])){
			echo 'Logged in as:   '.$_SESSION["name"]; 			 
		 } else {
			 echo 'You are not logged in!';
		 }
	  ?>

	




	  <p><b>Sign Up</b></p>
	  <form action="includes/signup.inc.php" method="POST">
		<p>username: <input type="text" name="username" placeholder="Username" required/></p>
		<p>password: <input type="password" name="password" placeholder="Password" required/></p>
		<p>email: <input type="email" name="email" placeholder="email" required/></p>
		<button type="submit">Sign Up</button>
	  </form>
	  
	  
	  
	  
    </div>
	
    <div id="footer">
      <div id="leftfooter">&copy; KM</div>
      <div id="rightfooter">desing: KM</div>
    </div>

  
  </div>

</body>
</html>