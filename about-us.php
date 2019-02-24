<?php
SESSION_start();
if (!isset($_SESSION['password'])) {
    include("includes/header.php");
} else {
    include("includes/loggedinheader.php");
}
?>
<div class="about-us">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="images/logowhiteedition.png" class="img-fluid about-us-logo" alt="responsive-img">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="text-center btn btn-outline-light btn-lg about-us-btn d-flex align-items-center">ΑΝΑΚΑΛΥΨΤΕ
            ΜΑΣ</button>
        </div>
    </div>
</div>
<div class="about-us-section1">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
            <img class="img-fluid contact-us-girl " src="images/studentcartoon.png" alt="responsive-image">
        </div>

        <div class="col-md-6 about-us-align-text">
            <h3 class="about-us-h1">ΠΡΟΣΠΑΘΟΥΜΕ ΚΑΘΗΜΕΡΙΝΑ ΝΑ ΒΕΛΤΙΩΣΟΥΜΕ ΤΗΝ ΚΑΘΗΜΕΡΙΝΗ ΣΑΣ ΕΜΠΕΙΡΙΑ</h3>
            <p class="about-us-text">Στόχος μας ειναι να βελτιώσουμε το StudentLounge και να γίνουμε ένα ισχυρό εργαλείο για όλους τους φοιτητες που ψαχνουν συγκάτοικο</p>
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#MemberModalCenter">Γίνε
            Μέλος</button>
        </div>
    </div>
</div>
<div class="about-us-section2">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center about-us-s2-h3">- H ΟΜΑΔΑ ΜΑΣ -</h3>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-1 col-md-3 about-us-fix-card-align">
            <div class="card">
                <img class="img-fluid" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                <div class="team-box">
                    <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                    <p>WEB-DESIGNER,FRONT-END DEVELOPER</p>
                    <br />
                </div>
            </div>
        </div>
        <div class="offset-md-1 col-md-3 about-us-fix-card-align">
            <div class="card">
                <img class="img-fluid" src="images/avatar2.png" alt="responsive-image" style="width:100%">
                <div class="team-box">
                    <h4><b>ΙΓΚΙ ΡΟΥΤΣΙ</b></h4>
                    <p>WEB-DESIGNER,FRONT-END DEVELOPER</p>
                    <br />
                </div>
            </div>
        </div>
        <div class="offset-md-1 col-md-3 about-us-fix-card-align">
            <div class="card">
                <img class="img-fluid" src="images/avatar3.png" alt="responsive-image" style="width:100%">
                <div class="team-box">
                    <h4><b>ΑΝΤΩΝΗΣ ΧΑΛΑΣ</b></h4>
                    <p>SENIOR BACK-END DEVELOPER FULL-STACK DEVELOPER
                    </p>
                </div>
            </div>
        </div>


    </div>

</div>

<?php
include("includes/footer.php");
include("includes/modal.php");
?>

</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 4ea1ccb66e30d75fa124d2e5865f7069a367c13b
