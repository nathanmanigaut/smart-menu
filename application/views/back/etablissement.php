
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    
<?
        $user_id = $this->session->id;
		$key = 'user_id';
		$this->load->model('Etab_model','etab');
        $etabs = $this->etab->selects('*', $key, $user_id);
        if($etabs->num_rows() >= 1 ){
            $this->load->model('Cat_model','categories');
            $etab_id = $this->session->etab_id;
            $etab_name = $this->session->etab_name;
            ?>
            <div class="card text-center">
            <h2 class="card-header"><?=ucfirst($etab_name)?></h2>
            <?
            $key = 'etab_id';
            $cats = $this->categories->selects('*', $key, $etab_id);
            if($cats->num_rows() >= 1 ){
                foreach($cats->result() as $cat){?>
                    <div class="card-body">
                    <h3 class="card-title"><?=ucfirst($cat->name)?></h3>
                    <? $cat_id = $cat->id;
                    $key = 'cat_id';
                    $this->load->model('Product_model','prod');
                    $prods = $this->prod->selects('*', $key, $cat_id);
                    if($prods->num_rows() >=1 ){
                        foreach($prods->result() as $prod){?>
                            <h5 class="card-title"><?=ucfirst($prod->name)?></h5>
                            <p class="card-text"><?=ucfirst($prod->composition)?></p>
                        <?}?>
                    <?}?>
                </div>
                <?}?>
            </div>

            <?
            } else {
                echo "Veuillez renseigner au moins une catégorie";
            }
        } else {
        echo "Veuillez renseigner un etablissement sur la page tableau de bord";
        }
?>