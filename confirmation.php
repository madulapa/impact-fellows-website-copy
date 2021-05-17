<?php

$host = "localhost:3306";
$username = "root";
$password = "BLUEmars307!";
$db = "Impact-Fellows";

$mysqli = new mysqli($host, $username, $password, $db);

if($mysqli->connect_errno){
	echo $mysqli->connect_error;

	exit();
}
 

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $university = $_POST['uni'];
    $major = $_POST['major'];
    $grad_year = $_POST['grad'];
    $hear_about = $_POST['hear']; 

    $stmt = $mysqli->prepare("INSERT INTO users (fname, lname, email, uni, major, grad, hear) VALUES (?, ?, ?, ?,?, ?, ?)");
    $stmt->bind_param("sssssss", $fname, $lname, $email, $university, $major, $grad_year, $hear_about);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();

  /*  $email_from = 'layamreddy@gmail.com';
	$email_subject = "New Member";

	$email_body = "First Name: '$fname' \n
    Last Name: '$lname' \n
    Email: '$email' \n
    University: '$university' \n
    Major: '$major' \n
    Grad Year: '$grad_year' \n
    How did they hear about us: '$hear_about' ";

    $to = "impactfellowsclub@gmail.com";
    $headers = "From: $email_from \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    if (mail($to,$email_subject,$email_body,$headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
*/

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Confirmation</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>


<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />

<style>
    body {
        font-family: 'Work Sans', sans-serif;
    }

    .header img {
        width: 100%;
    }

    .header {
        position: relative;
        top: 0;
        left: 0;
    }

    #header-bottom {
        position: relative;
        top: 0;
        left: 0;

    }

    #header-top {
        position: absolute;
        top: 0;
        left: 0;
    }

    .navbar {
        background-color: #80CCC3;
    }

    .learn-more {
        color: #FF9052;
        border: solid #FF9052;
        background-color: white;
        width: 220px;
        height: 55px;

    }

    .join-us-header {
        background-color: #FF9052;
        border: solid #FF9052;
        width: 110px;
        height: 40px;
    }

    .join-us {
        background-color: #FF9052;
        border: solid #FF9052;
        width: 220px;
        height: 55px;

    }

    .content {
        margin-top: 300px;
        position: absolute;
    }

    .content #line {
        width: 600px;
        margin-left: 100px;
    }
    .col1 p, .col1 #line {
       text-align: center;
    }
    h1, p {
        text-align: left;
        margin-left: 70px;
        position: absolute;
    }
    p {
        transform: translateX(10px);
        transform: translateY(80px);
    }
    #line {
        transform: translateY(110px);
        
    }
    

    a {
        color: white;
    }
    .btn {
    text-transform: none;
}
@media (min-width:771px) and (max-width: 1445px){

    #earth {
        margin-left: 600px;
        margin-top: -200px;
        width: 150px; 
        height: 150px;
    }

}

    @media (max-width: 576px) {
        .content #line {
            width: 400px;
            margin-left: 50px;
            transform: translateY(0px);

        }
        #earth {
            margin-top: -600px;
            margin-left: 120px;
        }
        footer .row1, footer .row2 {
            display: none;
        }
        body {
            font-size: 0.6em;
            
        }
        h1, p {
        text-align: left;
        margin-left: 30px;
        position: relative;
    }
    p {
        transform: translateX(-100px);
    }
    .navbar {
            font-size: 1.5em;
        }
    }
</style>

<body>
    <nav class="navbar shadow-none navbar-expand-lg navbar-light justify-content-end">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html"><img id="navbar-logo" src="images/navbar-logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0  mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="initiatives.html" aria-current="page">Initiatives</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="btn text-white join-us-header">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid body">
        <div class="row">
            <div class="header">

                <img src="images/header-bottom.png" alt="header-bottom" id="header-bottom">
                <img src="images/header-top.png" alt="header-top" id="header-top">

            </div>

            <div class="content">
                <div class="row">

                    <div class="col right">
                        <div class="row">
                            <div class="col col1">
                                    <h1>Thank you for signing up!</h1>
                                    <p>Expect a follow-up email from us in a few days!</p>
                                    <img src="images/line_conf.png" id="line">
                                
                            </div>
                            <div class="col">
                                <img src="images/Earth.png" alt="earth" id="earth">
                            </div>

                        </div>

                    </div>

                </div>
                <!--row-->
            </div>
            <!--container-fluid body-->

        </div>
        <!--row-->
    </div>
    <!--container-fluid body-->


    </div>
</body>

</html>