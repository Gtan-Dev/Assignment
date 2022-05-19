<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
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
            <h4>I can't wait to create an acconunt</h4>

            <!-- layout -->
            <form action="insert.php" method="post">
                <div class="row g-1">
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" name="fname" class="form-control ps-4"
                             placeholder="First name">
                            <i class="fa fa-user text-primary position-absolute"
                             style="top:10px; left:5px;" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" name="lname" class="form-control ps-4"
                             placeholder="Last name">
                            <i class="fa fa-user text-primary position-absolute"
                             style="top:10px; left:5px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="position-relative">
                        <input type="email" name="email" class="form-control ps-4"
                            placeholder="Email">
                        <i class="fa fa-envelope text-primary position-absolute"
                            style="top:10px; left: 18px;" aria-hidden="true"></i>
                    </div>
                </div><br>
                <div class="row">
                    <div class="position-relative">
                        <input type="password" name="password" class="form-control ps-4"
                            placeholder="Choose Password">
                        <i class="fa fa-key text-primary position-absolute"
                            style="top:10px; left: 18px;" aria-hidden="true"></i>
                        <i class="fa fa-eye text-primary position-absolute"
                            style="top:10px; right: 20px;" aria-hidden="true"></i>
                    </div>
                </div><br>
                <div class="button">
                    <button class="btn btn-primary fw-bold" type="submit" style="width: 450px; border-radius: 20px;">Next</button>
                </div>
                <hr>
                <div class="button">
                    <button class="btn btn-danger" style="width: 450px; border-radius: 5px;">
                    <i class="fa fa-google-plus-square" aria-hidden="true" style="left:18px;"></i> 
                    Continue with Google</button>
                </div>
                <div class="my-3">
                    <a style="text-decoration: none; color: red; font-weight: bold;" href="email_login.php">Already have an account?, SIGN IN</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>