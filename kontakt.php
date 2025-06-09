<?php
  include('partials/header.php');

  $db = new Database();
  $contact = new Contact($db);


  if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if($contact->create($name,$email,$message)){
      header('Location: thankyou.php');
      exit;
    } else{
    echo 'Nepodarilo sa odoslať formulár';
    }
  }
  ?>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Meno..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Správa"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Poslať správu</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
<?php
    include('partials/footer.php');
?>