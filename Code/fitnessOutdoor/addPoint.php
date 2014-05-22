<?php
include("includes/header.php");
?>

    <div class="addpointcontent">
        <div class="large-12 columns">
            <h1>Neuen Punkt hinzufügen</h1>
        </div>
    </div>

    <div class="addpointcontent">
        <div>

            <p>Es wird deine aktuelle Position als neuer Punkt eingefügt:</p>

            <p>Die Adresse an deiner Position ist:
                <strong id="geocodedAddress">
                    Adresse wird ermittelt...
                </strong>
            </p>

            <form action="addPointSubmit.php"
                  method="post"
                  id="addPointForm">

                <input type="text" name="name"
                       placeholder="Der Name des Punktes"
                       required>

                <input type="hidden" name="lat">
                <input type="hidden" name="lng">

                <select name="public">
                    <option value="0">Mountainbike</option>
                    <option value="1">Surf</option>
                    <option value="2">Longboard</option>
                </select>

                <button type="submit">Absenden</button>

            </form>

            <script src="js/geocode.js"></script>
           <div id="map">
        Es gab anscheinend ein Problem beim Laden der Karten...
    </div>
    <script src="js/loadmap.js"></script>

        </div>
    </div>
    
    

<?php
include("includes/footer.php");
?>