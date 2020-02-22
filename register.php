<?php

require_once './shared/db.php';
?><!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Registro.css">
    <title>Register</title>
</head>

<body>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstname = $_POST['firstname'] ?? '';
        $lastname = $_POST['lastname'] ?? '';

        $id = $_POST['id'] ?? '';
        $email = $_POST['email'] ?? '';
        $age = $_POST['age'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $birthday = $_POST['dayB'] ?? '';
        if($_POST['gender'] == 'male'){
            $gender = 'Male';
        } 
        else{
            $gender = 'Female';
        }     
        $password = $_POST['password'] ?? '';
        $errors = '';
        $sql = "INSERT INTO users(name, lastname, ced, email, age, phone, dayb, sex, password) VALUES ($1,$2,$3,$4,$5,$6,$7,$8 md5($9))";
        $con->runStatement($sql, [$firstname,$lastname,$id,$email,$age,$phone,$birthday,$gender,$password]);
        header('Location: /Pricipal.php');
        exit();
    }
 ?>
    <div class="container">
        <div class="form__top">
        </div>
        <form class="POST" action="">
            <label for="firname">First Name</label>
            <input  id = "firstname" class="input" type="text" placeholder="&#128100;  Name" required autofocus>
            <label for="latname">Last Name</label>
            <input  id = "lastname" class="input" type="text" placeholder="&#128100;  Last Name" required>
            <label for="idd">ID</label>
            <input  id = "id" class="input" type="text" placeholder="ID" required>
            <label for="ema">Email</label>
            <input  id = "email"class=   "input" type="text" placeholder=" Email" required>
            <label for="ame">Age</label>
            <input  id ="age" type="number" placeholder="Age">
            <label for="telepho">Phone</label>
            <input id = "phone" class="input" type="text" placeholder="Phone Number" required>
            <label for="birthday">Birthday</label>
            <input id="dayB"type="date"> 
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <label for="pasw">Password</label>
            <input  id = "password"class="input" type="password" placeholder="&#x1F511;  Password" required>
            <div class="btn__form">
                <input class="btn__submit" type="submit"  value="REGISTER">
            </div>
        </form>
    </div>

</body>
<script 
src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
</script>

</html>
