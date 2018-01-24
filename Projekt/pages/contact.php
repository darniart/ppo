
      <div id="contact_form" class="row justify-content-center">
        <div class="col-md-8">
          <h2>Skontaktuj się z nami</h2>
				<form method="post" name="contactform">
									<div class="form-group row">
										<label  for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">Imię</label>
										<div class="col-sm-9">
										<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="name" id="name" required/>
										</div>
									</div>
									<div class="form-group row">
										<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">Email</label>
										<div class="col-sm-9">
										<input type="email" class="form-control form-control-lg" name="email" id="email" required/>
										</div>
									</div>
									<div class="form-group row">
										<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Wiadomość</label>
										<div class="col-sm-8">
										<textarea name="message" class="form-control" id="message" rows="4" required></textarea>
										</div>
									</div>
            <button type="submit" name="submit" class="btn btn-default btn-lg"" data-loading-text="Wysyłanie" style="display: block; margin-top: 10px; margin:auto;">Wyślij</button>
          </form>
          <br/>
        </div>
      </div>
<?php
$to      = 'admin@cs-life4club.eu';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';
mail($to, $subject, $message, $headers);
?>


