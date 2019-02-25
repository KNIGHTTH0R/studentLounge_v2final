<?php
include_once("includes/header.php")
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <section class="subscribe">
                <div class="container_users">
                    <div class="section-header">
                        <h2 class="new_users_h2">ΑΝΑΖΗΤΗΣΤΕ ΤΩΡΑ</h2>
                        <p class="new_users_p">ΨΑΧΝΕΙΣ ΣΠΙΤΙ Η ΣΥΓΚΑΤΟΙΚΟ? ΣΤΟ STUDENTLOUNGE ΘΑ ΒΡΕΙΣ ΑΥΤΟ ΠΟΥ ΘΕΣ ΚΑΝΕ ΑΝΑΖΗΤΗΣΗ ΤΩΡΑ</p>
                    </div>

                    <form method="post" action="#">
                        <div class="form-row justify-content-center">
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Αναζήτηση τωρα">
                            </div>
                            <div class="col-auto">
                                <button type="submit">Αναζήτηστε </button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center new-users-text">NEA MΕΛΗ</h4>
            <!-- members card start here -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" onclick="window.location.href='explore.php'" class="btn-lg btn-primary btn-new-users">Βρες περισσότερα μέλη</button>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center new-users-text">ΝΕΑ ΜΕΛΗ ΜΕ ΣΠΙΤΙ</h4>
            <!-- members card start here -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card explore-member-card new-users-card">
                        <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                        <div class="team-box">
                            <h4><b>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</b></h4>
                            <p>21 Tρίκαλα</p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" onclick="window.location.href='explore.php'" class="btn-lg btn-warning btn-new-users">Περισσότερα μέλη με σπίτι</button>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/modal.php");
?> 