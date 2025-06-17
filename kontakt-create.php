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
        header("Location: index.php?success=true");
        exit;
    } else {
        echo "<p style='color:red;'>Všetky polia sú povinné.</p>";
    }
}
?>

<a href="index.php">Späť na stránku</a>