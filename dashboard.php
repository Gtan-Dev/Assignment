<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        a{
            text-decoration: none;
        }
        a:hover{
            color:white;
        }
        .menus {
            border-bottom: solid blue;
        }
        .menus:hover {
            background-color: blue;
        }
        .set {
            width: 390px;
        }
        .profile-pic {
            border-radius: 50px;
            height: 95px;
            width: 95px;
            top: 18px;
            border: 3px blue;;
        }
        .picc {
            border-radius: 50px;
            height: 30px;
            width: 30px;
        }
        .penci:hover {
            color: green;
        }
    </style>
</head>
<body style="background-color: #F0FFFF;">
    <!-- heading -->
    <header class="d-flex bg-danger justify-content-between align-items-center text-white p-1 text-center">
        <h5 class="mx-4">Assignment</h5>
        <div class="dropdown">
            <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="picc" src="image/pro.jpg" width="700"> Me
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Log out</a></li>
                
            </ul>
        </div>
    </header>

    <!-- fontainer -->

    <div class="d-flex justify-content-center mt-3">
        <div class="">
            <div class="cover">
                <img src="image/fam.jpg" width="700" height="200">
                <div class="profile" style="margin-top:-4.9rem; margin-left:1rem;">
                    <img class="profile-pic " src="image/pro.jpg" width="700">
                    <p class="fw-bold text-white" style="margin-top:-3rem; margin-left:6.5rem;">TWAGIRAYEZU Jean Marie Vianney</p>
                </div>
            </div>
            <div class="change">
                <div class="headline card mt-4">
                    <p class="mx-3 fw-bold">Headline <a href="#"><i class="fa fa-pencil penci"></i></a> </p>
                    <p class="mx-3">Software Engineer | Data Analyst </p>
                </div>
                <div class="change-password mt-2 card my-2 shadow">
                    <div class="bg-primary" style="border-bottom: solid red; height: 40px;">
                        <p class="text-white"><i class="fa fa-key mx-3 text-white" aria-hidden="true"></i> Change password</p>
                    </div>
                    <center>
                        <table class="mt-1">
                        <form action="">
                            <tr>
                                <td>Current Password: </td>
                                <td><input type="text" name="" id="" class="form-control ps-4" placeholder="Password" style="width: 60vh;">
                                <!-- <i class="fa fa-key" style="top:7px; left: 18px;" aria-hidden="true"></i></td><br> -->
                            </tr>
                            <tr class="mx-4">
                                <td>New Password: </td>
                                <td><input type="text" name="" id="" class="form-control ps-4" placeholder="Password" style="width: 60vh;">
                                <!-- <i class="fa fa-key" style="top:15px; left: 18px;" aria-hidden="true"></i></td> -->
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="" id=""> Remind me to change password for each 3 month</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><buttton class="btn btn-primary my-2">Set New Password</buttton></td>
                            </tr>
                        </form>
                    </table>
                    </center>
                    
                </div>
            </div>
        </div>
        <div class="settings">
        <!-- header-setting -->
            <div style="top: 3px;" class="shadow-lg mx-3 w-100" style="width: 200px;">
                <div class="d-flex justify-content-center align-items-center">
                <p class="ps-4 mt-2 text-primary fw-bold shadow set">ACCOUNT SETTING</p>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-pencil"></i> Edit Profile</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fas fa-key"></i> Change Password</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-flash"></i> Sign in Activities</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-clock-o"></i> Session Timeout</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-heartbeat"></i> Memorialisation</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-tag"></i> Jobs Feed Content</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-envelope"></i> Email & SMS Notification</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class=" fa fa-bell"></i> Push Notification</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-trash"></i> Delete my Account</a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
  <div class="row bg-info position-relative w-100 p-2" style=" color:white;left:-1vh; right: -1vh;">
        <div class="col ">
          <p class="text-end">About Us</p>
        </div>
        <div class="col ">
          <p class="text-start"> Advertisement</p>
        </div>
        <div class="col ">
          <p class="text-center"> Kigali,Rwanda</p>
        </div>
        <div class="col ">
          <p class="text-end"> How search work</p>
        </div>
        <div class="col ">
          <p class="text-start" > Privacy</p>
        </div>     
    </div>
</footer>
</body>
</html>