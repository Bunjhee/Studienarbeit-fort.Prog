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

    	<div class="submitgrp">
            <h1><?= htmlentities($data['name']); ?></h1>
            Add some details to this point!
            <input  type="text" name="first_name"  size="50" height="300"><a href="addpoint.php"><input type="submit" value="Add"></a>
            </div>
            <div class="submitgrp">
          <a href="addpoint.php">Back to the map</a>
            </div>
     

<?php
include('includes/footer.php');
?>







