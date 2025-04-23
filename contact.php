<?php
    require_once "templates/header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p>Remplissez ce formulaire pour envoyer votre message</p>
                <form id="contactForm" name="sentMessage">
                    <div>
                        <div class="form-floating mb-3"><input class="form-control" type="text" id="name" required="" placeholder="Nom"><label class="form-label" for="name">Nom</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div>
                        <div class="form-floating mb-3"><input class="form-control" type="email" id="email" required="" placeholder="Email"><label for="email" class="form-label">Email</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div>
                        <div class="form-floating mb-3"><input class="form-control" type="tel" id="phone" required="" placeholder="Téléphone"><label for="phone" class="form-label">Téléphone</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div>
                        <div class="form-floating mb-3"><textarea class="form-control" id="message" data-validation-required-message="Veuillez écrire votre message ici." required="" placeholder="Message" ></textarea><label for="message" class="form-label">Message</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success"></div>
                    <div class="mb-3"><button class="btn btn-primary" id="sendMessageButton" type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>
    <hr>
<?php include_once "templates/footer.php"; ?>