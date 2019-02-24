<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/igi.css" />

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
                        <a href="index.php">Αρχική</a>
                    </li>
                    <li>
                        <a href="about-us.php">Σχετικά με εμάς</a>
                    </li>
                    <li>
                        <a href="contact.php">Επικοινωνία</a>
                    </li>
                </ul>
                <div class="btn-burger">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MemberModalCenter">Γίνε
                        μέλος

                    </button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#LoginModalCenter">Σύνδεση</button>
                </div>
            </nav>

            <div class="overlay"></div>
            <div class="row">
                <div class="offset-md-1 col-md-2">
                    <img class="logo image-fluid" src="images/logo.png" alt="image-responsive">
                </div>
                <div class="offset-md-2 col-md-4">
                    <ul class="nav justify-content-end">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Αρχική</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">Σχετικά με εμάς</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Επικοινωνία</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MemberModalCenter">Γίνε μέλος

                    </button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#LoginModalCenter">Σύνδεση</button>
                </div>
            </div>
        </nav>
