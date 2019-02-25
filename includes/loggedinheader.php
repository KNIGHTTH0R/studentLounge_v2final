<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/igi.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <nav>
            <div class="burger">
                <span></span>
            </div>
            <nav class="burg">
                <ul class="main">
                 <li>
                    <a class="nav-link" href="newusers.php">Αρχική</a>
                </li>
                <li>
                    <a class="nav-link" href="explore.php">Ανακαλυψε</a>
                </li>
                <li>
                    <a href="about-us.php">Σχετικα με εμας</a>
                </li>
                <li>
                    <a href="contact.php">Επικοινωνια</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Προφιλ</a>
                </li>
            </ul>
            <div class="btn-burger">
                <div class="col-md-2 ">
                    <a href="php/logout.php" class="btn btn-primary ">
                        Αποσύνδεση
                    </a>
                </div>
            </div>
        </nav>

        <div class="overlay"></div>
        <div class="row">
            <div class="offset-md-1 col-md-2">
                <img class="logo image-fluid" src="images/logo.png" alt="image-responsive">
            </div>
            <div class="offset-md-1 col-md-6 logged-in-nav-header">
                <ul class="nav justify-content-end">
                 <li class="nav-item ">
                    <a class="nav-link" href="new_users.php">Αρχική</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="explore.php">Ανακάλυψε</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">Σχετικά με εμάς</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Επικοινωνία</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Προφίλ</a>
                </li>
            </ul>
        </div>
        <div class="col-md-2 ">
            <a href="php/logout.php" class="btn btn-primary logout">
                Αποσύνδεση

            </a>

        </div>
    </div>
</nav> 