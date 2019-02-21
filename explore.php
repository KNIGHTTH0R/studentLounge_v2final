<?php
SESSION_start();
if (!isset($_SESSION['password'])) {
    include("includes/header.php");
    header("Location:index.php");
} else {
    include("includes/loggedinheader.php");
}
?>

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
            <span class="explore-filters-text"><b>Τιμή</b> </span>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder=" Από..">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Εώς..">
                </div>
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
    <div class="col-md-8">
        <div class="search">
            <span class="fa fa-search"></span>
            <input type="text" class="form-control explore-search" placeholder="Αναζητήσε ατομα" />
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card explore-member-card">
                    <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                    <div class="team-box">
                        <h4>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</h4>
                        <p>21 Tρίκαλα</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card explore-member-card">
                    <img class="img-fluid explore-member-img" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-image" style="width:100%">
                    <div class="team-box">
                        <h4>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</h4>
                        <p>21 Tρίκαλα</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card explore-member-card">
                    <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                    <div class="team-box">
                        <h4>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</h4>
                        <p>21 Tρίκαλα</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card explore-member-card">
                    <img class="img-fluid explore-member-img" src="images/avatar1.png" alt="responsive-image" style="width:100%">
                    <div class="team-box">
                        <h4>ΠΑΡΗΣ ΚΑΡΑΜΠΑΣ</h4>
                        <p>21 Tρίκαλα</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

</div>
</body>

</html> 