 <?php
require_once './shared/db.php';
require_once './shared/sessions.php';

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./css/Login.css">
 </head>
 <section class="section">
    <div class="container">
</section>
<body ng-app="mainModule" ng-controller="mainController">
<div id="login-page" class="row">

  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $errors = '';
        $results = $con->runQuery('SELECT * FROM users WHERE email = $1 and password = md5($2)', [$email, $password]);
        if ($results) {
            $_SESSION['user_id'] = $results[0]['id'];
            $_SESSION['user_email'] = $results[0]['email'];
            header('Location: /page_1.php');
            exit();
        } elseif ($email != '' || $password != '') {
            $errors = 'invalid email and password';
        }
    }
 ?>
    <div class="col s12 z-depth-6 card-panel">
      <form  method="POST" class="login-form">
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a  href="" class="btn waves-effect waves-light col s12">Login</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Register Now!</a></p>
          </div>         
        </div>

      </form>
    </div>
  </div>
 
 </body>

    <script 
src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
</script>  
 </html>


