<?php
include('includes/header.php');
require('includes/db.php');

if (isset($_GET['id'])) {

    $query = $db->prepare('SELECT * FROM marker WHERE id = :id');
    $query->execute(array('id' => $_GET['id']));
    $data = $query->fetch();

    if (!$data) {
        die('Fehlerhafte ID übergeben');
    }

} else {
    die('Keine ID übergeben');
}

?>

    <div class="row">
        <div class="large-12 columns">
            <h1><?= htmlentities($data['name']); ?></h1>
        </div>
    </div>

<?php
include('includes/footer.php');
?>







