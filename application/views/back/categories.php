
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<h2 class="text-center"> Vos catégories de produits </h2>
<?
$etab_id = $this->session->etab_id;
$key = 'etab_id';
$this->load->model('Cat_model','categories');
$query = $this->categories->selects('*', $key, $etab_id);

?>
<div class="d-flex justify-content-center">
    <div class="form-group col-6">
        <ul class="list-group list-group list-group-flush">
            <?foreach($query->result() as $cat){?>
    
                <li class="list-group-item list-group-item-dark"><?=$cat->name?></li>

            <?}?>
        </ul>
    </div>
</div>