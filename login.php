<?php

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">

  <title>Welcome To Login</title>
  <style>
    .ad-btn a {
      color: #e83e8c;
      padding: 1.3vw;
    }
  </style>

</head>

<body>
  <nav style="background-color: #85219c;" class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#" target="_blank">HealthCareAI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li style="font-size: 1.1rem; padding:0 10px" class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </nav>

  <section>
    <div class="img-box">
      <img src="./images/login-1.jpg" alt="Error">
    </div>
    <div class="content-box">
      <div class="form-box">
        <h2 style="border-bottom: 4px solid #85219c;">Log in</h2>
        <form action="" method="post">
          <div class="input-box">
            <span>Email</span>
            <input class="box" type="emain" name="id" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span>Password</span>
            <input class="box" type="password" name="passsword" placeholder="Password" required>
          </div>

          <div class="remember">
            <input type="checkbox" class="" id="Check1">
            <label class="" for="Check1">Check me out</label>
          </div>

          <div>
            <input type="submit" style="background: #85219c;" name="submit" class="btn" value="Log in"></input>
          </div>
        </form>
      </div>
    </div>
  </section>


  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>