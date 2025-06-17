<?php include('partials/header.php'); ?>

<main>
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="text-center">
      <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $message = $_POST["message"];

          if (!empty($name)) {
            echo "<h1 class='mb-4'>THANK YOU</h1>";
            echo "<h4>$name, thank you for contacting us</h4>";
          }
        } else {
          echo "<p>Formulár nebol odoslaný správne.</p>";
        }
      ?>
      <br>
      <a href="index.php" class="btn btn-primary mt-3">Back To Home</a>
    </div>
  </div>
</main>

<?php include('partials/footer.php'); ?>