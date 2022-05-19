<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
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
            <h4>Welcome back !</h4><br>

            <!-- layout -->
            <form action="">
                <div class="row g-1">
                    <h4>Sign In</h4>
                </div><br>
                <div class="row">
                    <div class="position-relative">
                        <input type="email" class="form-control ps-4"
                            placeholder="Email">
                        <i class="fa fa-envelope text-primary position-absolute"
                            style="top:10px; left: 18px;" aria-hidden="true"></i>
                    </div>
                </div><br>
                <div class="button">
                    <button class="btn btn-primary fw-bold" style="width: 450px; border-radius: 20px;">Next</button>
                </div>
                <hr>
                <div class="button">
                    <button class="btn btn-danger" style="width: 450px; border-radius: 5px;">
                    <i class="fa fa-google-plus-square" aria-hidden="true" style="left:18px;"></i> 
                    Continue with Google</button>
                </div>
                <div class="my-3 d-flex justify-content-start">
                    <a class="text-primary" style="text-decoration: none; font-weight: bold;" href="regist.php">Create account</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>