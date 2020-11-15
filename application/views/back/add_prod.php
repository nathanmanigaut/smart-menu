
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h3 class="text-center">Ajouter un produit</h3>
<?   
$this->load->model('Cat_model','categories');
$etab_id = $this->session->etab_id;
$key = 'etab_id';
$query = $this->categories->selects('*', $key, $etab_id);
?>

    <form class="form-group" method="post" action="http://smart-menu.local/dashboard/update_etablissement">
        <div class="d-flex justify-content-center">
            <div class="form-group col-3">
                <label>Choisir une catégorie dans laquelle est votre produit: </label>
                <select class="form-control" name="cat_id">
                    <?foreach($query->result() as $cat){?>
                        <option value="<?=$cat->id?>"><?=$cat->name?></option>
                    <?}?>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-3">
                <label>Le nom de votre produit: </label>
                <input type="text" class="form-control" name="name" placeholder="Le nom de votre produit">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-3">
                <label>La description de votre produit:</label>
                <input type="text" class="form-control" name="description" placeholder="La composition ou la desciption de votre produit">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-3">
                <label>Le prix de votre produit (€):</label>
                <input type="number" class="form-control" name="price" placeholder="0">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Enregistrer une catégorie">
        </div>
    </form>
    