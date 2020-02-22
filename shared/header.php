
<!DOCTYPE html>
<html>
<head>
  <title>Principal</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php if (isset($_SESSION['user_id'])) { ?>
            <h3><?= $_SESSION['user_email'] ?></h3>
        <li><a href="Login.php">Log Up</a></li>
        <?php } 
        else { ?>
        <li><a href="register.php">Sign Up</a></li>
        <li><a href="Login.php">Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>
   
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>   

</html>