<?php
include('partials/header.php');

$db = new Database();
$contact = new Contact($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $contact->create($name, $email, $message);
        header("Location: thankyou.php?success=true");
        exit;
    } else {
        echo "<p style='color:red;'>Všetky polia sú povinné.</p>";
    }
}

?>

<form action="" method="post">
    <input type="text" name="name" placeholder="Meno" required><br>
    <input type="email" name="email" placeholder="E-mail" required><br>
    <textarea name="message" placeholder="Správa" required></textarea><br>
    <button type="submit">Odoslať správu</button>
</form>

<a href="index.php">Späť na stránku</a>

<?php
include('partials/footer.php');
?>