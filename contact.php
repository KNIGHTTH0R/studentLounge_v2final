<?php
SESSION_start();
if (!isset($_SESSION['password'])) {
    include("includes/header.php");
} else {
    include("includes/loggedinheader.php");
}
?>
<!-- contact form -->
<div class="contact">
    <div class="row ">
        <div class="col-md-6 fix-padding ">
            <form class="contact-form">
                <h3 class="contact-h1">Επικοινωνηστε μαζι μας</h3>
                <p class="contact-text">"Είμαστε πάντα εδώ να σας εξηπηρετήσουμε σε οποιαδήποτε απορία"</p>
                <div class="form-group contact-form-group">
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Όνομα">
                </div>
                <div class="form-group contact-form-group">

                    <input type="text" class="form-control" id="exampleInputText1" placeholder="Επίθετο">
                </div>
                <div class="form-group contact-form-group">
                    <input type="email" class="form-control" id="exampleInputEmail11" placeholder="Ε-mail">
                </div>
                <div class="form-group contact-form-group">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Ρωτήστε μας"></textarea>
                </div>
                <button type="submit" class="btn btn-warning btn-block btn-contact-send ">Αποστολή</button>
            </form>
        </div>
        <!-- contact form end here -->
        <!-- map start here -->
        <div class="col-md-6 fix-padding">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.0002142177564!2d23.676604315322763!3d37.95378097972729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bc700c7458cf%3A0x8fdf98b5e5f27744!2sSAE+Technology+Group+Athens!5e0!3m2!1sel!2sgr!4v1549029009845" width="600" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</div>
<?php 
include("includes/footer.php");
include("includes/modal.php");
?>
</div>
</body>

</html> 