<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Sign Up</title>
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

    a {
        color: white;
    }

    #leftSide {
        height: 1000px;
        width: 709px;
        transform: translateX(-2%);
    }

    #avatar {
        margin-top: -500px;
        margin-left: 200px;
        position: absolute;
    }
    form {
        text-align: left;
        margin-bottom: 50px;
        margin-left: 120px;
        margin-top: -700px;
        position: absolute;
    }

    form input {
        color: #BDBDBD;

        border-radius: 6px;
        border: 1px solid #BDBDBD;

    }
    form input:hover, form input:focus {
        background-color:rgba(1, 186, 179, 0.2);
        color: black;
        border: 2px solid #01BAB3;
        outline:none;
        
    }
    h1 {
        text-align: left;
        margin-left: -5px;
 
    }

    #fname,
    #lname,
    #grad,
    #hear {
        width: 250px;
        height: 40px;
        border-radius: 6px;
        border: 1px solid #BDBDBD;
    }

    #email,
    #uni,
    #major {
        width: 520px;
        height: 40px;
    }
    footer {
        display:none;
    }
    .btn {
    text-transform: none;
}
@media (min-width:771px) and (max-width: 1445px){
    form {
        margin-top: -400px;
    }
    #avatar {
        width: 300px;
        height: 300px;
        margin-top: -235px;
    }
}
    @media (max-width: 576px) {
        form #email,form #uni,form #major {
            width: 250px;
        }
        form {
            margin-top: 150px;
            padding-bottom: 50px;
        }
        form .join-us {
            margin-right: 120px;
        }
        #avatar {
            margin-left: -120px;
            margin-top: -140px;
            width:214px;
            height:218px;
        }
        footer .row1, footer .row2 {
            display: none;
        }
        body {
            font-size: 0.6em;
        }
        footer .row1, footer .row2 {
            display: none;
        }
        footer .row3 p{
            font-size: 1.5em;
        }
        footer {
            display: block;
            margin-top: 800px;
        }
        .navbar {
            font-size: 1.5em;
        }
        .community-guidelines {
            margin-left: -40px;
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

            <div class="col">
                
                <form action="confirmation.php" method="POST">
                    <div class="row">
                        <h1><strong>Join the Waitlist!</strong></h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <label for="fname">First name:</label><br>
                            <input type="text" id="fname" name="fname" placeholder="    Your first name"><br><br>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <label for="lname">Last name:</label><br>
                            <input type="text" id="lname" name="lname" placeholder="    Your surname"><br><br>
                        </div>
                    </div>
                    <div class="row long">
                        <div class="col-lg-12 col-sm-6">
                            <label for="email">Email:</label><br>
                            <input type="text" id="email" name="email" placeholder="    Your email"><br><br>
                        </div>
                    </div>
                    <div class="row long">
                        <div class="col-lg-12 col-sm-6">
                            <label for="uni">University:</label><br>
                            <input type="text" id="uni" name="uni" placeholder="    Your university"><br><br>
                        </div>
                    </div>
                    <div class="row long">
                        <div class=" col-lg-12 col-sm-6">
                            <label for="major">Major:</label><br>
                            <input type="text" id="major" name="major" placeholder="    Your major"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <label for="grad">Grad year:</label><br>
                            <select name="grad" id="grad">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="n/a">N/A</option>
                            </select>
                            <br><br>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <label for="hear">How did you hear about us?</label><br>
                            <select name="hear" id="hear">
                                <option value="twitter">Twitter</option>
                                <option value="linkedin">LinkedIn</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="friend">Friend</option>
                                <option value="search-engine">Search Engine</option>
                                <option value="other">Other</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <input type="submit" value="Join Us" class=" btn join-us text-white ">
                    </div>
                    <div class="row community-guidelines">
                        
                        <p><br>*By signing up you are agreeing to our Community Guidelines</p>
                    </div>
                </form>
            </div>
            <div class="col">
                <img src="images/avatar.png" id="avatar">
            </div>

        </div>
        <!--row-->
    </div>
    <!--container-fluid body-->
    <footer>
        <div class="container">
            <div class="row row1">
                <div class="cool-sm-12 col-lg-6">
                    <img src='images/Logo.png' alt="logo">
                </div>
                <div class="col-sm-12 col-lg-6 col2">
                    <h4>Ready to get started?</h4>

                    <a href="signup.php"><button type="button" class="btn text-white join-us-header">Sign
                            Up</button></a>

                </div>


                <hr>
            </div>
            <!--row-->
            <div class="row row2">
                <div class="col-sm-12 col-lg-3 newsletter">
                    <h4>Subscribe to our newsletter</h4>
                    <input type="text" placeholder="Enter email address" id="enterEmail">
                    <img src="images/Submit.png" alt="submit" id="submitEmailForm">
                    <div class="ifClicked"></div>

                </div>
                <div class="col-sm-12 col-lg-3 ">
                    <div class="row">
                        <h5>Impact Fellows</h5>
                    </div>
                    <div class="row "><a href="home.html">Home</a></div>
                    <div class="row"><a href="about.html">About</a></div>
                    <div class="row"><a href="initiatives.html">Initiatives</a></div>

                </div>
                <div class="col-sm-12 col-lg-3">
                    <h5>Support</h5>
                    <a aria-disabled="true">TBD</a>

                </div>
                <div class="col-sm-12 col-lg-2 contact-us">
                    <div class="row">
                        <h5>Contact Us</h5>
                    </div>
                    <div class="row"> <a href="mailto: team@impactfellows.club">Email</a> </div>


                </div>
            </div>
            <!--row-->

            <div class="row row3">
                <div class="col-sm-12 col1">
                    <p>Get in touch: team@impactfellows.club</p>
                </div>
                <div class="col-sm-12 col2">
                    <div class="row">
                        <div class="col">
                            <a href="https://www.linkedin.com/company/73002200/"> <img src="images/linkedin.png"
                                    alt="linkedin">
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.facebook.com/impactfellows">
                            <img src="images/facebook.png" alt="fb"> </a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/impactfellowshq?s=11"><img src="images/twitter.png" alt="twitter"> </a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/impactfellows.club/"><img src="images/instagram.png"
                                    alt="instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--row-->
            <br><br><br>
        </div>
        <!--container-->
    </footer>


    </div>
</body>

</html>

