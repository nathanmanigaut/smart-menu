
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h3 class="text-center">Ajouter une catégorie </h3>    
   
    <form class="form-group" method="post" action="http://smart-menu.local/dashboard/update_etablissement">
        <div class="d-flex justify-content-center">
            <div class="form-group col-3">
                <label>Le nom de votre catégorie:</label>
                <input type="text" class="form-control" name="name" placeholder="Le nom de votre catégorie">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-3">
                <label>La description de votre catégorie:</label>
                <input type="text" class="form-control" name="description" placeholder="La description de votre catégorie">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Enregistrer une catégorie">
        </div>
    </form>