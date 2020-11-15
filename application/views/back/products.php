<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h2 class="text-center"> Vos produits </h2>



<?
$etab_id = $this->session->etab_id;
$key = 'etab_id';
$this->load->model('Cat_model','categories');
$query = $this->categories->selects('*', $key, $etab_id);
?>
<div class="d-flex justify-content-center">
    <div class="form-group col-6">
        <ul class="list-group list-group-flush">
        <?foreach($query->result() as $cat){?>
        
            <li class="list-group-item list-group-item-dark"><?=$cat->name?></li>

            <div class="form-group">
                <ul class="list-group">

                <? $cat_id = $cat->id;
                    $key = 'cat_id';
                    $this->load->model('Product_model', 'prod');
                    $query = $this->prod->selects('*', $key, $cat_id);

                    foreach($query->result() as $prod){?>

                        <li class="list-group-item list-group-item-light"><?=$prod->name?></li>
                    <?}?>
                </ul>
            </div>
        <?}?>

        </ul>
    </div>
</div>