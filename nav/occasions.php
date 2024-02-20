<?php 
$pageTitle="Occasions";
require '../templates/header.php';
require '../configuration/connexionBDD.php'; ?>
<body>
<div class="filtre">
	
<section>
    <div class="container">
        <div class="row">
            <!-- Kilométrage maximum -->
            <div>
                <div class=>
                    <label for="kilometer-max" class="form-label">Kilométrage :</label>
                </div>
                <input type="range" class="custom-range" name="kilometer-max" id="kilometer-max" min="0" max="250000" step="5000" value="180000">
                <div class="text-center" style="font-size:1.4rem;">
                    <span id="kilometer-max-value" class="badge">180000 km</span>
                </div>
            </div>
            <!-- Prix maximum -->
            <div>
                <div >
                    <label for="price-max-input" class="form-label">Prix :</label>
                </div>
                <input type="range" class="custom-range" name="price-max-input" id="price-max-input" min="0" max="100000" step="500" value="100000">
                <div class="text-center" style="font-size:1.4rem;">
                    <span id="price-max-value" class="badge">100000 €</span>
                </div>
            </div>
            <!-- Année maximum -->
            <div>
                <div >
                    <label for="year-max-input" class="form-label">Année :</label>
                </div>
                <input type="range" class="custom-range" name="year-max-input" id="year-max-input" min="2000" max="2023" value="2023">
                <div  style="font-size:1.4rem;">
                    <span id="year-max-value" class="badge">2023</span>
                </div>
            </div>
        </div>
    </div>
</section>
<div >
    <div>
        <button id="reset-button" >Réinitialiser</button>
    </div>
</div>

    <div class="vehicle-cards">
        <?php
    
    

        // Requête pour récupérer les informations sur les véhicules
        $query = "SELECT image, prix, kilometrage, type_energie, annee, description FROM vehicules";
        $result = $bdd->query($query);
        

        // Affichage des cartes pour chaque véhicule
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='vehicle-card cars-filter' data-kilometer='" . $row['kilometrage'] . "' data-price='" . $row['prix'] . "' data-year='" . $row['annee'] . "'>";
            echo "<img src='" . $row['image'] . "' alt=''>";
            echo "<p><strong>Prix :</strong> $" . $row['prix'] . "</p>";
            echo "<p><strong>Kilométrage :</strong> " . $row['kilometrage'] . " km</p>";
            echo "<p><strong>Type d'énergie :</strong> " . $row['type_energie'] . "</p>";
            echo "<p><strong>Année :</strong> " . $row['annee'] . "</p>";
            echo "<p>" . $row['description'] . "</p>";
            echo "<a href='../configuration/formulaire-contact.php' class='contact-button'>Contact</a>";
            echo "</div>";
            


        }
		
    
    ?>
</div>
<footer>
    <?php
    
    require '../templates/footer.php' ;               
                    ?>
</footer>
<script src="../JS/app.js"></script>
	<script src="../JS/filter-script.js"></script>

</body>
</html>