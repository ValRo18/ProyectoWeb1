<?php
require_once './shared/header.php';
require_once './shared/db.php';
require_once './shared/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container section">
    <div class="row">
        <div class="col s12">
        </div>
            <div class="slider">
                <ul class="slides">

                  <li>
                    <img src="./imgs/1.jpeg" alt="">
                    <div class="caption center-align">
                      <h3>vr</h3>
                      <h5 class="light">rvrb</h5>
                    </div>
                  </li>

                  <li>
                    <img src="./imgs/2.jpg" alt="">
                    <div class="caption center-align">
                      <h3>Dogs</h3>
                      <h5 class="light">The most cute dogs</h5>
                    </div>
                  </li>


                  <li>
                    <img src="./imgs/3.jpg" alt="">
                    <div class="caption center-align">s
                      <h3>Dogs</h3>
                      <h5 class="light">The most cute dogs</h5>
                    </div>
                  </li>

                  <li>
                    <img src="./imgs/4.jpeg" alt="">
                    <div class="caption center-align">
                      <h3>Dogs</h3>
                      <h5 class="light">The most cute dogs</h5>
                    </div>
                  </li>
                <
                </ul>

              </div>
    </div>
</div>
</body>






<script 
src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
</script>
            


<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
        indicatation:false,
        heigth:600,
        interval:3000,
      
    });
  });


</script>
<style>
body{
    background-color: rgb(243, 243, 200);
}

</style>

</body>
</html>

