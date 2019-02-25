<?php
SESSION_start();
include_once("php/config.php");
if (!isset($_SESSION['password'])) {
    include("includes/header.php");
    header("Location:index.php");
} else {
    include("includes/loggedinheader.php");
}
$username = $_SESSION["username"];
$query = "SELECT * FROM users WHERE user_username = '$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<div class="container-fluid">


    <div class="col-md-12 profile-background">
        <div class="row">
            <div class="offset-md-1 col-md-3">
                <img class='profilePic img-fluid' alt="responsive-img" src="<?php echo $row['user_profile']; ?>" />"
            </div>
            <div class="col-md-2">
                <p class="profile-username">@
                    <?php echo $row['user_username']; ?>
                </p>
                <p class="profile-age">24</p>
                <p class="profile-city">
                    <?php echo $row['user_location']; ?>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="offset-md-4 col-md-5">
                <ul class="nav nav-pills mb-3 whitespace" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Αρχική</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Φωτογραφίες Σπιτιού</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Επεξεργασία προφίλ</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col-md-12 grayspace">
                        <div class="offset-md-1 col-md-7">
                            <h4 class="profile-information">Πληροφορίες</h4>
                        </div>

                        <div class="offset-md-1 col-md-7 profile-input">
                            <div class="row">
                                <div class="col-md-2">
                                    <p class="profile-info">Όνοματεπώνυμο</p>
                                </div>
                                <div class="offset-md-2 col-md-4">
                                    <p class="profile-info2">
                                        <?php echo $row['user_firstname'];
                                        echo " ";
                                        echo $row['user_lastname']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-1 col-md-7 profile-input2">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="profile-info">Ημερομηνια Γέννησης</p>
                                </div>
                                <div class="offset-md-1 col-md-4">
                                    <p class="profile-info2">
                                        <?php echo $row['user_dateofbirth']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-1 col-md-7 profile-input3">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="profile-info">Πόλη</p>
                                </div>
                                <div class="offset-md-1 col-md-4">
                                    <p class="profile-info2">
                                        <?php echo $row['user_location']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-1 col-md-7 profile-input2">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="profile-info">Φύλο</p>
                                </div>
                                <div class="offset-md-1 col-md-4">
                                    <p class="profile-info2">
                                        <?php echo $row['user_gender']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-1 col-md-7 profile-input3">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="profile-info">Ψάχνει Για</p>
                                </div>
                                <div class="offset-md-1 col-md-4">
                                    <p class="profile-info2">
                                        <?php echo $row['user_type']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-1 col-md-7">
                            <h4 class="profile-information2">Ενδιαφέροντα</h4>
                        </div>

                        <div class="offset-md-1 col-md-7 profile-input4">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="profile-info">Χόμπυ</p>
                                </div>
                                <div class="offset-md-1 col-md-4">
                                    <p class="profile-info2">
                                        <?php
                                        echo $row['user_sports'];
                                        echo " ";
                                        echo $row['user_trips'];
                                        echo " ";
                                        echo $row['user_bordergames'];
                                        echo " ";
                                        echo $row['user_movies'];
                                        echo " ";
                                        echo $row['user_books'];
                                        echo " ";
                                        echo $row['user_music'];
                                        ?>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-1 col-md-7 profile-input2">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="profile-info">Καπνιστής</p>
                                </div>
                                <div class="offset-md-1 col-md-4">
                                    <p class="profile-info2">
                                        <?php echo $row['user_issmoker']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-1 col-md-2">
                            <form action="">
                                <input class="submit-button3" type="submit" name="submit" value="Γίνε Συγκάτοικος" />
                            </form>
                        </div>


                    </div>

                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        <div class="col-md-12 grayspace3">
                            <div class="offset-md-1 col-md-10">
                                <h4 class="profile-information">Φωτογραφίες</h4>
                            </div>
                            <div class="offset-md-1 col-md-10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="house-pic" class="house-pic"><img src="images/photo.png" /></label>
                                        <form action="">
                                            <input id="house-pic" type="file" name="housePic" accept="image/*" />
                                        </form>
                                    </div>

                                    <div class="offset-md-1 col-md-3">
                                        <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>

                                    <div class="offset-md-1 col-md-3">
                                        <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>

                                    <div class="offset-md-1 col-md-3">
                                        <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>

                                    <div class="offset-md-1 col-md-3">
                                        <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>

                                    <div class="offset-md-1 col-md-3">
                                        <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>

                                    <div class="offset-md-1 col-md-3">
                                        <img class="house-image lastimg" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form enctype="multipart/form-data" action="php/EditUser.php" method="POST">
                        <div class="col-md-12 grayspace2">
                            <div class="offset-md-1 col-md-7">

                                <h4 class="profile-information">Επεξεργασία Προφίλ</h4>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input2">

                                <div class="row">

                                    <div class="col-md-3">
                                        <p class="profile-info">Όνομα</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="edit-input" type="text" name="username" value="<?php echo $row['user_firstname']; ?>" />

                                    </div>
                                </div>
                            </div>
                            <div class="offset-md-1 col-md-7 profile-input3">

                                <div class="row">

                                    <div class="col-md-3">
                                        <p class="profile-info">Επώνυμο</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="edit-input" type="text" name="username" value="<?php echo $row['user_lastname']; ?>" />

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="profile-info">Κωδικος</p>
                                    </div>
                                    <div class="offset-md-2 col-md-4">

                                        <input class="edit-input" type="text" name="password" value="<?php echo $row['user_password']; ?>" />

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Ημερομηνια Γέννησης</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="edit-input" type="text" name="dateofbirth" value="<?php echo $row['user_dateofbirth']; ?>" />

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Πόλη</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="edit-input" type="text" name="area" value="<?php echo $row['user_location']; ?>" />

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Φύλο</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="radio" type="radio" name="gender" value="Άνδρας" /> Άντρας
                                        <input class="radio" type="radio" name="gender" value="Γυναίκα" /> Γυναίκα

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Ψάχνει για</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="radio" type="radio" name="lookingFor" value="Σπίτι" /> Σπίτι
                                        <input class="radio" type="radio" name="lookingFor" value="Συγκάτοικο" /> Συγκάτοικο

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Χόμπυ</p>
                                    </div>
                                    <div class="offset-md-1 col-md-8">

                                        <input class="checkbox" type="checkbox" name="athlete" value="Αθλητισμός" /> Αθλητισμός
                                        <input class="checkbox" type="checkbox" name="travel" value="Ταξίδια" /> Ταξίδια
                                        <input class="checkbox" type="checkbox" name="boardgame" value="Επιτραπέζια" /> Επιτραπέζια
                                        <input class="checkbox" type="checkbox" name="movies" value="Ταινίες" /> Ταινίες
                                        <input class="checkbox" type="checkbox" name="books" value="Βιβλία" /> Βιβλία
                                        <input class="checkbox" type="checkbox" name="music" value="Μουσική" /> Μουσική

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Καπνιστής</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="radio" type="radio" name="smokeYes" value="Ναι" /> Ναί
                                        <input class="radio" type="radio" name="smokeNo" value="Όχι" /> Όχι

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Φωτογραφία Προφίλ</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="edit-input" type="file" name="fileToUpload" accept="image/*" />

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-1 col-md-7 profile-input2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="profile-info">Φωτογραφία Εξωφύλου</p>
                                    </div>
                                    <div class="offset-md-1 col-md-4">

                                        <input class="edit-input" type="file" name="coverPic" accept="image/*" />

                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-5 col-md-2">
                                <div class="row">
                                    <div class="offset-md-2 col-md-2">

                                        <input class="submit-button" type="submit" name="submit" value="Αποθήκευση" />

                                    </div>

                                </div>

                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<?php
include_once("includes/footer.php");
?> 