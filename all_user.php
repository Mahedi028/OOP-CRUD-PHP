<?php

require_once './classes/user.php';

$user_obj=new User();

$result=$user_obj->select_all_user();

// echo "<br>";
// echo "<br>";

// echo var_dump($result)."<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// print_r($result);

// // echo strval($result);
// exit();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>all user</title>
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
        <h2 class="text-capitalize m-3">show All user</h2>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th>User-id</th>
                    <th>email</th>
                    <th>name</th>
                    <th>password</th>
                    <th>phone_number</th>
                    <th>address</th>
                    <th>city</th>
                    <th>country</th>
                    <th>gender</th>
                    <th>message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //while($row=mysqli_fetch_array($result)){
                while($row=mysqli_fetch_assoc($result)){
                    // echo '<pre></pre>';
                    // print_r($row);
                    //exit();
                    // $Num_of_rows=mysqli_num_rows($result);
                    // echo $Num_of_rows.'<br><br>';
                    // $Num_of_fields=mysqli_num_fields($result);
                    // echo $Num_of_fields;
                ?>
                <tr>
                    <td><?php echo $row['user_id'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['phone_number'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['country'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['message'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['user_id'];?>">Edit |</a><span>
                            <a href="delete.php?id=<?php echo $row['user_id'];?>">Delete</a></span>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>