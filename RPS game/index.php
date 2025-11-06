<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RPS Game</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
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

  <div class="center-wrapper">
    <h1>RPS game</h1>
    <div class="btn-group-custom">
      <a href="#" class="btn btn-dark">Sign Up</a>
      <a href="#" class="btn btn-dark">Login</a>
      <a href="#" class="btn btn-dark">Quit</a>
    </div>
  </div>

  <footer>
    Copyright © @H0shimura-zxy
  </footer>

</body>
</html>
