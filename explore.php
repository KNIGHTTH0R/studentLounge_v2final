<?php
SESSION_start();
include_once("php/config.php");
if (!isset($_SESSION['password'])) {
    include("includes/header.php");
    header("Location:index.php");
} else {
    include("includes/loggedinheader.php");
}
//show users


function showUsersCards(){

    global $conn;
    $query = "SELECT * FROM users WHERE NOT (user_type = '2')";
    $result = mysqli_query($conn,$query);
    $returnMessage = "";

    while($row=mysqli_fetch_assoc($result)){

        $profile_image = $row['user_profile'];
        $str = $profile_image;
        $str1 = substr($str, 1);

        $returnMessage.='<div class="col-md-3">';
        $returnMessage.='<div class="card-explore explore-member-card">';
        $returnMessage.='<a href="userProfile.php?id='.$row["user_ID"].'"><img src="'.$str1.'"
        class="img-fluid explore-member-img" 
        alt="responsive-image" style="width:100%"></a>';
        $returnMessage.='<div class="team-box">';
        $returnMessage.='<h4 class="explore-username"><b>'.$row["user_username"].'</b></h4>';
        $returnMessage.='<p>'.$row["user_location"].' </p>';
        $returnMessage.='</div>';
        $returnMessage.='</div>';
        $returnMessage.='</div>';

        






    }
    echo $returnMessage;

}

?>
<!-- search filters -->
<div class="row">
    <div class=" col-md-3">
        <form class="explore-form">
            <h5 class="explore-filters-text explore-filter-title">ΦΙΛΤΡΑ ΑΝΑΖΗΤΗΣΗΣ</h5>

            <div class="form-group">
                <input type="text" class="form-control" id="inputText" placeholder="ΟΝΟΜΑ">
            </div>
            <div class="form-group">
                <select id="inputState" class="form-control">
                    <option selected>Περιοχή</option>
                    <option>Αθήνα</option>
                    <option>Θεσσαλονίκη</option>
                    <option>Πατρα</option>
                    <option>Κρητη</option>
                    <option>Κομοτήνη</option>
                    <option>Λαρισα</option>
                    <option>Βόλος</option>
                    <option>Γιάννενα</option>
                    <option>Κέρκυρα</option>
                    <option>Τρίκαλα</option>

                </select>
            </div>
            <div class="form-group">
                <select id="inputState" class="form-control">
                    <option selected>Φύλο</option>
                    <option>Άνδρας</option>
                    <option>Γυναίκα</option>
                    <option>Άλλο</option>
                </select>
            </div>
            <p class="explore-filters-text">Ψάχνω για συγκάτοικο με:
            </p>

            <div class="form-check ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label explore-label" for="exampleRadios1">
                    Σπίτι
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label explore-label" for="exampleRadios2">
                    Χωρίς σπίτι
                </label>
            </div>
            <p class="explore-filters-text">Καπνιστής:
            </p>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1">
                <label class="form-check-label explore-label" for="exampleRadios4">
                    Nαι
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                <label class="form-check-label explore-label" for="exampleRadios3">
                    Όχι
                </label>
            </div>
            <p class="explore-filters-text">ΕΝΔΙΑΦΕΡΟΝΤΑ</p>
            <div class="form-check explore-check">
                <input type="checkbox" class="form-check-input  " name="" id="" value="checkedValue">Αθλητισμός
            </div>
            <div class="form-check explore-check">
                <input type="checkbox" class="form-check-input " name="" id="" value="checkedValue">Ταξίδια
            </div>
            <div class="form-check explore-check">
                <input type="checkbox" class="form-check-input  " name="" id="" value="checkedValue">Επιτραπέζια
            </div>
            <div class="form-check explore-check">
                <input type="checkbox" class="form-check-input  " name="" id="" value="checkedValue"> Ταίνιες
            </div>
            <div class="form-check explore-check">
                <input type="checkbox" class="form-check-input  " name="" id="" value="checkedValue"> Βιβλία
            </div>
            <div class="form-check explore-check">
                <input type="checkbox" class="form-check-input  " name="" id="" value="checkedValue"> Moυσική
            </div>

            <button type="submit" class="btn btn-warning btn-lg">Αναζήτηση</button>
        </form>
    </div>
    <!-- filters end here -->
    <!-- search bar  -->
    <div class="col-md-8">
        <div class="search">
            <input type="text" class="form-control explore-search" placeholder="Αναζητήσε ατομα" />
        </div>
        <!-- search bar end here -->
        <!-- members card start here -->
        <div class="row">
            <?php

            showUsersCards();

            ?>
        </div>
    </div>

</div>



<?php
include_once("includes/footer.php");
?> 