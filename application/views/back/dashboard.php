<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h2 class="text-center">Tableau de bord</h2>


    <?
    $user_id = $this->session->id;
    $key = 'user_id';
    $this->load->model('Etab_model','etab');
    $query = $this->etab->selects('*', $key, $user_id);
    if($query->num_rows() >= 1 ){?>
    
        <h3 class="text-center">Votre établissement </h3>   
        <?
        foreach($query->result() as $etablissement){?>

        <form class="form-group" method="post" action="http://smart-menu.local/dashboard/update_etablissement">
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>Le nom de votre établissement:</label>
                    <input type="text" class="form-control" name="name" placeholder="" value="<?=$etablissement->name?>">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>L'url que vous souhaitez avoir chez nous: <br/> <strong>http://smart-menu.local/</strong></label>
                    <input type="text" class="form-control" name="url" placeholder="" value="<?=$etablissement->url?>">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>L'adresse de votre établissement (rue et n° de la voie) :</label>
                    <input type="text" class="form-control" name="adress" placeholder="" value="<?=$etablissement->adress?>">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>Le code postal de votre établissment :</label>
                    <input type="text" class="form-control" name="postal_code" placeholder="" value ="<?=$etablissement->postal_code?>">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>La ville dans laquelle se trouve votre établissement</label>
                    <input type="password" class="form-control" name="city" placeholder="" value ="<?=$etablissement->city?>">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Modifier les informations de l'établissement">
            </div>
        </form>

            <?}
        } else {?>

        <h3 class="text-center">Pas encore renseigner d'établissement ? Créer votre établissement </h3>    
        
        <form class="form-group" method="post" action="http://smart-menu.local/dashboard/create_etablissement">
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>Le nom de votre établissement:</label>
                    <input type="text" class="form-control" name="name" placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>L'url que vous souhaitez avoir chez nous: <br/> <strong>http://smart-menu.local/</strong></label>
                    <input type="text" class="form-control" name="url" placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>L'adresse de votre établissement (rue et n° de la voie) :</label>
                    <input type="text" class="form-control" name="adress" placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>Le code postal de votre établissment :</label>
                    <input type="text" class="form-control" name="postal_code" placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>La ville dans laquelle se trouve votre établissement</label>
                    <input type="password" class="form-control" name="city" placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Enregistrer les informations de l'établissement">
            </div>
        </form>

        <? } ?>