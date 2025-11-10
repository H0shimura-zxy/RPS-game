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

 <?php
 session_start();
 $id=$_SESSION['id'];
 $players=mysqli_query($conn,"SELECT * FROM player WHERE id='$id'");
 $player=mysqli_fetch_assoc($players);
 ?>

  <div class="center-wrapper">
    <h1>Hello <?php echo $player['name'] ?>!</h1>
    <div class="btn-group-custom">
      <button class="btn btn-dark play">Play</button>
      <a href="auth/logout.php" class="btn btn-dark">Log Out</a>
      <button class="btn btn-dark" onclick="window.close()">Quit</button>
    </div>
  </div>

  
  <footer>
    Copyright © @H0shimura-zxy
  </footer>
<script>
$(document).ready(function() {
  $('.play').click(function() {
    window.location.href = 'home.php';
  });
});

</script>

</body>
</html>
