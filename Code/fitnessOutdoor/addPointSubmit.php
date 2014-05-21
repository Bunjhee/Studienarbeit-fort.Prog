<?php
require('includes/db.php');

if (isset($_POST['name']) &&
    isset($_POST['public']) &&
    isset($_POST['lat']) &&
    isset($_POST['lng'])
) {
    $query = $db->prepare('
        INSERT INTO marker (name, public, lat, lng)
        VALUES (:name, :public, :lat, :lng)
    ');

    $query->execute(
        array(
            'name'   => $_POST['name'],
            'public' => $_POST['public'],
            'lat'    => $_POST['lat'],
            'lng'    => $_POST['lng'],
        )
    );
} else {
    die('Aufruffehler');
}

include('includes/header.php');
?>


    <div class="row">
        <div class="large-12 columns">
            <h1>Vielen Dank. Punkt eingetragen!</h1>
            <a href="index.php" class="button">Zurück zur Karte</a>
        </div>
    </div>

<?php
include('includes/footer.php');
?>