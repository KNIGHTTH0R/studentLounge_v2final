<?php
SESSION_start();
include_once("php/config.php");
if (!isset($_SESSION['password'])) {
    include("includes/header.php");
    header("Location:index.php");
} else {
    include("includes/loggedinheader.php");
}
$id = $_GET['id'];

$query = "SELECT * FROM users WHERE user_ID='$id'";
$result = mysqli_query($conn,$query);


$row=mysqli_fetch_assoc($result);


?>

<div class="container-fluid">


    <div class="col-md-12 profile-background">
        <div class="row">
            <div class="offset-md-1 col-md-3">
                <img class='profilePic img-fluid' alt="responsive-img" 
                src="<?php
                $profile_image = $row['user_profile'];
                $str = $profile_image;
                $str1 = substr($str, 1); echo $str1; ?>" />"
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


            </div>
        </div>
    </div>


</div>

<?php
include_once("includes/footer.php");
?> 