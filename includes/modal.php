<!-- Modal -->
<div class="modal fade" id="MemberModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="becameMember ask-us"  action="php/DoRegistration.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName4" placeholder="Όνομα" name="firstname">
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" id="exampleInputText2" placeholder="Επίθετο" name="lastname">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Ε-mail" name="email">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control" id="exampleInputphone" placeholder="Tηλέφωνο" name="phone">
                    </div>
                    <div class="form-group">
                        <select id="inputState" class="form-control">
                            <option selected>Φύλο</option>
                            <option>Άνδρας</option>
                            <option>Γυναίκα</option>
                            <option>Άλλο</option>
                        </select>
                    </div>
                    <p class="dateOfBirth">Ημερομήνια Γέννησης</p>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="Ημέρα">

                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="Μήνας">

                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="Xρόνος">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Κωδικός" name="password">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Γράψε ξανά τον κωδικό" name="repassword">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning btn-lg btn-section1">Γίνε Μέλος</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal-2 -->
<div class="modal fade login-modal" id="LoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="becameMember ask-us"  action="php/DoLogin.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName3" placeholder="Username" name="username">
                    </div>
                    <div class="form-group ">
                        <input type="password" class="form-control" id="inputPassword4 " placeholder="Κωδικός" name="password">
                        <span class="forgot-pass"> <a class="forgot-pass" data-toggle="modal" data-target="#ForgotModalCenter" onclick="removeModal()"> Ξεχασα τον κωδικό μου!</a></span>
                    </div>
                    <button type="submit" class="btn btn-warning btn-lg btn-section1">Σύνδεση</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal-3 -->
<div class="modal fade" id="ForgotModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="becameMember ask-us"  action="php/DoLogin.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName3" placeholder="Όνομα χρήστη" name="username">
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control" id="inputPassword4 " placeholder="Email" name="password">
                    </div>
                    <button type="submit" class="btn btn-warning btn-lg btn-section1">Σύνδεση</button>
                </form>
            </div>

        </div>
    </div>
</div>