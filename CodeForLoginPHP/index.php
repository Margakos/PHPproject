<?php
	include 'header.php';
?>


  <div id="container">
  

    <div id="header">
      <h1>Super eShop</h1>
    </div>

	
    <div id="leftsidebar">
      <ul class="menu">
        <li><a href="index.php">HOME</a></li>
        <li><a href="page_public.php">PHONES</a></li>
        <li><a href="page_user.php">User Page</a></li>
        <li><a href="signup.php">Create Account</a></li>
      </ul>
    </div>


    <div id="main">
      <p><b>Log In</b></p>
	  <form action="includes/login.inc.php" method="POST">
		<p>username: <input type="text" name="username" placeholder="Username"/></p>
		<p>password: <input type="password" name="password" placeholder="Password"/></p>
		<button type="submit">Log In</button>
	  </form>
	  <form action="includes/logout.inc.php">
		<button>Log Out</button>
	  </form>
	  <?php
	     if (isset($_SESSION['name'])){
			echo "Logged in as:   {$_SESSION['name']}"; 			 
		 } else {
			 echo "You are not logged in!";
		 }
	  ?>

	 
	  
	  
	  
	  
    </div>
	
    <div id="footer">
      <div id="leftfooter">&copy; KM</div>
      <div id="rightfooter">desing: KM</div>
    </div>

  
  </div>

</body>
</html>