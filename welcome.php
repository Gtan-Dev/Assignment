<?php
session_start();
    include 'config.php';
    if (isset($_POST['submit'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM assessment WHERE email = '{$email}'")) > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['error'] = "{$email} - This email already exists !";
        }else if (mysqli_query($conn, "INSERT INTO assessment VALUES('','$fname','$lname','$email','','$password','$code')")) {
            $_SESSION['success'] = "{$email} - email registered !";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap\dist\css\bootstrap.min.css">
</head>
<body>
    <!-- heading -->
    <header class="text-white p-1 text-center" style="background-color: tomato;">
        <h5>Assignment</h5>
    </header>

    <!-- fontainer -->

    <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        <!-- form -->
        <div class="border bg px-4 pt-4 position-relative text-center w-48 rounded shadow-lg">
            <i class="fa fa-user-circle-o text-primary"
            style="font-size: 50px; position:absolute; top: -28px;" aria-hidden="true"></i>
            <h4>Congrats, <?php  echo ucfirst($lname) ; ?></h4><br>
            
            <!-- another body -->
            <div class="justify-content-center align-items-center">
                <div style="text-align: center;" 
                style="border: solid black 1px; width:230px; height: 26px; border-radius:20px;">
                    <p class="fw-bold"><i class="fa fa-user-circle-o text-primary" aria-hidden="true">
                    </i> <?php  echo ucfirst($email) ; ?></p>
                </div><br>
                <div class="body_text">
                    <h3>Help us in the Journey of Trust</h3>
                </div>
                </div>
                <div class="my-5">
                    <p>Check your email above to confirm the email ownership</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>