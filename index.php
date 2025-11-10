<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RPS Game</title>
  
  <?php include("cdn.php");
        include("db.php"); 
  ?> 

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden; 
    }

    .center-wrapper {
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 200px; 
}


    h1 {
      margin-bottom: 120px; 
    }

    .btn-group-custom {
      display: flex;
      flex-direction: column;
      gap: 15px;
      width: 200px; 
    }

    footer {
      position: absolute;
      bottom: 10px;
      width: 100%;
      text-align: center;
      font-size: 0.9rem;
      color: #555;
      padding-bottom: 20px;
    }
    body {
  background-image: url('images/rps-bg.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

  </style>

</head>
<body>

   <!----- menu ---->  

  <div class="center-wrapper">
    <h1>RPS Game</h1>
    <div class="btn-group-custom">
      <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
      <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      <button class="btn btn-dark" onclick="window.history.back()">Quit</button>
    </div>
  </div>

  <!-- registerModal --> 

  
  <div class="modal fade" id="registerModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Sign Up</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="POST" action="auth/register.php">
        	<input type="text" name="name" placeholder="Enter Username" class="form-control"><br>
          <input type="email" name="email" placeholder="Enter email" class="form-control"><br>
        	<input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
          <input type="password" name="cpassword" placeholder="Enter Confirm Password" class="form-control"><br>        	        	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" value="register" class="btn btn-secondary"></i>Sign up</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--Login Modal -->

<div class="modal fade" id="loginModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Login</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="auth/login.php">
        	<input type="text" name="name" placeholder="Enter name" class="form-control"><br>
        	<input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-sign-in-alt mr-1"></i>Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
  
  <footer>
    Copyright © @H0shimura-zxy
  </footer>

</body>
</html>
