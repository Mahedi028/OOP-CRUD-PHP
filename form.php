<?php
require_once './classes/user.php';

$user=new User();

// echo '<pre>';

// print_r($_POST);

if(isset($_POST['btn'])){
  $message=$user->save_user($_POST);

//    try{
//     $user->save_user($_POST);
//    }catch(Exception $e){
//        echo 'Error-message'.$e->getMessage();

//    }
   //$message=$user->save_user($_POST);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <nav class=" navbar fixed-Sticky navbar-light bg-danger">
        <div class="container-fluid d-flex flex-row justify-content-start mx-5">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">OOP CRUD</a>
            </div>
            <div>
                <!-- <ul class="nav navbar-nav d-flex flex-row mx-5"> -->
                <ul class="nav justify-content-center">
                <!-- <ul class="nav justify-content-end"> -->
                <!-- <ul class="nav flex-column"> -->
                    <li class="nav-item">
                        <a class="nav-link mx-2 " href="./form.php">From</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 " href="./all_user.php">ALL User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 " href="./edit.php">edit User</a>
                    </li>
            </ul>
            </div>
            </div>
        </nav>
        <div class="page-header">
            <h2>OOP CRUD REGISTRATION</h2>
            <p>
                <?php $message?>
            </p>
        </div>
        <hr>
        <form action="" method="post">
            <h2 class="text-uppercase bg-primary">
                <?php 
                if($message){
                    echo $message;
                    unset($message);
                }
                
                ?>
            </h2>
            <div class="form-group mb-3">
                <label class="mb-3">UserName</label>
                <input type="text" name="name" value="" maxlength="50" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3">Email</label>
                <input type="email" name="email" value=""  maxlength="100" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3">Password</label>
                <input type="password" name="password" value="" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3">PhoneNumber</label>
                <input type="text" name="phone_number" value="" maxlength="15" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3">Address</label>
                <input type="text" name="address" value="" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3">City</label>
                <input type="text" name="city" value="" class="form-control">
            </div>
            <div class="from-group mb-3">
                <label class="mb-3">Country</label>
                <select class="form-select" name="country">
                    <option selected>Choose your country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="india">India</option>
                    <option value="pakistan">pakistan</option>
                </select>
            </div>
            <div class="form-group mb-3 d-flex flex-row">
                <label class="">Gender</label>
                <div class="form-check mx-3">
                    <input type="radio" name="gender" value="male" id="male" class="form-check-input" value="male" checked>
                    <label for="male" class="form-check-label">male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="female" id="female" class="form-check-input" value="female">
                    <label for="female" class="form-check-label">Female</label>
                </div>
            </div>
            <div class="form-group mb-3">
                <span class="input-group-text">Message</span>
                <textarea class="form-control" rows="8" cols="30" name="message"></textarea>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary" name="btn" value="save">Submit</button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>