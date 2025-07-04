
<?php
include('partials/header.php');

$db = new Database();
$contact = new Contact($db);
$contacts = $contact->index();

if (isset($_GET['delete'])) {
    $contact->destroy($_GET['delete']);
    header("Location: admin.php");
    exit;
}
?>

<section class="container">
    <h1>Vitaj admin</h1>

    <h2>Kontakt</h2>
    <a href="kontakt-create.php">Vytvoriť správu</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Správa</th>
            <th>Zmazať</th>
            <th>Zobraziť</th>
            <th>Editovať</th>
        </tr>
        <?php
        foreach ($contacts as $con) {
            echo '<tr>';
            echo '<td>' . $con['id'] . '</td>';
            echo '<td>' . $con['name'] . '</td>';
            echo '<td>' . $con['email'] . '</td>';
            echo '<td>' . $con['message'] . '</td>';

            echo '<td><a href="?delete=' . $con['id'] . '" onclick="return confirm(\'Určite chcete vymazať túto správu?\')">Delete</a></td>';
            echo '<td><a href="kontakt-show.php?id=' . $con['id'] . '">Zobraziť</a></td>';
            echo '<td><a href="kontakt-edit.php?id=' . $con['id'] . '">Editovať</a></td>';

            echo '</tr>';
        }
        ?>
    </table>
</section>

<?php
include('partials/footer.php');
?>