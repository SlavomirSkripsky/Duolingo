<?php
    include('partials/header.php');

    $db = new Database();
    $contact = new Contact($db);

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $contactData = $contact->show($id);
    }
?>

<section class="container">

<h1>Detail správy</h1>
<p>Meno: <?php echo $contactData['name']?></p>
<p>Email: <?php echo $contactData['email']?></p>
<p>Message: <?php echo $contactData['message']?></p>

<a href="admin.php">Späť do admin rozhrania</a>

<?php
    include('partials/footer.php');
?>